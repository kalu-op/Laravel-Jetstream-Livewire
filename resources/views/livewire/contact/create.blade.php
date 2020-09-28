<div class="flex flex-col justify-around items-left bg-white rounded shadow p-10 my-4">
    {{-- Prénom --}}
    <div>
        <label class="block pb-2" for="firstname">Prénom :</label>
        <input wire:model="firstname" type="text" id="firstname" class="px-4 py-2 border rounded w-full" />
    </div>
    {{-- Nom --}}
    <div>
        <label class="block pb-2" for="lastname">Nom :</label>
        <input wire:model="lastname" type="text" id="lastname" class="px-4 py-2 border rounded w-full"/>
    </div>
    {{-- Tel --}}
    <div>
        <label class="block pb-2" for="phone">Tel :</label>
        <input wire:model="phone" type="text" id="phone" class="px-4 py-2 border rounded w-full"/>
    </div>

    {{-- CTA : Enregistrer --}}
    <div>
        <button class="btn bg-blue rounded text-white px-4 py-2">Enregistrer</button>
    </div>

</div>
