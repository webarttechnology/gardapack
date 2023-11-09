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
        return view('admin.shops.lists', compact('shops'));
    }

    public function add()
    {
        return view('admin.shops.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        Shop::create([
            'name' => $request->name,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'tel' => $request->tel,
            'fax' => $request->fax,
            'email' => $request->email,
            'url' => $request->url,
        ]);
        return redirect()->route('shops.lists')->with('success',  'Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $shops = Shop::find($id);
        return view('admin.shops.update', compact('shops'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $shops = Shop::find($id);
        $shops->update([
            'name' => $request->name,
            'address' => $request->address,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'country' => $request->country,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'tel' => $request->tel,
            'fax' => $request->fax,
            'email' => $request->email,
            'url' => $request->url,
        ]);
        return redirect()->route('shops.lists')->with('success',  'Data Updated Successfully!!!');
    }

    public function delete($id)
    {
        $shops = Shop::find($id);
        $shops->delete();
        return redirect()->route('shops.lists')->with('success',  'Data Deleted Successfully!!!');
    }
}