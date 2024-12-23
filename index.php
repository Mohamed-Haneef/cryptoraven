<?php include 'head.php'; ?>
<body>
<?php include 'top-nav.php'; ?>
 
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Explore Cybersecurity and Programming</h1>
        <p class="lead text-muted">Dive into CTFs, advanced programming tutorials, and cutting-edge tools. Your go-to resource for hands-on learning.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">Capture the Flag (CTF)</h5>
              <p class="card-text">Explore walkthroughs and strategies for solving CTF challenges.</p>
              <a href="ctf.php" class="btn btn-primary">Explore</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">Programming</h5>
              <p class="card-text">Advanced tutorials on programming concepts and practices.</p>
              <a href="programming.php" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title">Tools</h5>
              <p class="card-text">Discover and learn how to use essential cybersecurity and development tools.</p>
              <a href="tools.php" class="btn btn-primary">Discover</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="text-center">&copy; 2024 Crypto Raven. All rights reserved.</p>
  </div>
</footer>
  </body>
</html>
