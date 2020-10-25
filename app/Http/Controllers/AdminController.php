<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashbaord()
    {
        $users_total = \App\User::all()->count();
        $posts_total = \App\Post::all()->count();
        $comments_total = \App\Comment::all()->count();

        return [
            "users_total" => $users_total,
            "posts_total" => $posts_total,
            "comments_total" => $comments_total,
        ];
    }


    public function getUsers()
    {
        $users = \App\User::paginate(5);
        return $users;
    }
    public function getUser($user)
    {
        $user = \App\User::where('id', $user)->first();
        $user->profileImage = asset(env('APP_URL').'/profile-default.jpg');
        if (isset($user->image)) {
            $user->profileImage = asset(env('APP_URL').'/'. $user->image->path);
        } else {
            // $user['image'] = ['path'=> ''];
            if ($user->socialAccounts->count()) {
                $user->profileImage= $user->socialAccounts->first()->avatar;
            }
        }
        return $user;
    }

    public function deleteUser($user)
    {
        $user = \App\User::find($user);
        $user->delete();
        return true;
    }

    public function getPosts()
    {
        $posts = \App\Post::paginate(5);
        return $posts;
    }
    public function getPost($post)
    {
        $post = \App\Post::where('id', $post)->first();
        $post->image;
        return $post;
    }

    public function deletePost($post)
    {
        $post = \App\Post::find($post);
        $post->delete();
        return true;
    }

    public function getCategories()
    {
        $categories = \App\Category::with('children')->where('parent_id', null)
            ->orderby('id', 'asc')
            ->get();

        return $categories;
    }
    public function getAllCategories()
    {
        $categories = \App\Category::orderby('id', 'asc')
            ->get();

        return $categories;
    }

    public function getCategory($category)
    {
        $category = \App\Category::where('id', $category)->first();
        // $category->image;
        return $category;
    }

    public function storeCategory(Request $request)
    {
        $category = new \App\Category;
        $category->name = $request->name;
        $category->name_se = $request->name_se;
        $category->name_fa = $request->name_fa;
        $category->parent_id = $request->parent_id;
        $category->save();
        return 'saved';
    }
    public function updateCategory(Request $request)
    {
        $category = \App\Category::find($request->id);
        $category->name = $request->name;
        $category->name_se = $request->name_se;
        $category->name_fa = $request->name_fa;
        $category->parent_id = $request->parent_id;
        $category->save();
        return 'saved';
    }
    public function deleteCategory(\App\Category $category)
    {
        $category->delete();
        return true;
    }
}
