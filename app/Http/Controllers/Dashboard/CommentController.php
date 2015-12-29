<?php

namespace App\Http\Controllers\Dashboard;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return Comment::all();
        }
        return view('comment.index');
    }

    public function create() {
        return view('comment.create');
    }

    public function store(Request $request) {
        Comment::create($request->except(['_token']));
        return redirect('dash/comment')->with('message', 'Comment was create success.');
    }

    public function show(Comment $comment) {
        $data['comment'] = $comment;
        return view('comment.detail', $data);
    }

    public function edit(Comment $comment) {
        $data['comment'] = $comment;
        return view('comment.update', $data);
    }

    public function update(Request $request, Comment $comment) {
        $comment->update($request->all());
        return redirect('dash/comment')->with('message', 'Page was update success.');
    }

    public function destroy(Comment $comment) {
        $comment->delete();
        return redirect('dash/comment')->with('message', 'Page was delete success.');
    }
}
