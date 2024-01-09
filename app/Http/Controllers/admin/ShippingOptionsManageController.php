<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingOption;
use Illuminate\Http\Request;

class ShippingOptionsManageController extends Controller
{
    //

    public function list(){
        $menubars = ShippingOption::orderBy('id', 'desc')->get();
        return view('admin.shipping.list', compact('menubars'));
    }

   public function add_page(){
    return view('admin.shipping.add');
   }

   public function add_action(Request $request){
          $request->validate([
                'title' => 'required',
                'price' => 'required',
                'status' => 'required',
          ]);

          ShippingOption::create([
              'title' => $request->title,
              'price' => $request->price,
              'status' => $request->status,
          ]);

          return redirect('admin/shipping/list')->with('success', 'Successfully Added');
   }

   public function update($id){
          $detail = ShippingOption::whereId($id)->first();
          return view('admin.shipping.update', compact('detail'));
   }

   public function update_action(Request $request, $id){
        $request->validate([
                'title' => 'required',
                'price' => 'required',
                'status' => 'required',
        ]);

        $detail = ShippingOption::whereId($id)->first();
    
        ShippingOption::whereId($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect('admin/shipping/list')->with('success', 'Successfully Updated');
   }

   public function delete($id){
          ShippingOption::find($id)->delete();
          return redirect('admin/shipping/list')->with('success', 'Deleted');
   }

   public function getShipmentPrice($id){
          $details = ShippingOption::whereId($id)->get();
       //    $free_ship = 
          return response()->json($details);
   }
}
