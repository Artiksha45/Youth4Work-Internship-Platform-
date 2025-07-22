<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome  <?php echo $_GET["c"]; ?></title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/972df6eb1d.js" crossorigin="anonymous"></script>
  <script defer src="js/script.js"></script>
</head>

<body>
  <header>
    <!-- Top Navigation -->
    <nav>
      <div class="nav-links">
        <div class="nav-main-links">
          <ul class="topnav">
            <!-- Main Logo -->
            <li>
              <!-- <a href="index.html"><i class="fa-solid fa-mug-hot fa-2x logo"></i></a> -->
            </li>
            <!-- Desktop Nav Items -->
            <li><a class="desktop-nav-item" href="#">Intership Website</a></li>
          
            <!-- Hamburger Menu Buttons -->
            <li>
              <button class="hamburger-menu" aria-label="Open Navigation Menu">
                <i id="ham-menu-icon" class="fa-solid fa-bars"></i>
                <i id="ham-menu-close" class="fa-solid fa-square-xmark hidden"></i>
              </button>
            </li>
          </ul>
        </div>
        <div class="nav-secondary-links">
          
        </div>
      </div>
   
    </nav>
  </header>

  <!-- Main Content -->
 
  <main>
    <section class="primary-cta card-container">
      <div class="primary-cta-slogan card-item">
        <h2>
          <span class="secondary-color">Welcome To </span><br /><span class="stroke">  <?php echo $_GET["c"]; ?></span>
        </h2>
      </div>
      <div class="primary-cta card-item text-block-padding column">
        <h1></h1>
        <p>
        Welcome to our company's learning page. Here, we provide a variety of resources to help you develop your skills and stay up-to-date with the latest trends in our industry. Whether you're looking to improve your technical knowledge or develop your soft skills, we have a range of courses and materials to meet your needs.
        </p>
        <a class="button button-light no-decoration" href="#">Thank You For Applied !!!</a>
      </div>
    </section>

    <?php
    $jpost = $_GET["p"];
  $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from lectures where jpost='$jpost'";
              
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                   
                  while($row = $result->fetch_assoc()) {  
                    $video_id = explode("=", $row["topiclink"])[1];        
                  ?>
    <section class="holiday-cta card-container">
      <div class="holiday-cta-image card-item">
        <figure class="card-figure">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </figure>
      </div>
      <div class="holiday-cta card-item text-block-padding column">
        <h2><?php  echo $row["topicname"]; ?></h2>
        <p>
        <?php  echo $row["topicdesc"]; ?>
        </p>
        <a class="button button-light no-decoration" href="<?php  echo $row["topiclink"]; ?>">Learn more</a>
      </div>
    </section>

    

<?php
  }

}
?>
   <h2>Exam Link</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $jpost = $_GET["p"];
  $conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from exam where course='$jpost'";
              
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                   
                  while($row = $result->fetch_assoc()) {  
                          
                  ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["course"]; ?></td>
     
      <td><a class="btn btn-primary" href="<?php echo $row["examlink"]; ?>" role="button">Give Exam</a></td>
    </tr>
     

<?php
  }

}
?>
  </tbody>
</table>

  
      <h2>For Extra Study By - Online Intership Managment System</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Creator</th>
        <th scope="col">Topic  </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Apna Collage</td>
        <td>Data structure </td>
        <td><a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1hXserPuxVoWMG9Hs7y8wVdRCJTcj3xMBAEYUOXQ5Xag/htmlview?usp=sharing&pru=AAABgtAhoHw*9bUFA4WB_H6YsOhzOoDanA" role="button">Learn</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Love Bubber</td>
        <td>Data Structure</td>
        <td><a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1GZ41tYgR3qtgKe9q4jrw-CeZZ49QEJh4zcJvCno7834/edit#gid=1400835035" role="button">Learn</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Apna Collage</td>
        <td>DBMS</td>
        <td><a class="btn btn-primary" href="https://docs.google.com/document/d/1KV-9I5D6iddJbAoDzPEBVR6izf-j_7PXq3JQSC7KC2Q/edit" role="button">Learn</a></td>
      </tr>
    </tbody>
  </table>

    <section class="card-container">
      <div class="notice text-block-padding">
        <h3 class="card-item notice">Notice</h3>
        <p class="card-item notice">
          This is only for start up after compltion of this course's and assisments we will take you on - onboard.
        </p>
      </div>
    </section>
  </main>

  <hr />

</body>

<style>

* {
  box-sizing: border-box;
}

*,
::after,
::before {
  box-sizing: inherit;
}

html {
  font-size: 100%;
  --primary-color: #1e3932; /* SB Green */
  --secondary-color: #eba272; /* SB Orange */
  --primary-highlight: #00754a; /* SB Light Green */
  --primary-font: "Open Sans", sans-serif;
}

