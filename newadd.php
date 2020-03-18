<?php

session_start();

if (isset($_POST['mass-up'])) {
  $userName = $_POST['user-name'];
  $artistName = $_POST['artist-name'];
  $songName = $_POST['song-name'];
  $youtubeUrl = $_POST['youtube-url'];
  $massComment = $_POST['mass-comment'];

  try {

    $db = new PDO('mysql:host=localhost; dbname=massusers','seita','Ffmania0930');
    $sql = 'insert into massdata(user_name,artist,title,youtube,comment) value(?,?,?,?,?)';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($userName,$artistName,$songName,$youtubeUrl,$massComment));
    $stmt = null;
    $db = null;

    header('Location: http://localhost/MassSens/contents.php');
    var_dump($stmt);
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

    <title>Add Mass - Mass Sense</title>

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
                <a class="nav-link" href="#">My Page</a>
                <a class="nav-link" href="#">Add Mass</a>
              </nav>
            </div>
          </div>

          <form action="" method="post">
            <h2>新しくコンテンツを追加する</h2>
            <div class="form-group">
              <div><label for="user-name">ユーザー名</label></div>
              <div><input class="form-control form-control-lg" type="text" id="user-name" name="user-name" placeholder="アーティスト名を入力してください。"></div>
              <div><label for="artist-name">アーティスト名</label></div>
              <div><input class="form-control form-control-lg" type="text" id="artist-name" name="artist-name" placeholder="アーティスト名を入力してください。"></div>
              <div><label for="song-name">曲名</label></label></div>
              <div><input class="form-control form-control-lg" type="text" id="song-name" name="song-name" placeholder="曲名を入力してください。"></div>
              <div><label for="youtube-url">YouTube※任意</label></div>
              <div><input class="form-control form-control-lg" type="text" id="youtube-url" name="youtube-url" placeholder="YouTubeのURLを入力してください。"></div>              
              <div><label for="exampleFormControlTextarea1">コメント</label></div>
              <div><textarea class="form-control" id="exampleFormControlTextarea1" name="mass-comment" rows="10" style="width: 100%;"></textarea></div>
              <div class="col-auto my-1">
                <button type="submit" name="mass-up" class="btn btn-lg btn-secondary sign-up-btn">Mass Up!!</button>
              </div>
            </div>
          </form>

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
