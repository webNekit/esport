<x-app :title="$title">
    <main>
        <section class="relative h-[80vh] overflow-hidden border-b border-zinc-800">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/90 z-0"></div>
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
                <h2 class="text-5xl md:text-9xl font-extrabold text-yellow-400 animate-pulse drop-shadow-lg">GameZone</h2>
                <p class="mt-4 text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto">Погрузись в мир высоких технологий и киберспорта</p>
                <div class="mt-8 flex space-x-4">
                    <a href="#booking" class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded hover:bg-yellow-300 transition">Забронировать место</a>
                    <a href="#services" class="px-6 py-3 border border-yellow-400 text-yellow-400 font-semibold rounded hover:bg-yellow-400 hover:text-black transition">Узнать больше</a>
                </div>
            </div>
        </section>
        <section class="py-16 container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-10 text-yellow-400 text-center">Почему выбирают нас</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center border border-zinc-800 rounded-lg p-6 hover:border-yellow-400 transition">
                    <h3 class="text-xl font-semibold mb-2">💻 Мощные ПК</h3>
                    <p class="text-gray-400">Топовые комплектующие для любых игр на максималках</p>
                </div>
                <div class="text-center border border-zinc-800 rounded-lg p-6 hover:border-yellow-400 transition">
                    <h3 class="text-xl font-semibold mb-2">🎮 Уют и комфорт</h3>
                    <p class="text-gray-400">Эргономичные кресла, тишина и освещение</p>
                </div>
                <div class="text-center border border-zinc-800 rounded-lg p-6 hover:border-yellow-400 transition">
                    <h3 class="text-xl font-semibold mb-2">🕹️ Популярные игры</h3>
                    <p class="text-gray-400">CS2, Valorant, Dota2, Fortnite, PUBG и многое другое</p>
                </div>
            </div>
        </section>
        <section id="booking" class="py-16 container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-8 text-yellow-400 text-center">Забронировать место</h2>
            <livewire:place.collection />
        </section>

        <livewire:section.service />
        <livewire:section.setup />
        <section id="contacts" class="py-16 container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-10 text-yellow-400 text-center">Контакты</h2>
            <div class="max-w-xl mx-auto space-y-4 text-center">
                <p><strong>Адрес:</strong> г. Москва, ул. Геймерская, 42</p>
                <p><strong>График работы:</strong> Круглосуточно</p>
                <p><strong>Телефон:</strong> +7 (999) 123-45-67</p>
                <p><strong>Email:</strong> info@gamezone.ru</p>
            </div>
        </section>
    </main>
</x-app>
