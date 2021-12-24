<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="downloadModalLabel">Download</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>
          <a type="button" class="btn btn-primary subscribe-button" href="https://www.patreon.com/bePatron?u=34420953">
            <svg viewBox="0 0 569 546" xmlns="http://www.w3.org/2000/svg"><g><circle cx="362.589996" cy="204.589996" data-fill="1" id="Oval" r="204.589996"></circle><rect data-fill="2" height="545.799988" id="Rectangle" width="100" x="0" y="0"></rect></g></svg>
            Subscribe for the latest download: <strong><?php echo $umsVersionPatreon; ?></strong>
          </a>
        </p>
        <p>Builds are released to <a href="https://www.patreon.com/bePatron?u=34420953" title="Universal Media Server on Patreon" target="_blank">Patreon</a> first to reward our patrons.</p>
        <p id="apple-run-link" class="d-none"><a href="https://support.apple.com/en-al/guide/mac-help/mh40616/mac" target="_blank">Please see this page from Apple if you are having trouble running the program.</a></p>
        <p>An older, public build can be downloaded below:</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-light mr-auto" href="/download/">All Downloads</a>
        <a type="button" class="btn btn-secondary" href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersion; ?>.exe" id="download-link">Download <?php echo $umsVersion; ?></a>
        <?php if ($umsVersionBeta) { ?>
          <a href="https://www.fosshub.com/Universal-Media-Server.html?dwl=UMS-<?php echo $umsVersionBeta; ?>.exe" class="btn-download-beta scrollto" id="download-link-beta">Download beta</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <a href="/" class="logo mr-auto"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="/#hero">Home</a></li>
        <li><a href="/#features">Features</a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#news">News</a></li>
        <li class="drop-down">
          <a href="">Support</a>
          <ul>
            <li><a href="https://support.universalmediaserver.com"><i class='bx bx-book'></i> Knowledge base</a></li>
            <li><a href="/forum/"><i class='bx bx-support'></i> Forum</a></li>
            <li><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/issues"><i class='bx bx-bug'></i> Bug report</a></li>
          </ul>
        </li>
        <li class="drop-down">
          <a href="">Contribute</a>
          <ul>
            <li><a href="https://github.com/UniversalMediaServer/UniversalMediaServer/"><i class='bx bxl-github'></i> Code</a></li>
            <li><a href="https://crowdin.com/project/universalmediaserver"><i class='bx bx-world'></i> Translate</a></li>
            <li><a href="/donate/"><i class='bx bx-donate-heart'></i> Donate</a></li>
          </ul>
        </li>
        <li><a href="/donate/">Donate</a></li>
      </ul>
    </nav>

    <a href="/download/" class="get-started-btn scrollto" data-toggle="modal" data-target="#downloadModal">Download</a>
  </div>
</header>