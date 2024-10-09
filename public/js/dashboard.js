document.addEventListener('DOMContentLoaded', () => {
    // Get the image and popup elements
    const menuImage = document.getElementById('menuImage');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');

    // Show the popup on image click
    menuImage.addEventListener('click', () => {
        popup.classList.add('show');
    });

    // Close the popup on X icon click
    closePopup.addEventListener('click', () => {
        popup.classList.remove('show');
    });

    // Close the popup when clicking outside of the popup content
    window.addEventListener('click', (event) => {
        if (!popup.contains(event.target) && event.target !== menuImage) {
            popup.classList.remove('show');
        }
    });
});
const services = [
    "CommTalk",
    "Contact Us",
    "Join Team Alveo",
];
const properties = [
    "Condominiums",
    "Lots",
    "Office and Commercial"
 ];  
 
 const guide = [
     "Terms and Conditions",
     "Privacy Policy"
 ]
// Array of location objects with names and paths



// Event listener for when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    const locations = [
        { location: "Caloocan City", name: "The Calinea Tower", path: "assets/Location/Residences View/The Calinea Tower View.jpg" },
        { location: "Las Pinas", name: "Sonora Garden Residence", path: "assets/Location/Residences View/Sonora Garden Residences View.jpg" },
        { location: "Makati City", name: "Fortis Residence", path: "assets/Location/Residences View/Fortis Residence View.jpg" },
        { location: "Mandaluyong City", name: "Sage Residence", path: "assets/Location/Residences View/Sage Residence View.jpg" },
        { location: "Manila", name: "The Campden Place", path: "assets/Location/Residences View/The Campden Place View.png" },
        { location: "Pasay City", name: "Anissa Heights", path: "assets/Location/Residences View/Anissa Heights View.jpg" },
        { location: "Pasig", name: "Allergra Garden Place", path: "assets/Location/Residences View/Allegra Garden Place View.png"},
        { location: "Pasig", name: "Prisma Residence", path: "assets/Location/Residences View/Prisma Residence View.png"},
        { location: "Pasig City", name: "Satory Residence", path: "assets/Location/Residences View/Satori Residence View.png"},
        { location: "Pasig City", name: "The Valeron Tower", path: "assets/Location/Residences View/The Valeron Tower View.jpg"},
        { location: "Paranaque", name: "Oak Harbor Residence", path: "assets/Location/Residences View/Oak Harbor Residence View.jpg" },
        { location: "Paranaque City", name: "The Atherton", path: "assets/Location/Residences View/The Atherton Views.jpg" },
        { location: "Quezon City", name: "One Delta Terraces", path: "assets/Location/Residences View/One Delta Terraces View.jpg" },
        { location: "Quezon City", name: "The Crestmont", path: "assets/Location/Residences View/The Crestmont View.jpg" },
        { location: "Quezon City", name: "The Erin Heights", path: "assets/Location/Residences View/The Erin Heights View.png" },
        { location: "Quezon City", name: "The Oriana", path: "assets/Location/Residences View/The Oriana View.png" },
        { location: "San Juan, Batangas", name: "Solmera Coast", path: "assets/Location/Residences View/Solmera Coast View.jpg" },
        { location: "Taguig City", name: "Mulberry Place", path: "assets/Location/Residences View/Malberry Place View.jpg" },
        { location: "Tuba, Benguet", name: "Moncello Crest", path: "assets/Location/Residences View/Moncello Crest View.jpg" }
    ]
    
    const searchInput = document.getElementById("searchInput");
    const suggestionsContainer = document.getElementById("suggestionsContainer");
    const locationImageContainer = document.getElementById("locationImageContainer");
    const locationImage = document.getElementById("locationImage");
    let currentIndex = 0;

    function readSearchInput() {
        const searchInputValue = searchInput.value.trim(); // Get the current value of the search input
        console.log(`Search Input: ${searchInputValue}`); // Log the current search input value
        return searchInputValue; // Return the current search input value
    }
    
    // Event listener for input change
    searchInput.addEventListener("input", () => {
        const currentSearchValue = readSearchInput(); // Call the function to read the input
        // You can add additional logic here to use the currentSearchValue, like fetching suggestions
    });
    
    // Event listener for dropdown change to trigger displaying suggestions
    document.getElementById('locationDropdown').addEventListener('change', () => {
        displaySuggestions(); // Refresh suggestions based on new dropdown selection
    });
    
    // Add click event listener to the suggestions container
    document.getElementById('suggestionsContainer').addEventListener('click', () => {
        const selectedValue = readSearchInput(); // Get the current search input value
        const locationIndex = locations.findIndex(loc => loc.location.toLowerCase() === selectedValue.toLowerCase());
    
        if (locationIndex !== -1) {
            currentIndex = locationIndex; // Set the current index to the found index
            showImage(currentIndex); // Show the image corresponding to the found location
        } else {
            console.log("Location not found");
        }
    });
    // Function to fetch properties based on selected dropdown value and input
    function fetchProperties() {
        const dropdown = document.getElementById('locationDropdown');
        const selectedValue = dropdown.value; // Get the selected dropdown value
        const searchInputValue = searchInput.value.toLowerCase(); // Get the input text and convert to lowercase
        suggestionsContainer.innerHTML = ''; // Clear previous suggestions

        if (selectedValue && searchInputValue) {
            fetch(`/api/properties?filter=${selectedValue}&search=${searchInputValue}`) // Fetch data from API
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Parse the JSON from the response
                })
                .then(data => {
                    // Create an array to track displayed suggestions and avoid duplicates
                    const displayedSuggestions = [];

                    if (data.length > 0) {
                        // Show suggestions based on the fetched data
                        data.forEach(property => {
                            const suggestionText = property[selectedValue];

                            // Check if the suggestion is already displayed
                            if (!displayedSuggestions.includes(suggestionText)) {
                                displayedSuggestions.push(suggestionText); // Add to array to track displayed suggestions
                                
                                const suggestionItem = document.createElement('div');
                                suggestionItem.textContent = suggestionText; // Use the selected property attribute
                                suggestionItem.classList.add('suggestion-item');

                                // Click event to fill the input with the selected suggestion
                                suggestionItem.onclick = () => {
                                    searchInput.value = suggestionText; // Set input value to the suggestion
                                    suggestionsContainer.innerHTML = ''; // Clear suggestions
                                };

                                suggestionsContainer.appendChild(suggestionItem); // Append suggestion
                            }
                        });

                        // Show suggestions container only if there are valid suggestions
                        if (suggestionsContainer.childNodes.length > 0) {
                            suggestionsContainer.style.display = 'block'; // Show suggestions
                        } else {
                            suggestionsContainer.innerHTML = '<div>No results found</div>'; // Show no results
                        }
                    } else {
                        suggestionsContainer.innerHTML = '<div>No results found</div>'; // Show no results
                    }
                })
                .catch(error => {
                    console.error('Error fetching properties:', error); // Log error
                    suggestionsContainer.innerHTML = '<div>Error fetching data</div>'; // Show error message
                });
        } else {
            suggestionsContainer.style.display = 'none'; // Hide if no valid input
        }
    }

    // Event listener for input change to fetch properties
    searchInput.addEventListener("input", fetchProperties);

    // Event listener for dropdown change to trigger fetching properties
    document.getElementById('locationDropdown').addEventListener('change', () => {
        // Fetch properties again when dropdown changes to refresh suggestions
        fetchProperties();
    });

    const tableBody = document.getElementById('tableBody');

    // Function to show the current image
    function showImage(index) {
        const locationContainer = document.getElementById('locationImageContainer');
        const locationImage = document.getElementById('locationImage');
        locationImage.src = locations[index].path;
    
        // Show the container if it's not visible
        if (locationContainer.style.display === 'none') {
            locationContainer.style.display = 'block';
        }
    }
    
    // Function to show the loading overlay
    function showLoading() {
        const loadingOverlay = document.getElementById('loadingOverlay');
        loadingOverlay.style.display = 'flex'; // Show loading overlay
    }
    
    // Function to hide the loading overlay
    function hideLoading() {
        const loadingOverlay = document.getElementById('loadingOverlay');
        loadingOverlay.style.display = 'none'; // Hide loading overlay
    }
    
    // Function to show the next image
    window.showNextImage = function () {
        showLoading(); // Show loading overlay
        currentIndex = (currentIndex + 1) % locations.length; // Loop back to the start
        showImage(currentIndex);
        hideLoading();
        setTimeout(() => {
            // Hide loading overlay after displaying the image
        }, 1000); // Delay of 1 second for loading
    };
    
    // Function to show the previous image
    window.showPreviousImage = function () {
        showLoading(); // Show loading overlay
        currentIndex = (currentIndex - 1 + locations.length) % locations.length; // Loop to the end
        showImage(currentIndex);
        hideLoading();
        setTimeout(() => {
            // Hide loading overlay after displaying the image
        }, 1000); // Delay of 1 second for loading
    };
    
    // Automatically move to the next image every 5 seconds
    setInterval(showNextImage, 5000); // Change every 5 seconds
    // Initially display the first image
    showImage(currentIndex);
    function renderInformation(){
        const locationImageContainer = document.getElementById("locationImageContainer");
    }

    function renderTable() {
        // Clear existing rows
        tableBody.innerHTML = '';
    
        // Calculate the max number of rows needed
        const maxRows = Math.max(services.length, locations.length, properties.length, guide.length);
    
        // Loop through each index up to the max number of rows
        for (let i = 0; i < maxRows; i++) {
            const row = document.createElement('tr');
            
            // Add service if it exists
            const serviceCell = document.createElement('td');
            serviceCell.textContent = services[i] || ''; // Default to empty if undefined
            row.appendChild(serviceCell);
    
            // Add location if it exists
            const locationCell = document.createElement('td');
            locationCell.textContent = locations[i].name || ''; // Default to empty if undefined
            row.appendChild(locationCell);
    
            // Add property if it exists
            const propertyCell = document.createElement('td');
            propertyCell.textContent = properties[i] || ''; // Default to empty if undefined
            row.appendChild(propertyCell);
    
            // Add guide if it exists
            const guideCell = document.createElement('td');
            guideCell.textContent = guide[i] || ''; // Default to empty if undefined
            row.appendChild(guideCell);
    
            // Append the row to the table body
            tableBody.appendChild(row);
        }
    }
    // Call render function to populate the table
    renderTable();
});