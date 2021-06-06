<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];


    //Creating 'images' prefix if images are not originating from a URL
    public function getPostImageAttribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }

    public function getBackgroundImgAttribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }

    public function getGalleryImage1Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getGalleryImage2Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getGalleryImage3Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getGalleryImage4Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getGalleryImage5Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getGalleryImage6Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getExtraImage1Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getExtraImage2Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getExtraImage3Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
    public function getExtraImage4Attribute($value)
    {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('images/' . $value);
    }
}
