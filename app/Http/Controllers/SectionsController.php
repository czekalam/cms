<?php
namespace App\Http\Controllers;
use App\Section;
use App\Page;
use App\Box;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function create() 
    {
        request()->validate([
            'section_name' => 'required'
        ]);

        $box = Box::where('id', request('box_id'))->firstOrFail();
        $page = Page::where('id', request('page_id'))->firstOrFail();

        $html_class=request('html_class');
        $html_id=request('html_id');
        $section_name=request('section_name');
        $box_id=request('box_id');
        $page_name=$page->name;
        $page_id=$page->id;
        $box_form=$box->box_form;

        return view('sections.create', compact('html_class', 'html_id', 'section_name','box_id','box_form','page_id','page_name'));
    }
    public function store($slug)
    {
        Section::create([
            'name' => request('section_name'),
            'box_id' => request('box_id'),
            'page_id' => request('page_id'),
            'html_class' => request('html_class'),
            'html_id' => request('html_id'),
            'box_content' => request('box_content')
        ]);
        return redirect('/');
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
