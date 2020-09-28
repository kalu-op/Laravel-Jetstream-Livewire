<div class="grid grid-cols-2">

    <div class="p-10">
        {{-- Créer / Modifier un contact --}}
        @if ($update_mode)
            @include('livewire.contact.update')
        @else
            @include('livewire.contact.create')
        @endif
    </div>

    {{-- Liste des contacts --}}
    <table>
        <thead>
            <tr>
                <th class="text-left p-2">{{ __('Nom') }}</th>
                <th class="text-left p-2">{{ __('Prénom') }}</th>
                <th class="text-left p-2">{{ __('Tel.') }}</th>
                <th class="text-left p-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td class="text-left p-2">{{ $contact->lastname }}</td>
                    <td class="text-left p-2">{{ $contact->firstname }}</td>
                    <td class="text-left p-2">{{ $contact->phone }}</td>
                    <td class="text-left p-2">
                        <button
                            wire:click="edit({{ $contact->id }})"
                            class="btn bg-yellow-400 px-4 py-2 rounded text-white">
                            Modifier
                        </button>

                        <button
                            wire:click="destroy({{ $contact->id }})"
                            class="btn bg-red-400 px-4 py-2 rounded text-white">
                            Supprimer
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
