<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Courtland's Business Validation Checklist web app</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="is-preload landing">
    <div id="page-wrapper">

      <!-- Banner -->
        <section id="banner">
          <div class="content">
            <header>
              <h2>Validate your business idea</h2>
              <p>A simple checklist <a href="https://www.indiehackers.com/csallen/post/d5073c226d">shared</a>
              by <a href="https://www.indiehackers.com/csallen/">@csallen</a>.</p>
              <p>Made by <a href="https://chr15m.github.io/">Chris McCormick</a>.</p>
            </header>
            <span class="image"><img src="images/startup.jpg" alt="" /></span>
          </div>
          <a href="#checklist" class="goto-next scrolly">Next</a>
        </section>

        <section id="signup" class="wrapper style2 special fade">
          <div class="container">
            <header>
              <p>Sign up to my newsletter to hear about tech I'm building.</p>
            </header>
            <script src="https://mccormick.cx/tinysignup.php?list=invention&message=%20"></script>
          </div>
        </section>

      <!-- Five -->
        <section id="checklist" class="wrapper style1">
          <header class="major"><h2>The checklist</h2></header>
          <h2 id="score-container">Score: <span class="score">0 / 0</span></h2>
          <?php system("lumo -K -c `cat .classpath` render.cljs"); ?>          
          <header class="major">
            <h2>Score: <span class="score">0 / 0</span></h2>
          </header>
        </section>

       <section id="about" class="wrapper">
          <div class="container">
            <header class="major">
              <h2>About</h2>
            </header>
            <blockquote>
              <p><a href="https://www.indiehackers.com/csallen/">@csallen</a>:</p>
              <p>This validation checklist is loosely modeled off of <a href="https://brianbalfour.com/essays/product-market-fit-isnt-enough">Brian Balfour's Four Fits</a>, which I highly recommend reading about.</p>
              <p>It's also modeled off of my [Courtland's] personal goals. Some of them may be goals you share (e.g. build a company that can be self-sustaining), but others may not, so make sure to tune it to your liking.</p>
              <p>To use this list, simply check your business ideas against the various questions and evaluate how they perform compared to each other. It's also a good way to tweak your business ideas to make them better.</p>
              <p>(Note that a "product idea" is not the same as a "business idea." A product is just one small part of a business. So if your ideas are only for products, they'll likely score poorly on this list.)</p>
            </blockquote>
          </div>
        </section>        

      <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
            <li><a href="https://twitter.com/mccrmx" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <!--<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>-->
            <li><a href="https://github.com/chr15m/courtlandschecklist" class="icon fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="mailto:chris@mccormick.cx" class="icon fa-envelope"><span class="label">Email</span></a></li>
          </ul>
          <ul class="copyright">
            <li>Content by Courtland Allen.</li>
            <li>Site &copy; Chris McCormick.</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </footer>

    </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/count.js"></script>
      <script>
        // mangle the signup form to resemble the original
        $(document).ready(function() {
          $(".tinysignup form").addClass("cta");
          var inner = $("<div class='row gtr-uniform gtr-50'>");
          $(".tinysignup form").append(inner);
          inner.append($(".tinysignup input[name=email]"));
          inner.append($(".tinysignup button"));
          $(".tinysignup button").addClass("button fit primary").text("Sign up").wrap("<div class='col-4 col-12-xsmall'>")
          $(".tinysignup input[name=email]").attr("placeholder", "Your Email Address").wrap("<div class='col-8 col-12-xsmall'>");
        });
      </script>
  </body>
</html>
