<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>Placement</title>
    <meta name="keywords" content="smoothy, responsive bootstrap, one page, green, white, free html5 template, templatemo" />
	<meta name="description" content="Smoothy is free HTML5 one-page template for multi-purpose that is based on responsive bootstrap framework." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
   	<link rel="stylesheet" href="css/templatemo_misc.css">
   	<style type="text/css">
   	label
   	{font-size: 16px;}
    img.pics:hover
{
  -webkit-transform: scale(1.2,1.2);
    -moz-transform:scale(1.2,1.2);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}
input[type='text']
{
-webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
    border: 1px solid #848484; 
    outline:0; 
    height:30px; 
    width: 375px;
    padding:2px;
     }
     label
     {
      cursor:pointer;
     }




	 </style>
	

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
function validateForm()
{
var z=0;
var x=document.forms["myForm"]["fname"].value;
var y=document.forms["myForm"]["cgpa"].value;
var a=document.forms["myForm"]["projects"].value;
var b=document.forms["myForm"]["internships"].value;
var c=document.forms["myForm"]["societies"].value;
var d=document.forms["myForm"]["nontechnical"].value;
var e=document.forms["myForm"]["contests"].value;
if (x==null || x=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox").style.borderColor="green";
if (y==null || y=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox1").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox1").style.borderColor="green";
  if (a==null || a=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox2").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox2").style.borderColor="green";
  if (b==null || b=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox3").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox3").style.borderColor="green";
  if (c==null || b=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox4").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox4").style.borderColor="green";
  if (d==null || d=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox5").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox5").style.borderColor="green";
  if (e==null || e=="")
  {
  document.getElementById("wrong").style.display="block";
  document.getElementById("fnamebox6").style.borderColor="red";
  window.location="./placement.php#redirect";
  z=1;
  }
  else
    document.getElementById("fnamebox6").style.borderColor="green";
  if (z==1)
  {
    return false;
  }
  else
  {
         
		   var t = 0;
		   var valid = (y.match(/^-?\d*(\.\d+)?$/));
           //var regex = new RegExp([0-9]);
		  // var regey =  new RegExp("[0-9]/[0-9.0-9]")
		  // if(regex.test
		    if(!valid)
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox1").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		 
		  
		   if(isNaN(a))
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox2").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		  
		    if(isNaN(b))
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox3").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		    if(isNaN(c))
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox4").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		    if(isNaN(d))
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox5").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		    if(isNaN(e))
		   {
		   t =1 ;
		   document.getElementById("wrong").style.display="block";
		   document.getElementById("fnamebox6").style.borderColor="red";
		    document.getElementById("wrong").innerHTML="Invalid Input . Kindly enter valid number";
		   window.location="./placement.php#redirect";
		   
		   }
		   if(t==1)
		   return false;
		   else 
		   return true ;
 } 
}
</script>

  </head>
  <body>
    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a rel="nofollow" href="./index.html"><img src="images/templatemo_logo.png" alt="logo"></a>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 templatemo_col9">
          	<div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">Home</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
            
  </header>
  	<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
      <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
          <div class="item project-post">
            <div class="templatemo_about_box">
                          <div class="square_coner">
                           <span class="texts-a"><a  href="./mockpapers.php"><img class = "pics" src="port002.png" height="80" width="80"></img></a></span>
                          </div>
                         </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
          <div class="item project-post">
            <div class="templatemo_about_box">
                          <div class="square_coner">
                           <span class="texts-a"><a  href="./quiz.php"><img class = "pics" src="port001.png" height="80" width="80"></img></a></span>
                          </div>
                          </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
          <div class="item project-post">
            <div class="templatemo_about_box">
                          <div class="square_coner">
                           <span class="texts-a"><a  href="./placement.php"><img class = "pics" src="port003.png" height="80" width="80"></img></a></span>
                          </div>
                         </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
          <div class="item project-post">
            <div class="templatemo_about_box">
                          <div class="square_coner">
                           <span class="texts-a"><a href="./question.php?page=1"><img class = "pics" src="port004.png" height="80" width="80"></img></a></span>
                          </div>
                        </div>
          </div>
        </div>
    </div>
    </div>

<!--Your Code Here-->
<a id="redirect"></a>
<div style="margin-left:30px;margin-top:30px;padding-top:50px;font-weight:bold;padding-left:160px;">
<form action="./predictor.php" name="myForm" method="post" onsubmit="return validateForm()">
<div style = "color:red" >(All * marked fields are compulsory)</div>
<h2>Please Enter The Details Honestly</h2><br>
<div style="margin:40px;">
   <div id="wrong" style="display:none;color:red;">*Some fields are missing</div>
Name <span style="color:red">*</span><br><br>
<input  type="text" name="fname" id="fnamebox" style="padding:2px;height:30px;width:370px;"/><br><br><br>
CGPA<span style="color:red">*</span><br><br>
<input name = "cgpa" id="fnamebox1" type="text" /><br><br><br>
Number of projects completed till now <span style="color:red">*</span><br><br>
<input name = "projects" id="fnamebox2" type="text" /><br><br><br>
Number of Technical internships done till now <span style="color:red">*</span><br><br>
<input name = "internships" id="fnamebox3" type="text" /><br><br><br>
Number of Technical societies or events involved in <span style="color:red">*</span><br><br>
<input name = "societies" id="fnamebox4" type="text" /><br><br><br>
No of non technical events or competitions or societies taken part in <span style="color:red">*</span><br><br>
<input name = "nontechnical" id="fnamebox5" type="text" /><br><br><br>
No of global or national  coding competitions taken part in <span style="color:red">*</span><br><br>
<input name = "contests" id="fnamebox6" type="text" /><br><br><br>
Have you worked with these languages and  technologies with high proficiency  to be able to answer at the time of interview<br><br>
<ul class="ss-choices" style="list-style-type:none;">
  <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="java" value="Java" class="ss-q-checkbox" id="group_3_1">
Java</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="php" value="PHP" class="ss-q-checkbox" id="group_3_2">
PHP</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="python" value="Python" class="ss-q-checkbox" id="group_3_3">
Python</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="ruby" value="Ruby on Rails" class="ss-q-checkbox" id="group_3_4">
Ruby on Rails</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="jsp" value="Jsp" class="ss-q-checkbox" id="group_3_5">
Jsp</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="ajax" value="Ajax" class="ss-q-checkbox" id="group_3_6">
Ajax</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="hacking" value="Hacking" class="ss-q-checkbox" id="group_3_7">
Hacking</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="node" value="Node.js" class="ss-q-checkbox" id="group_3_8">
Node.js</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="ccna" value="CCNA" class="ss-q-checkbox" id="group_3_9">
CCNA</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="machine" value="Machine Learning or Data Mining" class="ss-q-checkbox" id="group_3_10">
Machine Learning or Data Mining</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="dotnet" value=".Net" class="ss-q-checkbox" id="group_3_11">
.Net</label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="nosql" value="NOSql " class="ss-q-checkbox" id="group_3_12">
NOSql ( MongoDb,  Neo4J  , Hbase ,CouchDb etc.) </label></li> 
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="android" value="Android" class="ss-q-checkbox" id="group_3_13">
Android</label></li>
<li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="research" value="Android" class="ss-q-checkbox" id="group_3_13">
Research </label></li><br>
</ul>
</div>

<center><input id ="fsSubmitButton" type="submit" value="SUBMIT"  /></center>
</form>
</div>

  

 
   
  
</html>
<!--Footer Start-->
    <div class="templatemo_footer">
    	<div class="container">
            
        </div>
    </div>
   <!--Footer End-->
	<!-- Bottom Start -->
  <div class="templatemo_bottom">
      <div class="container"></div>
    </div>
    <!-- Bottom End -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          }
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          }

          if($.cookie('view') == 'grid'){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){
              $.cookie('view', 'list');
              get_list()
          });

          $('#grid').click(function(){
              $.cookie('view', 'grid');
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');

              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn();

          });
      });
    </script>
	<script src="js/jquery.singlePageNav.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();

        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
      <script>
     $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
	});
      </script>

      <script> <!-- scroll to specific id when click on menu -->
      	 // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});
      </script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
<!--
    Free Template by templatemo
    http://www.templatemo.com
-->