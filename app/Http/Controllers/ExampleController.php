<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return view('public/index');
    }
    public function con(){
        return view('public/contact');
    }
    public function top_li(){
        return view('public/topics-listing');
    }
    public function users(){
        return view('admin/users');
    }
    public function cong(){
        return view('admin/add_category');
    }
    public function et(){
        return view('admin/edit_testimonial');
    }
    public function ates(){
        return view('admin/add_testimonial');
    }
    public function ato(){
        return view('admin/add_topic');
    }
    public function au(){
        return view('admin/add_user');
    }
    public function mess(){
        return view('admin/message_details');
    }
    public function at(){
        return view('admin/add_user');
    }
    public function login(){
        return view('admin/login');
    }
    public function reg(){
        return view('admin/register');
    }
    public function topdet(){
        return view('public/topics-detail');
    }
    public function messages(){
        return view('admin/messages');
    }
    public function tesp(){
        return view('public/testimonials');
    }
}
