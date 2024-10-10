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
let currentIndex = 0;
let property = []; 
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
 function showEnlargedImage(img) {
    const enlargedImageContainer = document.getElementById('enlargedImageContainer');
    const enlargedImage = document.getElementById('enlargedImage');
    
    // Set the source of the enlarged image to the source of the hovered image
    enlargedImage.src = img.src; 
    enlargedImageContainer.style.display = 'block'; // Show the enlarged image container

    // Position the enlarged image container
    enlargedImageContainer.style.left = '300px'; // Set desired position (adjust as needed)
    enlargedImageContainer.style.top = '50px'; // Set desired position (adjust as needed)
}

function hideEnlargedImage() {
    const enlargedImageContainer = document.getElementById('enlargedImageContainer');
    enlargedImageContainer.style.display = 'none'; // Hide the enlarged image container
}
 // Function to show the popup 

// Function to show the popup
function showPopupWithData(data) {
    const downArrow = document.querySelector('.down-arrow-container'); // Select the down arrow container

    // Check the length of the data array
    if (data.length <= 1) {
        downArrow.style.display = 'none'; // Hide the down arrow if there is one or no property
    } else {
        downArrow.style.display = 'flex'; // Show the down arrow if there are multiple properties
    }

    const popup = document.getElementById('popupContainer2');
    const popupContentContainer = popup.querySelector('.popup-content-container');

    // Ensure data is an array and not empty
    if (!Array.isArray(data) || data.length === 0) {
        console.error('No data available to display.');
        return;
    }

    // Handle the popup display
    popup.style.display = 'block'; // Show the popup

    // Use the first item in data
    const item = data[0];

    // Update the popup content
    updatePopupContent(item);

    // Optional: Add sliding effect for the popup
    popup.classList.add('show'); // This triggers the sliding animation

    // Store the properties globally and reset current index to first property
    property = data;
    currentIndex = 0; // Reset current index
}

// Update the popup content based on the current index
function updatePopupContent(item) {
    const popup = document.getElementById('popupContainer2');
    const popupContentContainer = popup.querySelector('.popup-content-container');

    const titleElement = popupContentContainer.querySelector('.popup-title');
    const imageElement = popupContentContainer.querySelector('.popup-image');
    const viewElement = popupContentContainer.querySelector('.popup-view');
    const valueCells = popupContentContainer.querySelectorAll('.popup-table td:nth-child(2)');

    // Update title and image
    titleElement.textContent = item.name;
    imageElement.src = item.path;
    imageElement.alt = item.name;
    viewElement.src = item.view;

    // Update the table values
    valueCells[0].textContent = item.location;
    valueCells[1].textContent = item.specific_location;
    valueCells[2].textContent = item.price_range;
    valueCells[3].textContent = item.units;
    valueCells[4].textContent = item.land_area;
    valueCells[5].textContent = item.development_type;
    valueCells[6].textContent = item.architectural_theme;
    valueCells[7].textContent = item.status;

    // Scroll to the current property if there are multiple properties
    const propertyItems = document.querySelectorAll('.property-item');
    if (propertyItems.length > 0 && currentIndex < propertyItems.length) {
        const currentItem = propertyItems[currentIndex];
        currentItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

// Scroll down to the next property
function scrollDown() {
    if (property.length === 0) return; // Exit if no properties

    // Increment index to move to the next property
    if (currentIndex < property.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Reset to the beginning if at the end
    }
    
    updatePopupContent(property[currentIndex]); // Update to the current property
}
// Function to slide the popup out of view
function hidePopup2() {
    const popup = document.getElementById('popupContainer2');
   // Hide the popup
    popup.classList.remove('show'); // This triggers the sliding out animation

    // Hide the popup after the sliding out animation is complete
    setTimeout(() => {
        popup.style.display = 'none'; // Hide it completely
       
    }, 400); // Match this duration to the CSS transition duration
}

// Event listener for the arrow image click
document.querySelector('.arrowsubmit').addEventListener('click', () => {
    arrowFetch(); // Call your fetch function to get the data
    // Assuming 'data' is accessible here
    showPopupWithData(data); // Ensure this is the right data structure
});


let selectedDropdownValue = ''; 
document.getElementById('locationDropdown').addEventListener('change', (event) => {
    selectedDropdownValue = event.target.value; // Get the selected dropdown value
    console.log(`Selected Dropdown Value: ${selectedDropdownValue}`); // Log the selected value
});
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
// To hold the fetched property data

function arrowFetch() {
    const dropdown = document.getElementById('locationDropdown');
    const selectedValue = dropdown.value; // Get the selected dropdown value
    const searchInput = document.getElementById('searchInput'); // Ensure you get the search input element
    const searchInputValue = searchInput.value.trim(); // Get the input text

    console.log(`Selected Dropdown Value: ${selectedValue}`); // Log the dropdown value
    console.log(`Search Input Value: ${searchInputValue}`); // Log the search input value

    if (!selectedValue || !searchInputValue) {
        console.error('Both dropdown and search input values must be provided.');
        return; // Exit if either value is missing
    }

    // Construct the API URL with proper parameters
    const apiUrl = `/api/properties?filter=${selectedValue}&search=${encodeURIComponent(searchInputValue)}`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Network response was not ok: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // Log the fetched data
            property = data; // Store the fetched data in the global variable
            console.log(`Number of property: ${property.length}`); // Log number of properties
            showPopupWithData(property); // Pass the fetched data to the popup
        })
        .catch(error => {
            console.error('Fetch error: ', error);
        });
}

    // Event listener for the arrow image click
    document.querySelector('.arrowsubmit').addEventListener('click', arrowFetch);

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

    /***
     * 
     *  // Function to show the current image
    function showImage(index) {
        const locationContainer = document.getElementById('locationImageContainer');
        const locationImage = document.getElementById('locationImage');
        locationImage.src = locations[index].path;
    
        // Show the container if it's not visible
        if (locationContainer.style.display === 'none') {
            locationContainer.style.display = 'block';
        }
    }
    //
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
    };
    
    // Function to show the previous image
    window.showPreviousImage = function () {
        showLoading(); // Show loading overlay
        currentIndex = (currentIndex - 1 + locations.length) % locations.length; // Loop to the end
        showImage(currentIndex);
        hideLoading();

    };
    
    // Automatically move to the next image every 5 seconds
    setInterval(showNextImage, 3000); // Change every 5 seconds
    // Initially display the first image
    showImage(currentIndex);
     * 
     */
   
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