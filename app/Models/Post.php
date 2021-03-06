<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='post';
    protected $primaryKey='id';
   protected $fillable=[
       'title',
       'body',
       ];
protected $dates=['deleted_at'];
}
