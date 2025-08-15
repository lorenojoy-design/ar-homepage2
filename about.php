<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #051c15ff);
      color: white;
      margin: 0;
      padding: 0;
      text-align: center;
    }

        header {
      background-color: #133125ff;
      color: white;
      padding: 20px;
    }

    h1, h2 {
      margin-top: 30px;
      font-weight: bold;
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 20px;
      line-height: 1.6;
    }

    p {
      font-size: 1.1em;
      opacity: 0.9;
    }

    /* Features Section */
    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .feature-card {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 12px;
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, background 0.3s ease;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .feature-card:hover {
      transform: scale(1.05);
      background: rgba(255, 255, 255, 0.2);
    }

    .feature-icon {
      font-size: 2rem;
      margin-bottom: 10px;
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
    <h1>About Us</h1>
  </header>

  <div class="container">

    <h2>Our AR Museum Experience</h2>
    <p>Welcome to AR Museum a new kind of museum experience, where art, history, and culture come alive through the power of Augmented Reality.
We’re here to make exploration easy, fun, and totally accessible. No long lines, no dusty displays just a world of fascinating exhibits right at your fingertips. Whether you’re viewing ancient artifacts, modern masterpieces, or immersive scenes from the past, our AR technology helps bring every piece to life in a whole new way.</p>

    <h2>Our Vision</h2>
    <p>Our mission is simple: to make learning and discovery engaging for everyone, everywhere. Whether you're a student, an educator, or just curious, you can explore our museum anytime, from anywhere in the world.
So go ahead step into the story, get inspired, and discover something new. We’re so glad you’re here.</p>

    <h2>Key Features</h2>
    <div class="features">
      <div class="feature-card">
        <div class="feature-icon">📱</div>
        <div>Interactive 3D Models</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🎧</div>
        <div>Audio Narration</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🌐</div>
        <div>Multi-language Support</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🎞️</div>
        <div>Animation</div>
      </div>
    </div>

    <a href="home.php" class="button">Back to Homepage</a>
  </div>

</body>
</html>
