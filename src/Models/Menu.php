<?php

namespace Oddvalue\BackpackMenus\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Oddvalue\BackpackMenus\Models\MenuItem;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Menu extends Model
{
    use CrudTrait;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
