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
      <a href="https://bsky.app/profile/universalmediaserv.bsky.social" title="UMS on Bluesky" style="top:-3px;position:relative;margin-right:18px;">
        <svg role="img" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" id="Bluesky--Streamline-Simple-Icons" height="48" width="48"><desc>Bluesky Streamline Icon: https://streamlinehq.com</desc><title>Bluesky</title><path d="M24 21.6c-2.174 -4.228 -8.092 -12.106 -13.596 -15.99C5.132 1.888 3.122 2.532 1.804 3.13 0.278 3.816 0 6.16 0 7.536c0 1.38 0.756 11.3 1.248 12.958 1.63 5.472 7.426 7.32 12.766 6.728 0.272 -0.04 0.55 -0.078 0.83 -0.112 -0.276 0.044 -0.552 0.08 -0.83 0.112 -7.824 1.16 -14.774 4.01 -5.66 14.156 10.026 10.38 13.74 -2.226 15.646 -8.616 1.906 6.39 4.1 18.542 15.466 8.616 8.534 -8.616 2.344 -12.996 -5.48 -14.156a17.482 17.482 0 0 1 -0.83 -0.112c0.28 0.034 0.558 0.072 0.83 0.112 5.34 0.594 11.136 -1.256 12.766 -6.728 0.492 -1.656 1.248 -11.58 1.248 -12.956 0 -1.38 -0.278 -3.722 -1.804 -4.412 -1.318 -0.596 -3.328 -1.24 -8.6 2.48C32.092 9.496 26.174 17.374 24 21.6Z" fill="rgb(71, 178, 228)" stroke-width="2"></path></svg>
      </a>
      <a href="https://x.com/UMS16" title="UMS on X"><i class="icofont-twitter"></i></a>
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

      if (hasBeta) {
        document.getElementById("download-link-beta").href="<?php if (isset($patreonDownloadLinkBeta)) { echo $patreonDownloadLinkBeta; } ?>";
      }

      if (OS === 'macOS') {
        if (isAppleSilicon()) {
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-arm.dmg";
        } else if (!version || parseFloat(version) < 10.15) {
          document.getElementById("apple-run-link").classList.remove("d-none");
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-pre10.15.dmg";
        } else {
          document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>.dmg";
        }
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for macOS';
        if (hasBeta) {
          document.getElementById("download-link-beta").text = 'Download pre-release for macOS';
        }
      } else if (OS === 'Windows') {
        var architecture = '-x86_64';
        if (CPU === 'ia32') {
          architecture = '-x86';
        }
        document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Windows-<?php echo $umsVersion; ?>" + architecture + ".exe";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Windows';
        if (hasBeta) {
          document.getElementById("download-link-beta").text = 'Download pre-release for Windows';
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
        } else if (CPU === 'ia32') {
          defaultLinuxArchitecture = 'x86';
        }

        document.getElementById("download-link").href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-" + defaultLinuxArchitecture + ".tgz";
        document.getElementById("download-link").text = 'Download <?php echo $umsVersion ?> for Linux (' + defaultLinuxArchitecture + ')';
        if (hasBeta) {
          document.getElementById("download-link-beta").text = 'Download pre-release for Linux (' + defaultLinuxArchitecture + ')';
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
