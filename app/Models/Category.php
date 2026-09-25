<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Status;

#[Fillable(['name', 'slug', 'status'])]
class Category extends Model
{
    protected function casts(): array
    {
        return [
            'status' => Status::class,
        ];
    }

    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }

}
