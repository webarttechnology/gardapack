<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menubar;
use Illuminate\Http\Request;

class MenubarManageController extends Controller
{
    //

    public function list(){
        $menubars = Menubar::orderBy('id', 'desc')->get();
        return view('admin.menubar.list', compact('menubars'));
   }

   public function add_page(){
    return view('admin.menubar.add');
   }

   public function add_action(Request $request){
          $request->validate([
                'title' => 'required',
                'link' => 'required',
                'status' => 'required',
          ]);

          Menubar::create([
              'title' => $request->title,
              'link' => $request->link,
              'status' => $request->status,
          ]);

          return redirect()->route('admin.menu.list')->with('success', 'success');
   }

   public function update($id){
          $detail = Menubar::whereId($id)->first();
          return view('admin.menubar.update', compact('detail'));
   }

   public function update_action(Request $request, $id){
        $request->validate([
                'status' => 'required',
        ]);

        $detail = Menubar::whereId($id)->first();
        if($detail->old_page == "no"){
            $request->validate([
                'title' => 'required',
                'link' => 'required',
            ]);

            Menubar::whereId($id)->update([
                'title' => $request->title,
                'link' => $request->link,
            ]);
        }

        Menubar::whereId($id)->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.menu.list')->with('success', 'success');
   }

   public function delete($id){
          Menubar::find($id)->delete();
          return redirect()->route('admin.menu.list')->with('success', 'success');
   }
}
