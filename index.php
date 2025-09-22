<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 /* Basic reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}


/* Hero Section */
.hero {
  background: #f4f4f4;
  text-align: center;
  padding: 80px 20px;
}

.hero h1 {
  margin-bottom: 10px;
  font-size: 2rem;
}

/* Content Sections */
.content-section {
  padding: 50px 20px;
  text-align: center;
}


    </style>
</head>
<body>
     <?php include 'navbar.php'; ?>
  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to Our Tech Team</h1>
    <p>We build modern, scalable, and user-friendly solutions.</p>
  </section>

  <!-- Services Section -->
  <section id="services" class="content-section">
    <h2>Our Services</h2>
    <p>We offer web development, mobile apps, and cloud solutions.</p>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="content-section">
    <h2>Our Projects</h2>
    <p>Check out some of our recent tech projects and collaborations.</p>
  </section>

  <!-- Pricing Section -->
  <section id="pricing" class="content-section">
    <h2>Pricing</h2>
    <p>Flexible pricing plans to suit startups and enterprises.</p>
  </section>

  <!-- About Section -->
  <section id="about" class="content-section">
    <h2>About Us</h2>
    <p>We are a team of developers and designers passionate about technology.</p>
  </section>
   <?php include 'footer.php'; ?>
</body>
</html>