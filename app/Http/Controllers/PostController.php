<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Post;
use Comment;
use User;
use Like;


class PostController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth')->except(['posts', 'list']);

        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $posts = \App\Post::latest()->paginate(10);

            return view('posts/index', compact('posts'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
        */
        public function list()
        {
            $posts = \App\Post::latest()->get();
            return $posts;
        }

        public function create()
        {

            return view('posts/create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {

            $data = $request->validate([

                'body' => 'required'
            ]);

            $post = new \App\Post;


            $post->body =$data['body'];
            $post->user_id = Auth::user()->id;

            if($post->save()) {
                $request->session()->flash('message', 'Post created successfully!');
                return redirect('/posts/' . $post->id);

        }
    }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $post = \App\Post::find($id);
            return view('posts/show', compact('post'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $post = \App\Post::find($id);
            return view('posts/edit', compact('post'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $post = \App\Post::find($id);


            $post->body =$request->body;

            if($post->save()) {
                return redirect('/posts/' . $post->id);
            }else{
            dd ('ERROR');
            }
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $post = \App\Post::find($id);

            if($post->delete()) {
                return redirect('/posts');
            }else{
                dd('ERROR');
            }
        }
        // public function like($id)
        // {
        //     $existing = \App\Like::where('user_id', Auth::id())
        //         ->where('post_id', $id)
        //         ->count();
        //
        //     if ($existing) {
        //         $delete = \App\Like::where('user_id', Auth::id())
        //         ->where('post_id', $id)
        //         ->delete();
        //
        //     if($delete)
        //         return back();
        //
        //     }
        //
        //
        //     $like = new \App\Like;
        //     $like->user_id = Auth::id();
        //     $like->post_id = $id;
        //
        //     if($like->save()) {
        //         return back();
        //     }
        //     dd('Error');
        //  }
         public function like($id)
         {
             $userId = Auth::id();
             $like = new \App\Like;
             $like->user_id = Auth::id();
             $like->post_id = $id;

             if ($like->save()) {
                 return json_encode([
                    'status' => 'success'
                 ]);
            }

             return json_encode([
                 'status' => 'success'
            ]);
         }


         public function unlike($id)
         {
             $like = \App\Like::where('post_id',$id)
             ->where('user_id', Auth::id())
             ->first();

             if ($like->delete()) {
                 return json_encode([
                    'status' => 'success'
                 ]);
            }

             return json_encode([
                 'status' => 'success'
              ]);
          }



     }
