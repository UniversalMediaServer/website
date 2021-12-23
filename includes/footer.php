<?php include 'config.php'; ?>

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
</footer>

<a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

<!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

<!-- Display the relevant download link -->
<script src="https://cdn.jsdelivr.net/npm/ua-parser-js@0/dist/ua-parser.min.js"></script>
<script type="text/javascript">
  window.onload = function() {
    if (document.getElementById("download-link")) {
      var parser = new UAParser();
      var result = UAParser();
      var OS = parser.getOS().name;
      var version = parser.getOS().version;
      var defaultLinuxArchitecture = 'x86_64';
      var hasBeta = Boolean(document.getElementById("download-link-beta"));

      if (OS === 'Mac OS') {
        if (!version || parseFloat(version) < 10.15) {
          document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-pre10.15.dmg";
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-pre10.15.dmg";
          }
        } else {
          document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.dmg";
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.dmg";
          }
        }
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for macOS';
        if (hasBeta) {
          document.getElementById("download-link-beta").text = 'Download beta for macOS';
        }
      } else if (OS === 'Windows') {
        document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Windows';
        if (hasBeta) {
          document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe";
          document.getElementById("download-link-beta").text = 'Download beta for Windows';
        }
      } else if (OS === 'Linux') {
        var CPU = parser.getCPU();
        if (CPU === 'amd64') {
          defaultLinuxArchitecture = 'x86_64';
        } else if (CPU === 'arm64') {
          defaultLinuxArchitecture = 'arm64';
        } else if (CPU === 'armhf') {
          defaultLinuxArchitecture = 'armhf';
        } else if (CPU === 'arm') {
          defaultLinuxArchitecture = 'armel';
        }

        document.getElementById("download-link").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>-" + defaultLinuxArchitecture + ".tgz";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Linux (' + defaultLinuxArchitecture + ')';
        if (hasBeta) {
          document.getElementById("download-link-beta").href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>-" + defaultLinuxArchitecture + ".tgz";
          document.getElementById("download-link-beta").text = 'Download beta for Linux (' + defaultLinuxArchitecture + ')';
        }
      }
    }
  };
</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://www.spirton.com/piwik/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "19"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
