<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
     
    protected $casts = [
        'published_at' => 'datetime',
    ];
    
    public function scopePublished($query){
        $query->where('published_at','<=', Carbon::now());
    }
    public function scopeFeatured($query){
        $query->where('featured',true);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function description(){
        return Str::limit(strip_tags($this->body),150);
    }
    public function getReadingTime(){
        $words = str_word_count($this->body);
        return ceil($words / 200);
    }
}
