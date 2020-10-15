<?php

namespace Oddvalue\BackpackMenus\Http\Controllers\Admin;

use Oddvalue\BackpackMenus\Models\MenuItem;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class MenuItemCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        $menuId = \Route::current()->parameter('menu_id');

        $this->crud->setModel(MenuItem::class);
        $this->crud->addClause('where', 'menu_id', $menuId);
        $this->crud->setRoute(config('backpack.base.route_prefix')."/menu/{$menuId}/item");
        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->crud->enableReorder('name', 3);

        $this->crud->operation('list', function () {
            $this->crud->addColumn([
                'name' => 'name',
                'label' => 'Name',
            ]);
            $this->crud->addColumn([
                'name' => 'slug',
                'label' => 'Slug',
            ]);
        });

        $this->crud->operation(['create', 'update'], function () {
            $this->crud->addField([
                'name' => 'name',
                'label' => 'Name',
            ]);
            $this->crud->addField([
                'name' => 'slug',
                'label' => 'Slug',
                'hint' => 'Leave blank to generate from the menu name',
            ]);
        });
    }
}
