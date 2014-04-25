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
<meta name="description" content="The original Porta | 911 Kingsley Street, Asbury Park, NJ |  Eat, Drink, and Be Honest">
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

    <div class="item col1"><img src="instagram/20/11.jpg" alt="" /></div><!-- replace with 5 -->
    <div class="item col1"><img src="instagram/19/2.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/20/3.jpg" alt="" /></div>

        <!-- 438 slider -->

    <div class="item col2">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <a href="images/rite-of-spring.jpg" class="fancybox"><img src="images/rite-of-spring-438.jpg" alt="" /></a>
            </li>
          </ul>
        </div>       
         
    </div>  
    <div class="item col1"><img src="instagram/20/2.jpg" alt="" /></div><!-- replace with 15 -->
    <div class="item giffy"><img src="images/projector-set.jpg" alt=""></div>
    <div class="item col1 up"><img src="instagram/20/4.jpg" alt="" /></div>
    <div class="item col1 up"><img src="instagram/20/12.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/20/7.jpg" alt="" /></div>

    

<!-- 7ways slider can return here -->

  <!-- php include for 7ways -->
      <?php
        $time = date('w'); 
        if($time == 0){ 
           include("sunday-snip.php"); 
        }else if($time == 1){ 
            include('monday-snip.php'); 
        }else if($time == 2){ 
            include('tuesday-snip.php'); 
        }else if($time == 3){ 
            include('wednesday-snip.php'); 
        }else if($time == 4){ 
            include('thursday-snip.php'); 
        }else if($time == 5){ 
            include('friday-snip.php'); 
        }else{ 
            include('saturday-snip.php'); 
        } 
    ?>



    <div class="item col1 up-more"><img src="instagram/20/6.jpg" alt="" /></div>
    <div class="item col1 up"><img src="instagram/20/10.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/20/8.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/20/9.jpg" alt="" /></div>
    <div class="item col1"><img src="instagram/20/5.jpg" alt="" /></div>

    </div>
    </div>
    <div id="footer"><img src="images/bg_footer.png" alt="Footer" /></div>

</div>


</body>
</html>
