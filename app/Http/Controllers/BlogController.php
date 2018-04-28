<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }
    public function show($id)
    {
        $nilai = 'nilainya adalah sekian ' . $id;

        // dd($users);
        // DB::table('users')->insert([
        //     ['username' => 'ka', 'password' => 'joswan']]);

        // DB::table('users')->where('username','kas')->update(
        //     ['username' => 'nostalgia', 'password' => 'jos']);
        DB::table('users')->where('id', 2)->delete();
        // $users = DB::table('users')->where('username', 'like', '%a')->get();

        $users = DB::table('users')->get();
        // $alert = '<script>alert("x!")</script>';
        return view('blog/single', ['blog' => $nilai, 'users' => $users]);
    }
}
