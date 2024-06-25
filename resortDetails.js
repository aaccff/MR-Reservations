document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const resortId = urlParams.get('resort_id');

    fetch(`https://resorts.maldives-reservations.com/wp-json/resorts/v1/data/${resortId}`)
        .then(response => response.json())
        .then(data => {
            displayResortDetails(data);
        })
        .catch(error => console.error('Error fetching resort details:', error));
});

function displayResortDetails(resort) {
    const detailsSection = document.getElementById('resort-details');
    detailsSection.innerHTML = `
        <h2>${resort.name}</h2>
        <img src="${resort.images[0]}" alt="${resort.name}">
        <p>${resort.description}</p>
        <!-- Add more details as needed -->
    `;
}
