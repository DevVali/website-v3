<footer><br>
  <a href="https://www.tiktok.com/<?php echo "@$username" ?>"><i class="fa-brands fa-tiktok"></i></a>&nbsp;&nbsp;&nbsp;
  <a href="https://www.instagram.com/<?php echo $username ?>"><i class="fa-brands fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
  <p>This site was made by hand with the use of <a href="https://github.com/DevVali/Boostyle">Boostyle</a>, <a href="https://getbootstrap.com">Bootstrap</a> and <a href="https://www.w3schools.com/w3css/">W3.css</a>. <a href="https://github.com/DevVali/ejvali-eu">Get the source code.</a><br>This site has been visited <span id="visits"><code>undefinied</code></span> times.</p>
  <script async src="https://api.countapi.xyz/hit/ejvali-eu/810c7fcc-b244-4bae-84f9-548a229b3b82?callback=websiteVisits"></script>
  <script>
    function websiteVisits(response) {
      document.querySelector("#visits").textContent = response.value;
    }
  </script>
  <p>Contact: <a href="mailto:ejvali@ejvali.eu">ejvali@ejvali.eu</a><br>© 2022 Vali (@ejvali)</p>
</footer>
  
<?php if (isset($_COOKIE["cookieconsent_status"]) == false) { ?>
  <div class="cookie"><span style="float:left;padding:14px 16px">This website uses cookies to ensure you get the best experience on our website. <a href="https://www.google.com/policies/technologies/cookies/" target="_blank">Learn more</a></span><button onclick="onCookieconsent();" class="btn btn-primary" style="float:right;padding:14px 16px;">Got it!</button></div>
  <?php } ?>