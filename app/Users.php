<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $hidden = [
        'id'
    ];

    public function getFullNameAttribute() {
//        return '{$this->last_name} {$this->name} {$this->second_name}';
        return $this->last_name.' '.$this->name.' '.$this->second_name;
    }
    public function getPhoneNumber() {
        $userPhone = '+7 '.substr($this->phone, 0,3).'-'.substr($this->phone, 3,3).'-'.substr($this->phone, 6,2).'-'.substr($this->phone, 8,2);
        return $userPhone;
    }
}
