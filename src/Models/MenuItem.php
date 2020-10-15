<?php

namespace Oddvalue\BackpackMenus\Models;

use Illuminate\Database\Eloquent\Model;
use Oddvalue\LinkBuilder\Contracts\Linkable;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Oddvalue\BackpackMenus\Contracts\Menuable;
use Oddvalue\LinkBuilder\Traits\LinkableTrait;
use Oddvalue\BackpackMenus\Traits\MenuGeneratorTrait;

class MenuItem extends Model implements Linkable, Menuable
{
    use CrudTrait;
    use LinkableTrait;
    use MenuGeneratorTrait;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['menuable'];

    /**
     * Get the fully qualified class name of the model's link generator
     *
     * @return string
     */
    protected function getLinkGeneratorClass()
    {
        return MenuItemLink::class;
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function link()
    {
        if ($this->relationLoaded) {
            # code...
        }
    }

    public function menuable()
    {
        return $this->morphTo();
    }
}
