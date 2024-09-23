<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasSEO, HasTranslations, HasTranslatableSlug;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'category_id',
        'image',
        'slug',
        'status',
        'subtitle',
        'galleries',
        'created_at',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'image' => 'array',
        'subtitle' => 'array',
        'galleries' => 'array'
    ];

    public $translatable = [
        'title',
        'subtitle',
        'content',
        'image',
        'galleries',
        'slug'
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

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }
}
