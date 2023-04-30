<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function chat_types(){
        return $this->hasMany(ChatType::class);
    }

    public function message(){
        return $this->belongsToMany(Message::class);
    }
}
