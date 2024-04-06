<?php

namespace App\Livewire\Uiadmin;

use Livewire\Component;

class Sidebar extends Component
{
    protected const LINK_LIST = [
        [
            'name' => 'Setting',
            'links' => [],
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

    public $path  = [] ;

    public $filtered_items = [];

    public function mount(){
        $this->filterMenuItemsByArgument();
    }
    public function filterMenuItemsByArgument()
    {
        $this->filtered_items = [];

        foreach ($this->link_list as $item) {


            if (in_array(strtolower( $item['name']), array_map('strtolower', $this->path))) {

                $this->filtered_items[] = $item;
            }
        }


    }

    public function render()
    {
        return view('livewire.uiadmin.sidebar');
    }
}
