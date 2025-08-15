
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
      background-image: url('assets/green.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
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
  text-align: center; /* para lahat ng text at button naka-center horizontally */
  padding: 60px 20px 20px;

  /* optional: para maging vertical center sa screen */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

    header h1 {
      font-size: 48px;
      margin-bottom: 10px;
      color: white;
    }

    header p {
      font-size: 20px;
      background: linear-gradient(90deg, #ffffffff, #00ff0dff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Registration Button */
   .register-btn {
    display: inline-block;
    margin-top: 40px;
    background-color: #064e3b;
    color: white;
    padding: 20px 30px;
    border-radius: 25px;
    font-weight: bold;
    text-decoration: none;
    outline: none; /* para walang focus outline */
    border: none;  /* para walang border */
    font-size: 18px;
    transition : background-color 0.3s ease;
    cursor: pointer;
    
}

    .register-btn:hover {
      background-color: #1b725aff;
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

    .exhibits-section {
  padding: 50px 20px;
}

.section-title {
  text-align: center; /* header lang naka-center */
  color: white;
  font-size: 2.5rem;
  margin-bottom: 30px;
}

.boxes-container {
  display: flex;
  justify-content: center; /* pwede mong gawing space-between */
  gap: 30px;
  flex-wrap: wrap;
}

.glow-box {
  background-color: #111;
  border-radius: 15px;
  padding: 70px;
  text-align: center;
  width: 250px;
  color: white;
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: pointer;
}

.glow-box img {
width: 100%;
height: 150px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.glow-box:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(0, 255, 0, 0.7);
}
.glow-box h3 {
  margin-bottom: 10px; /* puwede mo dagdagan value */
}

.glow-box p {
  margin-top: 0; /* para walang double spacing */
  position: relative;
  
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

     /* Floating Feedback Icon - Chat Head Style */
#feedback-widget {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    z-index: 9999;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
}

/* ======== ICON ======== */
#feedback-icon {
    background: #003905ff;
    color: white;
    padding: 12px;
    border-radius: 50%;
    cursor: grab;
    font-size: 20px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
    user-select: none;
} 

/* ======== FORM ======== */
#feedback-form {
    display: none;
    flex-direction: column;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
    margin-right: 10px;
    width: 250px;
}
#feedback-form h3 {
    margin-top: 0;
    color: #0e4d17ff;
}
#feedback-form label {
    color: #333;
    font-size: 14px;
}
#feedback-form input,
#feedback-form textarea {
    width: 100%;
    padding: 6px;
    margin: 4px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
#feedback-form button {
    background: #043f0fff;
    color: white;
    padding: 8px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
#feedback-form button:hover {
    background: #05470aff;
}

/* ======== SUCCESS MESSAGE ======== */
#success-message {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #28a745;
    color: white;
    padding: 12px 18px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
    font-size: 14px;
    z-index: 10000;
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

    <!-- Header Section 2-->
 
   <!-- Pricing Boxes Section -->
  
  <section class="exhibits-section">
  <h1 class="section-title">Featured Exhibits</h1>

  <div class="boxes-container">
    <div class="glow-box">
      <img src="assets/sculpture.jpg" alt="Artifact 1">
      <h3>Ancient Sculpture</h3>
      <p>View in AR and explore its intricate details.</p>
    </div>
    <div class="glow-box">
      <img src="assets/painting.jpg" alt="Artifact 2">
      <h3>Historical Painting</h3>
      <p>Experience the artwork like never before.</p>
    </div>
    <div class="glow-box">
      <img src="assets/tara.jpg" alt="Artifact 3">
      <h3>Artifacts Exhibit</h3>
      <p>Discover the prehistoric era in augmented reality.</p>
    </div>
  </div>
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


<!-- FEEDBACK WIDGET -->
<div id="feedback-widget">
    <div id="feedback-icon" onclick="toggleFeedback()">💬</div>
    <div id="feedback-form">
        <h3>Feedback Form</h3>
        <form id="feedbackForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
    <!-- Success message -->
<div id="success-message">✅ Feedback submitted successfully!</div>

  <script>
    function openForm() {
      document.getElementById("formPopup").style.display = "flex";
    }
    function closeForm() {
      document.getElementById("formPopup").style.display = "none";
    }
function toggleFeedback() {
    const form = document.getElementById('feedback-form');
    form.style.display = (form.style.display === 'flex') ? 'none' : 'flex';
}

// ======== DRAG ICON + FORM TOGETHER ========
const widget = document.getElementById('feedback-widget');
let isDragging = false;
let offsetY = 0;

widget.addEventListener('mousedown', startDrag);
widget.addEventListener('touchstart', startDrag);

function startDrag(e) {
    if (e.target.id !== 'feedback-icon') return; // drag lang kapag icon ang hinawakan
    isDragging = true;
    offsetY = (e.type === 'mousedown') ? e.clientY - widget.getBoundingClientRect().top
              : e.touches[0].clientY - widget.getBoundingClientRect().top;

    document.addEventListener('mousemove', onDrag);
    document.addEventListener('touchmove', onDrag);
    document.addEventListener('mouseup', stopDrag);
    document.addEventListener('touchend', stopDrag);
}

function onDrag(e) {
    if (!isDragging) return;
    e.preventDefault();
    const clientY = (e.type === 'mousemove') ? e.clientY : e.touches[0].clientY;
    let newTop = clientY - offsetY;
    const maxTop = window.innerHeight - widget.offsetHeight;
    if (newTop < 0) newTop = 0;
    if (newTop > maxTop) newTop = maxTop;
    widget.style.top = newTop + 'px';
    widget.style.bottom = 'auto';
}

function stopDrag(e) {
    if (!isDragging) return;
    isDragging = false;
    widget.style.right = '0px';
    document.removeEventListener('mousemove', onDrag);
    document.removeEventListener('touchmove', onDrag);
    document.removeEventListener('mouseup', stopDrag);
    document.removeEventListener('touchend', stopDrag);
}

// ======== SUCCESS MESSAGE AFTER SUBMIT ========
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let msg = document.getElementById('success-message');
    msg.style.display = 'block';
    setTimeout(() => {
        msg.style.display = 'none';
    }, 3000);
    this.reset();
});
</script>


</body>
</html>

