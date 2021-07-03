<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use App\Models\Post;
use App\Models\Homepage;
use Illuminate\Http\Request;

// IMPORTANT SECURITY MESSAGE : 
// DO NOT ADD CREATE, EDIT, UPDATE, DELETE METHODS ON NO CIRCUMSTANCES ON THIS CONTROLLER.

class ItineraryController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        $title = 'Avoga Holidays || Tours';
        return view('itineraries', compact('title', 'posts'));
    }


    
    public function show(Post $post, Homepage $homepage)
    {
        $title = ucfirst($post->title) . " || Avoga Holidays";
        // $from = explode(",,", $post->from_to);
        $from = json_decode($post->from_to, true);
        // $destined = explode(",,", $post->tour_itinerary);
        $destined = json_decode($post->tour_itinerary, true);
        $points = json_decode($post->tips);
        
        $similar = json_decode($post->similar);
        return view('posts.show', compact('post','homepage', 'title', 'from', 'destined', 'points', 'similar', ));
    }

}
