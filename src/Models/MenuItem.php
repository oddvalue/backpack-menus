<?php

namespace Oddvalue\BackpackMenus\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class MenuItem extends Model
{
    use CrudTrait;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
