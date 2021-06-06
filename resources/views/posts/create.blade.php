<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Task
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                            <input type="text" name="title" id="title" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="slug" class="block font-medium text-sm text-gray-700">Slug</label>
                            <input type="text" name="slug" id="slug" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                            @error('slug')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="background_img" class="block font-medium text-sm text-gray-700">Background Image</label>
                            <input type="file" name="background_img" id="background_img" type="file" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                            @error('background_img')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="post_image" class="block font-medium text-sm text-gray-700">Post Image</label>
                            <input type="file" name="post_image" id="post_image" type="file" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                            @error('post_image')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="days" class="block font-medium text-sm text-gray-700">Days</label>
                            <input type="text" name="days" id="days" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"/>
                            @error('days')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>

                        
                              
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>