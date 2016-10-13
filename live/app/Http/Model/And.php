<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class And extends Model
{
    protected $table='and';
    protected $primaryKey='and_id';
    public $timestamps=false;
    protected $guarded = [];
}
