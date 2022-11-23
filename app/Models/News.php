<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tabs()
    {
        return $this->belongsToMany(Tab::class, 'tab_news');
    }

    public function pages()
    {
        return $this->belongsToMany(Page::class, 'page_news');
    }
}
