<?php 

session_start();

require_once(__DIR__ . '/dbdata/config.php');
require_once(__DIR__ . '/dbdata/massdata.php');
require_once(__DIR__ . '/dbdata/functions.php');
// require_once(__DIR__ . '/page-nation.php');

//massdata取得
$massData = new \DbData\MassPost();
$massPosts = $massData->getAll();




?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mass Sense</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                <a class="nav-link" href="newadd.php">Add Mass</a>
              </nav>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-12 content-container">
              <?php foreach ($massPosts as $massPost) : ; ?>
                <div class="content-box text-dark">
                  <div class="ml-2 mt-2 text-left">
                    <p>アーティスト名： <?php echo h($massPost->artist); ?> </p>
                    <p>曲名： <?php echo h($massPost->title); ?> </p>
                    <p>YouTube：<a class="text-dark" href="<?php echo h($massPost->youtube); ?>">リンク</a></p>
                    <p>投稿者：<?php echo h($massPost->user_name); ?> </p>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
