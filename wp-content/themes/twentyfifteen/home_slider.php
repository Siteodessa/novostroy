<style>
#container { position: absolute; width: 100%; height: 100%; overflow: hidden; } #slides { position: relative; width: 100%; height: 100%;    background: url(/wp-content/uploads/2018/02/bg.jpg) no-repeat; background-size: cover; padding: 0 } #slides .slide { position: absolute; display: -webkit-box; display: -ms-flexbox; display: flex; width: 100%; height: 100%; } #slides .slide .title { position: absolute; top: calc(50% - 0.5em); left: 20px; z-index: 2; padding-top: 5px; font-family: "Reem Kufi", sans-serif; font-size: 5em; color: white; overflow: hidden; } #slides .slide .title .title-text { display: block; -webkit-transform: translateY(1.2em); transform: translateY(1.2em); -webkit-transition: -webkit-transform 1s ease-in-out; transition: -webkit-transform 1s ease-in-out; transition: transform 1s ease-in-out; transition: transform 1s ease-in-out, -webkit-transform 1s ease-in-out;    background: #6ac2e7e8; padding: 0 10px; } #slides .slide .slide-partial { position: absolute; width: 50%; height: 100%; overflow: hidden; -webkit-transition: -webkit-transform 1s ease-in-out; transition: -webkit-transform 1s ease-in-out; transition: transform 1s ease-in-out; transition: transform 1s ease-in-out, -webkit-transform 1s ease-in-out; } .rel { position: relative; height: 500px; } #slides .slide .slide-partial img { position: absolute; z-index: 1; width: 100%; height: 100%; -o-object-fit: cover; object-fit: cover; -webkit-transition: -webkit-transform 1s ease-in-out; transition: -webkit-transform 1s ease-in-out; transition: transform 1s ease-in-out; transition: transform 1s ease-in-out, -webkit-transform 1s ease-in-out; } #slides .slide .slide-left { top: 0; left: 0; -webkit-transform: translateX(-100%); transform: translateX(-100%); } #slides .slide .slide-left img { top: 0; right: 0; -o-object-position: 100% 50%; object-position: 100% 50%; -webkit-transform: translateX(50%); transform: translateX(50%); } #slides .slide .slide-right { top: 0; right: 0; -webkit-transform: translateX(100%); transform: translateX(100%); -webkit-transition-delay: 0.2s; transition-delay: 0.2s; } #slides .slide .slide-right img { top: 0; left: 0; -o-object-position: 0% 50%; object-position: 0% 50%; -webkit-transition-delay: 0.2s; transition-delay: 0.2s; -webkit-transform: translateX(-50%); transform: translateX(-50%); } #slides .slide.active .title .title-text { -webkit-transform: translate(0); transform: translate(0); -webkit-transition-delay: 0.3s; transition-delay: 0.3s; } #slides .slide.active .slide-partial, #slides .slide.active .slide-partial img { -webkit-transform: translateX(0); transform: translateX(0); } #slide-select { position: absolute; bottom: 20px; left: 20px; z-index: 13; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; -ms-flex-pack: distribute; justify-content: space-around; font-family: "Reem Kufi", sans-serif; font-size: 1.5em; font-weight: lighter; color: white; } #slide-select li { position: relative; cursor: pointer; margin: 0 5px; } #slide-select li.prev:hover { -webkit-transform: translateX(-2px); transform: translateX(-2px); } #slide-select li.next:hover { -webkit-transform: translateX(2px); transform: translateX(2px); } #slide-select .selector { height: 14px; width: 14px; border: 2px solid white; background-color: transparent; -webkit-transition: background-color 0.5s ease-in-out; transition: background-color 0.5s ease-in-out; } #slide-select .selector.current { background-color: white; }@media only screen and (max-width: 576px) and (min-width: 100px){ .rel { height: 140px !important; }#slide-select { bottom: -17px;left: 120px;}#slides .slide .title { position: absolute; top: calc(68% - 0.5em); left: calc(25% - 3.8em); font-size: 1.5em; padding-top: 0px;} ul#slide-select .btn{padding:5px 7px} }
</style>


<div class="rel">
<div id="container">
  <ul id="slides">
    <li class="slide">
      <div class="slide-partial slide-left"><img src="/wp-content/uploads/2018/02/2-1-2.jpg"/></div>
      <div class="slide-partial slide-right"><img src="/wp-content/uploads/2018/02/2-2.jpg"/></div>
      <h3 class="title"><span class="title-text">ЖК Мандарин</span></h3>
    </li>
    <li class="slide">
      <div class="slide-partial slide-left"><img src="/wp-content/uploads/2018/02/1-1-1.jpg"/></div>
      <div class="slide-partial slide-right"><img src="/wp-content/uploads/2018/02/1-2.jpg"/></div>
      <h3 class="title"><span class="title-text">Маршал Сити</span></h3>
    </li>
    <li class="slide">
      <div class="slide-partial slide-left"><img src="/wp-content/uploads/2018/02/3-1-1.jpg"/></div>
      <div class="slide-partial slide-right"><img src="/wp-content/uploads/2018/02/3-2.jpg"/></div>
      <h3 class="title" style="opacity:0"><span class="title-text">Сити парк</span></h3>
    </li>
    <li class="slide">
      <div class="slide-partial slide-left"><img src="/wp-content/uploads/2018/02/4-1-1.jpg"/></div>
      <div class="slide-partial slide-right"><img src="/wp-content/uploads/2018/02/4-2.jpg"/></div>
      <h3 class="title"><span class="title-text">ЖК омега</span></h3>
    </li>
    <!-- <li class="slide">
      <div class="slide-partial slide-left"><img src="http://novostroy/wp-content/uploads/2018/02/1-1-1.jpg"/></div>
      <div class="slide-partial slide-right"><img src="http://novostroy/wp-content/uploads/2018/02/1-2-2.jpg"/></div>
      <h3 class="title"><span class="title-text">Lake</span></h3>
    </li> -->
  </ul>
  <ul id="slide-select">
    <li class="btn prev"><</li>
    <li class="selector"></li>
    <li class="selector"></li>
    <li class="selector"></li>
    <li class="selector"></li>
    <!-- <li class="selector"></li> -->
    <li class="btn next">></li>
  </ul>
</div>
</div>
