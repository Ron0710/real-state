<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> <!-- Include your CSS -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <header id="header">
        <table>
            <tr>
                <td>
                    <img src="{{ asset('assets/menu.png') }}" alt="Menu" id="menuImage" style="cursor: pointer;"> <!-- First Image -->
                </td>
                <td>   
                
                </td>
                <td>
                    <img src="{{ asset('assets/call.png') }}" alt="Call Icon"> <!-- Second Image -->
                    <p>123-4567</p>
                </td>
            </tr>
        </table>
    </header>

    <!-- Popup structure should be outside of the header -->
    <div class="popup" id="popup">
        <span class="close-icon" id="closePopup">&times;</span> <!-- Close icon "X" -->
        <h1>ALVEO</h1>

        <!-- Table inside the popup -->
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>About Alveo</th>
                    <th>Locations</th>
                    <th>Properties for Sale</th>
                    <th>Alveo Buying Guide</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Rows will be added here dynamically -->
            </tbody>
        </table>
        <p>&copy; {{ date('Y') }} Laravel App</p>
    </div>
<!---->
    <main class="maincontent" id="main">
        <div style="flex: 0 0 100%; background-image: url('{{ asset('assets/Alveobg2.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
            <div class="container">
                <div class="content">
                    <h1>ALVEO LAND</h1>
                    <h4>LIVE WELL ACROSS THE PHILIPPINES</h4>
                </div>
                <div class="searchcomponent">
                    <div class="search-container">
                        <select id="locationDropdown" placeholder="Select properties"> 
                            <option value="" disabled selected>Select properties</option>
                            <option value="name">Residence Name</option>
                            <option value="status">Status</option>
                            <option value="location">Location</option>
                            <option value="specific_location">Specific Location</option>
                            <option value="price_range">Price Range</option>
                            <option value="units">Units</option>
                            <option value="land_area">Land Area</option> <!-- Corrected 'land_ara' to 'land_area' -->
                            <option value="development_type">Development Type</option>
                            <option value="architectural_theme">Architectural Theme</option>
                        </select>
                        <input type="text" placeholder="Search any location/residence" aria-label="Search" id="searchInput">
                        <div class="suggestions" id="suggestionsContainer"></div>
                    </div>
                </div>
                
                
            </div>
     
        <div id="locationImageContainer" class="location-image-container">
            <div id="loadingOverlay" class="loading-overlay" style="display: none;">
                <dotlottie-player src="https://lottie.host/27fd954f-f7a6-449c-815b-620286fa68e8/JqpvJLyNUC.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
            </div>
        
            <img id="locationImage" src="" alt="Location Image" />

            <button id="prevButton" class="arrow-button" onclick="showPreviousImage()">
                <i class="fas fa-arrow-left"></i> <!-- Left arrow icon -->
            </button>
            <button id="nextButton" class="arrow-button" onclick="showNextImage()">
                <i class="fas fa-arrow-right"></i> <!-- Right arrow icon -->
            </button>
        </div>
            

        </div>
    
        
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        
    </main>
    
       
    <footer>

    </footer>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
