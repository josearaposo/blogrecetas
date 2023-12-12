<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receta extends Model
{
    use HasFactory;


	public function categoria(): BelongsTo
	{
    	return $this->belongsTo(Categoria::class);
	}

    public function comentarios(): HasMany
	{
    	return $this->hasMany(Comentario::class);
	}

    public function user(): BelongsTo
	{
    	return $this->belongsTo(User::class);
	}

}
