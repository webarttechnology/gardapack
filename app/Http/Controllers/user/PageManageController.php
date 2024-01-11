<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Blog, Product, PdfDownloads, Category, Technology, ProductGallery, Service, WebsiteGallery, Faq, Course, Pages, Cart, HomePge, User, Order, Support, Testimonial};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Order\ShipStationManageController;
use App\Http\Controllers\user\CartManageController;
// use Illuminate\Contracts\Session\Session;

class PageManageController extends Controller
{
    //

    public function index()
    {
         // $products = Product::inRandomOrder()->limit(12)->get();
         $products = Product::with('productGalleries', 'category')->latest()->limit(4)->get();
         $categories = Category::inRandomOrder()->limit(12)->get();
         $daily_deals = Product::orderBy('id', 'desc')->limit(10)->get();
         $courses = Course::orderBy('id', 'desc')->limit(6)->get();
         $pdfs = PdfDownloads::all();
         $video_banner = DB::table('video_banner')->first();
         $why_us = DB::table('why_choose_us')->first();
         $faqs = Faq::limit(5)->get();
         $home = HomePge::first();
         $testimonials = Testimonial::orderBy('id', 'desc')->get();
         $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
 
         return view('front_end.index', compact('blogs', 'products', 'faqs', 'why_us', 'categories', 'daily_deals', 'courses', 'pdfs', 'video_banner', 'home', 'testimonials'));
    }

    public function signup_signin()
    {
        return view('front_end.signup');
    }

    public function about_us()
    {
        $details = Pages::whereName('About Us')->first();
        return view('front_end.about_us', compact('details'));
    }

    public function contact_us()
    {
        $details = Pages::whereName('Contact Us Page')->first();
        return view('front_end.contact_us', compact('details'));
    }
    
    public function technology()
    {
        $detail = Technology::first();
        return view('front_end.technology', compact('detail'));
    }

    public function gallery()
    {
        $galleries = WebsiteGallery::all();
        return view('front_end.gallery', compact('galleries'));
    }

    public function support()
    {
        $support = Support::first();
        return view('front_end.support', compact('support'));
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('front_end.faq', compact('faqs'));
    }

    public function service_details($slug)
    {
        $cat_details = Category::where('slug', $slug)->first();
        $service = Service::where('service_id', $cat_details->id)->first();
        return view('front_end.service_details', compact('service'));
    }

    public function checkout()
    {
        if (Auth::user()) {
            $user_id = Auth::user()->id;
        }else{
            $rand = rand(100000, 999999);

            if (session()->has('guest_user_id')) {
                $user_id = session('guest_user_id');
            } else {
                $user = User::create([
                    'name' => 'Guest User',
                    'email' => 'guest'.$rand.'@yopmail.com',
                    'phone' => '1234567890',
                    'password' => bcrypt($rand.time()),
                    'user_type' => 'guest',
                    'guest_user' => '1',
                ]);
    
                $user_id = $user->id;
                session()->put('guest_user_id', $user_id);
            }
          
            CartManageController::cartSync($user_id);
        
        }

        $carts = Cart::where('user_id', $user_id)->paginate(10);
        $all_carts = Cart::where('user_id', $user_id)->get();
        $carriers = json_decode(ShipStationManageController::getCarriers(), true);
        $countries = DB::table('countries')->get();

        // find sum
        $total = 0;
        foreach ($all_carts as $cart) {
            $total = number_format((float)($total + ($cart->cart_quantity * $cart->amount)), 2, '.', '');
        }

        return view('front_end.checkout', compact('total', 'carts', 'carriers', 'countries'));
        
        // } 
        // else {
        //     
        //     return redirect()->route('user.signup')->with('danger', 'Please Login First');
        // }
    }

    // forgot password page

    public function forgot_password()
    {
        return view('front_end.forgot_password');
    }

    public function forgot_pass_action(Request $request)
    {
        $new_pass = Str::random(15);

        $check = User::whereEmail($request->email)->first();

        if ($check != null) {
            // update password in db & send the pass to email

            User::where('email', $request->email)->update([
                'password' => bcrypt($new_pass)
            ]);

            // send the pass in email

            mail($request->email, "Green Mall - Password Changed", "New Password for Your Green Mall Account is - " . $new_pass);
            return redirect()->back()->with('success', 'New Password For Your Account has been sent to Your Registered Email Id.');
        } else {
            return redirect()->back()->with('danger', 'Sorry! You are not Registered with US');
        }
    }

    // 
    public function my_account()
    {
        if (Auth::user()) {
            return view('front_end.account.my_account');
        } else {
            return redirect()->route('user.signup')->with('danger', 'Please Login First');
        }
    }

    public function change_pass()
    {
        if (Auth::user()) {
            return view('front_end.account.change_pass');
        } else {
            return redirect()->route('user.signup')->with('danger', 'Please Login First');
        }
    }

    public function order_history()
    {
        if (Auth::user()) {
            $orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'active')->orderBy('id', 'desc')->paginate(2);
            $cancel_orders = Order::where('user_id', Auth::user()->id)->where('order_status', 'cancel')->orderBy('id', 'desc')->paginate(2);
            return view('front_end.account.order_history', compact('orders', 'cancel_orders'));
        } else {
            return redirect()->route('user.signup')->with('danger', 'Please Login First');
        }
    }


    //
    public function change_pass_action(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'conf_password' => 'required|same:password',
        ]);

        User::where('id', Auth::user()->id)->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Password Changed Successfully');
    }

    // edit profile

    public function edit_profile_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Saved');
    }

    // cancel order

    public function cancel_order($orderId)
    {
        Order::where('order_id', $orderId)->update([
            'order_status' => 'cancel'
        ]);

        return redirect()->back()->with('danger', 'Order Canceled');
    }

    /**
     * whole sale page
     */

    public function wholesale_application()
    {
        return view('front_end.wholesale.index');
    }

    /**
     * Retailer
     */

    public function retailer()
    {
        return view('front_end.retailer.index');
    }
    
    public function blog_details($id){
        $details = Blog::whereId($id)->first();
        return view('front_end.blog_details', compact('details'));
    }
    public function thankyou(){
        return view('front_end.thankyou');
    }

    public function blogs(){
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('front_end.blogs', compact('blogs'));
    }
}
