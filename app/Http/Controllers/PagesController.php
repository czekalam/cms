<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use App\Box;
class PagesController extends Controller 
{
    public function index() 
    {
        $pages = Page::all();
        return view('pages.index',compact('pages'));
    }
    public function show($slug="") 
    {
        if($slug)
        {
            $page = Page::where('name', $slug)->firstOrFail();
        }
        else {
            $page = Page::first();
        }

        $page_sections =  $page->sections;
 
        $boxes = array();
        foreach ($page_sections as $page_section) {
            $boxes[] = $page_section->box;
        }
        return view('pages.show', compact('page','boxes'));
    }
    public function create() 
    {
        return view('pages.create');
    }
    public function edit($slug)
    {
        $page = Page::where('name', $slug)->firstOrFail();
        $boxes = Box::all();
        return view('pages.edit', compact('page','boxes'));
    }
    public function update(Page $page) 
    {
        request()->validate([
            'name' => 'required'
        ]);
        $page->update(request(['name']));
        return redirect('/pages');
    } 
    public function store() 
    {
        $data = request()->validate([
            'name' => 'required',
            'html_class' => 'nullable',
            'html_id' => 'nullable'
        ]);
        Page::create($data);
        return redirect('/pages');
    }
    public function destroy(Page $page) 
    {
        $page->delete();
        return redirect('/pages');
    }
}