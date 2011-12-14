  <header><?php Pinp_View::partial('header.html'); ?>
    <div id="menu">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="https://github.com/FourElementsDevelopment/pinp">Fork</a></li>
      <li><a href="/about">About</a></li>
    </ul>
  </div>
  </header>
  <div id="main" role="main">
    <section>
    <?php 
      if (MAINTAINANCE == true) {
        Pinp_View::partial('maintainance.html');
      } else {
        Pinp_View::partial('main.html');
      }
    ?>
    </section>
  </div>
  <footer><?php Pinp_View::partial('footer.html'); ?></footer>