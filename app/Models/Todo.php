<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todolist';

    protected $guarded = [];
    protected $fillable = [];


    public function store($data){
        $formdata['todolist']=$data;
        $result = self::create($formdata);
        return $result;
    }
}
