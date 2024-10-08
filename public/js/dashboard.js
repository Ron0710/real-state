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
const locations = [
    { location: "Caloocan", name: "Caloocan", path: "assets/Allegra Garden Place View.png" },
    { location: "Las Pinas", name: "Las Pinas", path: "path/to/las_pinas.jpg" },
    { location: "Makati", name: "Makati", path: "path/to/makati.jpg" },
    { location: "Mandaluyong", name: "Mandaluyong", path: "path/to/mandaluyong.jpg" },
    { location: "Manila", name: "Manila", path: "path/to/manila.jpg" },
    { location: "Pasay", name: "Pasay", path: "path/to/pasay.jpg" },
    { location: "Pasig", name: "Pasig", path: "path/to/pasig.jpg" },
    { location: "Paranaque", name: "Paranaque", path: "path/to/paranaque.jpg" },
    { location: "Quezon City", name: "Quezon City", path: "path/to/quezon_city.jpg" },
    { location: "San Juan, Batangas", name: "San Juan, Batangas", path: "path/to/san_juan_batangas.jpg" },
    { location: "Taguig", name: "Taguig", path: "path/to/taguig.jpg" },
    { location: "Tuba, Benguet", name: "Tuba, Benguet", path: "path/to/tuba_benguet.jpg" }
]


// Event listener for when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById("searchInput");
    const suggestionsContainer = document.getElementById("suggestionsContainer");
    const locationImageContainer = document.getElementById("locationImageContainer");
    const locationImage = document.getElementById("locationImage");

    // Function to show suggestions based on input
    function showSuggestions() {
        const inputValue = searchInput.value.toLowerCase();
        console.log(inputValue); // Log the input value
        suggestionsContainer.innerHTML = ''; // Clear previous suggestions

        if (inputValue) {
            const filteredLocations = locations.filter(location => 
                location.name.toLowerCase().includes(inputValue)
            );

            // Show suggestions
            filteredLocations.forEach(location => {
                const suggestionItem = document.createElement('div');
                suggestionItem.textContent = location.name; // Use the name property for display
                suggestionItem.classList.add('suggestion-item');

                // Click event to fill the input with the selected suggestion
                suggestionItem.onclick = () => {
                    searchInput.value = location.name; // Fill the input with the selected suggestion name
                    suggestionsContainer.innerHTML = ''; // Clear suggestions

                    // Show the corresponding image
                    locationImage.src = location.path;
                    locationImageContainer.style.display = "block"; // Show the image container
                };

                suggestionsContainer.appendChild(suggestionItem);
            });

            // Show the suggestions container if there are any
            suggestionsContainer.style.display = filteredLocations.length ? 'block' : 'none';
        } else {
            suggestionsContainer.style.display = 'none'; // Hide if input is empty
        }
    }

    // Event listener for search input
    searchInput.addEventListener("input", showSuggestions);

    // Optional: Hide image container if input is cleared
    searchInput.addEventListener("input", () => {
        if (!searchInput.value) {
            locationImageContainer.style.display = "none"; // Hide the image container
        }
    });

    const tableBody = document.getElementById('tableBody');

    // Function to render table data
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