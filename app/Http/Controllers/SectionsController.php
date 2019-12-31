<?php
namespace App\Http\Controllers;
use App\Section;
use App\Page;
use App\Box;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function store($slug)
    {
        $box = Box::where('name', request('box_type'))->firstOrFail();
        // request()->validate([
        //     'name' => 'required',
        //     'box-type' => 'required'
        // ]);
        // Section::create([
        //     'name' => request('name'),
        //     'box_id' => request('id'),
        //     'page_id' => request('page_id'),
        //     'box_content' => "asdadsad"
        // ]);
        echo dd(request());
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
