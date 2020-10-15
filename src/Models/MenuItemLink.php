<?php

namespace Oddvalue\BackpackMenus;

use Oddvalue\LinkBuilder\Link;

class MenuItemLink extends Link
{
    /**
     * Get the link href for $this->model
     *
     * @param array $options
     * @return string
     */
    public function href(array $options = []) : string
    {
        switch ($this->model->type) {
            case 'external_link':
                return $this->model->link;
                break;

            case 'internal_link':
                return is_null($this->model->link) ? '#' : url($this->model->link);
                break;

            default:
                if (! $this->model->menuable) {
                    return '';
                }
                return $this->model->menuable->getLinkGenerator()->href();
        }
    }

    /**
     * Get the link text for $this->model
     *
     * @param array $options
     * @return string
     */
    public function label(array $options = []) : string
    {
        return $this->model->name;
    }
}
