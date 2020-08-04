<?php
 require 'header.php';
?>

  <main>
    <style type="text/css">
      * {
        box-sizing: border-box;
      }

      html,
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        font-family: 'Montserrat', sans-serif;
      }

      body {
        background-color: #fff;
        background-image: linear-gradient(to right, #fff, #fff);
      }

      .disclamer {
        color: #000;
        display: block;
        width: 100%;
        text-align: center;
        padding-top: 20px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 20px;
      }

      .sgu{
        color:green;
      }

      .perspective-container {
        -webkit-perspective: 1000px;
                perspective: 1000px;
        -webkit-transform: translateZ(0);
                transform: translateZ(0);
        padding: 50px 0;
      }

      .login-card {
        cursor: default;
        position: relative;
        width: 320px;
        height: 560px;
        margin: 0 auto;
        color: #fff;
        background-color: #c70953;
        background: radial-gradient(circle at left, rgba(253, 210, 227, 0.3) 35%, rgba(253, 210, 227, 0.2) 35%, rgba(253, 210, 227, 0.2) 50%, rgba(252, 186, 211, 0.1) 50%, rgba(253, 210, 227, 0.1) 65%, transparent 65%, transparent) -120px 50%/120% no-repeat, linear-gradient(to top, #343a40, #343a40);
        transition: -webkit-transform 0.6s ease;
        transition: transform 0.6s ease;
        transition: transform 0.6s ease, -webkit-transform 0.6s ease;
        -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
      }
      .login-card_turned {
        -webkit-transform: rotateY(180deg);
                transform: rotateY(180deg);
      }

      .login-form {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
      }
      .login-form_sing-in {
        z-index: 2;
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
      }
      .login-form_sing-up {
        -webkit-transform: rotateY(180deg);
                transform: rotateY(180deg);
      }
      .login-form__header {
        text-align: center;
        padding: 50px 40px 45px;
      }
      .login-form__inputs-container {
        padding: 0 40px;
      }
      .login-form__input {
        width: 100%;
        padding: 8px 0;
        background-color: transparent;
        border: none;
        color: #fff;
        border-bottom: 1px solid currentColor;
        font-size: 1em;
      }
      .login-form__input::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: .7em;
        transition: font 0.15s;
      }
      .login-form__input:-moz-placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: .7em;
        transition: font 0.15s;
      }
      .login-form__input::-moz-placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: .7em;
        transition: font 0.15s;
      }
      .login-form__input:-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.7);
        font-size: .7em;
        transition: font 0.15s;
      }
      .login-form__input:focus {
        outline: none;
      }
      .login-form__input:focus::-webkit-input-placeholder {
        font-size: 1em;
      }
      .login-form__input:focus:-moz-placeholder {
        font-size: 1em;
      }
      .login-form__input:focus::-moz-placeholder {
        font-size: 1em;
      }
      .login-form__input:focus:-ms-input-placeholder {
        font-size: 1em;
      }
      .login-form__input:not(:first-child) {
        margin-top: 25px;
      }
      .login-form__input:nth-last-of-type(1) {
        margin-bottom: 10px;
      }
      .login-form__forgot-password {
        font-size: 12px;
        color: #fff;
        text-decoration: none;
        letter-spacing: -1px;
        line-height: 2.2em;
        float: right;
      }
      .login-form__forgot-password:hover, .login-form__forgot-password:focus {
        text-decoration: underline;
        outline: none;
        color: #fff;
      }
      .login-form__footer {
        padding: 50px 70px 0;
        font-size: .75em;
      }
      .login-form__submit {
        width: 100%;
        border: 1px solid #fff;
        padding: 10px;
        margin-bottom: 10px;
        color: #fff;
        background-color: transparent;
        text-transform: uppercase;
        border-radius: 20px;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
      }
      .login-form__submit:hover, .login-form__submit:focus {
        outline: none;
        background-color: #fff;
        color: #000;
      }
      .login-form__toggle {
        color: #fff;
        text-decoration: none;
        float: right;
        letter-spacing: -1px;
      }
      .login-form__toggle:hover, .login-form__toggle:focus {
        text-decoration: underline;
        color: #fff;
        outline: none;
      }

      .checkbox {
        display: inline-block;
        color: inherit;
      }
      .checkbox:focus {
        outline: none;
      }
      .checkbox__input {
        display: none;
      }
      .checkbox__box {
        color: transparent;
        display: inline-block;
        background-color: #fff;
        line-height: 12px;
        font-size: 12px;
        padding: 0 1px;
      }
      .checkbox__title {
        font-size: 12px;
        cursor: pointer;
        letter-spacing: -1px;
      }
      .checkbox__input:checked + .checkbox__box {
        color: #c70953;
      }
      .checkbox:focus .checkbox__title {
        text-decoration: underline;
      }

      /*error handling styling*/
       .e_info{
        color: #dc3545;
        text-align: center;
        font-size: 14px;


      }

    </style>
    <div class="disclamer">Sign in to access the biggest library of books/e-books<br>
    <?php
      if (isset($_GET['signup'])) {
             if ($_GET['signup']=="success") {
               echo '<p class="disclamer sgu">You have signed up successfully!</p>';
             }
        }
    ?>
    </div>
    <div class="perspective-container">
    <div class="login-card">
      <form action="login_process.php" method="POST" class="login-form login-form_sing-in">
        <header class="login-form__header">
          <i class="fas fa-user-circle fas-p fa-3x"></i>
          <br />
          SedCo
        </header>

        <div class="login-form__inputs-container">
          <input
            type="email"
            name="email"
            placeholder="Email"
            class="login-form__input login-form__input_required"
            required
          />
          <input
            type="password"
            name="pwd"
            placeholder="Password"
            class="login-form__input login-form__input_required"
            required
          />
          <label class="checkbox" tabindex="0">
            <input
              type="checkbox"
              name="singin[remember]"
              class="checkbox__input"
            />
            <span class="checkbox__box">&#10003;</span>
            <span class="checkbox__title">
              Remember me
            </span>
          </label>
          <a href="#" class="login-form__forgot-password">
            Forgot your password?
          </a>
        </div>

        <footer class="login-form__footer">
        <?php
                if (isset($_GET['error'])) {
             if ($_GET['error']=="nouser") {
               echo '<p class="e_info">no user found, please signup!</p>';
             }
             elseif ($_GET['error']=="wrong_password") {
               echo '<p class="e_info">wrong password!</p>';
             }
           }
        ?>
          <button type="submit" class="login-form__submit" name="login-submit">
            Sign in now
          </button>
          <div>
            Need an account?
            <a href="#" class="login-form__toggle">Sign Up</a>
          </div>
        </footer>
      </form>

      <form action="signup_process.php" method="POST" class="login-form login-form_sing-up">
        <header class="login-form__header">
          <i class="fas fa-user-circle fa-3x"></i>
          <br />
          SedCo
        </header>

        <div class="login-form__inputs-container">
          <input
            type="text"
            name="uid"
            placeholder="Username"
            class="login-form__input login-form__input_required"
            required
          />
          <input
            type="email"
            name="email"
            placeholder="Email"
            class="login-form__input login-form__input_required"
            required
          />
          <input
            type="password"
            name="pwd"
            placeholder="Password"
            class="login-form__input login-form__input_required"
            required
          />
        </div>

        <footer class="login-form__footer">
          <?php
           if (isset($_GET['error'])) {
             if ($_GET['error']=="usertaken") {
               echo '<p class="e_info">Username already taken!</p>';
             }
           }
          ?>
          <button type="submit" class="login-form__submit" name="signup-submit">
            Sign up
          </button>
          <div>
            Have an account?
            <a href="#" class="login-form__toggle" name="">Sign In</a>
          </div>
        </footer>
      </form>
    </div>
  </div>
  <script type="text/javascript">
  var loginCards = document.getElementsByClassName('login-card');

    for (var i = 0; i < loginCards.length; i++) {
      var card = loginCards[i];
      var toggles = card.getElementsByClassName('login-form__toggle');
      for (var j = 0; j < toggles.length; j++)
        toggles[j].addEventListener('click', function (e) {
          card.classList.toggle('login-card_turned');

          e.preventDefault();
        });
    }
  </script>
  </main>

<?php
 require 'footer.php'
?>