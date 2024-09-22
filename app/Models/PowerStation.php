<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class PowerStation extends Model
{
    use HasFactory, HasSEO, HasTranslations, HasTranslatableSlug;

    protected $fillable = [
        'title',
        'location',
        'image',
        'icons',
        'file1',
        'file1_name',
        'file2',
        'file2_name',
        'galleries',
        'slug',
    ];

    protected $casts = [
        'title' => 'array',
        'location' => 'array',
        'image' => 'array',
        'icons' => 'array',
        'file1' => 'array',
        'file1_name' => 'array',
        'file2' => 'array',
        'file2_name' => 'array',
        'galleries' => 'array',
        'slug' => 'array',
    ];

    public $translatable = [
        'title',
        'location',
        'image',
        'file1',
        'file1_name',
        'file2',
        'file2_name',
        'galleries',
        'slug',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->saveSlugsTo('slug');
    }



}
