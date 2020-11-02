<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
  public function index()
  {
      $records = Course::all();
      return view('admin.courses.index',compact('records'));
  }

  public function add()
  {
    return view('admin.courses.add');
  }

  public function save(Request $req)
  {
    $data = $req->all();

    if(isset($data['published'])){
      $data['published'] = 'yes';
    } else {
      $data['published'] = 'no';
    }
    
    if($req->hasFile('image')){
      $image = $req->file('image');
      $num = rand(1111,9999);
      $dir = "img/courses/";
      $ex = $image->guessClientExtension();
      $imageName = "image_".$num.".".$ex;
      $image->move($dir,$imageName);
      $data['image'] = $dir."/".$imageName;
    }

    Course::create($data);

    return redirect()->route('admin.cursos');

  }

  public function edit($id)
  {
    $record = Course::find($id);
    return view('admin.courses.edit',compact('record'));
  }

  public function update(Request $req, $id)
  {
    $data = $req->all();

    if(isset($data['published'])){
      $data['published'] = 'yes';
    } else {
      $data['published'] = 'no';
    }
    
    if($req->hasFile('image')){
      $image = $req->file('image');
      $num = rand(1111,9999);
      $dir = "img/courses/";
      $ex = $image->guessClientExtension();
      $imageName = "image_".$num.".".$ex;
      $image->move($dir,$imageName);
      $data['image'] = $dir."/".$imageName;
    }

    Course::find($id)->update($data);

    return redirect()->route('admin.cursos');

  }

  public function delete($id)
  {
    Course::find($id)->delete();
    return redirect()->route('admin.cursos');
  }

  public function detail($id)
  {
    $course = Course::find($id);
    return view('admin.cursos.detail');
  }

}

