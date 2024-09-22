<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/css2.css">
  </head>
  <body>

    <nav class="navbar border-bottom border-body">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <ul class="nav nav-underline justify-content-end">
          <li class="nav-item"><a class="nav-link" href="Resume-Webpage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="About.php">About me</a></li>
          <li class="nav-item"><a class="nav-link" href="Projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>

    <div id="head" class="text-center text-light" style="margin-top: 20px;">
      <h2 class="display-5">About Me</h2>
      <p class="lead">Passionate Developer | Tech Enthusiast</p>
    </div>

    <section id="about" class="text-center text-light" style="padding: 10px 0;">
      <div class="container-fluid">
        <section>
          <div class="row">
            <div class="col order-md-1">
              <img src="Pictures/cr71.jpg" class="img-fluid rounded" alt="Cristiano Ronaldo 1" style=" object-fit: cover;">
            </div>
            <div class="col order-md-2">
              <p style="font-size: 21px;text-align: justify;margin-top: 40px;">Hi, I'm Varun, a 19-year-old web developer from Mumbai, specializing in creating dynamic and interactive websites. Currently pursuing a BSc in IT, I focus on front-end and back-end development to build user-friendly web applications. Let's connect via <a href="https://in.linkedin.com/" style="color: gold; text-decoration: none;" class="custom-link">LinkedIn profile</a> or <a href="mailto:example@example.com?subject=Inquiry&body=Hello,%20I%20would%20like%20to%20discuss...%0A%0AThank%20you!" style="color: gold; text-decoration: none;" class="custom-link">email</a> to collaborate on impactful projects!
              </p>
            </div>
          </div>
        </section>
        <section>
          <div class=row>
            <div class="col order-md-2">
              <img src="Pictures/skills.jpg" class="img-fluid rounded" alt="Skills Image" style="object-fit:cover;">
            </div>
            <div class="col order-md-1">
              <h4 class="lead" style="text-align: center;font-size: 24px;"><strong>Skills</strong></h4>
              <ul style="text-align: justify;font-size:20px;margin-top:25px;">
                <li><strong>Programming Languages:</strong> HTML, CSS, JavaScript, Python, Java, C++</li>
                <li><strong>Frameworks & Libraries:</strong> Bootstrap, jQuery, Pandas</li>
                <li><strong>Database Technologies:</strong> MySQL</li>
                <li><strong>Tools & Platforms:</strong> Git, Eclipse, Tally, MS Excel</li>
              </ul>
            </div>
          </div>
        </section>
        <section>
          <div class=row>
            <div class="col order-md-1">
              <img src="Pictures/bg.png" class="img-fluid rounded" alt="Experience Image" style="object-fit:cover;">
            </div>
            <div class="col order-md-2">
              <h4 class="lead" style="text-align: center;font-size: 24px;"><strong>Experience</strong></h4>
              <p style="text-align: justify;font-size: 16px;margin-top:25px;"><strong>Freelance Web Developer (2023 - Present):</strong> Developed several personal and client-based projects, focusing on creating interactive and responsive web applications using HTML, CSS, Bootstrap, and JavaScript.</p>
              <p style="text-align: justify;font-size: 16px;"><strong>Java GUI Project:</strong> Created a login validation system with database connectivity using Java and MariaDB for a practical project.</p>
              <p style="text-align: justify;font-size: 16px;"><strong>Portfolio Website:</strong> Designed and developed a personal portfolio website showcasing my projects and skills using HTML, CSS, Bootstrap, and JavaScript.</p>
            </div>
          </div>
      </section>
      <section>
        <div class=row>
          <div class="col order-md-2">
            <img src="Pictures/sxc1.jpg" class="img-fluid rounded" alt="St Xaviers College" style="object-fit:cover;">
          </div>
          <div class="col order-md-1">
            <h4 class="lead" style="text-align: center;font-size: 24px;"><strong>Education</strong></h4>
            <p style="text-align: justify;font-size: 19px;margin-top:25px;margin-bottom: 30px;"><strong>BSc in Information Technology (SY BScIT), St Xavier's College</strong> <br>Currently in the second year, acquiring comprehensive knowledge in data analytics, web development, and software design.</p>
            <p style="text-align: justify;font-size: 19px;"><strong>Certifications</strong> <br>MSC-IT
            <br> Completed Tally with GST</p>
          </div>
        </div>
      </section>
      <section>
        <div class=row>
          <div class="col order-md-1">
            <img src="Pictures/cr78.jpg" class="img-fluid rounded" alt="Hobbies Image" style="object-fit:cover;">
          </div>
          <div class="col order-md-2">
            <h4 class="lead" style="text-align: center;font-size: 24px;"><strong>Interests & Hobbies</strong></h4>
            <p style="text-align: justify;font-size: 18px;margin-top:25px;margin-bottom: 30px;"><strong>  Outside of technology, I’m passionate about football and enjoy watching matches. I also love playing video games, listening to music, and seeking out new adventures. Whether it's exploring new places or trying out exciting activities, I'm always up for an adventure.</p>
          </div>
        </div>
      </section>
      </div>
    </section>
    <blockquote class="blockquote text-center" style="margin-top: 30px;">
      <p class="lead"><strong>"It always seems impossible until it’s done."</strong></p>
      <footer class="blockquote-footer" style="color:gold;margin-top:5px">Nelson Mandela</footer>
    </blockquote>
    
    <?php include 'PHP/footer.php'; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>

