<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Banner;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $admin = User::where('user_type', 'admin')->get()->count();
        $users = User::where('user_type', 'user')->get()->count();
        $ngo = User::where('user_type', 'ngo')->get()->count();
        $banners = Banner::count();
        $blogs = Blog::count();
        return view('admin.dashboard.index', compact('admin', 'users', 'banners', 'blogs'));
    }
}
