document.addEventListener("DOMContentLoaded", () => {
    fetch('https://resorts.maldives-reservations.com/wp-json/resorts/v1/data')
        .then(response => response.json())
        .then(data => {
            initializeSlider(data);
        })
        .catch(error => console.error('Error fetching resorts:', error));
});

function initializeSlider(resorts) {
    const slider = document.getElementById('resort-slider');
    resorts.forEach(resort => {
        const resortElement = document.createElement('div');
        resortElement.className = 'resort-slide';
        resortElement.innerHTML = `
            <img src="${resort.images[0]}" alt="${resort.name}">
            <h2>${resort.name}</h2>
        `;
        slider.appendChild(resortElement);
    });
}
