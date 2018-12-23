<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>PhP database test</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <? include "view.php" ?>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Pk</span> Web Design</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Php Database website test</h1>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1></h1>
        <form action="tracker.php" method="get">
          <input type="text" class="text_1" name="nameInput" placeholder="Enter name...">
          <input type="email" name="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <h1>WEEKEND SALE!</h1>
        <div class="box">
          <form class="" action="click-1.php" method="post">
            <input class="click1" type="image" name="submit" src="img/add/add3.jpg" onclick="submit" alt="Submit"/>
          </form>
        </div>
        <div class="box">
          <form class="" action="click-2.php" method="post">
            <input class="click1"type="image" name="submit" src="img/add/add1.jpg" onclick="submit" alt="Submit"/>
          </form>
        </div>
        <div class="box">
          <form class="" action="click-3.php" method="post">
            <input class="click1"type="image" name="submit" src="img/add/add2.jpg" onclick="submit" alt="Submit"/>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <p>Pk-Design, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
