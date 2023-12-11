<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{PdfDownloads, Notification};
use Illuminate\Support\Facades\Auth;

class PdfDownloadManageController extends Controller
{
    //

    public function list(){
        $pdfs = PdfDownloads::orderBy('id', 'desc')->get();
        return view('admin.pdf.lists', compact('pdfs'));
    }

    public function add(){
        return view('admin.pdf.add');
    }
    
    public function add_action(Request $request){
        $request->validate([
            'title' => 'required',
            'pdf' => 'required|mimes:pdf'
        ]);

        // store the pdf first

        $pdfName = time().'.'.$request->pdf->extension();
        $request->pdf->move(public_path('front_end/pdf/'), $pdfName);

        PdfDownloads::create([
             'title' => $request->title,
             'pdf' => $pdfName,
        ]);
        
        // add notification if sub admin add a admin
        if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'PDF', $pdf->id);
        }

        return redirect()->back()->with('pdf_success', 'PDF Successfully Saved');
    }
    
    // delete

    public function delete($id){
           $pdf = PdfDownloads::whereId($id)->first();

           unlink(public_path('front_end/pdf/'.$pdf->pdf));
           PdfDownloads::find($id)->delete();
           return redirect()->back()->with('success', 'Deleted Successfully');
    }

    // update

    public function update($id){
            $pdf = PdfDownloads::whereId($id)->first();
            return view("admin.pdf.update", compact('pdf'));
    }

    public function update_action(Request $request, $id){
        $request->validate([
            'title' => 'required',
        ]);

        $pdf = PdfDownloads::whereId($id)->first();

        if($request->hasFile('pdf')){
            unlink(public_path('front_end/pdf/'.$pdf->pdf));
            $pdfName = time().'.'.$request->pdf->extension();
            $request->pdf->move(public_path('front_end/pdf/'), $pdfName); 
        }else{
            $pdfName = $pdf->pdf;
        }

        
        $pdf = PdfDownloads::whereId($id)->update([
            'title' => $request->title,
            'pdf' => $pdfName,
        ]);

       // add notification if sub admin add a admin
       if(Auth::guard('admin')->user()->type == "sub_admin"){
           Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'PDF', $id);
       }

       return redirect()->back()->with('pdf_success', 'PDF Successfully Saved');
    }
}
