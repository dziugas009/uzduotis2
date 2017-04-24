<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    public function getMain()
    {
        return view("cv.all");
    }

    public function getSingle()
    {
        return view("cv.single");
    }

    public function getNew()
    {
        return view("cv.newCv");
    }


}