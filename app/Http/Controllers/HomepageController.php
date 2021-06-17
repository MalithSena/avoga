<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Post;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\HomeValidationRequest;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepages = Homepage::all();
        return view('homepage.index', compact('homepages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $posts = Post::all();
        $blogs = Blog::all();
        return view('homepage.create', compact('posts','blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeValidationRequest $request)
    {
        $request->validated();

        if ($request->background_img) {
            $newBackgroundImage = time() . '-back' . $request->title . '.' . $request->background_img->extension();
            $request->background_img->move(public_path('images'), $newBackgroundImage);
         } else {
            $newBackgroundImage = "no-image-icon.png";
        }


        if ($request->video) {
            $newVideo = time() . '-back' . $request->title . '.' . $request->video->extension();
            $request->video->move(public_path('images'), $newVideo);
        } else {
            $newVideo= "no-image-icon.png";
        }

        Homepage::create([
            'name' => $request->input('name'),
            'contact_no_1' => $request->input('contact_no_1'),
            'contact_no_2' => $request->input('contact_no_2'),
            'video' => $newVideo,
            'tagline_bg' => $request->input('tagline_bg'),
            'tagline_sm' => $request->input('tagline_sm'),
            'link_redirect' => $request->input('link_redirect'),
            'itinerary1' => $request->input('itinerary1'),
            'itinerary2' => $request->input('itinerary2'),
            'itinerary3' => $request->input('itinerary3'),
            'itinerary4' => $request->input('itinerary4'),
            'itinerary5' => $request->input('itinerary5'),
            'itinerary6' => $request->input('itinerary6'),            
            'background_img' => $newBackgroundImage,
            'promotional_message_h1' => $request->input('promotional_message_h1'),
            'promotional_message' => $request->input('promotional_message'),
            'blog1' => $request->input('blog1'),
            'blog2' => $request->input('blog2'),
            'blog3' => $request->input('blog3')
        ]);

        return redirect('homepage');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage, Post $post)
    {
        $title = 'Home';
        return view('homepage.show', compact('title', 'homepage', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage)
    {
        $posts = Post::all();
        $blogs = Blog::all();   
        return view('homepage.edit', compact('homepage', 'blogs', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(HomeValidationRequest $request, $id)
    {
         $homepage = Homepage::find($id);
         $request->validated();

        if ($request->background_img) {
            $newBackgroundImage = time() . '-back' . $request->title . '.' . $request->background_img->extension();
            $request->background_img->move(public_path('images'), $newBackgroundImage);
        } else {
            $newBackgroundImage = $homepage->background_img;
        }


        if ($request->video) {
            $newVideo = time() . '-back' . $request->title . '.' . $request->video->extension();
            $request->video->move(public_path('images'), $newVideo);
        } else{
            $newVideo= $homepage->video;
        }

        Homepage::where('id', $id)->update([
            'name' => $request->input('name'),
            'video' => $newVideo,
            'tagline_bg' => $request->input('tagline_bg'),
            'tagline_sm' => $request->input('tagline_sm'),
            'link_redirect' => $request->input('link_redirect'),
            'itinerary1' => $request->input('itinerary1'),
            'itinerary2' => $request->input('itinerary2'),
            'itinerary3' => $request->input('itinerary3'),
            'itinerary4' => $request->input('itinerary4'),
            'itinerary5' => $request->input('itinerary5'),
            'itinerary6' => $request->input('itinerary6'),            
            'background_img' => $newBackgroundImage,
            'promotional_message_h1' => $request->input('promotional_message_h1'),
            'promotional_message' => $request->input('tagline_bg'),
            'blog1' => $request->input('blog1'),
            'blog2' => $request->input('blog2'),
            'blog3' => $request->input('blog3')
        ]);

        return redirect('homepage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        $homepage->delete();
        return redirect()->route('homepage.index');
    }
}
