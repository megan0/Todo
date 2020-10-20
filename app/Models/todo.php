<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    public $table='todo';
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'completed'
    ];
}
