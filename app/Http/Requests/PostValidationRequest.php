<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:1|max:255',
            'slug' => 'nullable',
            'background_img' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'post_image' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'similar' => 'nullable',
            'days' => 'nullable',
            'tagline' => 'nullable',
            'description' => 'nullable',
            'tips' => 'nullable',
            'from_to' => 'nullable',
            'tour_itinerary' => 'nullable',
            'introduction' => 'nullable',
            'gallery_image_1' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_2' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_3' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_4' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_5' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'gallery_image_6' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_1' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_2' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_3' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'extra_image_4' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'map_url' => 'nullable',
        ];
    }
}
