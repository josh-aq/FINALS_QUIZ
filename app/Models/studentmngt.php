<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmngt extends Model
{
    use HasFactory;
    protected $table = 'stud_mngt_tb';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'address',
        'dob',
    ];
}
