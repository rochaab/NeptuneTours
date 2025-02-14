import './bootstrap';

document.getElementById('contactForm').addEventListener('submit', function (e) {
    let isValid = true;

    // Validation function
    function validateField(input, errorElement, condition, errorMessage) {
        if (condition) {
            errorElement.textContent = errorMessage;
            errorElement.classList.remove('hidden');
            errorElement.setAttribute('aria-hidden', 'false');
            isValid = false;
        } else {
            errorElement.textContent = '';
            errorElement.classList.add('hidden');
            errorElement.setAttribute('aria-hidden', 'true');
        }
    }

    // Name validation
    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('nameError');
    validateField(nameInput, nameError, nameInput.value.trim() === '', 'Full Name is required.');

    // Email validation
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    validateField(emailInput, emailError, !emailPattern.test(emailInput.value.trim()), 'Enter a valid email address.');

    // Phone validation (must be exactly 11 digits)
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phoneError');
    const phonePattern = /^[0-9]{11}$/;
    validateField(phoneInput, phoneError, !phonePattern.test(phoneInput.value.trim()), 'Enter a valid phone number (exactly 11 digits).');


    // Message validation (min 8 characters)
    const messageInput = document.getElementById('message');
    const messageError = document.getElementById('messageError');
    validateField(messageInput, messageError, messageInput.value.trim().length < 8, 'Message must be at least 8 characters long.');

    // Prevent form submission if invalid
    if (!isValid) {
        e.preventDefault();
    }
});
        // Initialize the map
        let map;
        let markers = [];
        function initializeMap(lat, lng) {
            if (map) {
                map.remove(); // Remove the existing map if it exists
            }
            map = L.map('map').setView([lat, lng], 10); // Set initial view
            L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                attribution: '&copy; Google Maps'
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
            document.querySelector('.grid').classList.add('hidden');
            document.getElementById('tour-details').classList.remove('hidden');       
            document.getElementById('back-button').classList.remove('hidden');      
            document.getElementById('map-info').classList.add('hidden'); 

            const tourDetailsContent = document.getElementById('tour-details-content');
            const tourData = getTourData(tour); // Fetch tour data dynamically
            const tourImage = `${window.App.baseUrl}/${tourData.image}`;
            tourDetailsContent.innerHTML = 
                `<div class="flex flex-col h-full overflow-hidden">
                    <div class="h-1/2 relative overflow-hidden">
                        <button id="close-tour-image" class="absolute top-4 left-4 border-2 border-[#fffffff] text-[#ffffff] bg-transparent rounded-full px-2 py-2 flex items-center text-sm font-semibold transition-all hover:bg-[#FFFFFF] hover:text-[#040823]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <img src="${tourImage}" alt="${tour}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div class="h-1/2 flex mt-6 flex-col group-hover:translate-x-8 transition-transform duration-300">
                        <h3 class="text-3xl font-Eczar font-extrabold mt-2 mb-4">${tourData.title}</h3>
                        <p class="text-[#040823] text-s mb-6 font-Anek">${tourData.description}</p>
                        <div class="flex-grow text-[#040823] font-Anek">
                            ${tourData.subTours.map(subTour => 
                                `<p class="sub-tour cursor-pointer hover:bg-gray-800 hover:text-white px-[8px] transition text-gray-700 flex items-center justify-between"
                                    data-lat="${subTour.lat}"
                                    data-lng="${subTour.lng}"
                                    data-images='${JSON.stringify(subTour.images)}'
                                    data-description="${subTour.description}"
                                    data-tour="${tour}">
                                    ${subTour.name} <span class="ml-2">➔</span>
                                </p>`
                            ).join('')}
                        </div>
                    </div>
                </div>`;
            // Clear existing markers
            if (markers.length > 0) {
                markers.forEach(marker => map.removeLayer(marker)); // Remove markers from the map
                markers = []; // Reset the markers array
            }
            // Initizlize the map with the first sub-tour's coordinates
            initializeMap(tourData.subTours[0].lat, tourData.subTours[0].lng);
            // Add markers for all sub-tours
            tourData.subTours.forEach(subTour => {
                const marker = L.marker([subTour.lat, subTour.lng]).addTo(map)
                    .on('click', function() {
                        // Zoom in on the clicked marker
                        map.setView([subTour.lat, subTour.lng], 15);
                        map.setZoom(5);
        
                        // Pan the map to the left by 100 pixels (adjust as needed)
                        map.panBy([-100, 0]);
        
                        // Update the floating info box
                        updateMapInfo(subTour);
                    });
                markers.push(marker);
            });
            // Add event listeners to sub-tours
            document.querySelectorAll('.sub-tour').forEach(subTour => {
                subTour.addEventListener('click', function () {
                    const lat = parseFloat(this.getAttribute('data-lat'));
                    const lng = parseFloat(this.getAttribute('data-lng'));
                    const images = JSON.parse(this.getAttribute('data-images')); // Parse images
                    const description = this.getAttribute('data-description');
                    const name = this.textContent.trim();
                    const offsetLng = -0.005;
                    map.setView([lat, lng - offsetLng], 16);
                    updateMapInfo({ name, description, images });
                });
            });
            document.getElementById('close-tour-image').addEventListener('click', () => {
                document.getElementById('tour-details').classList.add('hidden');
                document.querySelector('.grid').classList.remove('hidden');
                document.getElementById('map-info').classList.add('hidden');
            });
        }
        function updateMapInfo(subTour) {
            const mapInfo = document.getElementById('map-info');
            const imageContainer = document.getElementById('map-info-image-container');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const images = Array.isArray(subTour.images) ? subTour.images : [subTour.images];
        
            document.getElementById('map-info-title').textContent = subTour.name.replace('➔', '').trim();
            document.getElementById('map-info-description').textContent = subTour.description;
        
            imageContainer.innerHTML = images.map((img, index) =>
                `<img src="${img}" class="carousel-image ${index === 0 ? 'active' : 'hidden'}" alt="Tour Image">`
            ).join('');
    
            if (images.length > 1) {
                prevBtn.classList.remove('hidden');
                nextBtn.classList.remove('hidden');
            } else {
                prevBtn.classList.add('hidden');
                nextBtn.classList.add('hidden');
            }
        
            // Handle next/prev buttons
            let currentIndex = 0;
            const carouselImages = document.querySelectorAll('.carousel-image');
        
            // Remove existing event listeners
            const newPrevBtn = prevBtn.cloneNode(true);
            const newNextBtn = nextBtn.cloneNode(true);
            prevBtn.replaceWith(newPrevBtn);
            nextBtn.replaceWith(newNextBtn);
        
            // Reattach event listeners
            newNextBtn.addEventListener('click', () => {
                carouselImages[currentIndex].classList.add('hidden');
                currentIndex = (currentIndex + 1) % images.length;
                carouselImages[currentIndex].classList.remove('hidden');
            });
        
            newPrevBtn.addEventListener('click', () => {
                carouselImages[currentIndex].classList.add('hidden');
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                carouselImages[currentIndex].classList.remove('hidden');
            });
        
            // Show the floating info box
            mapInfo.classList.remove('hidden');
        }
        
        
        // Function to fetch tour data (replace with your actual data)
        function getTourData(tour) {
            const tours = {
                tourA: {
                    title: "El Nido Palawan Tour A",
                    description: "Experience the stunning beauty of El Nido's most iconic destinations.",
                    image: "images/seven-commandos.jpg",
                    subTours: [
                        { 
                            name: "7 Commandos Beach", 
                            lat: 11.17370, 
                            lng: 119.37784, 
                            images: "images/seven-commandos.jpg", // Single image as a string
                            description: "A beautiful white sand beach with crystal clear waters."
                        },
                        { 
                            name: "Small Lagoon", 
                            lat: 11.156441679761166,
                            lng: 119.32145468084, 
                            images: ["images/small-lagoon.webp"], // Single image as an array
                            description: "A serene lagoon perfect for kayaking."
                        },
                        { 
                            name: "Big Lagoon", 
                            lat: 11.15443, 
                            lng: 119.32095, 
                            images: ["images/big-lagoon.webp", "images/secret-lagoon.jpg"], // Multiple images
                            description: "A grand lagoon surrounded by towering cliffs."
                        },
                        { 
                            name: "Secret Lagoon", 
                            lat: 11.14622, 
                            lng: 119.31328, 
                            images: "images/secret-lagoon.jpg", // Single image as a string
                            description: "A hidden gem accessed through a small entrance."
                        },
                        { 
                            name: "Shimizu Island", 
                            lat: 11.138566, 
                            lng: 119.318315, 
                            images: "images/shimizu-island.jpg", // Single image as a string
                            description: "A vibrant snorkeling spot with rich marine life."
                        }
                    ]
                },
                tourB: {
                    title: "El Nido Palawan Tour B",
                    description: "Discover hidden caves and pristine beaches on this exciting island-hopping adventure.",
                    image: "images/pinagbuyutan-island.webp",
                    subTours: [
                        { 
                            name: "Entalula Island", 
                            lat: 11.12877, 
                            lng: 119.33565, 
                            images: "images/entalula-island.jpg", // Single image as a string
                            description: "A scenic view of the island."
                        },
                        { 
                            name: "Pinagbuyutan Island", 
                            lat: 11.12252, 
                            lng: 119.39172, 
                            images: "images/pinagbuyutan-island.webp", // Single image as a string
                            description: "Known for its crystal clear waters and sandy beaches."
                        },
                        { 
                            name: "Cathedral Cave", 
                            lat: 11.07664, 
                            lng: 119.38458, 
                            images: "images/cathedral-cave.jpg", // Single image as a string
                            description: "Famous for its grand cave formations."
                        },
                        { 
                            name: "Snake Island", 
                            lat: 11.09395, 
                            lng: 119.33859, 
                            images: "images/snake-island.jpg", // Single image as a string
                            description: "A beautiful snake-shaped island."
                        },
                        { 
                            name: "Cudugnon Cave", 
                            lat: 11.08486, 
                            lng: 119.35261, 
                            images: "images/cudugnon-cave.jpg", // Single image as a string
                            description: "A quiet beach perfect for relaxation."
                        }
                    ]
                },
                tourC: {
                    title: "El Nido Palawan Tour C",
                    description: "Explore hidden beaches and stunning rock formations on this unforgettable journey.",
                    image: "images/hidden-beach.webp",
                    subTours: [
                        { 
                            name: "Hidden Beach", 
                            lat: 11.190456288168928, 
                            lng:  119.2835603912837, 
                            images: "images/hidden-beach.webp", // Single image as a string
                            description: "A peaceful and secluded beach with crystal-clear water."
                        },
                        { 
                            name: "Secret Beach", 
                            lat: 11.1942031118851, 
                            lng: 119.27695142798181,
                            images: "images/secret-beach.jpg", // Single image as a string
                            description: "A secret cove with a sandy beach surrounded by cliffs."
                        },
                        { 
                            name: "Matinloc Shrine", 
                            lat: 11.202769341297039, 
                            lng:  119.27526709846771, 
                            images: "images/matinloc-shrine.jpg", // Single image as a string
                            description: "A historic shrine offering panoramic views of the island."
                        },
                        { 
                            name: "Talisay Beach", 
                            lat: 11.195592371278137,
                            lng:  119.27150117902507, 
                            images: "images/talisay-beach.webp", // Single image as a string
                            description: "A tranquil beach perfect for swimming and relaxing."
                        },
                        { 
                            name: "Helicopter Island", 
                            lat: 11.201241624115156, 
                            lng:  119.33809779425236, 
                            images: "images/helicopter-island.jpg", // Single image as a string
                            description: "An island known for its helicopter-shaped rock formations."
                        }
                    ]
                },
                tourD: {
                    title: "El Nido Palawan Tour D",
                    description: "Experience the tranquil beauty of secluded beaches and pristine lagoons.",
                    image: "images/cadlao-lagoon.jpg",
                    subTours: [
                        { 
                            name: "Cadlao Lagoon", 
                            lat: 11.214678000762788,
                            lng:  119.34544827019708, 
                            images: "images/cadlao-lagoon.jpg", // Single image as a string
                            description: "A serene lagoon surrounded by towering limestone cliffs."
                        },
                        { 
                            name: "Pasandigan Beach", 
                            lat: 11.208240073503626,
                            lng: 119.35747373283168,
                            images: "images/pasandigan-beach.jpg", // Single image as a string
                            description: "A peaceful beach with clear water, perfect for a swim."
                        },
                        { 
                            name: "Natnat Beach", 
                            lat: 11.20571163640752,
                            lng:  119.36389914271139, 
                            images: "images/natnat-beach.jpg", // Single image as a string
                            description: "A secluded beach with golden sand and crystal-clear water."
                        },
                        { 
                            name: "Pinagbuyutan Island", 
                            lat: 11.12206257172957,
                            lng:  119.3916666473056, 
                            images: "images/pinagbuyutan-island.jpg", // Single image as a string
                            description: "A tropical paradise with stunning beaches and picturesque landscapes."
                        },
                        { 
                            name: "Dolarog Beach", 
                            lat: 11.134455682164148, 
                            lng:  119.39865960149385, 
                            images: "images/dolarog-beach.jpg", // Single image as a string
                            description: "A quiet beach offering beautiful views of the surrounding islands."
                        }
                    ]
                }
            };
            return tours[tour];
        }

        AOS.init({
            once: false, // Animation will repeat when re-entering viewport
        });