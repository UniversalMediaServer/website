<?php include 'config.php'; ?>

<footer id="footer">
  <div class="container footer-bottom clearfix">
    <div class="credits" style="margin-top: 26px;">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    <span class="social" style="font-size: 48px;">
      <a href="https://twitter.com/UMS16" title="UMS on Twitter"><i class="icofont-twitter"></i></a>
      <a href="https://www.facebook.com/UniversalMediaServer" title="UMS on Facebook"><i class="icofont-facebook"></i></a>
      <a href="https://github.com/UniversalMediaServer/UniversalMediaServer/" title="UMS on GitHub"><i class="icofont-github"></i></a>
    </span>
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

<script src="https://cdn.jsdelivr.net/npm/ua-parser-js/dist/ua-parser.min.js"></script>

<!-- Display the relevant download link -->
<script type="text/javascript">
  // from https://github.com/faisalman/ua-parser-js/issues/732#issue-2348848266
  // todo: user the version of this function from the ua-parser-js lib directly instead of a copy
  function isAppleSilicon() {
    try {
      // Best guess if the device uses Apple Silicon: https://stackoverflow.com/a/65412357
      const w = document.createElement("canvas").getContext("webgl");
      if (w == null) {
        return false;
      }
      const d = w.getExtension("WEBGL_debug_renderer_info");
      const g = (d && w.getParameter(d.UNMASKED_RENDERER_WEBGL)) || "";
      if (g.match(/Apple/) && !g.match(/Apple GPU/)) {
        return true;
      }

      if (
        w.getSupportedExtensions().includes("WEBGL_compressed_texture_s3tc_srgb")
      ) {
        return true;
      }
    } catch {
      return false;
    }

    return false;
  }

  window.onload = function() {
    if (document.getElementById("download-link")) {
      var uap = new UAParser();
      var uapResult = uap.getResult();

      var OS = uapResult.os.name;
      var version = uapResult.os.version;
      var defaultLinuxArchitecture = 'x86_64';
      var hasBeta = Boolean(document.getElementById("download-link-beta"));
      var CPU = uapResult.cpu.architecture;

      if (OS === 'macOS') {
        if (isAppleSilicon()) {
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-arm.dmg";
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-macOS-<?php echo $umsVersionBeta; ?>-arm.dmg";
          }
        } else if (!version || parseFloat(version) < 10.15) {
          document.getElementById("apple-run-link").classList.remove("d-none");
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-pre10.15.dmg";
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-macOS-<?php echo $umsVersionBeta; ?>-pre10.15.dmg";
          }
        } else {
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>.dmg";
          if (hasBeta) {
            document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-macOS-<?php echo $umsVersionBeta; ?>.dmg";
          }
        }
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for macOS';
        if (hasBeta) {
          document.getElementById("download-link-beta").text = 'Download beta for macOS';
        }
      } else if (OS === 'Windows') {
        var architecture = '-x86';
        if (CPU === 'amd64') {
          // architecture = '-x86-64';
        }
        document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Windows-<?php echo $umsVersion; ?>" + architecture + ".exe";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Windows';
        if (hasBeta) {
          document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-Windows-<?php echo $umsVersionBeta; ?>" + architecture + ".exe";
          document.getElementById("download-link-beta").text = 'Download beta for Windows';
        }
      } else if (OS === 'Linux') {
        if (CPU === 'amd64') {
          defaultLinuxArchitecture = 'x86_64';
        } else if (CPU === 'arm64') {
          defaultLinuxArchitecture = 'arm64';
        } else if (CPU === 'armhf') {
          defaultLinuxArchitecture = 'armhf';
        } else if (CPU === 'arm') {
          defaultLinuxArchitecture = 'armel';
        }

        document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-" + defaultLinuxArchitecture + ".tgz";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Linux (' + defaultLinuxArchitecture + ')';
        if (hasBeta) {
          document.getElementById("download-link-beta").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersionBeta; ?>/UMS-Linux-<?php echo $umsVersionBeta; ?>-" + defaultLinuxArchitecture + ".tgz";
          document.getElementById("download-link-beta").text = 'Download beta for Linux (' + defaultLinuxArchitecture + ')';
        }
      }
    }
  };
</script>

<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.spirton.com/piwik/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '19']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.spirton.com/piwik/matomo.php?idsite=19&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
