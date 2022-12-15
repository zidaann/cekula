<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    //get all posts
    public function index()
    {
        return response([
            'posts' => Mapel::orderBy('created_at', 'desc')->get()
        ], 200);
    }

    //get singel post
    public function usershow($id)
    {
        return response([
            'post' => Mapel::where('id', $id)->get()
        ], 200);
    }

    //get singel post by userlogin
    public function show($id)
    {
        return response([
            'post' => Mapel::where('id', $id)->get()
        ], 200);
    }

    //create a post
    public function store(Request $request)
    {

        //validate field
        $attrs = $request->validate([
            
            'nama' => 'required|string',
        ]);

        $image = $this->saveImage($request->icon, 'icons');

        $post = Mapel::create([
            'nama' => $attrs['nama'],
            'icon' => $image
        ]);

        return response([
            'message' => 'post created.',
            'post' => $post
        ], 200);
    }

    // update a post
    public function update(Request $request, $id)
    {
        $post = Mapel::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'nama' => 'required|string',     
        ]);

        $image = $this->saveImage($request->icon, 'pamflets');

        if($image ==null){
            $post->update([
                'nama' =>  $attrs['nama'],    
            ]);
        }else{
            $post->update([
                'nama' =>  $attrs['nama'],
                'icon' => $image
            ]);
        }
        

        // for now skip for post image

        return response([
            'message' => 'Post updated.',
            'post' => $post
        ], 200);
    }
    //delete post
    public function destroy($id)
    {
        $post = Mapel::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        $post->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }
}
