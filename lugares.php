<link href="Resources/css/jimgMenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Resources/js/jquery-easing-1.3.pack.js"></script><script type="text/javascript" src="Resources/js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript">
$(document).ready(function () {

  // find the elements to be eased and hook the hover event
  $('div.jimgMenu ul li a').hover(function() {
    
    // if the element is currently being animated (to a easeOut)...
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "310px"}, {duration: 450, easing:"easeOutQuad"});
    } else {
      // ease in quickly
      $(this).stop().animate({width: "310px"}, {duration: 400, easing:"easeOutQuad"});
    }
  }, function () {
    // on hovering out, ease the element out
    if ($(this).is(':animated')) {
      $(this).stop().animate({width: "78px"}, {duration: 400, easing:"easeInOutQuad"})
    } else {
      // ease out slowly
      $(this).stop('animated:').animate({width: "78px"}, {duration: 450, easing:"easeInOutQuad"});
    }
  });
});
</script>
<div class="jimgMenu">
  <ul>
    <li class="landscapes"><a href="#nogo"></a></li>
    <li class="people"><a href="#nogo">People</a></li>
    <li class="nature"><a href="#nogo">Nature</a></li>
    <li class="abstract"><a href="#nogo">Abstract</a></li>
    <li class="urban"><a href="#nogo">Urban</a></li>
  </ul>
</div>
