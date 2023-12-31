<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals'; // Specify the table name if it's not the plural of the model name
    // ... other model settings ...
}
