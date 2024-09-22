<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PowerStation extends Model
{
    use HasFactory, HasSEO, HasSlug;

    protected $fillable = [
        'title',
        'location',
        'image',
        'icons',
        'file1',
        'file2',
        'galleries',
        'slug',
    ];

    protected $casts = [
        'title' => 'array',
        'location' => 'array',
        'image' => 'array',
        'icons' => 'array',
        'file1' => 'array',
        'file2' => 'array',
        'galleries' => 'array',
        'slug' => 'array',
    ];

    public $translatable = [
        'title',
        'location',
        'image',
        'icons',
        'file1',
        'file2',
        'galleries',
        'slug',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
