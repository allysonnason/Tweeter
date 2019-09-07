<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;

class ProfileController extends Controller
{
    public function show($user_id) {
        $user = \App\User::find($user_id);
        $profile = $user->profile;
        return view('profiles/show', compact('user', 'profile'));
    }

    public function edit($user_id)
    {
        $user = \App\User::find($user_id);
        $posts = \App\Post::where('user_id',$user)->latest()->paginate(2);

        $profile = $user->profile;
        return view('profiles/edit', compact('user', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $post = \App\Profile::find($id);

         if($profile->delete()) {
             return redirect('/');
        }
     }


    public function update(Request $request, $id)
    {
        $profile = \App\Profile::find($id);

        $profile->location =$request->location;
        $profile->interests =$request->interests;
        $profile->horsename =$request->horsename;
        $profile->breed =$request->breed;
        $profile->age =$request->age;

        if($profile->save()) {
            return redirect('/profiles/' . $profile->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}
