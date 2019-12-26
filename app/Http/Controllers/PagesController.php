<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;

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
            $page = Page::where('title', $slug)->firstOrFail();
        }
        else {
            $page = Page::first();
        }
        $pages = Page::all();
        return view('pages.show', compact('page','pages'));
    }
    public function create() 
    {
        return view('pages.create');
    }
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }
    public function update(Page $page) 
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $page->update(request(['title','description']));
        return redirect('/pages');
    } 
    public function store() 
    {   
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
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