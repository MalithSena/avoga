<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Home Page
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('homepage.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="video" class="block font-medium text-sm text-gray-700">Video</label>
                            <input type="file" name="video" id="video" type="file"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('video')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tagline_bg" class="block font-medium text-sm text-gray-700">Tagline
                                Heading</label>
                            <input type="text" name="tagline_bg" id="tagline_bg" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('tagline_bg')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tagline_sm" class="block font-medium text-sm text-gray-700">Tagline
                                Small</label>
                            <input type="text" name="tagline_sm" id="tagline_sm" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('tagline_sm')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="link_redirect" class="block font-medium text-sm text-gray-700">Link Redirect
                                Small</label>
                            <input type="text" name="link_redirect" id="link_redirect" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('link_redirect')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary1" class="block font-medium text-sm text-gray-700">Itinerary 1
                            </label>
                            <input type="text" name="itinerary1" id="itinerary1" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary2" class="block font-medium text-sm text-gray-700">Itinerary 2
                            </label>
                            <input type="text" name="itinerary2" id="itinerary2" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary3" class="block font-medium text-sm text-gray-700">Itinerary 3
                            </label>
                            <input type="text" name="itinerary3" id="itinerary3" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary3')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary4" class="block font-medium text-sm text-gray-700">Itinerary 4
                            </label>
                            <input type="text" name="itinerary4" id="itinerary4" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary4')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary5" class="block font-medium text-sm text-gray-700">Itinerary 5
                            </label>
                            <input type="text" name="itinerary5" id="itinerary5" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary5')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="itinerary6" class="block font-medium text-sm text-gray-700">Itinerary 6
                            </label>
                            <input type="text" name="itinerary6" id="itinerary6" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('itinerary6')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="background_img" class="block font-medium text-sm text-gray-700">Background
                                Image</label>
                            <input type="file" name="background_img" id="background_img" type="file"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('background_img')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="promotional_message_h1"
                                class="block font-medium text-sm text-gray-700">Promotional Message Heading
                            </label>
                            <input type="text" name="promotional_message_h1" id="promotional_message_h1" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('promotional_message_h1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="promotional_message" class="block font-medium text-sm text-gray-700">Promotional
                                Message
                            </label>
                            <input type="text" name="promotional_message" id="promotional_message" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full" />
                            @error('promotional_message')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="similar" class="block font-medium text-sm text-gray-700">Blog 1</label>
                            <select name="blog1" id="blog1" class="form-control">
                                <option value=""></option>
                            </select>
                            @error('blog1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="blog2" class="block font-medium text-sm text-gray-700">Blog 2</label>
                            <select name="blog2" id="blog2" class="form-control">
                                <option value=""></option>
                            </select>
                            @error('blog2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="blog3" class="block font-medium text-sm text-gray-700">Blog 3</label>
                            <select name="blog3" id="blog3" class="form-control">
                                <option value=""></option>
                            </select>
                            @error('blog3')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>