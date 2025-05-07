<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($places as $place)
        <x-card.place :place="$place" />
    @empty
        {{ __("Данный раздел редактируется!")  }}
    @endforelse
</div>
