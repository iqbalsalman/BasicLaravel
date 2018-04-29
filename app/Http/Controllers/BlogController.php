<?php

namespace App\Http\Controllers;

use App\Model\Blogs;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        // dd($blogs);
        return view('blog/home', ['blogs' => $blogs]);
    }
    public function show($id)
    {
        $nilai = 'nilainya adalah sekian ' . $id;

        // dd($users);
        // DB::table('users')->insert([
        //     ['username' => 'ka', 'password' => 'joswan']]);

        // DB::table('users')->where('username','kas')->update(
        //     ['username' => 'nostalgia', 'password' => 'jos']);
        // DB::table('users')->where('id', 2)->delete();
        // $users = DB::table('users')->where('username', 'like', '%a')->get();

        // $users = DB::table('users')->get();
        // $alert = '<script>alert("x!")</script>';
        $blogs = Blogs::find($id);
        // dd($blogs);
        
        return view('blog/single', ['blogs' => $blogs]);
    }
}
