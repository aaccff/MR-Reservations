document.getElementById('booking-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('/submit-booking', {
        method: 'POST',
        body: formData
    })
    .
