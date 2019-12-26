<?php
namespace App\Http\Controllers;
use App\Section;
use App\Page;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function store(Page $page)
    {
        echo 'dupa';
        dd(request());
        // request()->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);
        // Section::create([
        //     'title' => request('title'),
        //     'description' => request('description'),
        //     'page_id' => $page->id
        // ]);
        return redirect('/pages/');
    }
    public function show(Section $section)
    {
        return view('sections.show', compact('section'));
    }
    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }
    public function update(Request $request, Page $page, Section $section)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $section->update($data);
        return redirect('/pages/'. $page->id);
    }
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect('/pages');
    }
}
