<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Universal Media Server | Donate</title>
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
            <h1>Donate</h1>
            <div id="donate-button-quick"></div>
            <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
            <script>
            PayPal.Donation.Button({
            env:'production',
            hosted_button_id:'KZLD5J8DS6K6W',
            image: {
            src:'https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif',
            alt:'Donate with PayPal button',
            title:'PayPal - The safer, easier way to pay online!',
            }
            }).render('#donate-button-quick');
            </script>
          </div>
        </div>
      </div>
    </section>
    <main id="main">
      <section id="about" class="about section-bg">
        <div class="container">
          <div class="row content">
            <div class="col-lg-12">
              <p>To quickly donate, please use the button above, otherwise there are more options below.</p>
              <p>Your contribution goes towards offsetting the costs of our web servers - which serve over 330 million requests per month to over 180,000 unique users - as well as provide reward and incentive to the development team to continue to improve our products.</p>
              <p>We support these donation methods in an attempt to make it easier for you to use something you are familiar with. If you would like to donate using another method, please get in touch with us.</p>
              <p><em>Thank</em> you in advance for any contribution.</p><br>
            </div>
          </div>
          <div class="row content">
            <div class="col-lg-12">
              <h2>Patreon</h2>
              <p>We release new versions exclusively to Patreon, and they become available elsewhere when newer versions are released.</p>
              <p>There are also other benefits available via Patreon depending on how much you decide to contribute.</p>
              <p>Donate to <a href="https://www.patreon.com/bePatron?u=34420953">Universal Media Server on Patreon</a>.</p><br>
            </div>
          </div>
          <div class="row content">
            <div class="col-lg-12">
              <h2 id="cryptocurrency">Cryptocurrency</h2>
              <p>We gladly accept donations in the following cryptocurrencies:</p>
              <p>Cardano (ADA): <code>addr1qx8g9nkln6zr4gs5f0r3ysnxgpqum4ekwnt5e77jaglzkensdvxfplz7lr8pg07kcvjpnrfcxzkht3hgmkr86vclmaxqjhja8c</code></p>
              <p>If you would like to donate a cryptocurrency that is not on this page, please let us know and we will provide the details.</p><br>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>