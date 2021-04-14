<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" id="sign-in-form">
            <h2 class="title">Sign in</h2>
            <p class="error-message"></p>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="tel" placeholder="Mobile Number" id="mobile" name="mobile" data-rule-required="true" data-rule-number="true" data-rule-minlength="10" data-rule-maxlength="10" maxlength="10" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="pass" name="password" data-rule-required="true" />
            </div>
            <input type="submit" name="login" id="login" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="save.php" method="post" id="form" class="sign-up-form">
            <!--<form action="#" method="post" id="form" class="sign-up-form">-->
            <h2 class="title">Sign up</h2>
            <div class="input-field" id="name-group">
              <i class="fas fa-user"></i>
              <input type="text" name="fullname" id="fullname" placeholder="Fullname"/>
            </div>
            <div class="input-field" id="dob-group">
              <i class="fas fa-calendar"></i>
              <input type="date" name="dob" id="dob" placeholder="DOB" />
            </div>
            <div class="input-field" id="phone-group">
              <i class="fas fa-phone"></i>
              <input type="tel" name="phone" id="phone" placeholder="Phonenumber" data-rule-required="true" data-rule-number="true" data-rule-minlength="10" data-rule-maxlength="10" maxlength="10" />
            </div>
            <div class="input-field" id="email-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="input-field" id="password-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="pwd" placeholder="Password" />
            </div>
            <!--<input type="submit" id="Register_submit" class="btn" value="Sign up" />-->
            <button type="button" name="register" class="btn btn-success" id="Register_submit">
          Submit
        </button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
               Don't have an account yet ? Sign up and get access to all our services.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registration
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already made an account here? Sign in and get access to all our services.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

