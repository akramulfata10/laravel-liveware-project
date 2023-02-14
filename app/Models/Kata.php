<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kata extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'text', 'user_id'];

    protected $dates = ['deleted_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}