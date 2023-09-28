<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DocumentController extends Controller
{
   
    public function index(): View
    {
        $documents = Document::all();

        return view('documents.index', compact('documents'));
    }

    public function create(): View
    {
        return view('documents.create');
    }

    public function store(DocumentRequest $request): RedirectResponse
    {
        Document::create($request->validated());

        return redirect()->route('documents.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Document $document): View
    {
        return view('documents.show', compact('document'));
    }

    public function edit(Document $document): View
    {
        return view('documents.edit', compact('document'));
    }

    public function update(DocumentRequest $request, Document $document): RedirectResponse
    {
        $document->update($request->validated());

        return redirect()->route('documents.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Document $document): RedirectResponse
    {
        $document->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
