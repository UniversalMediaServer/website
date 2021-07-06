<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server | Comparison of Media Servers</title>
    <?php include '../includes/head.php'; ?>
  </head>
  <body>
    <?php include '../includes/menu.php'; ?>
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="text-align: center;">
            <h1>Comparison of Media Servers</h1>
            <div class="ad-container">
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- UMS Comparison Top -->
              <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-3418498412982536"
                data-ad-slot="6342836904"
                data-ad-format="auto"></ins>
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
              <h3>The following is a list comparing UMS to other popular media servers.</h3>
            </div>
        </div>
        <div class="row content">
          <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Universal Media Server</th>
                <th scope="col">PS3 Media Server</th>
                <th scope="col">Serviio</th>
                <th scope="col">KooRaRoo</th>
                <th scope="col">Plex</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Web interface
                    </br>
                    <small>A web interface so it supports even devices without DLNA support</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="partial">Partial¹</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">Automatic bitrate adjustment
                    </br>
                    <small>Automatically changes video bitrate based on your network speed</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td>?</td>
                </tr>
                <tr>
                <th scope="row">Automatic maximum quality
                    </br>
                    <small>100% video and audio quality is maintained when possible by muxing - not transcoding - compatible files.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td>?</td>
                </tr>
                <tr>
                <th scope="row">Instant browsing
                    </br>
                    <small>View your files without having to wait for the folders to be scanned, which can take minutes or hours with large libraries.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">Subtitles on all devices
                    </br>
                    <small>When your device does not support the subtitle format in the video, we add it to the video stream to allow you to view them anyway.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">DTS support
                    </br>
                    <small>Pass along full quality DTS instead of downmixing it to another format.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">Live subtitles
                    </br>
                    <small>If you don't have the subtitles for your file, UMS will download and add them for you via options on your device.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">H.264 transcoding
                    </br>
                    <small>H.264 transcoding achieves the same quality as the traditional codec MPEG-2 with much lower filesize, making it a good option for wireless networks.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">Free
                    </br>
                    <small>UMS is and will always be free.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="partial">Partial²</td>
                <td class="no">No</td>
                <td class="partial">Partial²</td>
                </tr>
                <tr>
                <th scope="row">True Motion (frame interpolation)
                    </br>
                    <small>This takes regular framerates, usually 24fps or 25fps, and adds frames in between to make the motion smoother and more realistic.
This is done using InterFrame, which is an AviSynth plugin that uses SVP libraries.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">Overscan compensation
                    </br>
                    <small>If your TV has overscan - which means it cuts off the edges of videos - we can compensate so you see the whole video.
Many people watch with overscan and never realize what they are missing.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="partial">Partial³</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">Automatic plugin download/install
                    </br>
                    <small>Download and install plugins automatically.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">Unlimited folders on PS3 & Xbox
                    </br>
                    <small>PS3 and Xbox 360 can only display a limited number of folders, but we work around that.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">AviSynth support
                    </br>
                    <small>AviSynth is a powerful and flexible video and audio serving program.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="partial">Partial⁴</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">iTunes support
                    </br>
                    <small>Browse your iTunes library by playlist, artist, album and genre.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td>?</td>
                <td>?</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">Renderer search support
                    </br>
                    <small>We support renderers with search capability.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td>?</td>
                <td>?</td>
                <td>?</td>
                </tr>
                <tr>
                <th scope="row">Maximum network bandwidth setting
                    </br>
                    <small>This allows you to set the speed of your network to ensure smooth playing.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="partial">Partial⁵</td>
                <td class="no">No</td>
                <td class="no">No</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">DVD support
                    </br>
                    <small>We support playing DVDs whether they are in your DVD drive or on your hard drive.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                </tr>
                <tr>
                <th scope="row">Archive support
                    </br>
                    <small>Support for browsing archives like ZIP, RAR, GZ, etc.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="partial">Partial</td>
                <td class="no">No</td>
                <td>?</td>
                <td>?</td>
                </tr>
                <tr>
                <th scope="row">3D SBS video support
                    </br>
                    <small>Most if not all renderers do not support receiving full 3D SBS video over a network, but we work around that.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="partial">Partial</td>
                <td class="no">No</td>
                <td>?</td>
                <td class="yes">Yes</td>
                </tr>
                <tr>
                <th scope="row">High-quality video thumbnails
                    </br>
                    <small>Display the maximum quality and resolution thumbnails that your device can take.</small>
                </th>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="yes">Yes</td>
                <td class="no">No</td>
                <td class="yes">Yes</td>
                </tr>
            </tbody>
            </table>
            <ul class="list-unstyled">
                <li>¹ Available as a paid plugin</li>
                <li>² Free and paid editions exist</li>
                <li>³ No subtitle position correction</li>
                <li>⁴ No multithreading support</li>
                <li>⁵ Not as accurate as the UMS one</li>
            </ul>
        </div>
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>
