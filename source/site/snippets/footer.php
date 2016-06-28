<footer>
<div class="container">
  <div class="columns six offset-by-three places">
  </div>
  <div class="copyright">
     <span>&copy; 2016</span>
     <span>Have a great <span id="day"></span></span>
  </div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>
  var _gaq=[['_setAccount','UA-15758586-2'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<script>
    $("p:has(img)").contents().unwrap();
</script>

<script type="text/javascript">
    var d = new Date();
    var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday",                         "Thursday", "Friday", "Saturday");
    document.getElementById("day").innerHTML = (weekday[d.getDay()]);
</script>

</body>

</html>
