<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--

MADE BY
                                                                     
   _|_|_|      _|      _|      _|_|_|      _|_|_|_|_|      _|    _|  
 _|            _|_|  _|_|        _|            _|          _|    _|  
   _|_|        _|  _|  _|        _|            _|          _|_|_|_|  
       _|      _|      _|        _|            _|          _|    _|  
 _|_|_|        _|      _|      _|_|_|          _|          _|    _|  
                                                                     
                                                        ASBURY PARK                 

-->


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Porta</title>
<meta name="description" content="the original Porta | 911 Kingsley Street, Asbury Park, NJ |  Eat, Drink, and Be Honest">
<link href="style.css" type="text/css" rel="stylesheet" media="screen" />
<link href="instagram.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<link rel="stylesheet" href="jquery.fancybox.css?v=2.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="flex/flexslider.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="jquery.fancybox.pack.js?v=2.0.5"></script>
<script type="text/javascript" src="flex/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<script type="text/javascript">
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
	controlNav: false,
	directionNav: true,
	slideshowSpeed: 6000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	animationSpeed: 600,
	pauseOnHover: true, 
  });
});
</script>
</head>

<body>

<script type="text/javascript">
$('[title]').each( function() {
    var $this = $(this);
    $this.data('title',$this.attr('title'));
    $this.removeAttr('title');
});

$('a').click( function() {
    var $this = $(this);
    var title = $this.data('title');
});
</script>


<div id="wrapper">

  <div id="sidebar">  <?php include 'sidebar.php'; ?>    
</div>
  	<div id="content">
	<div id="tumblelog">
    <img class="cal_head" src="images/header_calendar.png" alt="Calendar" />

    <div class="item col1"><img src="instagram/5/9.jpg" alt="" /></div>
    <div class="item col2 bg-black"><iframe width="418px" height="196" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F97501201"></iframe></div>
    <div class="item col2">
    <!-- slider -->
        <div class="flexslider">
          <ul class="slides">
            <li>
              <a href="images/7-cover.jpg" class="fancybox"><img src="images/7-cover.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-monday.jpg" class="fancybox"><img src="images/7-monday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-tuesday.jpg" class="fancybox"><img src="images/7-tuesday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-wednesday.jpg" class="fancybox"><img src="images/7-wednesday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-thursday.jpg" class="fancybox"><img src="images/7-thursday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-friday.jpg" class="fancybox"><img src="images/7-friday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-saturday.jpg" class="fancybox"><img src="images/7-saturday.jpg" alt="" /></a>
            </li>
            <li>
              <a href="images/7-sunday.jpg" class="fancybox"><img src="images/7-sunday.jpg" alt="" /></a>
            </li>
          </ul>
        </div>        
    </div>
    <div class="item col1"><img src="instagram/5/17.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/12.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/13.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/15.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/14.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/16.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/7.jpg" alt="" /></div>
    <div class="item col2"><a class="fancybox" href="images/bacchanalia-dp.jpg"><img src="images/438_bacchanalia.jpg" alt="Bacchanalia"></a></div>
    <div class="item col1 up"><img src="instagram/5/8.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/18.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/10.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/5/11.jpg" alt="" /></div>
    </div>
    </div>
    <div id="footer"><img src="images/bg_footer.png" alt="Footer" /></div>

</div>


</body>
</html>
