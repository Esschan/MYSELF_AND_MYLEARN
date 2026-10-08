<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myself</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-ribes">
    <section class="relative min-h-screen bg-black overflow-hidden">
        
        <!-- Container Background 16:9 yang meniru object-fit: cover -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <!-- Elemen ini akan selalu berasio 16:9 dan menutupi seluruh layar -->
            <div class="absolute top-1/2 left-1/2 w-[100vw] h-[56.25vw] min-h-[100vh] min-w-[177.77vh] -translate-x-1/2 -translate-y-1/2">
                <img src="{{ asset('image/space.jpg') }}" alt="Space" class="w-full h-full object-cover">
                
                <!-- Penutup Mata Statis -->
                <div class="absolute rounded-full" id="cover-left" style="top: 53.6%; left: 45.3%; width: 2.2%; aspect-ratio: 1; background-color: #232323; transform: translate(-50%, -50%);"></div>
                <div class="absolute rounded-full" id="cover-right" style="top: 53.6%; left: 54.3%; width: 2.2%; aspect-ratio: 1; background-color: #232323; transform: translate(-50%, -50%);"></div>
                
                <!-- Mata Putih yang Bergerak -->
                <div class="absolute rounded-full shadow-[0_0_5px_rgba(255,255,255,0.4)] transition-transform duration-75 ease-linear" id="pupil-left" style="top: 53.6%; left: 45.3%; width: 1.4%; aspect-ratio: 1; background-color: #ffffff; transform: translate(-50%, -50%);"></div>
                <div class="absolute rounded-full shadow-[0_0_5px_rgba(255,255,255,0.4)] transition-transform duration-75 ease-linear" id="pupil-right" style="top: 53.6%; left: 54.3%; width: 1.4%; aspect-ratio: 1; background-color: #ffffff; transform: translate(-50%, -50%);"></div>
            </div>
        </div>

        <!-- overlay buat gao transoaran -->
        <div class="absolute inset-0 bg-black opacity-40 z-10 pointer-events-none"></div>
        
        <!-- membungkus konten gunaa posisi di atas overlay -->  
        <div class="relative z-20 flex flex-col min-h-screen"> 
            
            <!-- nav mulai -->
            <nav class="flex justify-between items-center px-10 py-8 text-white">
                <div class="text-3xl font-ribes">ESS   </div>
                <div class="hidden md:flex space-x-8 text-xs uppercase tracking-widest">
                    <a href="#" class="hover:text-gray-500 transition">Home</a>
                    <a href="#" class="hover:text-gray-500 transition">About</a>
                    <a href="#" class="hover:text-gray-500 transition">Contact</a>
                </div>
            </nav>
            <!-- nav selesai -->

            <!-- teks tengah -->
            <div class="flex-grow flex items-center justify-center"> 
                <div class="text-center text-white max-w-2xl px-6">
                    <p class="text-lg md:text-xl leading-relaxed font-medium shadow-sm hover:text-lime-500 transition">
                      I AM WATCHING YOU<br>         
                    </p>             
                </div>
            </div> 
            <!-- teks tengah selesai --> 
            
        </div>
    </section>

    @include('work')

    <script>
        const pupilLeft = document.getElementById('pupil-left');
        const pupilRight = document.getElementById('pupil-right');
        const coverLeft = document.getElementById('cover-left');
        const coverRight = document.getElementById('cover-right');

        function updateEyePosition(eyeElement, coverElement, mouseX, mouseY) {
            const rect = coverElement.getBoundingClientRect();
            const eyeCenterX = rect.left + rect.width / 2;
            const eyeCenterY = rect.top + rect.height / 2;
            
            const dx = mouseX - eyeCenterX;
            const dy = mouseY - eyeCenterY;
            const angle = Math.atan2(dy, dx);
            
            const maxRadius = rect.width * 0.35;
            const distance = Math.min(Math.hypot(dx, dy), maxRadius);
            
            const moveX = Math.cos(angle) * distance;
            const moveY = Math.sin(angle) * distance;
            
            eyeElement.style.transform = `translate(calc(-50% + ${moveX}px), calc(-50% + ${moveY}px))`;
        }

        window.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            updateEyePosition(pupilLeft, coverLeft, mouseX, mouseY);
            updateEyePosition(pupilRight, coverRight, mouseX, mouseY);
        });

        window.addEventListener('touchmove', (e) => {
            if(e.touches.length > 0) {
                const touchX = e.touches[0].clientX;
                const touchY = e.touches[0].clientY;
                updateEyePosition(pupilLeft, coverLeft, touchX, touchY);
                updateEyePosition(pupilRight, coverRight, touchX, touchY);
            }
        });
    </script>
</body>
</html>