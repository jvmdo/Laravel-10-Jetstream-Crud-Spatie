<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\Searchable;
use App\Enums\StatusEnum;

class Status extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'status',
    ];

    protected $searchableFields = ['*'];

    public function ussProvider()
    {
        return $this->belongsTo(UssProvider::class);
    }
}
