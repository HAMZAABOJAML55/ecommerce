<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller
{
  public  function index()
    {
        return view('index.video');
    }


    public function fetch()
    {
      $data=Video::all()->toArray();
      return view('video',compact('data'));
    }

    public function create()
    {
        return view('video.create');
    }

    public  function insert(Request $request)
    {
       $request->validate([
           'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
       ]);

       $file=$request->file('video');
       $file->move('upload',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();

       $insert=new Video();
       $insert->video = $file_name;
       $insert->save();

       return redirect('/fetch_video');
    }


    public function store(Request $request)
    {
        $request->validate([
            'video_link' => 'required|url',
        ]);


        $video = new Video();
        $video->video_link = $request->input('video_link');
        $video->save();

        return redirect()->route('video.create')->with('success', 'تمت إضافة الفيديو بنجاح.');
    }
 }
