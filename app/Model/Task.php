<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $fillable = ['description', 'users_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
