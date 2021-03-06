<div class="form">
  <h2 class="section-title center-align">Creating A New User</h2>

  <section id="login">
    <div class="row">
        <div class="col s12 m6 l4 offset-m3 offset-l4">

        <p>Please fill out the information below so we can create your account.</p>
        <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                  <div class="alert alert-danger">
                      <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                  </div>
                  <?php unset($_SESSION['ERROR_MESSAGE']); ?>
              <?php endif; ?>
              <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                  <div class="alert alert-success">
                      <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                  </div>
                  <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
              <?php endif; ?>

            <form class="col s12" action="http://adlister.dev/user/signup" method="POST">
              <div class="row">
                <div class="input-field">
                  <label for="name">Full Name</label>
                  <input placeholder="Full Name" name="name" id="name" type="text" class="validate"  data-required>
                </div>
              </div>
              <div class="row">
                <div class="input-field">
                  <input placeholder="Username" id="username" name="username" type="text" class="validate"  data-required>
                  <label for="username">User Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field">
                  <input placeholder="Password" name='password' id="password" type="password" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field">
                  <input placeholder="Confirm Password" name='confirmPassword' id="confirmPassword" type="password" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field">
                  <input placeholder="Email" name='email' id="email" type="email" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="col s12 m8 l4 offset-m2 offset-l4">
                  <button class="btn" type="submit" name="action">Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>
  </section>
</div>
