@props(['place'])
<div class="border border-zinc-800 rounded-lg p-4 hover:border-yellow-400 transition">
    <h3 class="text-xl font-semibold mb-2">{{ $place->name }}</h3>
    <p class="text-md mb-4 text-gray-200">{{ $place->description }}</p>
    @if($place->specs->isNotEmpty())
        <ul class="text-gray-400 mb-4 text-sm">
            @foreach($place->specs as $item)
                <li>{{ $item->key }} {{ $item->value }}</li>
            @endforeach
        </ul>
    @endif
    <livewire:booking.add-button :placeId="$place->id" :key="'add-button-'.$place->id" />
</div>
