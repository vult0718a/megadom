<?php

namespace App\Http\Controllers;

use App\Category;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', ['testimonials' => $testimonials]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTestimonialForUser()
    {
        $testimonials = DB::table('testimonials')->get();
        return view('user.page.library', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'image.required' => 'Ảnh không được để trống!',
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );
        $testimonial = new Testimonial();
        if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

            // get file
            $file = $request->file('image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/testimonials/';
            //upload file
            $request->file('image')->move($path_upload,$filename);

            $testimonial->image = $path_upload.$filename;
        }
        $testimonial->save();
        return redirect(route('admin.testimonial'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        if (!$testimonial) {
            abort(404);
        }
        return view('admin.testimonial.show', ['testimonial' => $testimonial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );

        $testimonial = Testimonial::find($id);
        if (!$testimonial) {
            abort(404);
        }

        if($request->hasFile('new_image')) {   //kiem tra xem file imagecos được chọn hay ko
            // xoa file cu
            @unlink(public_path($testimonial->image));
            // get file moi
            $file = $request->file('new_image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/testimonials/';
            //upload file
            $request->file('new_image')->move($path_upload,$filename);

            $testimonial->image = $path_upload.$filename;
        }
        $testimonial->save();

        return redirect(route('admin.testimonial'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
        return redirect()->route('admin.testimonial');
    }
}
