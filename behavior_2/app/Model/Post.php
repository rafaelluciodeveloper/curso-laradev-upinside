<?php

namespace LaraDev\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = "posts";
    protected $primaryKey = "id";

    protected $fillable = ['title','subtitle','description'];
    protected $guarded = [];


}