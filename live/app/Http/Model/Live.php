<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    protected $table='persons';
    protected $primaryKey='persons_id';
    public $timestamps=false;
    protected $guarded = [];
}
