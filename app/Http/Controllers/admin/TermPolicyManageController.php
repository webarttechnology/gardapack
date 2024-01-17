<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TermPolicy;
use Illuminate\Http\Request;

class TermPolicyManageController extends Controller
{
    //

    public function save(Request $request, $type)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = TermPolicy::whereType($type)->first();

        if ($request->hasFile('img')) {
            $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $img = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploads/imgs/'), $img);
        } else {
            if ($data != null) {
                $img = $data->img;
            } else {
                $img = null;
            }
        }

        if ($data == null) {
            TermPolicy::create([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'description' => $request->description,
                'title' => $request->title,
                'type' => $type,
                'img' => $img,
            ]);
        } else {
            TermPolicy::whereType($type)->first()->update([
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'description' => $request->description,
                'title' => $request->title,
                'type' => $type,
                'img' => $img,
            ]);
        }

        return redirect()->back()->with('success', 'Data Successfully Saved');
    }
}
