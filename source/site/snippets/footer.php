<footer>
    <section id="insta">
    	<div class="container">
    		<div class="two-thirds column">
    			<h3><a href="https://instagram.com/melodyelanelson">Instagram</a></h3>
    			<ul id="instafeed"></ul>
    		</div>
            <div class="one-third column">
                <ul class="footer-menu">
                    <h3>Connect With Me</h3>
                    <li><a href="mailto:melodybinkowski@gmail.com">Email</a></li>
                    <li><a href="http://facebook.com/wanderingsnippets">Facebook</a></li>
                </ul>
            </div>
    	</div>
    </section>
    <div class="container">
      <div class="copyright">
         <span>&copy; 2017</span>
         <span>have a great <span id="day"></span></span>
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

<script type="text/javascript">
    var d = new Date();
    var weekday = new Array("sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
    document.getElementById("day").innerHTML = (weekday[d.getDay()]);
</script>

</body>
</html>
