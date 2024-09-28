<?php
session_start();


if(!isset($_SESSION["email"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Association de la FSTT des jeux videos electroniques</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="pictures/fstgaming-removebg-preview.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="admindashbord.css">    
</head>
<body>
<form action="logout.php" method="post">
        <button type="submit" name="logout" style=" margin-top: 1cm;"
 ><i class="fas fa-sign-out-alt"></i></button>
    </form>
    <div class="admin-dashboard">
        <h2>Welcome admin</h2>
        <h4>gestion de membre </h4>
        <form action="removemember.php" method="post">
            <input type="text" name="member_name" placeholder="Enter member name to remove">
            <button type="submit" name="remove_member">Remove Member</button>
        </form>
        <h4>gestion d'evenement</h4>
        <form action="" method="post" enctype="multipart/form-data" class="form-container">
    <div class="form-group">
        <input type="text" name="event_title" placeholder="Enter event title">
        <input type="text" name="event_description" placeholder="Enter event description">
        <input type="file" name="event_image" accept="image/*">
        <button type="submit" name="add_event">Add Event</button> 
    </div>
    <div class="form-group">
        <input type="text" name="event_title" placeholder="Enter event title to remove">
        <button type="submit" name="remove_event">Remove Event</button>
    </div>
</form>
     
        <h4>gestion de calendrier </h4>
       
        <form action="eventmanipulation.php" method="post" class="form-container">
    <div class="form-group">
        <input type="date" name="event_date" placeholder="Enter event date">
        <input type="text" name="event_description" placeholder="Enter event title">
        <button type="submit" name="add_event">Add Event to Calendar</button>

    </div>
    <div class="form-group">
        <input type="text" name="event_id" placeholder="Enter event id to remove">
        <button type="submit" name="remove_event">Remove Event from Calendar</button>

    </div>
</form>

        
    </div>



   
    <footer class="footer">
        <div class="item">
            <a href="#"><i class="fa-brands fa-instagram icon "></i></a>
            <a href="#"><i class="fa-brands fa-facebook icon "></i></a>
            <a href="#"><i class="fa-brands fa-discord icon "></i></a>
            <a href="#"><i class="fa-brands fa-linkedin icon "></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="team.html">Team</a>
            </li>
            <li>
                <a href="events.html">Events</a>
            </li>
            <li>
                <a href="calendar.html">Calendar</a>
            </li>
            <li>
                <a href="membership.html">Membership</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
        <p class="copyright"> @ All rights reserved LSIS1 2024 </p>
    </footer>
</body>
</html>
