<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Asumiendo que 'name' es un campo en tu tabla de categorías.
    // Agrega más campos al array $fillable según sea necesario.
    protected $fillable = ['name'];

    public function expenses()
    {
        return $this->hasMany(Income::class);
    }

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
