<?php

if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  try {
    $db = new PDO('mysql:host=localhost; dbname=massusers','seita','Ffmania0930');
    $sql = 'insert into user(username,password) value(?,?)';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($username,$password));
    $stmt = null;
    $db = null;

    header('Location: http://localhost/MassSens/index.php');
    exit;

  }catch (PDOExeption $e) {
    echo $e->getMessage();
    exit;
  }
}

?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign-up - Mass Sense</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Mass Sense</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="what.php">What is...</a>
                <a class="nav-link" href="sign-up.php">Sign Up</a>
                <a class="nav-link" href="sign-in.php">Sign In</a>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <div class="what-text">
              <h2>新規会員登録</h2>
          </div>
          <div class="sign-up">
            <form action="" method="POST">
              <div class="form-group row">
                <label for="signup-id" class="col-sm-2 col-form-label col-form-label-lg email-form">アカウント名</label>
                <div class="col-sm-10">
                  <input name="username" type="text" class="form-control form-control-lg" id="signup-id" placeholder="メールアドレスを入力してください">
                </div>
              </div>
              <div class="form-group row">
                <label for="signup-pass" class="col-sm-2 col-form-label col-form-label-lg pass-form">パスワード</label>
                <div class="col-sm-10">
                  <input name="password" type="password" class="form-control form-control-lg" id="signup-pass" placeholder="パスワードを入力してください">
                </div>
              </div>
              <div class="col-auto my-1">
                <button name="signup" type="submit" class="btn btn-lg btn-secondary sign-up-btn">Submit</button>
              </div>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>copyright</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
