<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Homepage;
use Illuminate\Http\Request;
use App\Http\Requests\PostValidationRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $homepage = Homepage::all();
        return view('posts.index', compact('posts', 'homepage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostValidationRequest $request)
    {

        $request->validated();

        //Avoiding Image naming conflicts and providing access to public folder
        $background_img = time() . '-' . $request->title . '.' . $request->background_img->extension();
        $request->background_img->move(public_path('images'), $background_img);

        $post_image = time() . '-' . $request->title . '.' . $request->post_image->extension();
        $request->post_image->move(public_path('images'), $post_image);

        $tips = "";
        $tips_input = $request->input('tips');
        if ($request->tips) {
            for ($i = 1; $i < count($tips_input) + 1; $i++) {
                $values  = join(",,", $tips_input);
            }
            $tips = $values;
        }

        $from_to = "";

        if ($request->from_to) {
            for ($i = 1; $i < count($request->input['from_to']) + 1; $i++) {
                $values  = join(",,", $request->input['from_to']);
            }
            $from_to = $values;
        }

        $tour_itinerary = "";
        if ($request->tour_itinerary) {
            for ($i = 1; $i < count($request->input['tour_itinerary']) + 1; $i++) {
                $values  = join(",,", $request->input['tour_itinerary']);
            }
            $tour_itinerary = $values;
        }


        Post::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'background_img' => $background_img,
            'post_image' => $post_image,
            'similar' => $request->input('similar'),
            'days' => $request->input('days'),
            'tagline' => $request->input('tagline'),
            'description' => $request->input('description'),
            'tips' => $tips,
            'from_to' => $from_to,
            'tour_itinerary' => $tour_itinerary,
            'introduction' => $request->input('introduction'),
            'gallery_image_1' => $request->input('gallery_image_1'),
            'gallery_image_2' => $request->input('gallery_image_2'),
            'gallery_image_3' => $request->input('gallery_image_3'),
            'gallery_image_4' => $request->input('gallery_image_4'),
            'gallery_image_5' => $request->input('gallery_image_5'),
            'gallery_image_6' => $request->input('gallery_image_6'),
            'extra_image_1' => $request->input('extra_image_1'),
            'extra_image_2' => $request->input('extra_image_2'),
            'extra_image_3' => $request->input('extra_image_3'),
            'extra_image_4' => $request->input('extra_image_4'),
            'map_url' => $request->input('map_url'),
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Homepage $homepage)
    {
        $title = ucfirst($post->title) . " || Avoga Holidays";
        $from = explode(",,", $post->from_to);
        $destined = explode(",,", $post->tour_itinerary);
        $points = explode(",,", $post->tips);
        $similar = explode(",,", $post->similar);
        $galleries = explode(",,", $post->gallery_images);
        return view('posts.show', compact('post','homepage', 'title', 'from', 'destined', 'points', 'similar', 'galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Homepage $homepage)
    {
        $similar_posts = Post::all();

        $title = ucfirst($post->title) . ' || Avoga Holidays';
        $from = explode(",,", $post->from_to);
        $destined = explode(",,", $post->tour_itinerary);
        $points = explode(",,", $post->tips);
        $similar = explode(",,", $post->similar);
        $galleries = explode(",,", $post->gallery_images);
        $details = array_combine($from, $destined);

        return view('posts.edit', compact('similar_posts', 'post', 'homepage','title', 'from', 'destined', 'points', 'similar', 'galleries', 'details'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostValidationRequest $request, $id)
    {
        $post = Post::find($id);
        $request->validated();

        //Avoiding Image naming conflicts and providing route access to public folder


        if ($request->background_img) {
            $newBackgroundImage = time() . '-back' . $request->title . '.' . $request->background_img->extension();
            $request->background_img->move(public_path('images'), $newBackgroundImage);
        } else {
            $newBackgroundImage = $post->background_img;
        }


        if ($request->post_image) {
            $newPostImage = time() . '-post' . $request->title . '.' . $request->post_image->extension();
            $request->post_image->move(public_path('images'), $newPostImage);
        } else {
            $newPostImage = $post->post_image;
        }

        if ($request->gallery_image_1) {
            $newGalleryImage_1 = time() . '-gallery1' . $request->title . '.' . $request->gallery_image_1->extension();
            $request->gallery_image_1->move(public_path('images'), $newGalleryImage_1);
        } else {
            $newGalleryImage_1 = $post->gallery_image_1;
        }

        if ($request->gallery_image_2) {
            $newGalleryImage_2 = time() . '-gallery2' . $request->title . '.' . $request->gallery_image_2->extension();
            $request->gallery_image_2->move(public_path('images'), $newGalleryImage_2);
        } else {
            $newGalleryImage_2 = $post->gallery_image_2;
        }

        if ($request->gallery_image_3) {
            $newGalleryImage_3 = time() . '-gallery3' . $request->title . '.' . $request->gallery_image_3->extension();
            $request->gallery_image_3->move(public_path('images'), $newGalleryImage_3);
        } else {
            $newGalleryImage_3 = $post->gallery_image_3;
        }

        if ($request->gallery_image_4) {
            $newGalleryImage_4 = time() . '-gallery4' . $request->title . '.' . $request->gallery_image_4->extension();
            $request->gallery_image_4->move(public_path('images'), $newGalleryImage_4);
        } else {
            $newGalleryImage_4 = $post->gallery_image_4;
        }

        if ($request->gallery_image_5) {
            $newGalleryImage_5 = time() . '-gallery5' . $request->title . '.' . $request->gallery_image_5->extension();
            $request->gallery_image_5->move(public_path('images'), $newGalleryImage_5);
        } else {
            $newGalleryImage_5 = $post->gallery_image_5;
        }

        if ($request->gallery_image_6) {
            $newGalleryImage_6 = time() . '-gallery6' . $request->title . '.' . $request->gallery_image_6->extension();
            $request->gallery_image_6->move(public_path('images'), $newGalleryImage_6);
        } else {
            $newGalleryImage_6 = $post->gallery_image_6;
        }


        if ($request->extra_image_1) {
            $newExtraImage1 = time() . '-extra1' . $request->title . '.' . $request->extra_image_1->extension();
            $request->extra_image_1->move(public_path('images'), $newExtraImage1);
        } else {
            $newExtraImage1 = $post->extra_image_1;
        }
        if ($request->extra_image_2) {
            $newExtraImage2 = time() . '-extra2' . $request->title . '.' . $request->extra_image_2->extension();
            $request->extra_image_2->move(public_path('images'), $newExtraImage2);
        } else {
            $newExtraImage2 = $post->extra_image_2;
        }

        if ($request->extra_image_3) {
            $newExtraImage3 = time() . '-extra3' . $request->title . '.' . $request->extra_image_3->extension();
            $request->extra_image_3->move(public_path('images'), $newExtraImage3);
        } else {
            $newExtraImage3 = $post->extra_image_3;
        }

        if ($request->extra_image_4) {
            $newExtraImage4 = time() . '-extra4' . $request->title . '.' . $request->extra_image_4->extension();
            $request->extra_image_4->move(public_path('images'), $newExtraImage4);
        } else {
            $newExtraImage4 = $post->extra_image_4;
        }


        $tips = "";
        $tips_input = "";
        $tips_input = $request->input(['tips']);
        if ($request->input('tips')) {
            for ($i = 1; $i < count($tips_input) + 1; $i++) {
                $values  = join(",,", $tips_input);
            }
            $tips = $values;
        }

        $from_to = "";
        $from_to_input = $request->input(['from_to']);
        if ($request->input('from_to')) {
            for ($i = 1; $i < count($from_to_input) + 1; $i++) {
                $values  = join(",,", $from_to_input);
            }
            $from_to = $values;
        }

        $tour_itinerary = "";
        $tour_itinerary_input = $request->input(['tour_itinerary']);
        if ($request->input('tour_itinerary')) {
            for ($i = 1; $i < count($tour_itinerary_input) + 1; $i++) {
                $values  = join(",,", $tour_itinerary_input);
            }
            $tour_itinerary = $values;
        }
        $similar = "";
        $similar_input = $request->input(['similar']);
        if ($request->input('similar')) {
            for ($i = 1; $i < count($similar_input) + 1; $i++) {
                $values  = join(",,", $similar_input);
            }
            $similar = $values;
        }

        Post::where('id', $id)->update([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'background_img' => $newBackgroundImage,
            'post_image' => $newPostImage,
            'similar' => $similar,
            'days' => $request->input('days'),
            'tagline' => $request->input('tagline'),
            'description' => $request->input('description'),
            'tips' => $tips,
            'from_to' => $from_to,
            'tour_itinerary' => $tour_itinerary,
            'introduction' => $request->input('introduction'),
            'gallery_image_1' => $newGalleryImage_1,
            'gallery_image_2' => $newGalleryImage_2,
            'gallery_image_3' => $newGalleryImage_3,
            'gallery_image_4' => $newGalleryImage_4,
            'gallery_image_5' => $newGalleryImage_5,
            'gallery_image_6' => $newGalleryImage_6,
            'extra_image_1' => $newExtraImage1,
            'extra_image_2' => $newExtraImage2,
            'extra_image_3' => $newExtraImage3,
            'extra_image_4' => $newExtraImage4,
            'map_url' => $request->input('map_url'),
        ]);
        return redirect()->route('posts.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
