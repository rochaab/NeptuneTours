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
    <section id="landing-image" class="relative overflow-hidden" style="height: 600px;">
        <div class="absolute inset-0">
            <img src="{{ asset('images/landing1.png') }}" alt="Neptune Tours and Travels" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="absolute inset-0 flex items-center justify-center text-white p-4">
            <div class="max-w-full md:max-w-[800px] text-left md:ml-[-50%] md:mt-[26%]">
                <p class="text-xs leading-tight mb-1 font-['Raleway'] tracking-[0.3em]">ISLAND HOPPING</p>
                <h1 class="text-2xl font-bold leading-tight font-['Raleway']">PACKAGE TOUR A</h1>
                <div class="flex items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-sm font-['Raleway']">MINOLOC ISLAND, PALAWAN PHILIPPINES</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Section to Scroll To -->
    <section id="explore" class="py-10 bg-white">
        <div class="container mx-auto md:ml-[17%]">
            <h2 class="text-3xl font-semibold mb-8">Our Featured Tours</h2>
            <p class="text-lg mb-4">Explore the best tours we offer for an unforgettable experience!</p>
            
            <!-- Carousel Container -->
            <div class="relative w-full max-w-4xl">
                <!-- Carousel Track -->
                <div class="carousel-container overflow-hidden relative">
                    <div class="carousel-track flex transition-transform duration-300">
                        <div class="carousel-slide min-w-full">
                            <img src="{{ asset('images/landing1.png') }}" alt="Tour 1" class="w-full h-[400px] object-cover cursor-pointer">
                        </div>
                        <div class="carousel-slide min-w-full">
                            <img src="{{ asset('images/landing2.png') }}" alt="Tour 2" class="w-full h-[400px] object-cover cursor-pointer">
                        </div>
                        <div class="carousel-slide min-w-full">
                            <img src="{{ asset('images/landing1.png') }}" alt="Tour 3" class="w-full h-[400px] object-cover cursor-pointer">
                        </div>
                        <div class="carousel-slide min-w-full">
                            <img src="{{ asset('images/landing2.png') }}" alt="Tour 4" class="w-full h-[400px] object-cover cursor-pointer">
                        </div>
                        <div class="carousel-slide min-w-full">
                            <img src="{{ asset('images/landing1.png') }}" alt="Tour 5" class="w-full h-[400px] object-cover cursor-pointer">
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r-lg hover:bg-opacity-75" onclick="moveSlide(-1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l-lg hover:bg-opacity-75" onclick="moveSlide(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4">
                <img id="modalImage" src="" alt="Full size image" class="max-h-[90vh] max-w-full object-contain">
                <button class="absolute top-4 right-4 text-white text-xl" onclick="closeModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

            <script>
                let currentSlide = 0;
                const track = document.querySelector('.carousel-track');
                const slides = document.querySelectorAll('.carousel-slide');
                const slideCount = slides.length;

                // Touch handling variables
                let touchStartX = 0;
                let touchEndX = 0;

                function moveSlide(direction) {
                    currentSlide = (currentSlide + direction + slideCount) % slideCount;
                    updateSlidePosition();
                }

                function updateSlidePosition() {
                    track.style.transform = `translateX(-${currentSlide * 100}%)`;
                }

                // Touch event listeners
                track.addEventListener('touchstart', e => {
                    touchStartX = e.touches[0].clientX;
                });

                track.addEventListener('touchend', e => {
                    touchEndX = e.changedTouches[0].clientX;
                    handleSwipe();
                });

                function handleSwipe() {
                    const swipeDistance = touchStartX - touchEndX;
                    if (Math.abs(swipeDistance) > 50) { // Minimum swipe distance
                        if (swipeDistance > 0) {
                            moveSlide(1); // Swipe left
                        } else {
                            moveSlide(-1); // Swipe right
                        }
                    }
                }

                // Modal functionality
                const modal = document.getElementById('imageModal');
                const modalImage = document.getElementById('modalImage');

                slides.forEach(slide => {
                    const img = slide.querySelector('img');
                    img.addEventListener('click', () => {
                        modalImage.src = img.src;
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    });
                });

                function closeModal() {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }

                // Close modal when clicking outside the image
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        closeModal();
                    }
                });

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        closeModal();
                    } else if (e.key === 'ArrowLeft') {
                        moveSlide(-1);
                    } else if (e.key === 'ArrowRight') {
                        moveSlide(1);
                    }
                });
            </script>
        </div>
    </section>

</body>
</html>
