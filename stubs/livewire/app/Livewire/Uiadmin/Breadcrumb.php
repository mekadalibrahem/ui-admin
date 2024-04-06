<?php

namespace App\Livewire\Uiadmin;

use Livewire\Component;

class Breadcrumb extends Component
{
    protected const LINK_LIST = [
        [
            'name' => 'Setting',
            'links' => [],
        ],
        [
            'name' => 'overview',
            'links' => []
        ],
        [
            'name' => 'Authorization',
            'links' => [
                [
                    'name' => 'Permissions',
                    'route' => 'admin.permissions',
                ],
                [
                    'name' => 'Roles',
                    'route' => 'admin.roles',
                ],
                [
                    'name' => 'Users',
                    'route' => 'admin.users',
                ],
            ],
        ],
        [
            'name' => 'Permissions',
            'links' => [],
        ],
        [
            'name' => 'Users',
            'links' => [],
        ],
        [
            'name' => 'Roles',
            'links' => [],
        ],
    ];

    public $path  = [];

    public $filtered_items = [];

    public function mount()
    {
        $this->filterMenuItemsByArgument();
    }
    public function filterMenuItemsByArgument()
    {
        $filtered_items = [];

        foreach (Breadcrumb::LINK_LIST as $item) {


            if (in_array(strtolower($item['name']), array_map('strtolower', $this->path))) {

                $filtered_items[] = $item;
            }
        }
        return $filtered_items;
    }
    public function render()
    {

        $this->filtered_items = $this->filterMenuItemsByArgument();

        return view('livewire.uiadmin.breadcrumb');
    }
}
