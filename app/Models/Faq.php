<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
   
    // De tabel die geassocieerd is met het model.
    protected $table = 'faqs';

    // De attributen die kunnen worden toegewezen.
    protected $fillable = ['question', 'answer', 'category_id'];

    // De attributen die moeten worden verborgen voor arrays.
    protected $hidden = [];

    // De attributen die moeten worden gegoten naar native types.
    protected $casts = [];

    // Een Faq kan tot een categorie behoren
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
