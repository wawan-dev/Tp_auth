<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = "message";

    protected $fillable = [
        'text',
        'user_id',
    ];

    public function message()
    {
        return $this->hasOne(USer ::class);
    }


}
