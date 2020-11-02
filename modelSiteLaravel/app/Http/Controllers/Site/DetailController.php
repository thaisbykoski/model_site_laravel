<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class DetailController extends Controller
{
    public function index($id)
  {
    $courses = Course::find($id);
    return view('site.detail',compact('courses'));
  }
}
