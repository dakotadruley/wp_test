<!DOCTYPE html>
<html>

<?php wp_footer(); ?>
<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="site-logo-text site-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>dakota</strong>_dancing</a></h1>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Explore</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="<?php echo site_url('/about-me') ?>">About Me</a></li>
                <li><a href="#">Classes</a></li>
              </ul>
            </nav>
          </div>

        <div class="nav-list">
          <h3 class="headline headline--small">Connect With Me</h3>
          <nav>
            <ul>
              <li><a href="https://www.instagram.com/dakota_dancing/?hl=en">Instagram</a></li>
              <li><a href="">Email</a></li>
              <!-- potentially add contact form -->
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>
  </html>