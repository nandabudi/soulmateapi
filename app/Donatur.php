<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{

     protected $fillable = ['username','password','nama', 'notelp', 'latlong'];

}
?>
