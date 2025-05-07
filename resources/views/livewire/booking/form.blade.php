<form wire:submit.prevent="save">

    <input type="text" placeholder="Имя"
           wire:model="form.customer_name"
           class="w-full mb-3 px-4 py-2 rounded bg-zinc-800 border border-zinc-700 text-white">
    @error('form.customer_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

    <input type="tel" placeholder="Телефон"
           wire:model="form.customer_phone"
           class="w-full mb-3 px-4 py-2 rounded bg-zinc-800 border border-zinc-700 text-white">
    @error('form.customer_phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

    <div class="flex space-x-2 mb-3">
        <input type="time"
               step="3600"
               wire:model="form.start_time"
               class="w-1/2 px-4 py-2 rounded bg-zinc-800 border border-zinc-700 text-white">
        <input type="time"
               step="3600"
               wire:model="form.end_time"
               class="w-1/2 px-4 py-2 rounded bg-zinc-800 border border-zinc-700 text-white">
    </div>
    @error('form.start_time') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    @error('form.end_time') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    <div class="mb-3 text-yellow-400 font-medium text-sm">
        Цена за 1 час: {{ $hourlyRate }} ₽
    </div>
    <div class="mb-3 text-yellow-400 font-medium text-sm">
        Итого: {{ $price }} ₽
    </div>

    <button type="submit"
            class="w-full py-2 bg-yellow-400 text-black rounded hover:bg-yellow-300 transition">
        Отправить
    </button>

    <button type="button" @click="showModal = false"
            class="w-full mt-2 py-2 border border-zinc-700 text-sm rounded text-white">
        Отмена
    </button>
</form>
