<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
      $posts = DB::select('select * from posts WHERE id= :id', ['id'=>7]);
      dd($posts);
    }
}
