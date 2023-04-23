<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class comment extends Model
{
    use HasFactory;
    protected $fillable=[
   'title','comment','user_id' ];
   
   public function user(){
    return $this->belongsTo(user::class);
    }
}
