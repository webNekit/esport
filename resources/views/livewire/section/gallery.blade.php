<section id="gallery" class="py-16 container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-10 text-yellow-400 text-center">Галерея</h2>
    <div id="lightgallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        @if($images->isNotEmpty())
            @foreach($images as $image)
                <a href="{{ url('storage', $image->image) }}" class="block">
                    <img src="{{ url('storage', $image->image) }}" alt="Галерея" class="rounded border border-zinc-800 h-[340px] hover:border-yellow-400 object-cover">
                </a>
            @endforeach
        @endif
    </div>
</section>
