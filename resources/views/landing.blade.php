<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Font Preconnects (Optimized) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Combined Google Fonts Request -->
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400..800&family=Poppins&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Anek+Tamil:wght@100..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing Page</title>
    @vite('resources/css/app.css') <!-- Assuming you're using Vite for asset bundling -->
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
            <div class="max-w-full md:max-w-[900px] text-left md:ml-[-30%]">
                <p class="text-s font-bold leading-tight mb-2 font-Anek tracking-[0.1em]">EXPERIENCE</p>
                <h1 id="typing-animation" class="md:text-7xl font-bold font-Eczar leading-tight mb-6"></h1>
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
    <section id="explore" class="bg-[#faf7f2] font-Inter">
        <div class="container mx-auto">
            <div class="flex items-start">
                <div class="animate-slide-in-left">
                    <p class="text-s font-black leading-tight mb-2 font-Poppins tracking-[0.1em] text-[#080c24]">TRAVEL AND TOURS</p>
                    <h2 class="text-3xl sm:text-5xl font-Eczar font-extrabold text-[#040823] mb-8 text-left w-2/3">Choose from four unique tours and plan your journey using our interactive map. Adventure awaits!</h2>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Tour A -->
                <div class="tour-item group relative overflow-hidden h-[400px] cursor-pointer" data-tour="tourA">
                    <img src="{{ asset('images/seven-commandos.jpg') }}" alt="Tour A" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-4">
                        <h3 class="text-2xl font-Eczar font-extrabold">El Nido Palawan Tour A</h3>
                        <p class="text-sm font-Anek">Experience the stunning beauty of El Nido's most iconic destinations.</p>
                    </div>
                </div>

                <!-- Tour B -->
                <div class="tour-item group relative overflow-hidden h-[400px] cursor-pointer" data-tour="tourB">
                    <img src="{{ asset('images/pinagbuyutan-island.webp') }}" alt="Tour B" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-4">
                        <h3 class="text-2xl font-Eczar font-extrabold">El Nido Palawan Tour B</h3>
                        <p class="text-sm font-Anek">Discover hidden caves and pristine beaches on this exciting island-hopping adventure.</p>
                    </div>
                </div>

                <!-- Tour C -->
                <div class="tour-item group relative overflow-hidden h-[400px] cursor-pointer" data-tour="tourC">
                    <img src="{{ asset('images/hidden-beach.webp') }}" alt="Tour C" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-4">
                        <h3 class="text-2xl font-Eczar font-extrabold">El Nido Palawan Tour C</h3>
                        <p class="text-sm font-Anek">Explore hidden beaches and stunning rock formations on this unforgettable journey.</p>
                    </div>
                </div>

                <!-- Tour D -->
                <div class="tour-item group relative overflow-hidden h-[400px] cursor-pointer" data-tour="tourD">
                    <img src="{{ asset('images/cadlao-lagoon.jpg') }}" alt="Tour D" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white p-4">
                        <h3 class="text-2xl font-Eczar font-extrabold">El Nido Palawan Tour D</h3>
                        <p class="text-sm font-Anek">Experience the tranquil beauty of secluded beaches and pristine lagoons.</p>
                    </div>
                </div>
            </div>

            <!-- Tour Details and Map Section (Hidden Initially) -->
            <div id="tour-details" class="hidden flex flex-col lg:flex-row gap-8 h-[calc(100vh-350px)]">
                <!-- Back Button -->
                <button id="back-button" class="absolute top-4 left-4 bg-white rounded-lg shadow-md p-2 z-10 flex items-center gap-2 hover:bg-gray-100 transition-colors">
                    <span>&#8592;</span> Back to Tours
                </button>

                <!-- Tour Details -->
                <div class="lg:w-1/3 h-[550px]">
                    <div id="tour-details-content" class="relative overflow-visible h-full touch-pan-x">
                        <!-- Tour details will be dynamically inserted here -->
                    </div>
                </div>

                <!-- Map Viewer -->
                <div class="map-container relative mb-16 lg:mb-0 lg:w-2/3 h-[550px] flex justify-center animate-slide-in-bottom">
                    <div id="map" class="w-full h-full rounded-lg border border-gray-300 shadow-md"></div>
                    <!-- Floating Info Box -->
                    <div id="map-info" class="absolute top-4 left-4 bg-white rounded-lg shadow-md p-4 w-60 hidden">
                        <h4 id="map-info-title" class="text-lg font-semibold text-blue-800">Tour Information</h4>
                        <p id="map-info-description" class="text-gray-600 mt-2">Select a location to view details.</p>
                        <img id="map-info-image" src="" alt="Tour Image" class="rounded-lg mt-4 hidden">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Initialize the map
        let map;
        let markers = [];

        function initializeMap(lat, lng) {
            if (map) {
                map.remove(); // Remove the existing map if it exists
            }
            map = L.map('map').setView([lat, lng], 13); // Set initial view
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        }

        // JavaScript to handle tour item clicks
        document.querySelectorAll('.tour-item').forEach(item => {
            item.addEventListener('click', function() {
                const tour = this.getAttribute('data-tour');
                showTourDetails(tour);
            });
        });

        // Function to show tour details and map
        function showTourDetails(tour) {
            // Hide the tours grid
            document.querySelector('.grid').classList.add('hidden');

            // Show the tour details and map section
            document.getElementById('tour-details').classList.remove('hidden');

            // Show the back button
            document.getElementById('back-button').classList.remove('hidden');

            // Fetch and display tour details
            const tourDetailsContent = document.getElementById('tour-details-content');
            const tourData = getTourData(tour); // Fetch tour data dynamically

            tourDetailsContent.innerHTML = `
                <div class="flex flex-col h-full overflow-hidden">
                    <div class="h-1/2 relative overflow-hidden">
                        <button id="close-tour-image" class="absolute top-2 left-2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-colors z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                        <img src="{{ asset('${tourData.image}') }}" alt="${tour}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="h-1/2 flex mt-6 flex-col group-hover:translate-x-8 transition-transform duration-300">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-2 mb-4">${tourData.title}</h3>
                        <p class="text-[#040823] text-s mb-6 font-Anek">${tourData.description}</p>
                        <div class="flex-grow text-[#040823] font-Anek">
                            ${tourData.subTours.map(subTour => `
                                <p class="sub-tour cursor-pointer hover:bg-gray-800 hover:text-white transition text-gray-700 flex items-center justify-between"
                                    data-lat="${subTour.lat}"
                                    data-lng="${subTour.lng}"
                                    data-image="${subTour.image}"
                                    data-description="${subTour.description}"
                                    data-tour="${tour}">
                                    ${subTour.name} <span class="ml-2">➔</span>
                                </p>
                            `).join('')}
                        </div>
                    </div>
                </div>
            `;

            // Initialize the map with the first sub-tour's coordinates
            initializeMap(tourData.subTours[0].lat, tourData.subTours[0].lng);

            // Add markers for all sub-tours
            markers.forEach(marker => marker.remove()); // Clear existing markers
            markers = [];
            tourData.subTours.forEach(subTour => {
                const marker = L.marker([subTour.lat, subTour.lng]).addTo(map)
                    .bindPopup(`<b>${subTour.name}</b><br>${subTour.description}`);
                markers.push(marker);
            });

            // Add event listeners to sub-tours
            document.querySelectorAll('.sub-tour').forEach(subTour => {
                subTour.addEventListener('click', function() {
                    const lat = parseFloat(this.getAttribute('data-lat'));
                    const lng = parseFloat(this.getAttribute('data-lng'));
                    const image = this.getAttribute('data-image');
                    const description = this.getAttribute('data-description');
                    const name = this.textContent.trim();

                    // Update the map view to the selected sub-tour's coordinates
                    map.setView([lat, lng], 13);

                    // Show the floating info box
                    const mapInfo = document.getElementById('map-info');
                    mapInfo.classList.remove('hidden');
                    document.getElementById('map-info-title').textContent = name;
                    document.getElementById('map-info-description').textContent = description;
                    document.getElementById('map-info-image').src = image;
                    document.getElementById('map-info-image').classList.remove('hidden');
                });
            });

            // Close tour image button
            document.getElementById('close-tour-image').addEventListener('click', () => {
                document.getElementById('tour-details').classList.add('hidden');
                document.querySelector('.grid').classList.remove('hidden');
            });
        }

        // Function to fetch tour data (replace with your actual data)
        function getTourData(tour) {
            const tours = {
                tourA: {
                    title: "El Nido Palawan Tour A",
                    description: "Experience the stunning beauty of El Nido's most iconic destinations.",
                    image: "images/seven-commandos.jpg",
                    subTours: [
                        { name: "7 Commandos Beach", lat: 11.17370, lng: 119.37784, image: "images/seven-commandos.jpg", description: "A beautiful white sand beach with crystal clear waters." },
                        { name: "Small Lagoon", lat: 11.14579, lng: 119.31259, image: "images/small-lagoon.webp", description: "A serene lagoon perfect for kayaking." },
                        { name: "Big Lagoon", lat: 11.15443, lng: 119.32095, image: "images/big-lagoon.webp", description: "A grand lagoon surrounded by towering cliffs." },
                        { name: "Secret Lagoon", lat: 11.14622, lng: 119.31328, image: "images/secret-lagoon.jpg", description: "A hidden gem accessed through a small entrance." },
                        { name: "Shimizu Island", lat: 11.138566, lng: 119.318315, image: "images/shimizu-island.jpg", description: "A vibrant snorkeling spot with rich marine life." }
                    ]
                },
                tourB: {
                    title: "El Nido Palawan Tour B",
                    description: "Discover hidden caves and pristine beaches on this exciting island-hopping adventure.",
                    image: "images/pinagbuyutan-island.webp",
                    subTours: [
                        { name: "Entalula Island", lat: 11.12877, lng: 119.33565, image: "images/entalula-island.jpg", description: "A scenic view of the island." },
                        { name: "Pinagbuyutan Island", lat: 11.12252, lng: 119.39172, image: "images/pinagbuyutan-island.webp", description: "Known for its crystal clear waters and sandy beaches." },
                        { name: "Cathedral Cave", lat: 11.07664, lng: 119.38458, image: "images/cathedral-cave.jpg", description: "Famous for its grand cave formations." },
                        { name: "Snake Island", lat: 11.09395, lng: 119.33859, image: "images/snake-island.jpg", description: "A beautiful snake-shaped island." },
                        { name: "Cudugnon Cave", lat: 11.08486, lng: 119.35261, image: "images/cudugnon-cave.jpg", description: "A quiet beach perfect for relaxation." }
                    ]
                },
                tourC: {
                    title: "El Nido Palawan Tour C",
                    description: "Explore hidden beaches and stunning rock formations on this unforgettable journey.",
                    image: "images/hidden-beach.webp",
                    subTours: [
                        { name: "Star Beach", lat: 11.20313, lng: 119.26999, image: "images/star-beach.jpg", description: "A secluded beach with beautiful views." },
                        { name: "Helicopter Island", lat: 11.196214, lng: 119.338308, image: "images/helicopter-island.jpg", description: "Famous for its rock formations." },
                        { name: "Matinloc Shrine", lat: 11.20289, lng: 119.27529, image: "images/matinloc-shrine.jpg", description: "A historic site with a picturesque view." },
                        { name: "Hidden Beach", lat: 11.19093, lng: 119.28220, image: "images/hidden-beach.webp", description: "A quiet and peaceful beach." },
                        { name: "Secret Beach", lat: 11.17831, lng: 119.28132, image: "images/secret-beach.jpg", description: "A serene and isolated beach." }
                    ]
                },
                tourD: {
                    title: "El Nido Palawan Tour D",
                    description: "Experience the tranquil beauty of secluded beaches and pristine lagoons.",
                    image: "images/cadlao-lagoon.jpg",
                    subTours: [
                        { name: "Cadlao Lagoon", lat: 11.21470, lng: 119.34549, image: "images/cadlao-lagoon.jpg", description: "A beautiful lagoon with crystal clear waters." },
                        { name: "Pasandigan Cove", lat: 11.20835, lng: 119.35740, image: "images/pasandigan-cove.jpg", description: "A peaceful cove perfect for swimming." },
                        { name: "Nat Nat Beach", lat: 11.20590, lng: 119.36389, image: "images/nat-nat-beach.webp", description: "A quiet beach surrounded by cliffs." },
                        { name: "Bukal Island", lat: 11.20926, lng: 119.37907, image: "images/bukal-island.jpg", description: "An isolated island perfect for relaxation." },
                        { name: "Paradise Beach", lat: 11.19830, lng: 119.37792, image: "images/paradise-beach.jpg", description: "A hidden paradise beach." }
                    ]
                }
            };
            return tours[tour];
        }

        // Back button functionality
        document.getElementById('back-button').addEventListener('click', () => {
            // Hide the tour details and map section
            document.getElementById('tour-details').classList.add('hidden');
            // Show the tours grid
            document.querySelector('.grid').classList.remove('hidden');
        });
    </script>

    <!-- Contact Section -->
    <section id="contact" class="bg-[#faf7f2] py-20 min-h-[627px] h-[627px] font-Inter">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Map Section -->
                <div class="h-full">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.802548850809!2d121.04131931478882!3d14.554743589828378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDMzJzE3LjEiTiAxMjHCsDAyJzM0LjgiRQ!5e0!3m2!1sen!2sph!4v1629788269874!5m2!1sen!2sph"
                        class="w-full h-[400px] rounded-lg shadow-md"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

                <!-- Quick Description -->
                <div class="text-left">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visit Our Office</h3>
                    <div class="space-y-4">
                        <p class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            123 Tourism Road, Puerto Princesa, Palawan
                        </p>
                        <p class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +63 912 345 6789
                        </p>
                        <p class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            info@tourismpalawan.com
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 text-left">SEND US A MESSAGE</h2>
                    <hr class="border-t-[2px] border-[#040823] mb-6">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <input type="text" id="name" name="name" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all" placeholder="Name" required>
                        </div>
                        <div>
                            <input type="email" id="email" name="email" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all" placeholder="Email" required>
                        </div>
                        <div>
                            <textarea id="message" name="message" rows="4" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="w-[120px] bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-md font-medium hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>