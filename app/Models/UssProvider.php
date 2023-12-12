<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UssProvider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'email',
        'cnpj',
        'drones',
        'user_id',
    ];

    protected $searchableFields = ['*'];

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }
}
