<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model {
    use HasFactory;

    use HasSlug;

    protected $fillable = [
        'title',
        'description',
    ];

    public function getSlugOptions(): SlugOptions {

        return SlugOptions::create()->generateSlugsFrom( 'title' )->saveSlugsTo( 'slug' );
    }

    public function product(): BelongsToMany {

        return $this->belongsToMany( Product::class );
    }
}
