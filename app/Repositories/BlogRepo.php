<?php

namespace App\Repositories;

use App\Models\Blog;

class  BlogRepo
{
    public function show()
    {
        return Blog::paginate(10);
    }

    public function edit($id)
    {
        return Blog::find($id);
    }

    public function create(array $data)
    {         
        $image = $data['image'];
        $imageName = 'images/Blog/'.time() . '_' . $image->getClientOriginalName();
        $image->move('images/Blog',$imageName);     

        Blog::create(
            [
                // "category_id" => $data['blog_category'],
                "title" => $data['title'],
                "meta_title" => $data['meta_title'],
                "meta_description" => $data['meta_description'],
                "image" => $imageName,
                "description" => $data['description'],
                "subheading" => $data['subheading'],
            ]
        );
    }

    public function update(array $data, $id)
    {
        $Blog = Blog::find($id);

        if (!$Blog) {
            return null; // Handle the case where the record is not found.
        }

        if (isset($data['image'])) {
            $image = $data['image'];
           $imageName = 'images/Blog/'.time() . '_' . $image->getClientOriginalName();
           $image->move('images/Blog',$imageName); 
            
            if ($Blog->image) {
               
                $oldImagePath = public_path($Blog->image);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $Blog->update([
                // "category_id" => $data['blog_category'],
                "meta_title" => $data['meta_title'],
                "meta_description" => $data['meta_description'],
                "title" => $data['title'],
                "image" => $imageName,
                "description" => $data['description'],
                "subheading" => $data['subheading'],
            ]);
        } else {
            $Blog->update([
                // "category_id" => $data['blog_category'],
                "meta_title" => $data['meta_title'],
                "meta_description" => $data['meta_description'],
                "title" => $data['title'],
                "description" => $data['description'],
                "subheading" => $data['subheading'],
            ]);
        }
        return $Blog;
    }

    public function delete($id)
    {
        $Blog = Blog::find($id);
        if ($Blog->image) {
            
            $oldImagePath = public_path($Blog->image);

            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        return $Blog->delete();
    }
}
?>