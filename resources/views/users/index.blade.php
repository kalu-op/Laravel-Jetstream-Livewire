<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>

    <div class="container p-6">
        <div class="grid gap-6 grid-cols-2">
            <div class="bg-white p-6 shadow col-span-2 rounded">À demain</div>
            <div class="bg-white p-6 shadow row-span-2 rounded">
                <livewire:search-users />
            </div>
            <div class="bg-white p-6 shadow rounded">Aurevoir</div>
            <div class="bg-white p-6 shadow rounded">Salut</div>
        </div>
    </div>
</x-app-layout>
