<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        if (\Request::ajax()) {
            return User::all();
        }
        return view('user.index');
    }

    public function create() {
        $data['types'] = User::lists('type', 'type');
        return view('user.create', $data);
    }

    public function store(UserRequest $request) {
        User::create($request->except(['_token']));
        return redirect('dash/user')->with('message', 'User was created success.');
    }

    public function show($id) {
        //
    }

    public function edit(User $user) {
        $data['user'] = $user;
        $data['types'] = User::lists('type', 'type');
        switch (User::where('id', $user)->pluck('type')) {
            case 'admin':
                $data['type'] = 'admin';
                break;
            case 'user':
                $data['type'] = 'user';
                break;
        }
        return view('user.update', $data);
    }

    public function update(Request $request, User $user) {
        $user->update($request->except(['_token']));
        return redirect('dash/user')->with('message', 'User was update success.');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('dash/user')->with('message', 'User was deleted success.');
    }

    public function showuploadfile() {
        return view('user.uploadfile');
    }
}
