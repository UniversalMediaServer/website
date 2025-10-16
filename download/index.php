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
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="text-align: center;">
            <h1>Download</h1>
            <div class="d-lg">
              <button class="btn-get-started scrollto" id="download-link" data-toggle="modal" data-target="#downloadModal"> Download Now <i class="icofont-download"></i></button>
              <?php if (isset($patreonDownloadLinkBeta)) { ?>
                <a href="<?php echo $patreonDownloadLinkBeta; ?>" class="btn-download-beta scrollto" id="download-link-beta">Download pre-release</a>
              <?php } ?>
            </div>
            <div class="ad-container">
              <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- UMS Downloads -->
              <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-client="ca-pub-3418498412982536"
                  data-ad-slot="5871244361"
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
      <section id="features" class="features-section">
        <div class="container text-center">
          <div class="tabbed-area row">
            <!-- Nav tabs -->
            <div class="feature-nav nav nav-pill flex-column col-lg-4 col-md-6 col-12 order-0 order-md-1" role="tablist" aria-orientation="vertical">
              <a class="btn mb-lg-3 active" href="#windows" aria-controls="windows" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-windows"></i>&nbsp;&nbsp;Windows
              </a>
              <a class="btn mb-lg-3" href="#macos" aria-controls="macos" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-apple"></i>&nbsp;&nbsp;macOS
              </a>
              <a class="btn mb-lg-3" href="#linux" aria-controls="linux" data-toggle="pill" role="tab" aria-selected="false">
                <i class="icofont-brand-linux"></i>&nbsp;&nbsp;Linux
              </a>
              <a class="btn mb-lg-3" href="#docker" aria-controls="docker" data-toggle="pill" role="tab" aria-selected="false">
                <i class='bx bxl-docker'></i>&nbsp;&nbsp;Docker
              </a>
            </div>
            
            <!-- Tab panes -->
            <div class="feature-content tab-content col-lg-8 col-md-6 col-12 order-1 order-md-0">
              <div role="tabpanel" class="tab-pane fade active show" id="windows">
                <h2>Windows</h2>
                <h4>Installer download</h4>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Windows-<?php echo $umsVersion; ?>-x86_64.exe">Download <?php echo $umsVersion; ?> installer for Windows (x86_64)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Windows-<?php echo $umsVersion; ?>-x86.exe">Download <?php echo $umsVersion; ?> installer for Windows</a></p>
                <?php if (isset($patreonDownloadLinkBeta) && isset($umsVersionBeta)) { ?>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> installer for Windows (x86_64)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> installer for Windows</a></p>
                <?php } ?>
                <h4>Chocolatey</h4>
                <p>Run <a href="https://community.chocolatey.org/packages/ums">choco install ums</a></p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="macos">
                <h2>macOS</h2>
                <h4>Disk images: (recommended for most users)</h4>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>.dmg">Download <?php echo $umsVersion; ?> for macOS (x86_64)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-arm.dmg">Download <?php echo $umsVersion; ?> for macOS ARM (Apple Silicon)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-macOS-<?php echo $umsVersion; ?>-pre10.15.dmg">Download <?php echo $umsVersion; ?> for macOS pre-10.15 (x86_64)</a></p>
                <?php if (isset($patreonDownloadLinkBeta) && isset($umsVersionBeta)) { ?>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for macOS (x86_64)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for macOS ARM (Apple Silicon)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for macOS pre-10.15 (x86_64)</a></p>
                <?php } ?>
                <h4>Homebrew</h4>
                <p>Run <a href="https://formulae.brew.sh/cask/universal-media-server">brew install --cask universal-media-server</a></p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <h2>Linux</h2>
                <h3>Downloads</h3>
                <h4>Tarballs</h4>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-x86_64.tgz">Download <?php echo $umsVersion; ?> for Linux (x86_64)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-x86.tgz">Download <?php echo $umsVersion; ?> for Linux (x86)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-armhf.tgz">Download <?php echo $umsVersion; ?> for Linux (armhf)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-arm64.tgz">Download <?php echo $umsVersion; ?> for Linux (arm64)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-armel.tgz">Download <?php echo $umsVersion; ?> for Linux (arm/armel)</a></p>
                <?php if (isset($patreonDownloadLinkBeta) && isset($umsVersionBeta)) { ?>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for Linux (x86_64)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for Linux (x86)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for Linux (armhf)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for Linux (arm64)</a></p>
                  <p><a href="<?php echo $patreonDownloadLinkBeta; ?>">Download <?php echo $umsVersionBeta; ?> pre-release for Linux (arm/armel)</a></p>
                <?php } ?>
                <h4>AppImage</h4>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-x86_64.AppImage">Download <?php echo $umsVersion; ?> for AppImage (x86_64)</a></p>
                <p><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/releases/download/<?php echo $umsVersion; ?>/UMS-Linux-<?php echo $umsVersion; ?>-x86_64.AppImage.zsync">Download <?php echo $umsVersion; ?> zsync file for AppImage (x86_64)</a></p>
                <h3>Distro Repositories</h4>
                
                <p><a href="https://aur.archlinux.org/packages/ums">Arch Linux</a></p>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="docker">
                <h2>Docker (x86_64)</h2>
                <h3>Alpine Linux (Default, older)</h3>
                <p>Run <a href="https://hub.docker.com/r/universalmediaserver/ums">docker pull universalmediaserver/ums</a></p>
                <h3>Ubuntu (Newer, possibly more stable)</h3>
                <p>Run <a href="https://hub.docker.com/r/universalmediaserver/ums">docker pull universalmediaserver/ums-ubuntu</a></p>
              </div>
            </div><!--//feature-content-->
          </div><!--//tabbed-area-->
        </div><!--//container-->
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>