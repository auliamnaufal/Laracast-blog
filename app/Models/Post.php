<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Preventing mass assignment vulnerabilities

    // Allowing all except "id"
    protected $guarded = [];

    protected $with = ['category', 'author'];

    // Protecting all except "title", "excerpt", "body"
    /*protected $fillable = [
        'title',
        'excerpt',
        'body',
    ];*/

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter($query, array $filters) {
        if (isset($filters['search'])) {
            $query->where(function ($query) {
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%');
            });
        }

        if (isset($filters['category'])) {
            $query->whereHas('category', function($query) {
                $query->where('slug', request('category'));
            });
        }

        if (isset($filters['author'])) {
            $query->whereHas('author', function($query) {
                $query->where('username', request('author'));
            });
        }
    }

}
