<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameZone — Компьютерный клуб</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap');

        body {
            font-family: 'Orbitron', sans-serif;
            background: linear-gradient(to right,  #000 0%,#000 100%);
            background-image: url('https://www.transparenttextures.com/patterns/asfalt-light.png');
            background-repeat: repeat;
        }
    </style>
    @livewireStyles
</head>
<body class="bg-black text-white" x-data="{ showModal: false, selectedPC: '', showTopButton: false }" @scroll.window="showTopButton = window.scrollY > window.innerHeight * 0.8">
<!-- Прелоадер -->
<div x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 1200)" x-show="loading"
     class="fixed inset-0 z-[999] flex items-center justify-center bg-black">
    <div class="w-1/2 h-2 bg-zinc-700 rounded-full overflow-hidden">
        <div class="bg-yellow-400 h-full animate-pulse w-1/2"></div>
    </div>
</div>
@include('layout.partials.header')
{{ $slot }}
@include('layout.partials.modal')
<button x-show="showTopButton" @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-6 right-6 bg-yellow-400 text-black px-4 py-2 rounded-full shadow-lg hover:bg-yellow-300 transition z-50">
    Наверх
</button>
@include('layout.partials.footer')
<script>
    // Открытие модального окна при клике на кнопку
    document.querySelectorAll('.open-modal-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.getElementById('bookingModal').classList.remove('hidden');
        });
    });

    // Закрытие модального окна
    function closeModal() {
        document.getElementById('bookingModal').classList.add('hidden');
    }
</script>
@livewireScripts
</body>
</html>
