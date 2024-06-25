document.addEventListener("DOMContentLoaded", () => {
    fetch('https://resorts.maldives-reservations.com/wp-json/resorts/v1/data')
        .then(response => response.json())
        .then(data => {
            displayResorts(data);
        })
        .catch(error => console.error('Error fetching resorts:', error));

    document.getElementById('search-filters').addEventListener('change', applyFilters);
});

function displayResorts(resorts) {
    const listing = document.getElementById('resort-listing');
    listing.innerHTML = '';

    resorts.forEach(resort => {
        const resortElement = document.createElement('div');
        resortElement.className = 'resort-container';
        const firstVilla = resort.rooms[0];
        resortElement.innerHTML = `
            <div class="resort-image">
                <img src="${resort.images[0]}" alt="${resort.name}">
            </div>
            <div class="resort-details">
                <h2>${resort.name}</h2>
                <p>Rating: ${resort.rating} stars</p>
                <p>${resort.reviews.length} reviews</p>
                <p>${firstVilla.name}</p>
                <p>Update: ${resort.update}</p>
                <p>Airport Transfers: ${resort.airport_transfers}</p>
                <p>Breakfast Included: ${resort.breakfast_included}</p>
                <p>Price for 4 nights: ${firstVilla.price_4_nights} (Incl of all taxes)</p>
            </div>
            <div class="resort-action">
                <button onclick="viewDetails('${resort.id}')">View Details</button>
            </div>
        `;
        listing.appendChild(resortElement);
    });
}

function applyFilters() {
    // Apply filter logic here
}

function viewDetails(resortId) {
    // Redirect to the resort single page with the resort ID
    window.location.href = `/resort-single-page?resort_id=${resortId}`;
}
