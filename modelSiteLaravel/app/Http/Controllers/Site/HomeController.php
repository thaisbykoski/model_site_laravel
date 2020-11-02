<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
  public function index()
  {
    $courses = Course::paginate(3);
    return view('home',compact('courses'));
  }
}
