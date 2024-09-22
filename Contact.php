<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/css4.css">
  </head>
  <body>
    <nav class="navbar border-bottom border-body">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <ul class="nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="Resume-Webpage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="Projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link active" href="Contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>

    <div id="head" class="text-center text-light" style="margin-top: 20px;"></div>
        <h2 class="display-5" style="text-align: center;">Contact</h2>
    </div>

    <section class="contact-container">
      <!-- Contact Information Section -->
      <div class="contact-info">
        <h3>Contact Information</h3>
        <p><i class="fas fa-phone"></i> +91 1234567890</p>
        <p><i class="fas fa-envelope"></i> <a class="custom-link" href="mailto:varun@example.com">varun@example.com</a></p>
        <p><i class="fas fa-map-marker-alt"></i> Mumbai, India</p>
        <p class="lead" style="color:gold;font-weight:100;">For more ways to connect, check out my social media links at the bottom.</p>
      </div>

      <!-- Contact Form Section -->
      <div class="contact-form-section">
        <h3>Get in Touch</h3>
        <form action="submit1.php" method="post">
          <input type="text" name="Name" placeholder="Your Name" required>
          <input type="email" name="Email_ID" placeholder="Your Email" required>
          <textarea name="Message" rows="3" placeholder="Your Message" required></textarea>
          <input type="submit" value="Send Message">
        </form>
      </div>
    </section>
    <?php include 'PHP/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
