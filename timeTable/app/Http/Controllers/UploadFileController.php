<?php

namespace KaravayPro\Http\Controllers;

use Illuminate\Http\Request;
use KaravayPro\Http\Requests\UploadFileRequest;


class UploadFileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function uploadForm(){
        return view('upload_form');
    }

    public function uploadSubmit(UploadFileRequest $request){
        dd($request->all());
        return 'uploadSubmit';
    }


}
