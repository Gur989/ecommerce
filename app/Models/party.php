<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class party extends Model
{
    use HasFactory;
    // table- which table do you want to apply
    protected $table="parties"; 


    // how to apply for the primary key
    protected $primaryKey="id";

    // write the something which filling is mendatory
    protected $fillable=array("fullname");
}
