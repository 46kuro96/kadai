<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

public function getGenderTextAttribute()
{
    switch ($this->gender) {
        case 1:
            return '男性';
        case 2:
            return '女性';
        case 3:
            return 'その他';
    }
}


    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
