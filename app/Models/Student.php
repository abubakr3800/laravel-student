<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['class_id', 'section_id', 'name', 'email'];

    public function Class() {
        // assign forieng key id 'class_id' it's not a default.
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function section() {
        // not assign it 's default section_id
        return $this->belongsTo(Section::class);
    }

}
