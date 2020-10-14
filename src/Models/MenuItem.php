<?php

namespace Oddvalue\BackpackMenus\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
