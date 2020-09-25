<div>
    <input wire:model="search" type="search" placeholder="Rechercher un utilisateur...">

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->username }}</li>
        @endforeach
    </ul>
</div>
