<?php
// Include your database connection file
include('db_connection.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the form
    $eventDate = $_POST['eventDate'];
    $eventTitle = $_POST['eventTitle'];
    $eventDescription = $_POST['eventDescription'];
    $reminderTime = $_POST['reminderTime'];

    // Prepare the SQL query to insert the event into the database
    $sql = "INSERT INTO events (event_date, event_title, event_description, reminder_time) 
            VALUES ('$eventDate', '$eventTitle', '$eventDescription', '$reminderTime')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Event added successfully!'); window.location.href='calendar.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
