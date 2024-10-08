<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> <!-- Include your CSS -->
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
                <div class="search-container">
                    <input type="text" placeholder="Search any location/residence" aria-label="Search" id="searchInput">
                    <div class="suggestions" id="suggestionsContainer"></div>
                </div>
            </div>
            <!-- Image container for displaying location images -->
            <div id="locationImageContainer" class="location-image-container" style="display:none;">
                <img id="locationImage" src="" alt="Location Image" />
                <div class="location-image-overlay">
                    <span>Your Dream Home Awaits</span>
                </div>
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
