<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_lang'];

    public function language()
    {
        return $this->belongsTo(Language::class, 'id_lang');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'id_cour');
    }
}