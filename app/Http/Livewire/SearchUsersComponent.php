<?php

use App\Models\User;
use Livewire\Component;

class SearchUsersComponent extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-users-component', [
            'users' => User::where('username', $this->search)->get(),
        ]);
    }
}
