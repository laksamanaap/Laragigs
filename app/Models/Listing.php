<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','title', 'logo' ,'company', 'location', 'website', 'email', 'description', 'tags'];
    // Mengirim semua field yang telah diisi pada variabel ke database
    // fillable merupakan sebuah 'variabel' mass asignment rule dimana kita bisa mendaftarkan atribut mana yang akan kita insert ke database

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) { // ?? = jika tidak false
            $query->where('tags', 'like', '%' . request('tag') . '%');
            // "like" = sql query like untuk mencari string yang cocok dengan pola tertentu 
            // "tags" = come from db
        }

        if($filters['search'] ?? false) { // ?? = jika tidak false
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%')
            ->orWhere('company', 'like', '%' . request('search') . '%');
            // "like" = sql query like untuk mencari string yang cocok dengan pola tertentu 
            // "tags" = come from db
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


}
