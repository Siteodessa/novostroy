<nav id="main_navigation">

  <div class="logo_block">
<a href="/">
  <img class="logo" src="/logo.png">
</a>
  <div class="logo_title">
    <a href="/">
Квартиры в новостройках Одессы
</a>
  </div>
  </div>
  <div>

      <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'menu' ) ); ?>

    <ul class="phones">
<?php get_template_part('numbers');?>
    </ul>
  </div>
</nav>


<style>
#mshow {
    background-color: #4d9dbe;
    border: 0;
    color: #fff;
    padding: 10px 20px 10px 40px;
    text-transform: uppercase;
    cursor: pointer;
    outline: none;
    position: absolute;
    top: 65px;
    left: auto;
    display: none;
    z-index: 11;
    right: 0;
}
.mobinav {
  position: fixed;
  width: 300px;
  max-width: 55%;
  height: 100%;
  top: 0;
  overflow-y: auto;
  overflow-x: hidden;
  opacity: 0;
  visibility: hidden;
  z-index: 14;
  -webkit-transition-delay: 300ms;
  transition-delay: 300ms;
  left: 0;
}
.mobinav.active {
  opacity: 1;
  visibility: visible;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.mobinav.active .mobinav__inner {
  background-color: #4d9dbe;
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
  -webkit-transition: background-color 0s linear 599ms, -webkit-transform 300ms linear;
  transition: background-color 0s linear 599ms, -webkit-transform 300ms linear;
  transition: transform 300ms linear, background-color 0s linear 599ms;
  transition: transform 300ms linear, background-color 0s linear 599ms, -webkit-transform 300ms linear;
}
.mobinav.active .mobinav__inner:after {
  width: 300%;
  border-radius: 50%;
  -webkit-animation: elastic 150ms ease 300.5ms both;
          animation: elastic 150ms ease 300.5ms both;
}.mobinav__inner ul.phones {
    padding:  0px 10px 0;
    font-size:  18px;
    line-height:  1.6;
}

.mobinav__inner {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  overflow: hidden;
  z-index: 999999;
  -webkit-transform: translate(-100%, 0);
          transform: translate(-100%, 0);
  -webkit-transition: background-color 0s linear 300ms, -webkit-transform 300ms linear;
  transition: background-color 0s linear 300ms, -webkit-transform 300ms linear;
  transition: transform 300ms linear, background-color 0s linear 300ms;
  transition: transform 300ms linear, background-color 0s linear 300ms, -webkit-transform 300ms linear;
}
.mobinav__inner:after {
  content: '';
  position: absolute;
  width: 0;
  height: 100%;
  top: 0;
  right: 0;
  background-color: #4d9dbe;
  border-radius: 50%;
  z-index: -1;
  -webkit-transition: all 300ms linear;
  transition: all 300ms linear;
}
.mobinav.active + button#mshow {
    background: #6ac2e7;
}
@-webkit-keyframes elastic {
  0% {
    border-radius: 50%;
  }
  45% {
    border-radius: 0;
  }
  65% {
    border-top-right-radius: 40px 50%;
    border-bottom-right-radius: 40px 50%;
  }
  80% {
    border-radius: 0;
  }
  90% {
    border-top-right-radius: 20px 50%;
    border-bottom-right-radius: 20px 50%;
  }
  100% {
    border-radius: 0;
  }
}

@keyframes elastic {
  0% {
    border-radius: 50%;
  }
  45% {
    border-radius: 0;
  }
  65% {
    border-top-right-radius: 40px 50%;
    border-bottom-right-radius: 40px 50%;
  }
  80% {
    border-radius: 0;
  }
  90% {
    border-top-right-radius: 20px 50%;
    border-bottom-right-radius: 20px 50%;
  }
  100% {
    border-radius: 0;
  }
}
.mobinav__inner ul {
    margin:  0;
    padding: 100px 10px 0;
}

.mobinav__inner ul li a {
    color:  #fff;
}
@media only screen and (min-width:100px) and (max-width:576px){
#mshow
{
  display: block
  } }

@media only screen and (min-width:576px) and (max-width:768px){ }

@media only screen and (min-width:768px) and (max-width:992px){ }
/* .........toggle icon......... */


.menu-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-110%, -50%) scale(0.4);
  width: 50px;
  height: 50px;
}
.menu-icon .dot {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 10px;
  height: 10px;
  background-color: #ffffff;
  border-radius: 10px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: margin 0.4s ease 0.4s, width 0.4s ease;
  -moz-transition: margin 0.4s ease 0.4s, width 0.4s ease;
  -o-transition: margin 0.4s ease 0.4s, width 0.4s ease;
  transition: margin 0.4s ease 0.4s, width 0.4s ease;
}
.menu-icon .dot:nth-of-type(1) {
  margin-top: -20px;
  margin-left: -20px;
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
  -moz-transform: translate(-50%, -50%) rotate(45deg);
  -ms-transform: translate(-50%, -50%) rotate(45deg);
  -o-transform: translate(-50%, -50%) rotate(45deg);
  transform: translate(-50%, -50%) rotate(45deg);
}
.menu-icon .dot:nth-of-type(2) {
  margin-top: -20px;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
  -moz-transform: translate(-50%, -50%) rotate(-45deg);
  -ms-transform: translate(-50%, -50%) rotate(-45deg);
  -o-transform: translate(-50%, -50%) rotate(-45deg);
  transform: translate(-50%, -50%) rotate(-45deg);
}
.menu-icon .dot:nth-of-type(3) {
  margin-top: -20px;
  margin-left: 20px;
}
.menu-icon .dot:nth-of-type(4) {
  margin-left: -20px;
}
.menu-icon .dot:nth-of-type(6) {
  margin-left: 20px;
}
.menu-icon .dot:nth-of-type(7) {
  margin-top: 20px;
  margin-left: -20px;
}
.menu-icon .dot:nth-of-type(8) {
  margin-top: 20px;
}
.menu-icon .dot:nth-of-type(9) {
  margin-top: 20px;
  margin-left: 20px;
}
.menu-icon.clicked .dot {
  -webkit-transition: margin 0.4s ease, width 0.4s ease 0.4s;
  -moz-transition: margin 0.4s ease, width 0.4s ease 0.4s;
  -o-transition: margin 0.4s ease, width 0.4s ease 0.4s;
  transition: margin 0.4s ease, width 0.4s ease 0.4s;
  margin-left: 0;
  margin-top: 0;
}
.menu-icon.clicked .dot:nth-of-type(1) {
  width: 50px;
}
.menu-icon.clicked .dot:nth-of-type(2) {
  width: 50px;
}

/* .........toggle icon......... */

</style>
<div id="mnav" class="mobinav">
  <div class="mobinav__inner">
    <!--   Content   -->

  <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'menu' ) ); ?>


    <hr>
    <ul class="phones">

      <?php get_template_part('numbers');?>
    </ul>
  </div>
</div>
<button id="mshow"><div class="menu-icon">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</div>Меню</button>
