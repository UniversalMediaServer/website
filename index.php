<?php
  include "cache_start.php";
  include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server</title>
    <?php include 'includes/head.php'; ?>
  </head>
  <body>
    <?php include 'includes/menu.php'; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center home-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="text-align: center;">
            <div style="margin: 0 auto;max-width: 900px;">
              <h1>Universal Media Server</h1>
              <h2>Stream your media to your devices, whether they are TVs, smartphones, gaming consoles, computers, audio receivers, and more!</h2>
              <div class="d-lg">
                <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="downloadModalLabel">Download</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>
                          <a type="button" class="btn btn-danger subscribe-button" href="https://www.patreon.com/bePatron?u=34420953">
                            <svg viewBox="0 0 569 546" xmlns="http://www.w3.org/2000/svg"><g><circle cx="362.589996" cy="204.589996" data-fill="1" id="Oval" r="204.589996"></circle><rect data-fill="2" height="545.799988" id="Rectangle" width="100" x="0" y="0"></rect></g></svg>
                            Subscribe for the latest download: <strong><?php echo $umsVersionPatreon; ?></strong>
                          </a>
                        </p>
                        <p>Builds are released to <a href="https://www.patreon.com/bePatron?u=34420953" title="Universal Media Server on Patreon" target="_blank">Patreon</a> first to reward our patrons.</p>
                        <p>An older, public build can be downloaded below:</p>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-light mr-auto" href="/download/">All Downloads</a>
                        <a type="button" class="btn btn-primary" href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe" id="download-link">Download <?php echo $umsVersion; ?></a>
                        <?php if ($umsVersionBeta) { ?>
                          <a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe" class="btn-download-beta scrollto" id="download-link-beta">Download beta</a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn-get-started scrollto" id="download-link" data-toggle="modal" data-target="#downloadModal"> Download Now <i class="icofont-download"></i></button>
              </div>
              <div class="ad-container">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- UMS Front -->
                <ins class="adsbygoogle"
                    style="display:block;margin-top:25px;"
                    data-ad-client="ca-pub-3418498412982536"
                    data-ad-slot="1452480239"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= Cliens Section ======= -->
      <section id="cliens" class="cliens section-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <strong style="font-size: 80%;">Hundreds more</strong>
            </div>
          </div>
        </div>
      </section><!-- End Cliens Section -->

      <section id="features" class="features-section">
        <div class="container text-center">
          <div class="section-title">
            <h2>Features</h2>
          </div>
          <div class="tabbed-area row">
            <!-- Nav tabs -->
            <div class="feature-nav nav nav-pill flex-column col-lg-4 col-md-6 col-12 order-0 order-md-1" role="tablist" aria-orientation="vertical">
              <a class="btn mb-lg-3 active" href="#feature-1" aria-controls="feature-1" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-magic mr-2"></i>Beautiful web interface
              </a>
              <a class="btn mb-lg-3" href="#privacy" aria-controls="privacy" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-magic mr-2"></i>Total privacy
              </a>
              <a class="btn mb-lg-3" href="#renderers" aria-controls="renderers" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-magic mr-2"></i>Huge selection of supported devices
              </a>
              <a class="btn mb-lg-3" href="#metadata" aria-controls="metadata" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-magic mr-2"></i>Dynamic metadata
              </a>
              <a class="btn mb-lg-3" href="#online-media" aria-controls="online-media" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-magic mr-2"></i>Online and streaming media
              </a>
              <a class="btn mb-lg-3" href="#feature-3" aria-controls="feature-3" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-chart-bar mr-2"></i>Instant browsing
              </a>
              <a class="btn mb-lg-3" href="#feature-4" aria-controls="feature-4" data-toggle="pill" role="tab" aria-selected="false">
                <i class="fas fa-code mr-2"></i>Live subtitles
              </a>
              <a class="btn mb-lg-3" href="#feature-5" aria-controls="feature-5" data-toggle="pill" role="tab" aria-selected="true">
                <i class="fas fa-rocket mr-2"></i>Support for all files and networks
              </a>
            </div>
            
            <!-- Tab panes -->
            <div class="feature-content tab-content col-lg-8 col-md-6 col-12 order-1 order-md-0">
              <div role="tabpanel" class="tab-pane fade active show" id="feature-1">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/web-interface.gif)"></div></div>
                <p>
                  Connect to your media using any web browser on any device for a feature-rich dive into dynamic pages for every media file you have.
                  Play directly from the browser, or send to your devices.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="privacy">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/pexels-burst-374103.jpg)"></div></div>
                <p>
                  We do not track <strong>any</strong> actions you take in the program. How many other media servers can claim that?
                  Your server is as secure as your home network, and all external requests are made via secure connections.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="renderers">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/devices.png)"></div></div>
                <p>
                  Support for the largest range of media renderers. Connect to your media via UPnP or DLNA on a large selection of devices, whether
                  television, audio device, gaming console, computer, smartphone or more, with regular improvements to all.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="metadata">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/dynamic-metadata.png)"></div></div>
                <p>
                  Dynamic lookup of metadata for your media allows you to easily find related media.
                  Filter videos by actor, director, genre, year and more, and music by artist, genre, year and more.
                  We integrate with services like IMDb and MusicBrainz to dynamically display the correct covers for your videos and music.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="online-media">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/online-media.png)"></div></div>
                <p>Add and manage your online radio channels, podcasts and RSS feeds for all media types and view from any of your connected devices.</p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="feature-3">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/pexels-cottonbro-4065137.jpg)"></div></div>
                <p>
                  Access your media instantly, with no waiting for scans to finish.
                  We have scanning for extra features too, but you still have access to your media in the meantime.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="feature-4">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/pexels-porapak-apichodilok-346885.jpg)"></div></div>
                <p>
                  Even if your video has no subtitles, or it has them in the wrong language, just enable our Live Subtitles feature to download them on the fly. Coupled with our interface which supports 40+ languages, we have first-class international support.
                </p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="feature-5">
                <div data-aspect-ratio="16:9"><div style="background-image:url(assets/img/files-networks.jpg)"></div></div>
                <p>
                  We support passing your media to your devices untouched if they support it, otherwise we will transform it to suit your network, device, and language preferences. We also provide support for your physical media with the ability to directly access your disc drives and disc images.
                </p>
              </div>
            </div><!--//feature-content-->
          </div><!--//tabbed-area-->
        </div><!--//container-->
      </section>
      <section id="about" class="about section-bg">
        <div class="container">
          <div class="section-title">
            <h2>About Us</h2>
          </div>
          <div class="row content">
            <div class="col-lg-6">
              <p>
                Universal Media Server is a free DLNA, UPnP and HTTP/S Media Server.
              </p>
              <p>
                We support all major operating systems, with versions for Windows, Linux and macOS.
              </p>
              <p>
                The program streams or transcodes many different media formats with little or no configuration.
              </p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                It is powered by <a href="https://www.ffmpeg.org/" rel="nofollow">FFmpeg</a>, <a href="https://mediaarea.net/en/MediaInfo" rel="nofollow">MediaInfo</a>, <a href="https://www.opensubtitles.org/" rel="nofollow">OpenSubtitles</a>, <a href="https://crowdin.com/" rel="nofollow">Crowdin</a>, <a href="http://www.mplayerhq.hu/" rel="nofollow">MEncoder</a>, tsMuxeR, AviSynth, VLC and more, which combine to offer support for a wide range of media formats.
              </p>
              <a href="/about/" class="btn-link">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <section id="news" class="services">
        <div class="container">
          <div class="section-title">
            <h2>News</h2>
          </div>
          <div class="row">
            <?php
              try {
                // Connect to database
                $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                if (mysqli_connect_errno()) {
                  printf("Database connection failed. Not displaying News content: %s\n", mysqli_connect_error());
                } else {
                  // Populate news
                  $query = "SELECT topic_id, topic_title, topic_time FROM cS8856_topics WHERE forum_id=3 AND topic_id != 378 ORDER BY topic_time DESC LIMIT 4";
                  if ($result = mysqli_query($link, $query)) {
                    while ($list = mysqli_fetch_assoc($result)) {
                      $date = date("Y/m/d", $list['topic_time']);
                      echo '
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                          <div class="news-item">
                            <h4><a href="/forum/viewtopic.php?f=8&amp;t='.$list['topic_id'].'">'.$list['topic_title'].'</a></h4>
                            <p>'.$date.'</p>
                          </div>
                        </div>
                      ';
                    }
                    mysqli_free_result($result);
                  }
                  mysqli_close($link);
                }
              } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
              }
            ?>
            <a href="/news/" class="btn-link mx-auto">See older news</a>
          </div>
        </div>
      </section>
    </main>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
<?php include "cache_end.php"; ?>