<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server | News</title>
    <?php include '../includes/head.php'; ?>
  </head>
  <body>
    <?php include '../includes/menu.php'; ?>
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="text-align: center;">
            <h1>News</h1>
            <div class="ad-container">
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- UMS News -->
              <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-3418498412982536"
                  data-ad-slot="5740134004"
                  data-ad-format="auto"
                  data-full-width-responsive="true"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <main id="main">
      <section id="about" class="about section-bg">
        <div class="container">
          <div class="row content">
            <div class="col-lg-12">
              <table class="table">
                <?php
                  // Populate news

                  // Connect to database
                  $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                  if (mysqli_connect_errno()) {
                    printf("Database connection failed. Not displaying News content: %s\n", mysqli_connect_error());
                  } else {
                    $query = "SELECT topic_id, topic_title, topic_time FROM cS8856_topics WHERE forum_id=3 ORDER BY topic_time DESC";
                    if ($result = mysqli_query($link, $query)) {
                      while ($list = mysqli_fetch_assoc($result)) {
                        $date = date("Y/m/d", $list['topic_time']);
                        echo '
                          <tr>
                            <td>
                              '.$date.'
                            </td>
                            <td>
                              <a href="/forum/viewtopic.php?f=8&t='.$list['topic_id'].'">'.$list['topic_title'].'</a>
                            </td>
                          </tr>
                        ';
                      }
                      mysqli_free_result($result);
                    }
                    mysqli_close($link);
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>