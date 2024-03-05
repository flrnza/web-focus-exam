<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function displayForm(){
        $form_data = $this->getAllInput();
        return view('welcome',['form_data'=>$form_data]);
    }

    public function getAllInput(){
        $form = new UserInfo;
        $form = $form->getAllInput();

        return $form;
    }

    public function displayUpdateForm($id){
        $form_data = new UserInfo;
        $form_data = $form_data->getInputById($id);

        return view('update_form',['form_data'=>$form_data[0]]);
    }

    public function updateForm(Request $request){
        $form = new UserInfo;
        $form = $form->updateUserInfo($request->all());

        $file_id = $request->id;

        $file = $request->file;
        $file_name = $file->getClientOriginalName();
        Storage::disk('public')->putFileAs('files/'.$file_id.'/', $file, $file_name);

        return redirect('/');
    }

    public function submitForm(Request $request){
        $form = new UserInfo;
        $form = $form->insertUserInfo($request->all());

        $file_id = $form->id;

        $file = $request->file;
        $file_name = $file->getClientOriginalName();
        Storage::disk('public')->putFileAs('files/'.$file_id.'/', $file, $file_name);

        return redirect('/');
    }

    public function deleteForm(Request $request){
        $form = new UserInfo;
        $form = $form->deleteForm($request->id);

        return redirect('/');
    }
}
