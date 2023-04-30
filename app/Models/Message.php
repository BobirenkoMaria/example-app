<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function users()
    {
      return $this->hasMany(User::class);
    }
    public function chats(){
      return $this->hasMany(Chat::class);
    }

    public function chat(){
      return $this->belongsToMany(Chat::class);
  }
}
