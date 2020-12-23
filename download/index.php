<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server | Downloads</title>
    <?php include '../includes/head.php'; ?>
  </head>
  <body>
		<?php include '../includes/menu.php'; ?>
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
            <h1>Download</h1>
            <div class="d-lg">
              <a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe" class="btn-get-started scrollto" id="download-link">Download</a>
              <a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe" class="btn-download-beta scrollto" id="download-link-beta">Download beta</a>
            </div>
            <?php if (!isset($_COOKIE['phpbb3_ra3cc_u']) || $_COOKIE['phpbb3_ra3cc_u'] == "1") { ?>
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- UMS Downloads -->
              <ins class="adsbygoogle"
                  style="display:block;margin-top:25px;"
                  data-ad-client="ca-pub-3418498412982536"
                  data-ad-slot="5871244361"
                  data-ad-format="auto"
                  data-full-width-responsive="true"></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <main id="main">
      <section id="features" class="features-section">
        <div class="container text-center">
          <div class="tabbed-area row">
            <!-- Nav tabs -->
            <div class="feature-nav nav nav-pill flex-column col-lg-4 col-md-6 col-12 order-0 order-md-1" role="tablist" aria-orientation="vertical">
              <a class="btn mb-lg-3 active" href="#feature-1" aria-controls="feature-1" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-windows"></i>&nbsp;&nbsp;Windows
              </a>
              <a class="btn mb-lg-3" href="#renderers" aria-controls="renderers" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-apple"></i>&nbsp;&nbsp;macOS
              </a>
              <a class="btn mb-lg-3" href="#metadata" aria-controls="metadata" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-linux"></i>&nbsp;&nbsp;Linux
              </a>
              <a class="btn mb-lg-3" href="#online-media" aria-controls="online-media" data-toggle="pill" role="tab" aria-selected="false">
                <img src="/assets/img/docker.png" style="width:16px;height:16px;"/>&nbsp;&nbsp;Docker
              </a>
            </div>
            
            <!-- Tab panes -->
            <div class="feature-content tab-content col-lg-8 col-md-6 col-12 order-1 order-md-0">
              <div role="tabpanel" class="tab-pane fade active show" id="feature-1">
                <h2>Windows installer<?php if ($umsVersionBeta) { echo 's'; } ?></h2>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe">Download <?php echo $umsVersion; ?> installer for Windows</a></p>
                <?php if ($umsVersionBeta) { ?>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe">Download <?php echo $umsVersionBeta; ?> installer for Windows</a></p>
                <?php } ?>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="renderers">
                <h2>macOS</h2>
                <h4>Disk images: (recommended for most users)</h4>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.dmg">Download <?php echo $umsVersion; ?> for macOS 10.15+</a></p>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-pre10.15.dmg">Download <?php echo $umsVersion; ?> for macOS pre-10.15</a></p>
                <?php if ($umsVersionBeta) { ?>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.dmg">Download <?php echo $umsVersionBeta; ?> for macOS 10.15+</a></p>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-pre10.15.dmg">Download <?php echo $umsVersionBeta; ?> for macOS pre-10.15</a></p>
                <?php } ?>
                <h4>Homebrew</h4>
                <p>Run <a href="https://formulae.brew.sh/cask/universal-media-server">brew cask install universal-media-server</a></p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="metadata">
                <h2>Linux tarballs</h2>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-x86_64.tgz">Download <?php echo $umsVersion; ?> for Linux (x86_64)</a></p>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-x86.tgz">Download <?php echo $umsVersion; ?> for Linux (x86)</a></p>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-armhf.tgz">Download <?php echo $umsVersion; ?> for Linux (armhf)</a></p>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-arm64.tgz">Download <?php echo $umsVersion; ?> for Linux (arm64)</a></p>
                <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-armel.tgz">Download <?php echo $umsVersion; ?> for Linux (arm/armel)</a></p>
                <?php if ($umsVersionBeta) { ?>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-x86_64.tgz">Download <?php echo $umsVersionBeta; ?> for Linux (x86_64)</a></p>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-x86.tgz">Download <?php echo $umsVersionBeta; ?> for Linux (x86)</a></p>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-armhf.tgz">Download <?php echo $umsVersionBeta; ?> for Linux (armhf)</a></p>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-arm64.tgz">Download <?php echo $umsVersionBeta; ?> for Linux (arm64)</a></p>
                  <p><a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-armel.tgz">Download <?php echo $umsVersionBeta; ?> for Linux (arm/armel)</a></p>
                <?php } ?>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="online-media">
                <h3>Docker</h3>
                <p>Run <a href="https://hub.docker.com/r/universalmediaserver/ums">docker pull universalmediaserver/ums</a></p>
              </div>
            </div><!--//feature-content-->
          </div><!--//tabbed-area-->
        </div><!--//container-->
      </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container footer-bottom clearfix">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

    <!-- Display the relevant download link -->
    <script src="https://cdn.jsdelivr.net/npm/ua-parser-js@0/dist/ua-parser.min.js"></script>
		<script type="text/javascript">
			window.onload = function() {
				var parser = new UAParser();
				var result = UAParser();
				var OS = parser.getOS().name;
				var version = parser.getOS().version;
				var defaultLinuxArchitecture = 'x86_64';

				if (OS === 'Mac OS') {
					if (!version || parseFloat(version) < 10.15) {
						document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-pre10.15.dmg"; 
						document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-pre10.15.dmg"; 
					} else {
						document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.dmg"; 
						document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.dmg"; 
          }
					document.getElementById("download-link").text = 'Download for macOS';
					document.getElementById("download-link-beta").text = 'Download beta for macOS';
				} else if (OS === 'Windows') {
          document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe"; 
          document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe"; 
					document.getElementById("download-link").text = 'Download for Windows';
					document.getElementById("download-link-beta").text = 'Download beta for Windows';
        } else if (OS === 'Linux') {
					var CPU = parser.getCPU();
					if (CPU === 'amd64') {
						defaultLinuxArchitecture = 'x86_64';
					} else if (CPU === 'arm64') {
						defaultLinuxArchitecture = 'arm64';
					} else if (CPU === 'arm') {
						defaultLinuxArchitecture = 'armel';
					}

					document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-" + defaultLinuxArchitecture + ".tgz";
					document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-" + defaultLinuxArchitecture + ".tgz";
					document.getElementById("download-link").text = 'Download for Linux (' + defaultLinuxArchitecture + ')';
					document.getElementById("download-link-beta").text = 'Download beta for Linux (' + defaultLinuxArchitecture + ')';
				}
			};
		</script>
		<?php include 'includes/piwik.php'; ?>
  </body>
</html>