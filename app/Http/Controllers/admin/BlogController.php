<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BlogRepo;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    protected $blogrepo;

    public function __construct(BlogRepo $blogrepo)
    {
        $this->blogrepo = $blogrepo;
    }

    public function show()
    {
        $data = $this->blogrepo->show();
        return view('admin.Blog.show', compact('data'));
    }

    public function add()
    {
        return view('admin.Blog.add');
    }

    public function store(BlogRequest $request)
    {
        $this->blogrepo->create($request->all());
        return redirect()->route('blog')->with('message','Data Added Successfully!!!');
    }

    public function edit($id)
    {
        $data = $this->blogrepo->edit($id);
        return view('admin.Blog.add', compact('data'));
    }

    public function update(Request $request, int $id)
    {
        $this->blogrepo->update($request->all(),$id);
        return redirect()->route('blog')->with('message','Data Updated Successfully!!!');
    }

    public function delete(int $id)
    {
        $this->blogrepo->delete($id);
        return redirect()->route('blog')->with('message','Data Deleted Successfully!!!');
    }
}
