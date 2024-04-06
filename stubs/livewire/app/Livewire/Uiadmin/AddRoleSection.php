<?php

namespace App\Livewire\Uiadmin;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class AddRoleSection extends Component
{


    public $status = [];
    public $name  = '';
    public $guard;


    public function store()
    {
        $this->validate([
            'name' => ['required', 'min:4', 'unique:roles,name']
        ]);

        $role = new Role();
        $role->name = $this->name;
        if ($this->guard) {
            $role->guard_name = $this->guard;
        }
        if($role->save()){
            $this->status = [
                'type' => 'success' ,
                'message' => 'Role [ ' .$this->name .' ] saved '
            ];
            $this->dispatch('add-role');
        }

        $this->render();
    }
    public function render()
    {
        return view('livewire.uiadmin.add-role-section');
    }
}
