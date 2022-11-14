<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all();
        return view('admin.user.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', 'confirmed', 'min:8'],
                'status' => ['required', 'in:2,1'],
                'is_super_admin' => ['required', 'in:2,1']
            ],
            [
                'name.required' => 'Cần nhập họ tên admin!',
                'name.max' => 'Họ tên tối đa 255 ký tự!',
                'email.required' => 'Cần nhập email admin!',
                'email.email' => 'Email không đúng định dạng!',
                'email.max' => 'Email tối đa 255 ký tự!',
                'email.unique' => 'Email đã tồn tại!',
                'password.required' => 'Cần nhập mật khẩu!',
                'password.min' => 'Mật khẩu tối thiểu là 8 ký tự!',
                'password.confirmed' => 'Mật khẩu nhập lại không chính xác!',
                'status.in' => 'Dữ liệu trạng thái không hợp lệ!',
                'status.required' => 'Trạng thái không được trống!',
                'is_super_admin.in' => 'Dữ liệu quyền không hợp lệ!',
                'is_super_admin.required' => 'Quyền không được trống!',
            ]
        );

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return redirect(route('admin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = User::find($id);
        if (!$admin) {
            abort(404);
        }
        return view('admin.user.update', ['admin' => $admin]);
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
        $admin = User::find($id);
        if (!$admin) {
            abort(404);
        }
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                'status' => ['required', 'in:2,1'],
                'is_super_admin' => ['required', 'in:2,1']
            ],
            [
                'name.required' => 'Cần nhập họ tên admin!',
                'name.max' => 'Họ tên tối đa 255 ký tự!',
                'email.required' => 'Cần nhập email admin!',
                'email.email' => 'Email không đúng định dạng!',
                'email.max' => 'Email tối đa 255 ký tự!',
                'email.unique' => 'Email đã tồn tại!',
                'status.in' => 'Dữ liệu trạng thái không hợp lệ!',
                'status.required' => 'Trạng thái không được trống!',
                'is_super_admin.in' => 'Dữ liệu quyền không hợp lệ!',
                'is_super_admin.required' => 'Quyền không được trống!',
            ]
        );

        $data = $request->all();
        $admin->update($data);

        return redirect(route('admin'));
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

    public function changeEmail(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            ],
            [
                'email.required' => 'Cần nhập email admin!',
                'email.email' => 'Email không đúng định dạng!',
                'email.max' => 'Email tối đa 255 ký tự!',
            ]
        );

        Auth::user()->update($request->all());
        return redirect(route('admin'));
    }

    public function changePassword(Request $request)
    {
        $request->validate(
            [
                'password' => ['required', 'confirmed', 'min:8'],
            ],
            [
                'password.required' => 'Cần nhập mật khẩu!',
                'password.min' => 'Mật khẩu tối thiểu là 8 ký tự!',
                'password.confirmed' => 'Mật khẩu nhập lại không chính xác!',
            ]
        );
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        Auth::user()->update($data);
        return redirect(route('admin'));
    }
}
