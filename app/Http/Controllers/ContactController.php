<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contacts = Contact::all();
      return view('admin.contact.index', ['contacts' => $contacts]);
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
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'max:10'],
                'contnet' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'know' => ['required', 'in:3,2,1'],
                'address' => ['required', 'in:3,2,1'],
            ],
            [
                'name.required' => 'Cần nhập họ tên',
                'name.max' => 'Họ tên tối đa 255 ký tự',
                'phone.max' => 'Số điện thoại tối đa 10 ký tự',
                'phone.required' => 'Cần nhập số điện thoại',
                'content.required' => 'Nội dung tối đa 255 ký tự',
                'content.max' => 'Cần nhập nội dung',
                'email.required' => 'Cần nhập email',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email tối đa 255 ký tự!',
                'know.in' => 'Dữ liệu không hợp lệ',
                'know.required' => 'Mời chọn nội dung',
                'address.in' => 'Dữ liệu không hợp lệ',
                'address.required' => 'Mời chọn nội dung',
            ]
        );
        $data = $request->all();
        Contact::create($data);

        return redirect()->route('lien_he');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            abort(404);
        }
        return view('admin.contact.show', ['contact' => $contact]);
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
