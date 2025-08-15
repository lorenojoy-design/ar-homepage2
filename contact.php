<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #051c15ff);
      margin: 0;
      padding: 0;
      color: #333;
      text-align: center;
    }

    header {
      background-color: #133125ff;
      color: white;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
    }

    h1 {
      margin-bottom: 10px;
    }

    p {
      font-size: 16px;
      margin: 10px 0;
    }

    .contact-item {
      margin: 15px 0;
      font-size: 18px;
    }

    .contact-item a {
      color: #000000ff;
      text-decoration: none;
      font-weight: bold;
    }

    .contact-item a:hover {
      text-decoration: underline;
    }
     /* Button Design */
    a.button {
      display: inline-block;
      margin-top: 40px;
      padding: 12px 25px;
      background-color: #ffffff;
      color: #0a3d2f;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s;
    }

    a.button:hover {
      background-color: #f0f0f0;
      transform: translateY(-3px);
    }
  </style>
</head>
<body>

  <header>
    <h1>Contact Us</h1>
  </header>

  <div class="container">
    <h2>Get in Touch</h2>
    <p>We'd love to hear from you! Reach out to us using the details below:</p>

    <div class="contact-item">
      📧 Email: <a href="mailto:youremail@example.com">armuseumexperience@gmail.com</a>
    </div>
    <div class="contact-item">
      📞 Phone: <a href="tel:+1234567890">+1 234-567-890</a>
    </div>
    <div class="contact-item">
      🌐 Website: <a href="https://yourwebsite.com" target="_blank">ar_museum.com</a>
    </div>
  </div>
 <a href="home.php" class="button">Back to Homepage</a>
  </div>
</body>
</html>
