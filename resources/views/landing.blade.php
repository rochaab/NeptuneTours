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
<style>
        @keyframes moveLines {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        .moving-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 25%,
                rgba(255, 255, 255, 0.1) 25%,
                rgba(255, 255, 255, 0.1) 50%
            );
            background-size: 200% 200%;
            animation: moveLines 10s linear infinite;
            z-index: 0;
        }

    #map-info {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 12px; /* Fixed typo: removed space between 12 and px */
        max-width: 250px;
        z-index: 1000; /* Ensure it appears above the map */
        position: absolute; /* Position it absolutely within the map container */
        right: 60px; /* Move it to the right */
    }

    #map-info h4 {
        font-size: 18px;
        font-weight: bold;
        color: #1e40af; /* Blue-800 */
        margin-bottom: 8px;
    }

    #map-info p {
        font-size: 14px;
        color: #4b5563; /* Gray-600 */
        margin-bottom: 12px;
    }

    #map-info img {
        width: 100%;
        border-radius: 8px;
        margin-top: 12px;                           
    }
</style>
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
    <div id="explore" class="bg-[#faf7f2] font-Inter">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="flex items-start">
                <div class="animate-slide-in-left">
                    <p class="text-s font-black leading-tight mb-2 font-Poppins tracking-[0.1em] text-[#080c24]">TRAVEL AND TOURS</p>
                    <h2 class="text-3xl sm:text-5xl font-Eczar font-extrabold text-[#040823] mb-8 text-left">Choose from four unique tours and plan your journey using our interactive map. Adventure awaits!</h2>
                </div>
            </div>

            <!-- Tours Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Tour A -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourA">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/seven-commandos.jpg') }}" alt="Tour A" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour A</h3>
                        <p class="text-l font-Anek mt-4">Experience the stunning beauty of El Nido's most iconic destinations.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition hover:bg-[#040823] hover:border-[#040823] font-Anek">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour B -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourB">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/pinagbuyutan-island.webp') }}" alt="Tour B" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour B</h3>
                        <p class="text-l font-Anek mt-4">Discover hidden caves and pristine beaches on this exciting island-hopping adventure.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition hover:bg-[#040823] hover:border-[#040823] font-Anek">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour C -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourC">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/hidden-beach.webp') }}" alt="Tour C" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour C</h3>
                        <p class="text-l font-Anek mt-4">Explore hidden beaches and stunning rock formations on this unforgettable journey.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition hover:bg-[#040823] hover:border-[#040823] font-Anek">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
                    </div>
                </div>

                <!-- Tour D -->
                <div class="tour-item group relative cursor-pointer" data-tour="tourD">
                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset('images/cadlao-lagoon.jpg') }}" alt="Tour D" class="w-full h-full object-cover rounded-md transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="text-black p-[4px]">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-6">El Nido, Palawan Tour D</h3>
                        <p class="text-l font-Anek mt-4">Experience the tranquil beauty of secluded beaches and pristine lagoons.</p>
                        <button class="mt-8 px-6 py-3 border border-[#040823] text-[#040823] hover:text-white rounded-md transition hover:bg-[#040823] hover:border-[#040823] font-Anek">
                            Explore Trip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                        </button>
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
                    <div id="map-info" class="hidden">
                        <h4 id="map-info-title" class="text-lg font-semibold text-blue-800">Tour Information</h4>
                        <p id="map-info-description" class="text-gray-600 mt-2">Select a location to view details.</p>
                        <img id="map-info-image" src="" alt="Tour Image" class="rounded-lg mt-4 hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    .on('click', function() {
                        // Zoom in on the clicked marker
                        map.setView([subTour.lat, subTour.lng], 15);

                        // Update the floating info box
                        const mapInfo = document.getElementById('map-info');
                        mapInfo.classList.remove('hidden');
                        document.getElementById('map-info-title').textContent = subTour.name;
                        document.getElementById('map-info-description').textContent = subTour.description;
                        document.getElementById('map-info-image').src = subTour.image;
                        document.getElementById('map-info-image').classList.remove('hidden');
                    });
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
                    map.setView([lat, lng], 15);

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
                        { name: "Hidden Beach", lat: 11.20611, lng: 119.39172, image: "images/hidden-beach.webp", description: "A peaceful and secluded beach with crystal-clear water." },
                        { name: "Secret Beach", lat: 11.20903, lng: 119.39691, image: "images/secret-beach.jpg", description: "A secret cove with a sandy beach surrounded by cliffs." },
                        { name: "Matinloc Shrine", lat: 11.18261, lng: 119.41407, image: "images/matinloc-shrine.jpg", description: "A historic shrine offering panoramic views of the island." },
                        { name: "Talisay Beach", lat: 11.15877, lng: 119.37512, image: "images/talisay-beach.jpg", description: "A tranquil beach perfect for swimming and relaxing." },
                        { name: "Helicopter Island", lat: 11.21487, lng: 119.36544, image: "images/helicopter-island.jpg", description: "An island known for its helicopter-shaped rock formations." }
                    ]
                },

                tourD: {
                    title: "El Nido Palawan Tour D",
                    description: "Experience the tranquil beauty of secluded beaches and pristine lagoons.",
                    image: "images/cadlao-lagoon.jpg",
                    subTours: [
                        { name: "Cadlao Lagoon", lat: 11.17983, lng: 119.36319, image: "images/cadlao-lagoon.jpg", description: "A serene lagoon surrounded by towering limestone cliffs." },
                        { name: "Pasandigan Beach", lat: 11.17983, lng: 119.37495, image: "images/pasandigan-beach.jpg", description: "A peaceful beach with clear water, perfect for a swim." },
                        { name: "Natnat Beach", lat: 11.18331, lng: 119.37593, image: "images/natnat-beach.jpg", description: "A secluded beach with golden sand and crystal-clear water." },
                        { name: "Pinagbuyutan Island", lat: 11.17038, lng: 119.37162, image: "images/pinagbuyutan-island.jpg", description: "A tropical paradise with stunning beaches and picturesque landscapes." },
                        { name: "Dolarog Beach", lat: 11.17765, lng: 119.38083, image: "images/dolarog-beach.jpg", description: "A quiet beach offering beautiful views of the surrounding islands." }
                    ]
                }
            };
            return tours[tour];
        }
    </script>

    <!-- Contact Section -->
    <div class="w-full h-auto bg-[#10194a] flex flex-col items-center justify-center text-center p-10 relative font-Anek">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 font-Eczar mt-10">Choose Your Perfect Adventure!</h1>
        <p class="text-white mb-6 max-w-2xl px-4">Explore El Nido with our four amazing tours! From island hopping to hidden lagoons, pristine beaches, and stunning sunset cruises—your perfect adventure awaits. Get in touch today!</p>

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-8 w-full max-w-6xl mt-[-40px] p-2">
            @csrf
            <!-- Full Name -->
            <div>
                <input type="text" id="name" name="name" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Full Name*" required>
            </div>
            <!-- Phone & Email -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="tel" id="phone" name="phone" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Phone Number*" required>
                <input type="email" id="email" name="email" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Email Address*" required>
            </div>
            <!-- Message -->
            <div>
                <textarea id="message" name="message" rows="4" class="w-full p-4 h-4border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Enter your message..." required></textarea>
            </div>
            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="w-[200px] h-[50px] bg-white text-[#10194a] px-6 py-3 rounded-md font-medium hover:bg-gray-200 transition duration-300 shadow-lg transform hover:scale-105">
                    Send Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
                </button>
            </div>
        </form>
    </div>

    <!-- Footer Section -->
    <div class="w-full bg-[#080c24] text-white py-10 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Branding -->
            <div>
                <h2 class="text-4xl md:text-5xl font-bold font-Eczar mr-20">Neptune Tours and Travels</h2>
            </div>
            
            <!-- Call Us -->
            <div>
                <h3 class="text-lg font-bold font-Eczar">CALL US</h3>
                <p>+63 917 158 3266</p>
            </div>
            
            <!-- Email Us -->
            <div>
                <h3 class="text-lg font-bold font-Eczar">EMAIL US</h3>
                <p><a href="mailto:neptunetravel.tours@gmail.com" class="text-gray-400 hover:text-white">neptunetravel.tours@gmail.com</a></p>
            </div>
            
            <!-- Social Media -->
            <div class="flex flex-col items-center">
                <h3 class="text-lg font-bold font-Eczar">SOCIAL MEDIAS</h3>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-110">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-110">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="w-6 h-6">
                    </a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center transition transform hover:scale-110">
                        <img src="https://www.citypng.com/public/uploads/preview/tik-tok-logo-icon-701751694793267gxetcvvp3v.png" alt="TikTok" class="w-6 h-6">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Animations using AOS (Animate on Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>