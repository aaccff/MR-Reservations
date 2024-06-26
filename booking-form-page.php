<?php
/**
 * Template Name: Booking Form Page
 */
get_header();
?>
<main>
    <section id="booking-form">
        <form id="booking-form" action="/submit-booking" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>
            <label for="dates">Dates:</label>
            <input type="text" id="dates" name="dates" required>
            <label for="persons">Number of Persons:</label>
            <input type="number" id="persons" name="persons" required>
            <button type="submit">Book Now</button>
        </form>
    </section>
</main>
<?php get_footer(); ?>
