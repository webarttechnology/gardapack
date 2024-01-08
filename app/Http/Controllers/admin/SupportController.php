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
       return view ('admin.pages.support', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_heading' => 'required',
            'page_des' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'live_chat' => 'required',
        ]);

        $support = Support::first();

        if($support == null){
            Support::create([
                'page_heading' => $request->page_heading,
                'page_des' => $request->page_des,
                'email' => $request->email,
                'phone' => $request->phone,
                'live_chat' => $request->live_chat,
            ]);
        }else{
            Support::first()->update([
                'page_heading' => $request->page_heading,
                'page_des' => $request->page_des,
                'email' => $request->email,
                'phone' => $request->phone,
                'live_chat' => $request->live_chat,
            ]);
        }

        return redirect()->route('admin.support.list')->with('success', 'Successfully Saved');
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
