<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'publish_year',
        'description',
        'link',
        'type_id'
    ];
    public function type() {

        return $this -> belongsTo(type :: class);
    }

    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
}
