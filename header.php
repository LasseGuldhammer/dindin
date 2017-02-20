<ul  class="topnav" id="myTopnav">
  
  <li class="navlogo"="javascript:void(0);"><img src="images/dindinlogo.png" alt="dindin"/> </li>
<li class="navname"="javascript:void(0);"><h2></h2> </li>
  <li><a href="#home">RECIPIES</a></li>
  <li><a href="#news">ABOUT</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="#about">HOW IT WORKS</a></li>
  <li class="icon"> <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a> </li>
</ul>


<script src="js/nav.js"></script>

<?php include('header.php')
     ?>




      /* ----------------------------------------------------MENU BAR----------------------------------------------------------------*/
  
  /*  TOP NAV MENU  */

body {margin:1;}
 /* Remove margins and padding from the list, and add a black background color */

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#a5cc3c;
  
}

/* Float the list items side by side */
ul.topnav li {float: right;
margin:20px;
padding-bottom:10px;

}

/*Style the logo*/
.navlogo { position:absolute;
margin-bottom:10px;

}


/* Style the links inside the list items */
ul.topnav li a {
    margin-top:10px;
    display: inline-block;
    color:white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    font-family: 'Roboto', sans-serif;
   
}

/* Change background color of links on hover */
ul.topnav li a:hover {color: #252525;

}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}


/*Add media queries*/
/*:not(:first-child) bætt framan við ul.topnav li til að halda home skritinni*/
 /* When the screen is less than 920 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
@media screen and (max-width:920px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
@media screen and (max-width:920px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }

 
}
  /*this makes the navlogo dissapear in the responsive menu*/
ul.topnav.responsive li.navlogo{display:none;}


/* this makes the navname dissapear in the responsive menu*/
ul.topnav.responsive li.navname{display:none;}