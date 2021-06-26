<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use App\Models\Post;
use App\Models\Homepage;
use Illuminate\Http\Request;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $title = 'Avoga Holidays || Tours';
        return view('itineraries', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Homepage $homepage)
    {
        // $post = Post::findOrFail($id);
        // $title = ucfirst($post->title) . " || Avoga Holidays";
        // $from = explode(",,", $post->from_to);
        // $destined = explode(",,", $post->tour_itinerary);
        // $points = explode(",,", $post->tips);
        // $similar = explode(",,", $post->similar);
        // $galleries = explode(",,", $post->gallery_images);
         $title = ucfirst($post->title) . " || Avoga Holidays";
        // $from = explode(",,", $post->from_to);
        $from = json_decode($post->from_to, true);
        // $destined = explode(",,", $post->tour_itinerary);
        $destined = json_decode($post->tour_itinerary, true);
        $points = explode(",,", $post->tips);
        $similar = explode(",,", $post->similar);
        $galleries = explode(",,", $post->gallery_images);
        return view('itinerary', compact('post', 'title', 'from', 'destined', 'points', 'similar', 'galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function edit(Itinerary $itinerary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itinerary $itinerary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itinerary  $itinerary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itinerary $itinerary)
    {
        //
    }
}
