<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'last_name', 'first_name', 'phone', 'address', 'city'
    ];

    public function scopeFilter($query, string $search)
    {
        $query->likeFirstName(search: $search)
            ->orWhere->likeLastName(search: $search)
            ->orWhere->likePhone(search: $search)
            ->orWhere->likeAddress(search: $search)
            ->orWhere->likeCity(search: $search);
    }

    public function scopeLikeFirstName($query, string $search): void
    {
        $query->where('first_name', 'like', '%' . $search .'%');
    }
    public function scopeLikeLastName($query, string $search): void
    {
        $query->where('last_name', 'like', '%' . $search .'%');
    }
    public function scopeLikePhone($query, string $search): void
    {
        $query->where('phone', 'like', '%' . $search .'%');
    }
    public function scopeLikeAddress($query, string $search): void
    {
        $query->where('address', 'like', '%' . $search .'%');
    }
    public function scopeLikeCity($query, string $search): void
    {
        $query->where('city', 'like', '%' . $search .'%');
    }
}
