<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VideoRequest extends Request {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'video' => 'mimes:mov,mp4,wmv,3gp,rm,swf,ogg'
        ];
    }
}
