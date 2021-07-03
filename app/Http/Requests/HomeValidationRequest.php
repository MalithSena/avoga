<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 

class HomeValidationRequest extends FormRequest
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
            'name' => 'required',
            'contact_no_1' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'contact_no_2' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'video' => 'sometimes|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/mp4v-es,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'tagline_bg' => 'nullable',
            'tagline_sm' => 'nullable',
            'link_redirect' => 'nullable',
            'itinerary1' => 'nullable',
            'itinerary2' => 'nullable',
            'itinerary3' => 'nullable',
            'itinerary4' => 'nullable',
            'itinerary5' => 'nullable',
            'itinerary6' => 'nullable',            
            'background_img' => 'sometimes|mimes:jpg,png,jpeg|max:5048',
            'promotional_message_h1' => 'nullable',
            'promotional_message' => 'nullable',
            'blog1' => 'nullable',
            'blog2' => 'nullable',
            'blog3' => 'nullable', 
            'is_true'=>'nullable',           
        ];
    }
}
