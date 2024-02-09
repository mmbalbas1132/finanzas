<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    // Especifica los campos que deseas sean asignables masivamente.
    protected $fillable = ['amount', 'category_id', 'date', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
