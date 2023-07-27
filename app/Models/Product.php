<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Product extends Model {
    use HasFactory;

    use HasSlug;

//    protected $casts = [
//        'title' => 'boolean',
//    ];

    protected $fillable = [
        'title',
        'description',
        'price',
        'qty',
    ];

    public function getSlugOptions(): SlugOptions {

        return SlugOptions::create()->generateSlugsFrom( 'title' )->saveSlugsTo( 'slug' );
    }

    public function category(): BelongsToMany {
        return $this->belongsToMany( Category::class );
    }

//    public function getTitleAttribute( string $val ): string {
//
//        return '<h1>' . $val . '</h1>';
//    }
//
//    public function getFullProductNameAttribute() {
//
//        return $this->title . 'jdhksdsajkjds';
//    }

//    public function setTitleAttribute( $val ) {
//        $this->attributes['title'] = strtolower( $val );
//    }
}
