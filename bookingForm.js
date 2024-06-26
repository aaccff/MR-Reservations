document.addEventListener('DOMContentLoaded', () => {
    const bookingForm = document.getElementById('booking-form');
    bookingForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('/submit-booking', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(data => {
              alert('Booking successful!');
          }).catch(error => {
              console.error('Error:', error);
              alert('Booking failed. Please try again.');
          });
    });
});
