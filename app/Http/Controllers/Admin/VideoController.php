<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Question;

class VideoController extends Controller
{

    public function index(): View
    {
//        dd('fff');
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }
    public function create(): View
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.video.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'video' => 'required|url',
        ]);


        $video = new Video();
        $video->category_id = $request->category_id;
        $video->video = $request->input('video');
        $video->save();

        return redirect()->route('admin.video.create')->with('success', 'تمت إضافة الفيديو بنجاح.');
    }

    public function show(Video $question): View
    {
        return view('admin.video.show', compact('question'));
    }

    public function edit(Question $question): View
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.questions.edit', compact('question', 'categories'));
    }

    public function update(Request $request, Video $question): RedirectResponse
    {
        $question->update($request->validated());

        return redirect()->route('admin.questions.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Video $question): RedirectResponse
    {
        $question->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

}
