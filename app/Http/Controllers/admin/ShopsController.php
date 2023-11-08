<?php

namespace App\Http\Controllers\admin;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view ('admin.shops.lists', compact('shops'));
    }

    public function add()
    {
        return view ('admin.shops.add');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Shop::create([
            'address'=> $request->address,
            'address2'=> $request->address2,
            'city'=> $request->city,
            'state'=> $request->state,
            'zip_code'=> $request->zip_code,
            'country'=> $request->country,
            'latitude'=> $request->latitude,
            'longitude'=> $request->longitude,
            'tel'=> $request->tel,
            'fax'=> $request->fax,
            'email'=> $request->email,
            'url'=> $request->url,
        ]);
        return redirect()->route('shops.lists')->with('success',  'Data Added Successfully!!!');
    }

    public function update()
    {
        $shops = Shop::all();
        return view ('admin.shops.lists', compact('shops'));
    }

    public function delete()
    {
        $shops = Shop::all();
        return view ('admin.shops.lists', compact('shops'));
    }
}
