<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Page;

// use Illuminate\Support\Str;

class PageController extends Controller {
    public function index() {
        // echo Str::slug('test stasd', '_');
        if (\Request::ajax()) {
            return Page::all();
        }
        return view('page.index');
    }

    public function create() {
        return view('page.create');
    }

    public function store(PageRequest $request) {
        Page::create($request->except(['_token']));
        return redirect('dash/page')->with('message', 'Page was create success.');
    }

    public function show(Page $page) {
        $data['page'] = $page;
        return view('page.detail', $data);
    }

    public function edit(Page $page) {
        $data['page'] = $page;
        return view('page.update', $data);
    }

    public function update(PageRequest $request, Page $page) {
        $page->update($request->except(['_token']));
        return redirect('dash/page')->with('message', 'Page was update success.');
    }

    public function destroy(Page $page) {
        if (\Request::has('id')) {
            Page::destroy(\Request::input('id'));
            return ['result' => true];
        }
        $page->delete();
        return redirect('dash/page')->with('message', 'Page was delete success.');
    }
}
