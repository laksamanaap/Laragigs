<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) { // ?? = jika tidak false
            $query->where('tags', 'like', '%' . request('tag') . '%');
            // "like" = sql query like untuk mencari string yang cocok dengan pola tertentu 
            // "tags" = come from db
        }

        if($filters['search'] ?? false) { // ?? = jika tidak false
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
            // "like" = sql query like untuk mencari string yang cocok dengan pola tertentu 
            // "tags" = come from db
        }
    }
}
