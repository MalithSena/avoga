<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Posts
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('title', $post->title) }}" />
                            @error('title')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="slug" class="block font-medium text-sm text-gray-700">Slug</label>
                            <input type="text" name="slug" id="slug" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('slug', $post->slug) }}" />
                            @error('slug')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="background_img" class="block font-medium text-sm text-gray-700">Background Image</label>
                            <input type="file" name="background_img" id="background_img" type="file" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('background_img', $post->background_img) }}" />
                        @error('background_img')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="background_img" class="block font-medium text-sm text-gray-700">Background
                            Image</label>
                        <input type="file" name="background_img" id="background_img" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('background_img', $post->background_img) }}" />
                        @error('background_img')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="post_image" class="block font-medium text-sm text-gray-700">Post Image</label>
                        <input type="file" name="post_image" id="post_image" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('post_image', $post->post_image) }}" />
                        @error('post_image')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="similar" class="block font-medium text-sm text-gray-700">Similar</label>
                        {{-- {{ $post->find($similar)->title }} --}}
                        @for($i=1; $i < 4; $i++) <select name="similar[]" id="similar" class="form-control">
                            @foreach ($similar_posts as $value)
                            <option value="{{ $value->id }}" @if ($similar !=NULL || $similar_posts->find($similar[$i-1]
                                == $value->id)) selected="selected" @endif>
                                {{ $value->title }}
                            </option>
                            @endforeach
                            </select>
                            @endfor
                            @error('similar')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="days" class="block font-medium text-sm text-gray-700">Total Days</label>
                        <input type="text" name="days" id="days" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('days', $post->days) }}" />
                        @error('days')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tagline" class="block font-medium text-sm text-gray-700">Tagline</label>
                        <input type="text" name="tagline" id="tagline" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('tagline', $post->tagline) }}" />
                        @error('tagline')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                        <input type="text" name="description" id="description" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('description', $post->description) }}" />
                        @error('description')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    @if(empty($post->tips))
                    <div class="px-4 py-5 bg-white sm:p-6">
                        @for($i=1; $i <= 5; $i++) <label for="tips" class="block font-medium text-sm text-gray-700">
                            Tips</label>
                            <input type="text" name="tips[]" id="tips" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ "Tip " . $i }}" />
                            @endfor
                    </div>
                    @else

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="tips" class="block font-medium text-sm text-gray-700">Tips</label>

                        @for($i=1; $i
                        <= 5; $i++) <input type="text" name="tips[]" id="tips" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('points', $points[$i-1])}}" />
                        @endfor

                    </div>
                    @endif

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="introduction" class="block font-medium text-sm text-gray-700">Introduction</label>
                        <input type="text" name="introduction" id="introduction" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('introduction', $post->introduction) }}" />
                        @error('introduction')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- @if(empty($post->from_to) && empty($post->tour_itinerary))
                    <div class="px-4 py-5 bg-white sm:p-6">
                        @for($i=1;$i < $post->days + 1; $i++)
                            <label for="from_to" class="block font-medium text-sm text-gray-700">From - To</label>

                            <input type="text" name="from_to[]" id="from_to" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="" />
                            <label for="tour_itinerary" class="block font-medium text-sm text-gray-700">Tour
                                Itinerary</label>
                            <input type="text" name="tour_itinerary[]" id="tour_itinerary" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="" />

                            @endfor
                    </div>
                    @else --}}
                    <div class="px-4 py-5 bg-white sm:p-6">
                        @for($i=0; $i < $post->days; $i++)
                            <label for="from_to" class="block font-medium text-sm text-gray-700">From - To</label>

                            <input type="text" name="from_to[]" id="from_to" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{  
                                old('from_to', $from[$i] ?? "" )}}" />
                            <label for="tour_itinerary" class="block font-medium text-sm text-gray-700">Tour
                                Itinerary</label>
                            <input type="text" name="tour_itinerary[]" id="tour_itinerary" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('tour_itinerary', $destined[$i] ?? "") }}" />

                            @endfor
                    </div>
                    {{-- @endif --}}
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="map_url" class="block font-medium text-sm text-gray-700">Map URL</label>
                        <input type="text" name="map_url" id="map_url" type="text"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('map_url', $post->map_url) }}" />
                        @error('map_url')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_1" class="block font-medium text-sm text-gray-700">Gallery Image
                            1</label>
                        <input type="file" name="gallery_image_1" id="gallery_image_1" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_1', $post->gallery_image_1) }}" />
                        @error('gallery_image_1')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_2" class="block font-medium text-sm text-gray-700">Gallery Image
                            2</label>
                        <input type="file" name="gallery_image_2" id="gallery_image_2" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_2', $post->gallery_image_2) }}" />
                        @error('gallery_image_2')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_3" class="block font-medium text-sm text-gray-700">Gallery Image
                            3</label>
                        <input type="file" name="gallery_image_3" id="gallery_image_3" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_3', $post->gallery_image_3) }}" />
                        @error('gallery_image_3')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_4" class="block font-medium text-sm text-gray-700">Gallery Image
                            4</label>
                        <input type="file" name="gallery_image_4" id="gallery_image_4" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_4', $post->gallery_image_4) }}" />
                        @error('gallery_image_4')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_5" class="block font-medium text-sm text-gray-700">Gallery Image
                            5</label>
                        <input type="file" name="gallery_image_5" id="gallery_image_5" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_5', $post->gallery_image_5) }}" />
                        @error('gallery_image_5')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="gallery_image_6" class="block font-medium text-sm text-gray-700">Gallery Image
                            6</label>
                        <input type="file" name="gallery_image_6" id="gallery_image_6" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('gallery_image_6', $post->gallery_image_6) }}" />
                        @error('gallery_image_6')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_1" class="block font-medium text-sm text-gray-700">Extra Image 1</label>
                        <input type="file" name="extra_image_1" id="extra_image_1" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('extra_image_1', $post->extra_image_1) }}" />
                        @error('extra_image_1')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_2" class="block font-medium text-sm text-gray-700">Extra Image 2</label>
                        <input type="file" name="extra_image_2" id="extra_image_2" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('extra_image_2', $post->extra_image_2) }}" />
                        @error('extra_image_2')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_3" class="block font-medium text-sm text-gray-700">Extra Image 3</label>
                        <input type="file" name="extra_image_3" id="extra_image_3" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('extra_image_3', $post->extra_image_3) }}" />
                        @error('extra_image_3')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="extra_image_4" class="block font-medium text-sm text-gray-700">Extra Image 4</label>
                        <input type="file" name="extra_image_4" id="extra_image_4" type="file"
                            class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('extra_image_4', $post->extra_image_4) }}" />
                        @error('extra_image_4')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Edit Post
                        </button>
                    </div>



            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>