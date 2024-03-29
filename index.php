<?php
require_once './includes/config.session.php';
require_once './includes/login.view.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>ISU Cauayan Campus | SSC Election Portal</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap"
         rel="stylesheet"
      />
      <link rel="stylesheet" href="./assets/css/style.css" />
      <link rel="icon" href="./assets/img/ISU-logo.png" type="image/icon type">
      <script src="./assets/js/main.js" defer></script>
   </head>
   <body>
      <div class="portal">
         <div class="portal__wrapper">
            <div class="portal__wrapper__hero">
               <img src="./assets/img/ISU-logo.svg" alt="" />
            </div>
            <form action="./includes/login.inc.php" method="post" class="portal__wrapper__form">
               <div class="portal__wrapper__form__wrapper">
                  <div class="portal__wrapper__form__wrapper__title">
                     <h1><span>SSC Election</span> Portal</h1>
                     <p>Log in to vote</p>
                  </div>
                  <div class="portal__wrapper__form__wrapper__field">
                     <div class="portal__wrapper__form__wrapper__field__input">
                        <input type="text" name="userID" id="studno" class="js-input" autocomplete="off"/>
                        <label for="studno">User ID</label>
                     </div>
                     <div class="portal__wrapper__form__wrapper__field__input">
                        <input
                           type="password"
                           name="pwd"
                           id="acode"
                           class="js-input js-pass"
                        />
                        <label for="acode">Password</label>
                        <img
                           id="show-hide-pass"
                           src="assets/showPass.svg"
                           alt=""
                        />
                     </div>
                     <div class="portal__wrapper__form__wrapper__field__button">
                        <a href="Voting Page/voting.html"></a>
                        <button>Sign in</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
