<section id="services" class="py-16 container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-10 text-yellow-400 text-center">Услуги</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @if($services->isNotEmpty())
            @foreach($services as $service)
                <div class="border border-zinc-800 rounded-lg p-4 hover:border-yellow-400 transition text-center">
                    <h3 class="text-lg font-semibold mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-400 text-sm">{{ $service->description }}</p>
                </div>
            @endforeach
        @endif
    </div>
</section>
