<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // public function scopeFilter($query, array $filters) {
    //     if($filters['tag'] ?? false) {
    //         $query->where('tags', 'like', '%' . request('tag') . '%');
    //     }
    //     if($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //         ->orWhere('description', 'like', '%' . request('search') . '%')
    //         ->orWhere('tags', 'like', '%' . request('search') . '%');;
    //     }
    //     if($filters['sort'] ?? false) {
    //          match ($query->where('sort')) {
    //             'date_asc' => Listing::orderBy('date', 'asc')->paginate(6)->withQueryString(),
    //             'date_desc' => Listing::orderBy('date', 'desc')->paginate(6)->withQueryString(),
    //             'title_asc' => Listing::orderBy('title', 'asc')->paginate(6)->withQueryString(),
    //             'title_desc' => Listing::orderBy('title', 'desc')->paginate(6)->withQueryString(),
    //             default => Listing::paginate(6)->withQueryString()
    //         };
    //     }
    // }
    //Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
