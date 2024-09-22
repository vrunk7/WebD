<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/css3.css">
  </head>
  <body>
    <nav class="navbar border-bottom border-body">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <ul class="nav nav-underline justify-content-end">
          <li class="nav-item"><a class="nav-link" href="Resume-Webpage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="About.php">About me</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="Projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>

    <div id="head" class="text-center text-light" style="margin-top: 20px;">
        <h2 class="display-5">My Projects</h2>
    </div>

    <section id="projects" class="container">
        <div class="row">
          <div class="col">
            <div class="project-card">
              <img src="Pictures/ss1.png" alt="Gallery Sample"><br>
              <a href="Projects/Project1/gallery.html" class="project-title">Gallery</a>
              <p>This project showcases a gallery of images, where clicking on each section reveals a collection of photos, allowing users to explore and enjoy the visual content.</p>
            </div>
          </div>
          <div class="col">
            <div class="project-card">
              <img src="Projects/Project2/ss1.png" alt="News Sample"><br>
              <a href="Projects/Project2/NewsBytes.html" class="project-title">News Bytes</a>
              <p>This project features a dynamic news feed that highlights current events through engaging articles. Each news item can be clicked to reveal more details, providing users with an interactive experience to stay informed about trending topics.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="project-card">
              <img src="Projects/Project3/ss1.png" alt="Validation Form"><br>
              <a href="Projects/Project3/REGEX2.html" class="project-title">Validation Form</a>
              <p>Developed an interactive user sign-up form with real-time validation using JavaScript and Font Awesome icons. The form ensures secure password criteria and provides clear visual feedback for errors.</p>
            </div>
          </div>
          <div class="col">
            <div class="project-card">
              <img src="Projects/Project4/Screenshot 2024-09-22 123203.png" alt="Carousel"><br>
              <a href="Projects/Project4/Carousel.html" class="project-title">Carousel</a>
              <p>This project features a carousel showcasing a series of images, each with a caption describing significant sports events. Users can navigate through the images, providing a visually engaging way to highlight achievements or interests.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="project-card">
              <img src="Projects/Project5/Screenshot 2024-07-14 171012.png" alt="TimeTable"><br>
              <a href="Projects/Project5/Timetable.html" class="project-title">Time Table</a>
              <p>Developed an interactive user sign-up form with real-time validation using JavaScript and Font Awesome icons. The form ensures secure password criteria and provides clear visual feedback for errors.</p>
            </div>
          </div>
          <div class="col">
            <div class="project-card">
              <p class="lead" style="font-size:30px;margin-top: 30px;font-weight: 200px;"></p>
            </div>
          </div>
        </div>
        <div class="lead">
          <p style="font-size:30px;margin-top: 30px;font-weight: 200px;text-align: center;">More projects coming soon — stay connected!</p>
        </div>
    </section>

    <?php include 'PHP/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
