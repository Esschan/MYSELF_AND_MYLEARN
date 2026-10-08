<!-- SECTION WORK -->
<section id="work" class="relative min-h-screen bg-cover bg-center text-white py-24 px-6 md:px-20 font-sans" style="background-image: url('{{ asset('image/space2.jpg') }}')">
    <!-- Overlay gelap agak diterangkan -->
    <div class="absolute inset-0 bg-black opacity-30"></div>

    <div class="relative z-10 max-w-4xl mx-auto">
        <h2 class="text-4xl md:text-6xl font-ribes mb-12 text-center">MY WORK</h2>

        <div class="space-y-6">
            
            <!-- Box 1: Tailwind -->
            <details class="group bg-neutral-900 rounded-lg overflow-hidden border border-neutral-800 cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-xl md:text-2xl p-6 hover:text-cyan-600 transition list-none">
                    <span>CSS PROJECTS </span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                    </span>
                </summary>
                <div class="text-neutral-400 group-open:animate-fadeIn p-6 pt-0 border-t border-neutral-800 mt-2">
                    <ul class="space-y-4">
                        <li>
                            <a href="/card-project" class="block hover:text-white transition">
                                <h3 class="text-lg text-white font-semibold">1. Card Profile</h3>
                                <p class="text-sm">Membuat Kartu profil yang bisa di flip menggunakan HTML dan CSS.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:text-white transition">
                                <h3 class="text-lg text-white font-semibold">2. Dashboard Admin</h3>
                                <p class="text-sm">Tampilan antarmuka admin panel yang responsif untuk manajemen data.</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>

            <!-- Box 2: Laravel -->
            <details class="group bg-neutral-900 rounded-lg overflow-hidden border border-neutral-800 cursor-pointer">
                <summary class="flex justify-between items-center font-bold text-xl md:text-2xl p-6 hover:text-red-400 transition list-none">
                    <span>LARAVEL PROJECTS</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                    </span>
                </summary>
                <div class="text-neutral-400 group-open:animate-fadeIn p-6 pt-0 border-t border-neutral-800 mt-2">
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="block hover:text-white transition">
                                <h3 class="text-lg text-white font-semibold">1. E-Commerce App</h3>
                                <p class="text-sm">coming soon.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:text-white transition">
                                <h3 class="text-lg text-white font-semibold">2. API Inventory System</h3>
                                <p class="text-sm">coming soon.</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </details>

        </div>
    </div>
</section>
