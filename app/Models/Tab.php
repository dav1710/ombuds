<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function news()
    {
        return $this->belongsToMany(News::class, 'tab_news');
    }
}
