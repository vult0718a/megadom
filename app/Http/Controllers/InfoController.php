<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$info = Info::first();
			if (!$info) {
				$info = [
					'phone' => '',
					'address' => '',
          'email' => '',
				];
			}
      return view('admin.info.index', ['info' => $info]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex()
    {
      $info = Info::first();
      return view('user.page.contact', ['info' => $info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$info = Info::first();
			$request->validate(
				[
						'phone' => ['required', 'numeric', 'digits:10'],
						'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
				],
				[
						'phone.digits' => 'Số điện thoại cần 10 ký tự',
						'phone.numeric' => 'Số điện thoại phải là số',
						'phone.required' => 'Cần nhập số điện thoại',
						'address.required' => 'Cần nhập địa chỉ',
						'address.max' => 'Địa chỉ tối đa 255 ký tự!',
            'email.required' => 'Cần nhập email',
						'email.max' => 'Email tối đa 255 ký tự!',
            'email.email' => 'Email không đúng định dạng!',
				]
			);
			$data = [
				'phone' => $request->get('phone'),
				'address' => $request->get('address'),
        'email' => $request->get('email')
			];
			
			if ($info) {
        $info->update($data);
			} else {
        $info = Info::create($data);
			}
      return view('admin.info.index')->with('info', $info);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
