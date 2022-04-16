<?php

namespace App\Http\Requests;

use App\Models\video;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class updateRequest extends storeRequest
{
   
    public function rules()
    {
        return array_merge(parent::rules(),['slug' => Rule::unique('videos')->ignore($this->video),'alpha_dash']);
    }
}