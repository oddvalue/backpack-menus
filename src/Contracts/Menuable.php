<?php

namespace Oddvalue\BackpackMenus\Contracts;

interface Menuable
{
    /**
     * Get the model's menu generator
     *
     * @return Menuable
     */
    public function getMenuGenerator() : MenuGenerator;
}
