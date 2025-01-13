<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css') <!-- Assuming you're using Vite for asset bundling -->
</head>
<body class="bg-gray-100 font-['Raleway']">


    @include('partials.header')
    <!-- Landing Section -->
    <section id="landing-carousel" class="relative h-screen bg-cover bg-center overflow-hidden">
        <div class="carousel-slides">
            <div class="slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000" style="background-image: url('{{ asset('images/landing1.png') }}');"></div>
            <div class="slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('{{ asset('images/landing2.png') }}');"></div>
            <div class="slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 opacity-0" style="background-image: url('{{ asset('images/landing1.png') }}');"></div>
        </div>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center text-white p-4">
            <div class="max-w-full md:max-w-[800px] text-left md:ml-[-20%]">
                <p class="text-xs font-bold leading-tight mb-2 font-['Raleway'] tracking-[0.4em]">WELCOME TO</p>
                <h1 class="text-4xl md:text-7xl font-bold leading-tight mb-4 font-['Raleway']">Neptune Tours and Travels</h1>
                <a href="#explore" class="inline-block bg-white text-blue-900 px-6 py-2 rounded-lg text-lg md:text-xl font-semibold hover:bg-blue-100 transition duration-300">Explore Tours</a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;
            
            function nextSlide() {
                // Fade out current slide smoothly
                slides[currentSlide].style.transition = 'opacity 1s ease-in-out';
                slides[currentSlide].classList.add('opacity-0');
                
                // Update to next slide
                currentSlide = (currentSlide + 1) % slides.length;
                
                // Prepare next slide transition and show it
                slides[currentSlide].style.transition = 'opacity 1s ease-in-out';
                slides[currentSlide].classList.remove('opacity-0');
            }

            setInterval(nextSlide, 5000); // Change slide every 5 seconds
        });
    </script>

    <!-- Optional Section to Scroll To -->
    <section id="explore" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-8">Our Featured Tours</h2>
            <p class="text-lg mb-4">Explore the best tours we offer for an unforgettable experience!</p>
            <!-- Add tour items or additional content here -->
        </div>
    </section>


</body>
</html>
