<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\VideoRequest;
use App\Upload;
use Illuminate\Support\Str;

class UploadController extends Controller {
    public function browseFile() {
        // $images = [];
        // $test = $_GET['ckeditor'];
        // $files = \File::files(base_path() . '/upload/file');
        // foreach ($files as $file) {
        //     $images[] = pathinfo($file);
        // }

        // $data = [
        //     'files' => $images,
        //     'test'  => $test
        // ];
        return view('upload.file');
    }

    public function file(FileRequest $request) {
        $file = $request->file('upload');
        $data['name'] = $file->getClientOriginalName();
        $data['path'] = base_path() . '/public';
        $data['slug'] = Str::slug($file->getClientOriginalName(), '_');
        //$data['type'] = "upload";
        //Upload::create($data);
        $file->move($data['path'], $data['name']); //
        return back()->with('message', 'file saved!');
    }

    public function photo(ImageRequest $request) {
        $file = $request->file('upload');
        $data['name'] = $file->getClientOriginalName();
        $data['path'] = base_path() . '/public/images';
        $data['slug'] = Str::slug($file->getClientOriginalName(), '_');
        $data['type'] = "upload";
        Upload::create($data);
        $file->move($data['path'], $data['name']); //
        return back()->with('message', 'file saved!');
    }

    // public function photo(ImageRequest $request) {
    //     $file = $request->file('image');
    //     $data['name'] = $file->getClientOriginalName();
    //     $data['path'] = base_path() . '\public\images';
    //     $data['slug'] = Str::slug($file->getClientOriginalName(), '_');
    //     $data['type'] = "image";
    //     Upload::create($data);
    //     $file->move($data['path'], $data['name']); //
    //     return back()->with('message', 'file saved!');
    // }

    public function video(VideoRequest $request) {
        $file = $request->file('video');
        $data['name'] = $file->getClientOriginalName();
        $data['path'] = base_path() . '\public\videos';
        $data['slug'] = Str::slug($file->getClientOriginalName(), '_');
        $data['type'] = "video";
        Upload::create($data);
        $file->move($data['path'], $data['name']); //
        return back()->with('message', 'file saved!');
    }
}
