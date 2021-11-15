<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CONTACT US</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/favicon.ico">
  </head>
  <body>
    <a href="#" class="scrolltop" id="scroll-top">
         <i class='bx bx-chevron-up scrolltop__icon'></i>
     </a>
     <header class="l-header" id="header">
               <nav class="nav bd-container">
                  <a href="index.html" class="nav__logo">YOUR FITNESS GUIDE</a>
                   <div class="nav__menu" id="nav-menu">
                       <ul class="nav__list">
              <li class="nav__item"><a href="index.html" class="nav__link active-link">HOME</a></li>
              <li class="nav__item"><a href="index.html#contact.html" class="nav__link active-link">GOBACK</a></li>
                 <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
              </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        <hr>
        <Main>
          <div class="container">
           <h3>Contact US </h3>
           <form action="form-process.php" method="POST">
               <div class="form-group">
                   <label for="firstname">Firstname</label>
                   <input type="text" name="firstname" id="firstname" class="form-control" required>
               </div>
               <div class="form-group">
                   <label for="lastname">Lastname</label>
                   <input type="text" name="lastname" id="lastname" class="form-control" required>
               </div>
               <div class="form-group">
                   <label for="phone">Phone</label>
                   <input type="tel" name="phone" id="phone" class="form-control" required>
               </div>
               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" name="email" id="email" class="form-control" required>
               </div>
               <div class="form-group">
                   <label for="message">Message</label>
                   <input type="text" name="message" id="message" class="form-control" required >
               </div>
               <div class="form-group">
           <button class="button" type="submit">Submit</button>
           <button class="button" type="reset">Reset</button>
       </div>
           </form>
       </div>
</Main>

        <footer class="footer section bd-container">
              <div class="footer__container bd-grid">
                  <div class="footer__content">
                      <a href="#" class="footer__logo">Your Fitness Guide</a>
                      <div>
                        <a href="https://www.facebook.com/Your-Fitness-Guide-104563028712191" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/yourfitnessguide_01/" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="https://twitter.com/yourfitnessgui3" class="footer__social"><i class='bx bxl-twitter'></i></a>
                      </div>
                  </div>



                  <div class="footer__content">
                      <h3 class="footer__title">Information</h3>
                      <ul>
                          <li><a href="#" class="footer__link">Event</a></li>
                          <li><a href="#contact" class="footer__link">Contact us</a></li>
                          <li><a href="footer/privacy.html" class="footer__link">Privacy policy</a></li>
                          <li><a href="footer/term.html" class="footer__link">Terms of services</a></li>
                      </ul>
                  </div>

                  <div class="footer__content">
                      <h3 class="footer__title">Address</h3>
                      <ul>
                          <li>Chandigarh university</li>
                          <li>19BCA1256</li>
                          <li>19BCA1259</li>
                          <li>YourFitnessGuide12659.com</li>
                      </ul>
                  </div>
              </div>

              <p class="footer__copy">&#169; 2021 Your Fitness Guide. All right reserved</p>
          </footer>

          <script src="https://unpkg.com/scrollreveal"></script>
          <script src="script.js"></script>
  </body>
</html>
