<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExamRequest;

class FormController extends Controller
{
    public function checkValidation(FormExamRequest $request)
    {
        $success = 'Data authenticate success!';
        return view('welcome',compact('success'));
    }
}
