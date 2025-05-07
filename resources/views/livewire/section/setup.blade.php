<section id="equipment" class="py-16 container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-10 text-yellow-400 text-center">Комплектующие</h2>
    <div class="flex justify-center space-x-4 mb-6">
        <button wire:click="$set('categoryId', null)"
                class="px-4 py-2 border rounded text-sm
                       {{ is_null($categoryId) ? 'border-yellow-400 text-yellow-400' : 'border-zinc-700 hover:border-yellow-400' }}">Все
        </button>
        @foreach($zones as $zone)
            <button wire:click="$set('categoryId', {{ $zone->id }})" class="px-4 py-2 border rounded text-sm
                           {{ $categoryId === $zone->id ? 'border-yellow-400 text-yellow-400' : 'border-zinc-700 hover:border-yellow-400' }}">{{ $zone->name }}</button>
        @endforeach
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @if($setups->isNotEmpty())
            @foreach($setups as $setup)
                <x-card.setup :setup="$setup"/>
            @endforeach
        @endif
    </div>
</section>
