<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server | About</title>
    <?php include '../includes/head.php'; ?>
  </head>
  <body>
		<?php include '../includes/menu.php'; ?>
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="text-align: center;">
            <h1>About</h1>
						<?php if (!isset($_COOKIE['phpbb3_ra3cc_u']) || $_COOKIE['phpbb3_ra3cc_u'] == "1") { ?>
							<div id="Advertisement">
								<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- UMS About Top -->
								<ins class="adsbygoogle"
										style="display:block"
										data-ad-client="ca-pub-3418498412982536"
										data-ad-slot="1006559032"
										data-ad-format="auto"></ins>
								<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
							</div>
						<?php } ?>
          </div>
        </div>
      </div>
    </section>
    <main id="main">
			<section id="about" class="about section-bg">
        <div class="container">
          <div class="row content">
            <div class="col-lg-12">
							<h2>General</h2>
						</div>
					</div>
          <div class="row content">
            <div class="col-lg-6">
              <p>Universal Media Server is a free DLNA, UPnP and HTTP/S Media Server.</p>
              <p>We support all major operating systems, with versions for Windows, Linux and macOS.</p>
              <p>The program streams or transcodes many different media formats with little or no configuration.</p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                It is powered by <a href="https://www.ffmpeg.org/" rel="nofollow">FFmpeg</a>, <a href="https://mediaarea.net/en/MediaInfo" rel="nofollow">MediaInfo</a>, <a href="https://www.opensubtitles.org/" rel="nofollow">OpenSubtitles</a>, <a href="https://crowdin.com/" rel="nofollow">Crowdin</a>, <a href="http://www.mplayerhq.hu/" rel="nofollow">MEncoder</a>, tsMuxeR, AviSynth, VLC and more, which combine to offer support for a wide range of media formats.
              </p>
						</div>
					</div>
          <div class="row content">
            <div class="col-lg-12">
							<p>It was originally based on PS3 Media Server by shagrath, and started by SubJunk, an official developer of PMS, in order to ensure greater stability and file-compatibility.</p>
							<p>If you are interested in seeing how we compare to similar projects, see our <a href="/comparison/">comparison of popular media servers</a>.</p>
							<p>If you would like to donate to the project, which helps offset our server hosting and coffee-related costs, you can use the following button:<br>
							<a rel="nofollow" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KZLD5J8DS6K6W"><img src="../images/btn_donateCC_LG.gif" border="0" /></a></p><br>
						</div>
					</div>
          <div class="row content">
						<div class="col-lg-12">
							<h2>Accolades / Mirrors</h2>
							<a href="http://www.majorgeeks.com/Universal_Media_Server__d7795.html" title="Universal Media Server on MajorGeeks">
								<img src="../images/mg_approved.gif" alt="Tested and approved by MajorGeeks">
							</a>
							<a href="http://mac.majorgeeks.com/files/details/universal_media_server.html" title="Universal Media Server on Mac.MajorGeeks">
								<img src="../images/mmgtested.gif" alt="Tested and approved by Mac.MajorGeeks" style="position:relative;top:-2px;">
							</a>
							<a href="http://www.videohelp.com/tools/Universal-Media-Server" title="Universal Media Server on ViDEOHelp">
								<img src="../images/logo-videohelp.gif" alt="Universal Media Server on ViDEOHelp">
							</a>
							<a href="http://www.softpedia.com/get/Network-Admin/Universal-Media-Server.shtml" title="Universal Media Server on Softpedia">
								<img src="../images/softpedia_free_award_f.gif" alt="Universal Media Server on Softpedia" style="position:relative;top:-8px;">
							</a>
						</div>
					</div>
          <div class="row content">
						<div class="col-lg-12">
							<h2>Device Support</h2>
							<p>We support any device that supports DLNA/UPnP or HTTP, including future devices.</p>
							<p>Below is a partial list of devices that we explicitly support, which means that we have customized our support for them in order to make them work even better than they would be default.</p>
						</div>
          </div>
          <div class="row content">
						<?php
							$renderers = array(
								"AC Ryan PlayOn!HD",
								"AnyCast",
								"Apple iPad",
								"Apple iPhone",
								"Apple iPod",
								"Apple TV",
								"Asus O!Play",
								"BlackBerry",
								"Boxee",
								"Brite-view CinemaTube",
								"Cambridge Audio BD Players",
								"DirecTV HR",
								"D-Link DSM",
								"Freebox",
								"Freecom MusicPal",
								"Google Android",
								"Google Chromecast",
								"Hama Internet Radio",
								"LG Smart TV Upgrader",
								"LG TVs",
								"Logitech Squeezebox",
								"Microsoft Xbox 360",
								"Microsoft Xbox One",
								"Miracast M806",
								"Netgear NeoTV",
								"Nokia N900",
								"Onkyo A/V Receivers",
								"OPPO Blu-ray players",
								"Panasonic Sound Systems",
								"Panasonic TVs",
								"Philips Streamium",
								"Philips TVs",
								"Pioneer Kuro",
								"Popcorn Hour",
								"Realtek media players",
								"Roku",
								"Samsung smart phones",
								"Samsung TVs",
								"Sharp TVs",
								"Showtime",
								"Sony A/V receivers",
								"Sony Blu-ray players",
								"Sony Network Media Players",
								"Sony PlayStation 3 (PS3)",
								"Sony PlayStation 4 (PS4)",
								"Sony PlayStation Vita",
								"Sony smart phones",
								"Sony TVs",
								"Telstra T-Box",
								"Technisat S1+",
								"VideoWeb TV",
								"Vizio Smart TVs",
								"Western Digital WD TV Live",
								"XBMC Media Center",
								"Xtreamer",
								"Yamaha A/V receivers",
							);
							$i = 0;
							foreach ($renderers as $value) {
								echo '<div class="col-lg-4">'.$value.'</div>';
								if ($i == 3) {
									echo '</div><div class="row content">';
									$i = 0;
								}
								$i++;
							}
						?><br><br>
					</div>
          <div class="row content">
						<div class="col-lg-12">
							<h2>Supported by:</h2>
							<p>
								YourKit supports us with <a href="https://www.yourkit.com/java/profiler/">YourKit Java Profiler</a> which we use to improve stability.<br>
								<a href="https://www.yourkit.com/java/profiler/"><img src="https://www.yourkit.com/images/yklogo.png"></a>
							</p>
							<br>
							<p>
								Contemplate supports us with <a href="http://www.contemplateltd.com/threadsafe/">ThreadSafe</a>, a tool for advanced static analysis for Java concurrency.<br>
								<a href="http://www.contemplateltd.com" title="Contemplate">
									<img src="../images/logo-contemplate.png" alt="Contemplate logo">
								</a>
							</p>
						</div>
					</div>
        </div>
      </section>
		</main>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>