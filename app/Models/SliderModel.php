<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table ='slider'; //định nghĩa tên bảng
    //protected $primaryKey = 'id';
    // public $incrementing = true; // id tự tăng
    public $timestamps = false;
    const CREATED_AT = 'created';// lưu thời gian tạo
    const UPDATED_AT = 'modifited_by';// luu cột updtae

    public function listItems($params, $options){
        $result = null;

        if($options['task'] == "admin-list-items"){
            $result = self:: select('id', 'name', 'description', 'status', 'link', 'thumb', 'created', 'created_by', 'modified' , 'modified_by') 
           // ->where('id' , '>', 3)
            -> get();
        }
        return $result;
    }
}

