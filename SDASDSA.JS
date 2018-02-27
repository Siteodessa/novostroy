function Watcher(w,a,t,s,u){
  function isDescendant(parent, child) {
     var node = child.parentNode;
     while (node != null) {
         if (node == parent) {
             return true;
         }
         node = node.parentNode;
     }
     return false;
};
  if (typeof(jQuery(w)) != 'undefined') {
  // w-Parent object (jQuery object)
  // a-Children common class (definite className)
  // t-Class, needed to add to parent to get animation
jQuery.fn.isInViewport = function () {
  var elementTop = jQuery(this).offset().top;
  var elementBottom = elementTop + jQuery(this).outerHeight();
  var viewportTop = jQuery(window).scrollTop();
  var viewportBottom = viewportTop + jQuery(window).height();
  return elementBottom > viewportTop && elementTop < viewportBottom;
};
var sec = s;
var del = u;
jQuery(window).on('resize scroll load', function () {
if (jQuery(w).isInViewport()) {
  // Animacia Starten
  var elfs = Array.prototype.slice.call(document.getElementsByClassName(a));
  var lenArr = elfs.length;
  var i = 0;
  for (; i < lenArr; i++) ! function (i) {
    if (jQuery(a).parent(w).hasClass(t) != true){
        var s = s;
      elfs[i].style.transitionDelay = ''+ (sec + (del * i)) +'s';
    }else {
        jQuery(a).parent(w).addClass(t);
      }
  }(i);
  setTimeout(function(){
    jQuery(w).addClass(t);
  }, 8);
} else {
// Animacia Razbiren
  var elfs = Array.prototype.slice.call(document.getElementsByClassName(a));
  var lenArr = elfs.length;
  var i = 0;
      for (; i < lenArr; i++) ! function (i) {
          elfs[i].style.transitionDelay = '0s';
      }(i);
      setTimeout(function(){
        jQuery(w).removeClass(t);
      }, 8);
}
});
} else {
  console.log('cannot find '+ w +'');
}
};
