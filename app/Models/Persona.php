<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   protected $table='persona';
   protected $primaryKey='id';
   protected $fillable = [
       'surnames','names','address','dpi','mail','telephone'
   ];

   public $timestamps= false;
}
