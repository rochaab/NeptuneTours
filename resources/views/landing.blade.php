<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&family=Poppins&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Anek+Tamil:wght@100..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <title>Landing Page</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body class="bg-white font-['Raleway']">
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
            <div class="max-w-full md:max-w-[900px] text-center md:text-left md:ml-[-30%]">
                <p class="text-s font-bold leading-tight mb-2 font-Anek tracking-[0.1em]">EXPERIENCE</p>
                <h1 id="typing-animation" class="text-4xl md:text-7xl font-bold font-Eczar leading-tight mb-6"></h1>
                <script>
                    const text = "Neptune Tours and Travels: Your Paradise Gateway to El Nido";
                    let index = 0;
                    const typingElement = document.getElementById('typing-animation');

                    function type() {
                        if (index < text.length) {
                            typingElement.textContent += text.charAt(index);
                            index++;
                            setTimeout(type, 30); // Adjust typing speed here
                        }
                    }

                    type();
                </script>
                <a href="#explore" class="inline-block bg-white text-[#080c24] px-6 py-2 rounded-lg text-lg md:text-xl font-semibold font-Anek hover:bg-blue-100 transition duration-300">Explore Tours</a>
            </div>
        </div>
    </section>

    <!-- Tours Section -->
    <div id="explore" class="bg-[#faf7f2] font-Inter fade-left">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="flex items-start">
                <div data-aos="fade-left" data-aos-duration="1000">
                    <p class="text-s font-black leading-tight mb-2 font-Poppins tracking-[0.1em] text-[#080c24]">TRAVEL AND TOURS</p>
                    <h2 class="text-3xl sm:text-5xl font-Eczar font-extrabold text-[#040823] mb-8 text-left">
                        Choose from four unique tours and plan your journey using our interactive map. Adventure awaits!
                    </h2>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Tour A -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourA" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/TourA/tour-a-7commandos.jpg') }}" alt="Tour A" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour A</h3>
                        <p class="text-l font-Anek mt-4">Experience the stunning beauty of El Nido's most iconic destinations.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition-all duration-300 hover:bg-[#040823] hover:border-[#040823] font-Anek hover:scale-105 hover:shadow-lg">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour B -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourB" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/pinagbuyutan-island.webp') }}" alt="Tour B" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour B</h3>
                        <p class="text-l font-Anek mt-4">Discover hidden caves and pristine beaches on this exciting island-hopping adventure.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition-all duration-300 hover:bg-[#040823] hover:border-[#040823] font-Anek hover:scale-105 hover:shadow-lg">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour C -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourC" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/hidden-beach.webp') }}" alt="Tour C" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour C</h3>
                        <p class="text-l font-Anek mt-4">Explore hidden beaches and stunning rock formations on this unforgettable journey.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition-all duration-300 hover:bg-[#040823] hover:border-[#040823] font-Anek hover:scale-105 hover:shadow-lg">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour D -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourD" 
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/cadlao-lagoon.jpg') }}" alt="Tour D" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour D</h3>
                        <p class="text-l font-Anek mt-4">Experience the tranquil beauty of secluded beaches and pristine lagoons.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition-all duration-300 hover:bg-[#040823] hover:border-[#040823] font-Anek hover:scale-105 hover:shadow-lg">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>
            </div>


            <!-- Tour Details and Map Section (Hidden Initially) -->
            <div id="tour-details" class="hidden flex flex-col lg:flex-row h-[calc(100vh-350px)]">
                <!-- Back Button -->
                <button id="back-button" class="">
                </button>

                <!-- Tour Details -->
                <div class="lg:w-1/3 h-[550px]">
                    <div id="tour-details-content" class="relative overflow-visible h-full touch-pan-x">
                        <!-- Tour details will be dynamically inserted here -->
                    </div>
                </div>

                <!-- Map Viewer -->
                <div class="map-container relative mb-16 ml-8 lg:mb-0 lg:w-2/3 h-[550px] flex justify-center animate-slide-in-bottom font-Anek">
                    <div id="map" class="w-full h-full rounded-lg border border-gray-300 shadow-md"></div>

                    <!-- Floating Info Box -->
                    <div id="map-info" class="hidden">
                        <div class="relative">
                             <button id="prev-btn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">‹</button>
                            <div id="map-info-image-container" class="overflow-hidden max-h-[350px]">
                                <!-- Images will be inserted here dynamically -->
                            </div>
                            <button id="next-btn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">›</button>
                        </div>
                        <h4 id="map-info-title" class="text-lg font-semibold text-blue-800 font-Eczar"></h4>
                        <p id="map-info-description" class="text-gray-600 mt-2 font-Anek"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="w-full h-auto bg-[#10194a] flex flex-col items-center justify-center text-center p-10 relative font-Anek">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 pt-[30px] font-Eczar" data-aos="fade-down">
        Choose Your Perfect Adventure!
    </h1>
    <p class="text-white mb-6 max-w-2xl" data-aos="fade-down" data-aos-delay="200">
        Explore El Nido with our four amazing tours! From island hopping to hidden lagoons, pristine beaches, and stunning sunset cruises—your perfect adventure awaits. Get in touch today!
    </p>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6 w-full max-w-6xl" data-aos="fade-up">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-6 w-full max-w-6xl" data-aos="fade-up">
            {{ session('error') }}
        </div>
    @endif

    <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="space-y-8 w-full max-w-6xl p-2">
        @csrf
        <!-- Full Name -->
        <div class="text-left" data-aos="fade-left">
            <input type="text" id="name" name="name" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Full Name*" required>
            <p id="nameError" class="text-red-500 text-sm hidden mt-2"></p>
        </div>
        
        <!-- Phone & Email -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
            <div data-aos="fade-right">
                <input type="tel" id="phone" name="phone" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Phone Number*" required>
                <p id="phoneError" class="text-red-500 text-sm hidden mt-2"></p>
            </div>
            <div data-aos="fade-left">
                <input type="email" id="email" name="email" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Email Address*" required>
                <p id="emailError" class="text-red-500 text-sm hidden mt-2"></p>
            </div>
        </div>

        <!-- Message -->
        <div class="text-left" data-aos="fade-left">
            <textarea id="message" name="message" rows="4" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Enter your message..." required></textarea>
            <p id="messageError" class="text-red-500 text-sm hidden mt-2"></p>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="w-[200px] h-[50px] bg-white text-[#10194a] px-6 py-3 rounded-md font-medium hover:bg-gray-200 transition duration-300 shadow-lg transform hover:scale-105" data-aos="zoom-in">
                Send Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
            </button>
        </div>
    </form>
</div>

<!-- Footer Section -->
<div class="w-full bg-[#080c24] text-white py-10 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Branding -->
        <div data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold font-Eczar mr-20">Neptune Tours and Travels</h2>
        </div>
        
        <!-- Call Us -->
        <div data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-lg font-bold font-Eczar">CALL US</h3>
            <p>+63 917 158 3266</p>
        </div>
        
        <!-- Email Us -->
        <div data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-lg font-bold font-Eczar">EMAIL US</h3>
            <p><a href="mailto:neptunetravel.tours@gmail.com" class="text-gray-400 hover:text-white">neptunetravel.tours@gmail.com</a></p>
        </div>
        
        <!-- Social Media -->
        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-lg font-bold font-Eczar">SOCIAL MEDIAS</h3>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-125">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-125">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="w-6 h-6">
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-125">
                    <img src="https://www.citypng.com/public/uploads/preview/tik-tok-logo-icon-701751694793267gxetcvvp3v.png" alt="TikTok" class="w-6 h-6">
                </a>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    var baseAssetUrl = "{{ asset('') }}";
    </script>
    <script>
    window.App = {
        baseUrl: "{{ url('/') }}"
    };
</script>
</body>
</html>