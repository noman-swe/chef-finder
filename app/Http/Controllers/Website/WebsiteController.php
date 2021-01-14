<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Chef;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();
        $chefs = Chef::orderBy('id', 'DESC')->take(6)->get();
        return view('website.home.index', compact('banners', 'chefs'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('website.blog.index', compact('blogs'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        return view('website.blog.show', compact('blog'));
    }

    public function chef()
    {
        $chefs = Chef::orderBy('id', 'DESC')->get();
        return view('website.chef.index', compact('chefs'));
    }

    public function chefSingle($id)
    {
        $chef = Chef::find($id);
        return view('website.chef.show', compact('chef'));
    }

    public function chefReg()
    {
        return view('website.chef.register');
    }

    public function denied()
    {
        return view('denied');
    }

   
}