body {
  font-family: var(--primary-font);
  padding: 0;
  margin: 0;
}

body section:first-child {
  margin-top: 124px;
}

/* For use with locking scroll on mobile nav menu open */
.overflow-hidden {
  overflow: hidden;
}

section {
  margin: 2.5rem auto;
}

h1,
h2 {
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: 1px;
  line-height: 1.2;
}

ul {
  padding: 0;
}

a {
  transition: 0.25s ease-in;
}

button {
  border: none;
  background: none;
  padding: 0;
}

button:hover {
  cursor: pointer;
}

/* Button styling for links */
.button {
  padding: 7px 16px;
  border: 1.75px solid #666;
  border-radius: 30px;
  transition: 0.25s ease-in;
  font-size: 0.9rem;
}

.button:hover {
  background: var(--primary-color);
  color: #fff;
  border: 1.75px solid var(--primary-color);
}

.button-dark {
  background: #000;
  color: #fff;
}

.button-light {
  color: #fff;
  border: 1px solid #fff;
  box-shadow: 0 3px 5px #222;
}

.button-light:hover {
  background: rgba(255, 255, 255, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.no-decoration {
  text-decoration: none;
}

.hidden {
  display: none !important;
}

.block-link {
  display: block;
  color: var(--primary-color);
}

.block {
  display: block !important;
}

.flex {
  display: flex;
}

.column {
  flex-flow: column;
}

.text-block-padding {
  padding: 3rem 2rem;
}

/* Adds outline effect to special highlighted text */
.stroke {
  color: #d4e9e2;
  text-shadow: -1px -1px 0 var(--primary-color), 1px -1px 0 var(--primary-color),
    -1px 1px 0 var(--primary-color), 1px 1px 0 var(--primary-color);
}

.secondary-color {
  color: var(--secondary-color);
}

.rotate-180 {
  transform: rotate(180deg);
}

/**** Nav Styles ****/

nav {
  background: rgba(255, 255, 255, 0.98);
  position: fixed;
  width: 100%;
  top: 0;
  padding: 0;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.06),
    0 0 2px rgba(0, 0, 0, 0.07);
  z-index: 99;
}

.nav-links {
  padding: 20px 4%;
}

.nav-links ul {
  margin: 0;
}

.nav-main-links ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

nav li {
  list-style-type: none;
}

nav a {
  color: #000;
  display: inline-block;
}

.fa-2x {
  font-size: 1.3rem !important;
}

.topnav button {
  border: none;
  background: none;
  padding: 0;
  color: #868686;
  width: 36px;
  height: 36px;
  transition: 0.5s ease-in;
}

.topnav button:hover {
  background: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
}

.logo {
  background: var(--primary-color);
  color: #fff;
  border: 1px solid var(--primary-color);
  border-radius: 50%;
  padding: 7px;
}

.nav-location {
  margin-right: 10px;
  display: flex;
  gap: 7px;
}

/**** Mobile Nav Menu *****/

.mobile-nav-menu {
  display: none;
  position: fixed;
  right: 0;
  height: 100vh;
  width: 80vw;
  box-shadow: inset 0 4px 3px -3px rgba(0, 0, 0, 0.1),
    inset 0 4px 2px -2px rgba(0, 0, 0, 0.07);
  background: #fff;
  z-index: 1;
  border: 1px solid #ddd;
}

.mobile-nav-menu li,
.ham-nav-menu-buttons {
  padding: 20px;
}

.ham-nav-menu-buttons {
  display: flex;
  gap: 13px;
}

.ham-nav-menu-links {
  padding: 10px 20px;
}

.mobile-nav-menu hr {
  border: 2px solid var(--primary-color);
  opacity: 0.9;
  margin: 0 20px;
}

/* "Find a Store" button */
.mobile-nav-menu button ~ a:last-of-type {
  font-size: 0.9rem;
  font-weight: 600;
}

.nav-menu-button {
  display: flex;
  align-items: center;
}

/* Arrow icon */
.nav-menu-button > i {
  padding-left: 1rem;
}

.mobile-nav-item {
  color: #000;
  text-decoration: none;
  font-size: 1.4rem;
}

.slide-in-right {
  -webkit-animation: slide-in-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)
    both;
  animation: slide-in-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

/* ----------------------------------------------
 * Generated by Animista on 2022-6-27 21:7:29
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation slide-in-right
 * ----------------------------------------
 */

@-webkit-keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
    transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
    transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

/**** Desktop Nav ****/

.desktop-nav-item {
  display: none;
  font-size: 0.9rem;
}

.desktop-nav-item:hover {
  color: var(--primary-highlight);
  border-bottom: 1px solid var(--primary-highlight);
}

.nav-secondary-links {
  display: none;
}

.nav-secondary-links > ul {
  display: flex;
  align-items: center;
  gap: 13px;
}

.nav-secondary-links a {
  text-decoration: none;
}

.nav-secondary-links a:hover {
  border-bottom: 1px solid var(--primary-highlight);
}

@media only screen and (min-width: 850px) {
  .nav-links {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .nav-main-links ul {
    justify-content: start;
    gap: 25px;
  }
  .nav-secondary-links {
    display: block;
  }
  .hamburger-menu {
    display: none;
  }
  .mobile-nav-menu {
    display: none !important;
  }
  .desktop-nav-item {
    display: block;
    text-transform: uppercase;
    font-weight: 900;
    text-decoration: none;
  }
}

/**** Main Content ****/

main {
  max-width: 1440px;
  margin: 0 auto;
}

/* General card styles */
.card-item {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.card-item > p {
  font-size: 1.2rem;
  line-height: 1.7;
}

/* Primary CTA section */
.primary-cta-slogan {
  background-color: #d4e9e2;
  font-size: 2rem;
}

.primary-cta {
  background-color: #1e3932;
  color: #fff;
}

.primary-cta h2 {
  font-size: 4.25rem;
  line-height: 1;
}

/* Holiday CTA section */

.holiday-cta {
  background-color: #d4e9e2;
  color: var(--primary-color);
}

.holiday-cta a {
  color: var(--primary-color);
}

.holiday-cta a:hover {
  color: var(--primary-color);
  background: rgba(0, 0, 0, 0.1);
}

/* Shared card styles */

.card-figure {
  height: 70vh;
  width: 100%;
  margin: 0;
  position: relative;
}

.card-image {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.card-caption {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: var(--primary-color);
  opacity: 0.9;
  color: #fff;
  padding: 1rem 0;
}

.card-caption a {
  color: #fff;
}

.card-caption a:hover {
  color: dodgerblue;
}

/* Featured product CTA section */

.featured-product-cta {
  background-color: #007042;
  color: #fff;
}

/* Notice */

.notice {
  text-align: center;
  margin: 0 auto;
  width: 80% !important;
}

.notice > h3 {
  margin-bottom: 19.2px;
}

/**** Footer ****/

footer {
  padding: 0 1.5rem;
}

footer ul {
  list-style-type: none;
}

.link-card a {
  color: rgba(0, 0, 0, 0.87);
  text-decoration: none;
  display: block;
  padding: 0.8rem 0;
  transition: 0.2s ease-in;
}

.link-card a:hover {
  color: #000;
  text-decoration: underline;
}

.link-top-card {
  display: flex;
  justify-content: space-between;
  border-top: 2px solid #fff;
  border-bottom: 2px solid #fff;
  transition: 0.25s ease-in;
}

.link-top-card:hover {
  cursor: pointer;
  border-top: 2px solid #ddd;
  border-bottom: 2px solid #ddd;
}

/* Social media links */

.social-media-links {
  gap: 15px;
}

.social-media-links a {
  color: #fff;
  background: rgba(0, 0, 0, 0.87);
  padding: 2px;
  border-radius: 50%;
  height: 32px;
  width: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
}

.social-media-links a:hover {
  color: var(--primary-highlight);
  background: rgba(0, 0, 0, 0.8);
}

/* Supplemental footer links */

.supplemental-links {
  display: flex;
  flex-flow: column;
}

.supplemental-links a {
  color: rgba(0, 0, 0, 0.87);
  text-decoration: none;
  display: block;
  padding: 0.8rem 0;
  transition: 0.2s ease-in;
}

.supplemental-links a:hover {
  color: #000;
  text-decoration: underline;
}

.copyright {
  font-size: 0.8rem;
}

@media only screen and (min-width: 850px) {
  .card-container {
    display: flex;
  }
  .card-item {
    width: 50%;
  }
  .card-item > p {
    max-width: 80%;
  }
  .footer-links {
    font-size: 0.8rem;
  }
  .footer-links i {
    display: none;
  }
  .footer-links > ul {
    display: flex;
    justify-content: space-between;
  }
  .footer-links > ul > li {
    width: calc(100% / 5);
    padding: 0.25rem;
  }
  .about-hidden,
  .careers-hidden,
  .social-impact-hidden,
  .business-partners-hidden,
  .order-hidden {
    display: block !important;
  }
  .supplemental-links {
    flex-flow: row;
    gap: 25px;
  }
}

@media only screen and (max-width: 375px) {
  html {
    font-size: 0.8rem;
  }
}



</style>

</html>