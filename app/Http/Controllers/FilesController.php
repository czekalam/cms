<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use App\Box;
class FilesController extends Controller 
{
    public function index() 
    {
        $css_file=file_get_contents("css/page.css");
        $js_file=file_get_contents("js/page.js");
        return view('files',compact('css_file','js_file'));
    }
    public function css() 
    {
        file_put_contents("css/page.css",request("css_file"));
        return redirect('/files');
    }
    public function js() 
    {
        file_put_contents("js/page.js",request("js_file"));
        return redirect('/files');
    }
    public function media() 
    {
        file_put_contents("img/".time().".jpg",file_get_contents(request("img_file")));
        return redirect('/files');
    }
}