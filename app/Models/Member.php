<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = ['first_name', 'last_name', 'email', 'profession', 'company', 'linkedin_url', 'status'];
    public $timestamps = false; // Disable timestamps
}
