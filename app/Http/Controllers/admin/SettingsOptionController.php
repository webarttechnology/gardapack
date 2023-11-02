<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{SettingsOptions};

class SettingsOptionController extends Controller
{
    //

    public function lists()
    {
           $options = SettingsOptions::all();
           return view('admin.settings.options.lists', compact('options'));
    }

    public function add_page()
    {
           return view('admin.settings.options.add');
    }

    public function add_action(Request $request)
    {
            $request->validate([
                  'name' => 'required|max:200',
                  'settings_key' => 'required|max:200',
            ]);

            SettingsOptions::create([
                'name' => $request->name,
                'settings_key' => $request->settings_key,
            ]);

            return back()->with('options_success', 'Successfully Saved');
    }

    public function update_page($id)
    {
            $option = SettingsOptions::whereId($id)->first();
            return view('admin.settings.options.update', compact('option'));
    }

    public function update_action(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:200',
        ]);

        SettingsOptions::whereId($id)->update([
            'name' => $request->name,
        ]);

        return back()->with('options_success', 'Successfully Saved');
    }

    public function delete($id)
    {
        SettingsOptions::find($id)->delete();
        return back()->with('options_delete', 'Successfully Deleted');
    }
}
