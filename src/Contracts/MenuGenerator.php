<?php

namespace Oddvalue\BackpackMenus\Contracts;

use Illuminate\Support\Collection;

interface MenuGenerator
{
    /**
     * Get this menu's submenu
     *
     * @return Collection
     */
    public function getMenu() : Collection;

    /**
     * Does this menu have a submenu?
     *
     * @return bool
     */
    public function hasMenu() : bool;
}
