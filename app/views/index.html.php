  <header><?php Pinp_View::partial('header.html'); ?></header>
  <div id="menu">
    <ul>
      <li>Home</li>
      <li>About</li>
    </ul>
  </div>
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