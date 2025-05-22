

<!-- This page Done by Ghala Aljuaid -->
<html>
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
<style>
    body {
      background-color: #f3e5f3;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      color: #483754;
    }

    .confirmation-box {
      background-color: #ffffff;
      border: 2px solid #a78fb7;
      border-radius: 10px;
      padding: 30px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .confirmation-box p {
      font-size: 18px;
      margin-bottom: 15px;
    }

    .confirmation-box h1 {
      color: #d16ba5;
    }
   .header img {
  width: 200px;
  margin-bottom: 15px;
}

   header {
      background-color: #d16ba5; 
      padding: 15px;
    }
    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 20px;
      padding: 0;
    }

  nav a {
      color: #FFFFFF;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

      nav a:hover {
      color:  #9284b5; 

    }

    
  </style>
</head>
<body>
    <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="schedule.html">Schedule</a></li>
        <li><a href="booking.html">Booking</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

   <div class="header">
    <img src="logo.png" alt="UniSlots Logo">
  </div>


  <h2 style="color: #d16ba5; margin-bottom: 20px;">
    🎉 Your booking has been confirmed!
  </h2> 
  
  
  <div class="confirmation-box">
    <?php
      $name = $_POST["name"];
      $studentID = $_POST["id"];
      $email = $_POST["email"];
      $date = $_POST["date"];
      $time = $_POST["time"];

      echo "<h1>Thank you, $name!</h1>";
      echo "<p>Your student ID is: <strong>$studentID</strong></p>";
      echo "<p>Your booking is scheduled for: <strong>$date at $time</strong></p>";
      echo "<p>We will contact you at: <strong>$email</strong></p>";
      echo "<p style='margin-top:20px; color: #d16ba5;'>Dr. Nawal looks forward to seeing you!</p>";
    ?>
  </div>
 <div style=" margin-top: 50px;
      text-align: center;
      font-size: 12px;
      color: #999;">
    <!-- Done by Ghala Aljuaid -->
    Done by Ghala Aljuaid
  </div>
</body>
</html>
