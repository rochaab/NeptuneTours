<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing Page</title>
    @vite('resources/css/app.css') <!-- Assuming you're using Vite for asset bundling -->
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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

    <!-- Javascript Slides -->
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

    <!-- Section -->
    <section id="explore" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 mb-6">Our Featured Tours</h2>
            <p class="text-lg text-gray-600 mb-12">
                Explore the best tours we offer for an unforgettable experience!
            </p>

            <!-- Map Viewer -->
            <div id="map" class="h-[60vh] w-full sm:w-3/4 lg:w-2/3 mx-auto rounded-lg border border-gray-300 shadow-md"></div>

            <!-- Button for Starting Point -->
            <button 
                id="start-point-btn" 
                class="bg-blue-700 hover:bg-blue-800 text-white font-medium py-2 px-6 rounded-lg shadow-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400 mt-6"
                onclick="setStartingPoint()">
                Start Point: El Nido Port📍
            </button>

            <!-- Card View Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-2 mt-12">
                <!-- Tour A -->
                <div class="group relative hover:scale-105 transition-transform duration-300 bg-white shadow-xl rounded-2xl p-6 transform hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-blue-800 mt-4 mb-4">Tour A</h3>
                    <div class="text-gray-600">
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.17370" 
                           data-lng="119.37784">
                            7 Commandos Beach
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.14579" 
                           data-lng="119.31259">
                            Small Lagoon
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.15443" 
                           data-lng="119.32095">
                            Big Lagoon
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.14622" 
                           data-lng="119.31328">
                            Secret Lagoon
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.138566" 
                           data-lng="119.318315">
                            Schimizu Island
                        </p>
                    </div>
                </div>

                <!-- Tour B -->
                <div class="group relative hover:scale-105 transition-transform duration-300 bg-white shadow-xl rounded-2xl p-6 transform hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-blue-800 mt-4 mb-4">Tour B</h3>
                    <div class="text-gray-600">
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.12877" 
                           data-lng="119.33565">
                            Entalula Island
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.12252" 
                           data-lng="119.39172">
                            Pinagbuyutan Island
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.07664" 
                           data-lng="119.38458">
                            Cathedral Cave
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.09395" 
                           data-lng="119.33859">
                            Snake Island
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.08486" 
                           data-lng="119.35261">
                            Cudugnon Cave
                        </p>
                    </div>
                </div>

                <!-- Tour C -->
                <div class="group relative hover:scale-105 transition-transform duration-300 bg-white shadow-xl rounded-2xl p-6 transform hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-blue-800 mt-4 mb-4">Tour C</h3>
                    <div class="text-gray-600">
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.20313" 
                           data-lng="119.26999">
                            Star Beach
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.196214" 
                           data-lng="119.338308">
                            Helicopter Island
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.20289" 
                           data-lng="119.27529">
                            Matinloc Shrine
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.19093" 
                           data-lng="119.28220">
                            Hidden Beach
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.17831" 
                           data-lng="119.28132">
                            Secret Beach
                        </p>
                    </div>
                </div>

                <!-- Tour D -->
                <div class="group relative hover:scale-105 transition-transform duration-300 bg-white shadow-xl rounded-2xl p-6 transform hover:shadow-2xl">
                    <h3 class="text-2xl font-semibold text-blue-800 mt-4 mb-4">Tour D</h3>
                    <div class="text-gray-600">
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.21470" 
                           data-lng="119.34549">
                            Cadlao Lagoon
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.20835"
                           data-lng="119.35740">
                            Pasandigan Cove
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.20590" 
                           data-lng="119.36389">
                            Nat Nat Beach
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.20926" 
                           data-lng="119.37907">
                            Bukal Island
                        </p>
                        <p class="sub-tour hover:text-blue-500 hover:underline cursor-pointer" 
                           data-lat="11.19830" 
                           data-lng="119.37792">
                            Paradise Beach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Contact Us</h2>
            <p class="text-lg text-white mb-12">
                We'd love to hear from you! Please fill out the form below to get in touch.
            </p>

            <!-- Display Success Message -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display Error Message -->
            @if (session('error'))
                <div class="bg-red-500 text-white p-4 rounded mb-6">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="max-w-2xl mx-auto bg-gray-700 p-8 rounded-lg shadow-lg">
                @csrf  <!-- CSRF Token for security -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-left text-white mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-left text-white mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </div>
                <div class="mt-6">
                    <label for="message" class="block text-left text-white mb-2">
                        Your Message <span class="text-red-500">*</span>
                    </label>
                    <textarea id="message" name="message" rows="6" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>
                <button type="submit" class="mt-6 bg-blue-800 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-600 transition duration-300">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Include Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize the Leaflet map
        const map = L.map('map').setView([11.181602, 119.386894], 12); // Set center and zoom level

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Function to set the starting point
        function setStartingPoint() {
            map.setView([11.181602, 119.386894], 12); // Reset to El Nido Port
        }

        // Add markers for sub-tours
        const subTours = document.querySelectorAll('.sub-tour');
        subTours.forEach(subTour => {
            subTour.addEventListener('click', function () {
                const lat = parseFloat(this.getAttribute('data-lat'));
                const lng = parseFloat(this.getAttribute('data-lng'));

                // Set the map view to the selected location
                map.setView([lat, lng], 14);

                // Add a marker for the selected location
                L.marker([lat, lng]).addTo(map)
                    .bindPopup(this.innerText)
                    .openPopup();
            });
        });

        // Initialize the starting point
        setStartingPoint();
    </script>
</body>
</html>