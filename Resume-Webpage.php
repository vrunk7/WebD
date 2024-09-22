<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/css1.css">
</head>
<body>
    <nav class="navbar border-bottom border-body">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Portfolio</a>
          <ul class="nav nav-underline justify-content-end">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Resume-Webpage.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About me</a></li>
            <li class="nav-item"><a class="nav-link" href="Projects.php">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
      <section id="home" class="text-center text-light" style="padding: 100px 0;">
        <div class="container">
          <img src="Pictures/cr77.jpg" alt="Cristiano Ronaldo portrait" class="img-fluid">
          <h1 class="display-4">Hi, I'm <span>Varun</span></h1>
            <p class="lead" style="color:gold;">A passionate Web Developer and Designer</p>
            <p>
              Welcome to my personal portfolio! I build interactive websites and web applications with a focus on clean design, responsive layouts, and user-friendly interfaces. I'm passionate about turning ideas into reality with HTML, CSS, JavaScript, Bootstrap, and more.            </p>
            <p>
                When I'm not coding, I spend time learning about new technologies, contributing to open-source projects, and exploring creative design solutions.
            </p>
            <p>
              Feel free to download my CV below, check out my skills, or get in touch with me if you'd like to collaborate on an exciting project!
            </p>
            <a href="Varun-Resume1.zip" class="btn btn-warning mt-4" download="Varun-Resume1.zip">Download CV</a>
            <a href="Contact.php" class="btn btn-outline-light mt-4 ms-3">Contact Me</a>       
        </div>
    </section>

    <?php include 'PHP/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
