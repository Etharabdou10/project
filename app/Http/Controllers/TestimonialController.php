<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin/testimonials', compact('testimonials'));
    }

    public function create()
    {
        $testimonials = Testimonial::get();
        return view('admin/add_testimonial', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'tes_name' => 'required|string',
            'content' => 'required|string|max:1000',
            'image' => 'required|mimes:png,jpg,jpeg',

        ]);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'admin/images');
        Testimonial::create($data);
        return redirect()->route('testimonials.index');
    }

    public function show()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        return view('public/testimonials', compact('testimonials'));
    }

    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin/edit_testimonial', compact('testimonial'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([

            'tes_name' => 'required|string',
            'content' => 'required|string|max:1000',
            'image' => 'sometimes|mimes:png,jpg,jpeg',
        ]);
        $data['published'] = isset($request->published);
        if ($request->hasFile('image')) {

            $data['image'] = $this->uploadFile($request->image, 'admin/images');
        }
        Testimonial::where('id', $id)->update($data);
        return redirect()->route('testimonials.index');
    }

    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->forceDelete($id);
        return redirect()->route('testimonials.index');
    }
}
