<?php
$showForm = isset($_GET['success']) ? "none" : "none"; // default hidden
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AR Museum</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #000000ff;
      color: white;
    }

    nav {
      width: 100%;
      background-color: #133125ff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    nav .logo {
      font-size: 26px;
      font-weight: bold;
      color: #fff;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    nav ul li a {
      color: #ffffffff;
      text-decoration: none;
      font-size: 18px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      color: #fff;
      border-bottom: 2px solid #fff;
      padding-bottom: 2px;
    }

    header {
      text-align: left;
      padding: 60px 20px 20px;
    }

    header h1 {
      font-size: 48px;
      margin-bottom: 10px;
      color: #fbfbfb;
    }

    header p {
      font-size: 20px;
      color: #b0eab8;
    }

    /* Registration Button */
    .register-btn {
      display: block;
      margin: 20px auto 0;
      padding: 12px 24px;
      background-color: #0a3d2f;
      color: white;
      font-size: 18px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .register-btn:hover {
      background-color: #0d5a44;
    }

    .form-popup {
      display: <?= $showForm ?>;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .form-popup form {
      background: #fff;
      color: #222;
      padding: 30px;
      border-radius: 12px;
      width: 400px;
      margin: auto;
      box-shadow: 0 0 10px #000;
      position: relative;
      top: 15%;
    }

    .form-popup h2 {
      text-align: center;
      margin-bottom: 15px;
      color: #133125;
    }

    .form-popup input,
    .form-popup textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .form-popup .form-row {
      display: flex;
      gap: 10px;
    }

    .form-popup button {
      margin-top: 10px;
      padding: 10px;
      background-color: #0a3d2f;
      color: white;
      border: none;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    .close-btn {
      margin-top: 10px;
      color: red;
      cursor: pointer;
      text-align: center;
    }

    .success-message {
      text-align: center;
      color: #9effa6;
      margin-top: 20px;
      font-size: 18px;
    }

    .pricing-boxes {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 50px 20px;
      z-index: 1;
      position: relative;
    }

    .glow-box {
      width: 220px;
      height: 320px;
      background-color: #1a1a1a;
      border-radius: 16px;
      transition: 0.3s ease;
      box-shadow: 0 0 0 rgba(0, 0, 0, 0);
    }

    .glow-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 0 40px rgba(0, 255, 128, 0.7);
    }

    .glow-box.middle:hover {
      box-shadow: 0 0 40px rgba(0, 255, 128, 0.7);
    }

    .cards-section {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      padding: 50px 40px;
    }

    .card {
      background-color: #123b2a;
      border-radius: 20px;
      overflow: hidden;
      width: 280px;
      transition: transform 0.3s ease;
      cursor: pointer;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-image img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      display: block;
      border-radius: 20px;
    }

  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav>
    <div class="logo">AR Museum</div>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <!-- Header Section -->
  <header>
    <h1>Welcome to the AR Museum</h1>
    <p>Experience history through Augmented Reality</p>
    <button class="register-btn" onclick="openForm()">Register Your Visit</button>
  </header>

   <!-- Pricing Boxes Section -->
<section style="display: flex; justify-content: center; gap: 30px; padding: 50px 20px;">
  <div class="glow-box"></div>
  <div class="glow-box middle"></div>
  <div class="glow-box"></div>
</section>

<!-- Section Cards -->
<section class="cards-section">
  <div class="card">
    <div class="card-image">
      <img src="assets/artifacts.jpg" alt="Artifacts">
    </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="assets/sclupture.jpg" alt="Sculpture">
    </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="assets/paintings.jpg" alt="Paintings">
    </div>
  </div>

  <div class="card">
    <div class="card-image">
      <img src="assets/paintings2.jpg" alt="Paintings">
    </div>
  </div>

</section>

  <!-- Floating Registration Form -->
  <div class="form-popup" id="formPopup">
    <form action="submit.php" method="POST">
      <h2>Register Your Visit</h2>
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="text" name="contact" placeholder="Contact Number" required>
      <input type="text" name="school" placeholder="School" required>
      <div class="form-row">
        <input type="date" name="visit_date" required>
        <input type="time" name="visit_time" required>
      </div>
      <textarea name="purpose" rows="3" placeholder="Purpose of Visit" required></textarea>
      <button type="submit">Submit</button>
      <div class="close-btn" onclick="closeForm()">Cancel</div>
    </form>
  </div>

  <script>
    function openForm() {
      document.getElementById("formPopup").style.display = "flex";
    }
    function closeForm() {
      document.getElementById("formPopup").style.display = "none";
    }
  </script>

</body>
</html>
