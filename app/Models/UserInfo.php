<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = "user_info";

    public function insertUserInfo($request){
        $file_name = $request['file']->getClientOriginalName();

        $data = new UserInfo;
        $data->name = $request['name'];
        $data->age = $request['age'];
        $data->file = $file_name;
        $data->save();

        return $data;
    }

    public function updateUserInfo($request){
        $file_name = $request['file']->getClientOriginalName();

        $data = UserInfo::where('id', $request['id'])
                        ->update(['name' => $request['name'],
                                    'age' => $request['age'],
                                    'file' => $file_name]);
        return 'success';
    }

    public function deleteForm($id){
        $data = UserInfo::where('id', $id)
                             ->delete();
        return 'success';
    }

    public function getInputById($id){
        $data =  UserInfo::where('id',$id)
                          ->get();

        return $data;
    }

    public function getAllInput(){
        $data =  UserInfo::get();

        return $data;
    }
}
