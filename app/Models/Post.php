<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostController; //追記

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    public $guarded = ['id']; //データベースに保存する際の、書き込み禁止のフィールド
}
