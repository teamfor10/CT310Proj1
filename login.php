<?php include 'header.php'; ?>

<!-- Login menu functionality from http://bootsnipp.com/snippets/featured/clean-modal-login-form -->

<?php
  $logins = array("ct310" => "e1bfd762321e409cee4ac0b6e841963c",
                  "astaven" => "d24774b6154a7fd12fa4965eb7381088",
                  "cokin" => "9e10098c382708a8f24c4219058565fc");
  function displayLogin() {
    echo "<a href='#' data-toggle='modal' data-target='#login-modal'>Login</a>
    <div class='modal fade' id='login-modal' tabindex='-1' role='dialog'
      aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
      <div class='modal-dialog'>
        <div class='loginmodal-container'>
        	<h1>Login Here</h1><br>
          <form method='POST' action='#'>
          	<input type='text' name='username' placeholder='Username'>
          	<input type='password' name='password' placeholder='Password'>
          	<input type='submit' name='login' class='login loginmodal-submit' value='Login'>
          </form>
          <p>password is case-sensitive</p>
        </div>
      </div>
    </div>";
    }
?>

<div id="login">
  <?php if(isset($_POST['login'])):
    $time = time();
    $time = date("H:i m/d/Y", $time);
    $user = trim($_POST['username']);
    $user = strtolower($user);
    $pass = trim($_POST['password']);
  ?>
    <?php if(array_key_exists($user, $logins) && $logins[$user] == md5($pass)):
      echo "<p>Login was successful - $time</p>";
    ?>
    <?php else:
      displayLogin();
      echo "<p>Login failed - $time</p><br /><br/>";
    ?>
    <?php endif; ?>
  <?php else: displayLogin()?>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
