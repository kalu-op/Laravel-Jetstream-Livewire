<div class="min-h-full flex flex-col justify-between">
    <div class="mb-6">
        <label for="search-users" class="block pb-2 font-bold">Rechercher un utilisateur :</label>
        <input
            id="search-users"
            class="px-6 py-4 w-full border border-grey-100 rounded"
            wire:model="search"
            type="text"
            placeholder="Saisir le nom d'utilisateur..."
        />
    </div>

    <ul class="grid gap-4 grid-cols-3">
        @foreach($users as $user)
            <li class="px-6 py-4 w-full shadow rounded text-center text-lg">
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
