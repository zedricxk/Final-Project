<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">

    <style>
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
        }

        
        .header {
            width: 100%;
            background-color: #1a1a1a;
            padding: 20px 0;
            position: fixed;
            z-index: 1000;
            top: 0;
            text-align: center;
        }

        .header .logo a {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
        }

        
        .about {
            background-color: #1a1a1a;
            color: #f4f6f8;
            padding: 80px 20px;
            text-align: center;
            margin-top: 80px;
        }

        .about .titlepage h2 {
            font-size: 40px;
            font-weight: 600;
            color: #f4f6f8;
            margin-bottom: 20px;
        }

        .about .titlepage span {
            font-size: 18px;
            color: #ccc;
        }

        .about_box {
            margin-top: 20px;
        }

        .about_box h3 {
            font-size: 28px;
            font-weight: 500;
            color: #ffffff;
        }

        .about_box p {
            font-size: 18px;
            line-height: 1.6;
            color: #dcdcdc;
            max-width: 600px;
            margin: 20px auto;
        }

        .about_box .read_more {
            background: #ff4a57;
            color: #ffffff;
            padding: 10px 30px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
        }

        .about_box .read_more:hover {
            background: #333;
        }

        .best {
            background: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }

        .best .titlepage h2 {
            font-size: 38px;
            color: #333;
            margin-bottom: 15px;
        }

        .best .titlepage span {
            font-size: 18px;
            color: #666;
        }

        .best_box {
            background-color: #f4f6f8;
            border-radius: 10px;
            padding: 30px 20px;
            margin: 30px auto;
            max-width: 600px;
        }

        .best_box h4 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .best_box p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }

        .footer {
            background-color: #1a1a1a;
            color: #f4f6f8;
            padding: 40px 20px;
            text-align: center;
        }

        .footer h3 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .footer p {
            font-size: 16px;
            color: #ccc;
            line-height: 1.6;
        }

        .footer .social-icons {
            margin-top: 15px;
        }

        .footer .social-icons a {
            font-size: 20px;
            color: #ff4a57;
            margin: 0 10px;
            text-decoration: none;
        }

        .footer .social-icons a:hover {
            color: #dcdcdc;
        }

        .footer .copyright {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .team {
            background-color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .team h2 {
            font-size: 38px;
            color: #333;
            margin-bottom: 20px;
        }

        .team-members {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .team-member {
            background-color: #f4f6f8;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h4 {
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .team-member .social-icons a {
            font-size: 18px;
            color: #ff4a57;
            margin: 0 10px;
            text-decoration: none;
        }

        .team-member .social-icons a:hover {
            color: #dcdcdc;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <a href="index.php">NextGen Tech</a>
    </div>
</div>

<div class="about">
    <div class="titlepage">
        <h2>About Us</h2>
        <span>Our Company Description</span>
    </div>
    <div class="about_box">
        <figure>
            <img src="https://insidetelecom.com/wp-content/uploads/2020/06/Disaggregated-networks-for-next-generation-technology.jpg" alt="About Image" style="max-width: 100%; border-radius: 10px;">
        </figure>
        <h3>We are a company dedicated to excellence!</h3>
        <p>Our mission is to provide top-quality products and services to our customers. We strive for innovation, efficiency, and customer satisfaction in every project we undertake.</p>
    </div>
</div>

<div class="best">
    <div class="titlepage">
        <h2>Why Choose Us?</h2>
        <span>Our services stand out because of our dedication and attention to detail.</span>
    </div>
    <div class="best_box">
        <h4>Quality</h4>
        <p>We provide the highest quality in all of our offerings, ensuring that every customer is satisfied with the results.</p>
    </div>
</div>

<div class="team">
    <h2>Meet Our Team</h2>
    <div class="team-members">
        
        <div class="team-member">
            <img src="https://scontent.fmnl25-4.fna.fbcdn.net/v/t39.30808-6/465744633_1234619977582055_8234112040751556158_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGobiNDxEUjwww9UQOTGoTcaFXJPK9tuWJoVck8r225YlXECy-093aEudVRVeT05yxDx42izvWz2Ra00gaqIqjI&_nc_ohc=bMAtiK0kUEcQ7kNvgHueTNd&_nc_zt=23&_nc_ht=scontent.fmnl25-4.fna&_nc_gid=ArXHTFgmajfhwYZA1oE-6iH&oh=00_AYBSC2zf6XUQFqRhOV9rwOHg3bNzPgWYxig7FnGrqohvbA&oe=6745D384" alt="Member 1">
            <h4>Hansol Joseph</h4>
            <p></p>
            <div class="social-icons">
                <a href="https://web.facebook.com/hansoljosep" target="_blank" title="Facebook">Facebook</a>
            </div>
        </div>

       
        <div class="team-member">
            <img src="https://scontent.fmnl25-5.fna.fbcdn.net/v/t39.30808-6/460723976_1328841315158709_3616423074062684124_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGq8ufQHgFHRswGEQeDrO_rysgfRoaZlBrKyB9GhpmUGiR_oXInqTrs2wSn-OoW9Zdi88v1P1SWqOrcfJ9TObqw&_nc_ohc=ccLZwHYrE6wQ7kNvgE_gjF4&_nc_zt=23&_nc_ht=scontent.fmnl25-5.fna&_nc_gid=AZkn2Z1H8v1sceFKbixKf_9&oh=00_AYB3nSRhcHzzBvmXouRhX0duI_sPJNn7LgJw3dTLEDtFwQ&oe=6745D558" alt="Member 2">
            <h4>Geryme Elimino</h4>
            <p></p>
            <div class="social-icons">
                <a href="https://web.facebook.com/GrymGdLmn" target="_blank" title="Facebook">Facebook</a>
            </div>
        </div>

        
        <div class="team-member">
            <img src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/424967683_7794155757279050_6957034429329792453_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFft84fssj_SMWTCBZKv0GYwbRnJNuE2XXBtGck24TZddJtnMFogYGmtEp6iAg7KEx9mYGby-qqL-WK63wzjmnK&_nc_ohc=DCZIF5G46ekQ7kNvgFsNqRy&_nc_zt=23&_nc_ht=scontent.fmnl25-2.fna&_nc_gid=AC5N8yylzAGkQNo0IvX221N&oh=00_AYDQ30KIEdfL2IKwt5ilVrXBRod5eLCV98Ki7muUCUGjmw&oe=6745C0AD" alt="Member 3">
            <h4>Jestine Charles </h4>
            <p></p>
            <div class="social-icons">
                <a href="https://web.facebook.com/jestine517" target="_blank" title="Facebook">Facebook</a>
            </div>
        </div>

 
        <div class="team-member">
            <img src="https://scontent.fmnl25-5.fna.fbcdn.net/v/t39.30808-1/414644701_2048220765545263_8545858888399957587_n.jpg?stp=dst-jpg_s200x200&_nc_cat=104&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeE60xhcuQm4HBCZwrbBmQHEEgePfQR4tLQSB499BHi0tDMOjppehrPdP2sQ6d5ZOAX1SgFuGuiWV5lBX6jccUmB&_nc_ohc=jWyW81Cd3RIQ7kNvgF4Qk5O&_nc_zt=24&_nc_ht=scontent.fmnl25-5.fna&_nc_gid=AqblCtCUiKQIubgiq-ZbzkH&oh=00_AYD_YO70e5lzu2CDwe4IE0B8UB6qQHJbSqHf3EK6InoIxA&oe=6745CA5F" alt="Member 4">
            <h4>Chel Sea Ordoña</h4>
            <p></p>
            <div class="social-icons">
                <a href="https://web.facebook.com/profile.php?id=100010720775747" target="_blank" title="Facebook">Facebook</a>
            </div>
        </div>

    
        <div class="team-member">
            <img src="https://web.facebook.com/1b7a12ae-a61e-4856-8552-c7082c2d7903" alt="Member 5">
            <h4>Zedrick Prado </h4>
            <p></p>
            <div class="social-icons">
                <a href="https://web.facebook.com/shadow.fiendako" target="_blank" title="Facebook">Facebook</a>
                
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <h3>Contact Us</h3>
    <p>For any inquiries or feedback, feel free to reach out!</p>
    <p>Phone: <strong>09519002480</strong></p>
    <div class="social-icons">
        <a href="https://www.facebook.com/hansoljosep" target="_blank" title="Facebook">Facebook</a>
        <a href="https://www.instagram.com/josph_hnsol/" target="_blank" title="Instagram">Instagram</a>
    </div>
    <div class="copyright">
        <p>&copy; 2024 Your Company. All Rights Reserved | Privacy Policy</p>
    </div>
</div>

</body>
</html>
