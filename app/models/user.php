<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Επιτρεπόμενα πεδία για μαζική εισαγωγή (Mass Assignment)
    protected $fillable = ['name', 'email'];
}
?>