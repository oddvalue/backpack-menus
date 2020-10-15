<?php

namespace Oddvalue\BackpackMenus\Traits;

use Oddvalue\BackpackMenus\Models\Menu;
use Oddvalue\BackpackMenus\Contracts\MenuGenerator;

trait MenuGeneratorTrait
{
    /**
     * Get the model's menu generator
     *
     * @return MenuGenerator
     */
    public function getMenuGenerator() : MenuGenerator
    {
        return new Menu($this);
    }
}
