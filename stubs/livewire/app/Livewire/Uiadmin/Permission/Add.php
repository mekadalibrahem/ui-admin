<?php

namespace App\Livewire\Uiadmin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Add extends Component
{

    public  $status = [];
    public $name = '';
    public $guard = '';


    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:4', 'unique:permissions,name']
        ]);

        $permission = new Permission();
        $permission->name = $this->name;
        if ($this->guard) {
            $permission->guard_name = $this->guard;
        }
        if ($permission->save()) {
            $this->status = [
                'type' => 'success',
                'message' => 'permission [ ' . $this->name . ' ] saved '
            ];
            $this->dispatch('add_permission');
        }

        $this->render();
    }
    public function render()
    {
        return view('livewire.uiadmin.permission.add');
    }
}
