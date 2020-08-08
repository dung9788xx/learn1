<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['name'];

    public function room_user()
    {
        return $this->hasMany(Room_User_Table::class,'room_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class,'room_id');
    }
}
