@props(['setup'])
<div class="border border-zinc-800 rounded-lg p-4 flex gap-4 items-start hover:border-yellow-400">
    <div class="flex-1 h-full">
        <img src="{{ url('storage', $setup->image) }}" alt="Комплектующие" class="w-full h-full rounded object-cover">
    </div>
    <div class="space-y-4 flex-2">
        <h3 class="text-lg font-semibold">{{ $setup->name }}</h3>
        <div class="text-gray-400 text-sm">
            <ul class="grid gap-y-2">
                <li>{{ $setup->cpu }}</li>
                <li>{{ $setup->gpu }}</li>
                <li>{{ $setup->ram }}</li>
                <li>{{ $setup->storage }}</li>
                <li>{{ $setup->monitor }}</li>
                <li>{{ $setup->keyboard }}</li>
                <li>{{ $setup->mouse }}</li>
            </ul>
        </div>
    </div>
</div>
