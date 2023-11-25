<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function description($length = 30) {
        if ($this->description) {
            $words = explode(' ', $this->description);
            $excerpt = implode(' ', array_slice($words, 0, $length));
    
            if (count($words) > $length) {
                $excerpt .= '...';
            }
    
            return $excerpt;
        }
    
        return null;
    }
}