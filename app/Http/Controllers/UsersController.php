<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use function Pest\Laravel\get;

class UsersController extends Controller
{


    public function index()
    {

        $users = User::with(['address', 'image'])->orderByDesc('id')->get();



        return view('user.index', [
            'usuarios' => $users,
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserStoreRequest $request)
    {
        $attributes = $request->validated();

         $path = $attributes['image']->store(Str::slug($attributes['name']) . '-' . Str::slug(now()));


        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        $user->address()->create($attributes);

        $user->image()->create([
            'image' => $path
        ]);


        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return throw new ModelNotFoundException();
        }

        return view('user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', [
            'user' => $user,
        ]);
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            throw new ModelNotFoundException();
        }

        $user->delete();

        return redirect()->back();
    }

    public function address($id)
    {
        $user = User::find($id);

        return view('user.address', [
            'user' => $user,
        ]);


    }

    public function posts($id)
    {
        $users = User::where('id', '<', '3')->get();
        $post = Post::whereBelongsTo($users)->get();
        dd($post);
    }

}
