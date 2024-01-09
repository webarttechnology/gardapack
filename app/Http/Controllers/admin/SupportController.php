<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function list()
    {
        $data = Support::first();
        return view('admin.pages.support', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
            'page_heading' => 'required',
            'page_des' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'live_chat' => 'required',
        ]);

        $support = Support::first();

        if ($support == null) {
            Support::create([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'page_heading' => $request->page_heading,
                'page_des' => $request->page_des,
                'email' => $request->email,
                'phone' => $request->phone,
                'live_chat' => $request->live_chat,
            ]);
        } else {
            Support::first()->update([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'page_heading' => $request->page_heading,
                'page_des' => $request->page_des,
                'email' => $request->email,
                'phone' => $request->phone,
                'live_chat' => $request->live_chat,
            ]);
        }

        return redirect()->route('admin.support.list')->with('success', 'Data Successfully Updated');
    }

    public function update(Request $request, $id)
    {
        $data =  Support::find($id);
        $data->update([
            'page_heading' => $request->page_heading,
            'page_des' => $request->page_des,
            'email' => $request->email,
            'phone' => $request->phone,
            'live_chat' => $request->live_chat,
        ]);

        return redirect()->route('admin.support.list')->with('success', 'Successfully Saved');
    }
}
