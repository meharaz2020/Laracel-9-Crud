<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class postcontroller extends Controller
{
    public function index(){
       $posts= Post::get();
       return view('home',compact("posts"));
    }

    public function addpost(){
        return view('addpost');
    }

    public function storepost(Request $request){
           $title=$request->title;
           $img=$request->file('image');

           $image_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();

           $img_url='upload/'.$image_name;
           $img->move(public_path('upload'),$image_name);

            
           Post::insert([
           'title'    =>$title,
           'img_url'=>$img_url,  
           ]);

           return redirect()->route('home');
    }

    public function editpost($id){
        $post= Post::WHERE('id',$id)->first();
        return view('editpost',compact("post"));
    }
    public function updatepost(Request $request){
        if($request->file('image')){
            $title=$request->title;
            $postid=$request->postid;
            $img=$request->file('image');

           $image_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();

           $img_url='upload/'.$image_name;
           $img->move(public_path('upload'),$image_name);
           Post::WHERE('id',$postid)->update([
               'title'=>$title,
               'img_url'=>$img_url,
           ]);
           return redirect()->route('home');

        }else{
            $title=$request->title;
            $postid=$request->postid;
            Post::WHERE('id',$postid)->update([
                'title'=>$title,
            
            ]);
            return redirect()->route('home');
        }
    }
    public function deletepost($id){
            Post::findOrFail($id)->delete();
            return redirect()->back();
    }
}
