<div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center z-50 hidden">
    <div class="bg-zinc-900 p-6 rounded-lg border border-zinc-700 w-full max-w-md">
        <div class="flex justify-between items-start mb-4">
            <h3 class="text-2xl font-bold text-yellow-400">Бронирование места</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <livewire:booking.form />
    </div>
</div>
