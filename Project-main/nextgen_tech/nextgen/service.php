<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service - Gadget & Phone Repair</title>
  <style>
   
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9; 
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      color: #666666;
      font-size: 14px;
      line-height: 1.80857;
    }

    
    nav {
      background-color: #38c8a8; 
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    nav .logo {
      color: white;
      font-size: 1.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    nav .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    nav .nav-links li {
      font-size: 1rem;
      font-weight: 600;
    }

    nav .nav-links li a {
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    nav .nav-links li a:hover {
      color: #000; 
    }

    
    .main-content {
      padding: 40px;
      max-width: 1200px;
      margin: 0 auto;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #111111;
    }

    .service-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
      gap: 20px;
      margin-top: 20px;
    }

    
    .service-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .service-card h3 {
      font-size: 1.3rem;
      color: #333;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .service-card p {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 15px;
    }

    .service-card button {
      background-color: #38c8a8;
      color: white;
      padding: 12px;
      width: 100%;
      font-size: 1.1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .service-card button:hover {
      background-color: #2bcc91; 
    }

    
    .footer {
      background-color: #23262d; 
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: auto;
      font-size: 0.9rem;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }

    .footer a {
      color: #fff;
      text-decoration: none;
    }

    .footer a:hover {
      color: #2bcc91; 
    }

  
    h2, h3, h4, h5, h6 {
      letter-spacing: 0;
      font-weight: normal;
      position: relative;
      padding: 0 0 10px 0;
      color: #111111;
      margin: 0;
    }

    h1 {
      font-size: 24px;
      font-family: 'Baloo Chettan', cursive;
    }

    h2 {
      font-size: 22px;
      font-family: 'Baloo Chettan', cursive;
    }

    h3 {
      font-size: 18px;
      font-family: 'Baloo Chettan', cursive;
    }

    
    .btn-custom {
      margin-top: 20px;
      background-color: transparent !important;
      border: 2px solid #ddd;
      padding: 12px 40px;
      font-size: 16px;
    }

    .btn-custom:hover {
      background-color: #2bcc91;
      color: white;
    }
  </style>

  <script>
    function showMessage() {
      alert("You have successfully contacted us for the service. We will get back to you shortly!");
    }
  </script>
</head>
<body>

  
  <nav>
    <div class="logo">Gadget Repair</div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="service.php">Services</a></li>
      <li><a href="about.php">About</a></li>
     
    </ul>
  </nav>

  
  <div class="main-content">
    <h1>Our Gadget & Phone Repair Services</h1>
    <p>We provide high-quality repair services for your gadgets, phones, and laptops. Our technicians are skilled and experienced in handling all types of repairs. Whether it's a screen replacement, battery issue, or software glitch, we’ve got you covered!</p>

    <div class="service-list">
     
      <div class="service-card">
        <img src="https://repairadvise.com.ph/wp-content/uploads/2017/09/iPhone-repair-Philippines.jpeg" alt="Phone Repair">
        <h3>Phone Repair</h3>
        <p>From cracked screens to battery replacements, we repair all major phone brands.</p>
        <button onclick="showMessage()">Get Service</button>
      </div>
      <div class="service-card">
        <img src="https://images.ctfassets.net/16nm6vz43ids/7g9t8d7WaVz7BM1L9RmrCl/9f42265945660d42d58111bf3e169aab/Repair_or_replace_laptop.png?fm=webp&q=65" alt="Laptop Repair">
        <h3>Laptop Repair</h3>
        <p>Our expert technicians can fix issues like slow performance, overheating, and more.</p>
        <button onclick="showMessage()">Get Service</button>
      </div>
      <div class="service-card">
        <img src="https://www.completecomputingsw.co.uk/wp-content/uploads/2023/08/Tablet-Repair.jpg" alt="Tablet Repair">
        <h3>Tablet Repair</h3>
        <p>We fix screen cracks, software glitches, and any other tablet-related problems.</p>
        <button onclick="showMessage()">Get Service</button>
      </div>
      <div class="service-card">
        <img src="https://thumbs.dreamstime.com/b/technician-repairs-smartwatch-tweezers-electronic-smartphone-service-centar-cellphone-smart-watch-technology-device-136373956.jpg" alt="Smartwatch Repair">
        <h3>Smartwatch Repair</h3>
        <p>We repair smartwatch screens, batteries, and other issues to keep you connected.</p>
        <button onclick="showMessage()">Get Service</button>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>&copy; 2024 Gadget Repair. All Rights Reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
  </div>

</body>
</html>

<?php
?>
