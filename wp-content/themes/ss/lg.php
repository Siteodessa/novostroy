<link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">
<script src="<?php echo get_template_directory_uri();?>/lightgallery.js"></script>
<script>
var scga = jQuery('#secondary-gallery');
var sgid = scga.attr('id');
 jQuery('#secondary-gallery p').first().attr('id', sgid);
scga.removeAttr('id');
 jQuery('#secondary-gallery img').each(function(){
  var src = jQuery(this).attr('src');
   jQuery(this).wrap('<a class="item" href="' + src + '"></a>')
});
setTimeout(function(){
  lightGallery(document.getElementById('secondary-gallery'))
    lightGallery(document.getElementById('lightgallery'))
}, 10)
</script>
