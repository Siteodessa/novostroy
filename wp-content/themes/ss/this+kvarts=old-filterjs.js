 function magicBox(a, b) {
    function detectGetParameters() {
    function getParameterByName(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    };
    var possible_received_args = ['rom', 'bld', 'block', 'mnp', 'mxp', 'mns', 'mxs'];
    var pral = possible_received_args.length;
    var search_object = {};
    for (k = 0; k < pral; k++) {
      if ((getParameterByName(possible_received_args[k])) != null) {
        var received_arg_name = (possible_received_args[k]);
        var received_args_value = (getParameterByName(possible_received_args[k]));
        search_object[received_arg_name] = received_args_value;
      };
    };
      return search_object;
    }
    //returns search object from get parameters
    function set_checked_inputs() {
jQuery.each(detectGetParameters(), function(name, value) { 
    var arra = value.split(',');
for (var i = 0; i < arra.length; i++) {
  var active_div = jQuery('div.' + name + '');
     jQuery(active_div).each( function() { 
           var active_input = jQuery(this).find('input');
      if (active_input.attr('value') == arra[i])
{
active_input.attr('checked',true);
active_input.attr('marked',true);
}
   })
}
 }); 
    };
    new set_checked_inputs();
    //inputs are now marked due to user's choice, now we re ready to pick new searches 
    (function($) {
      ayhu.each(function(i) {
        var df = jQuery(this).data('filter');
        jQuery(this).attr('data-count', df + (i + 1));
        jQuery(this).addClass(df);
      });//adds class and numbered class to filters
      var fdf = a.data('filter');      
      b.each(function() {
        $(this).on('change', 'input[type="checkbox"]', function() { 
          var url = '<?php echo home_url('kvartiri'); ?>';
          args = {};
          a.each(function() {
            var filter = $(this).data('count'),
              vals = [];
            jQuery(this).find('input:checked').each(function() {
              vals.push($(this).val());
            });
            args[filter] = vals.join(',');
          });                                 
          url += '/?';  
          url += fdf;
          url += '=';
          jQuery.each(args, function(name, value) { 
            if (value != '') {
              url += value + ',';
            }
          }),
          url = url.slice(0, -1);
          console.log(url);
          jQuery('#searchstarter').attr('href', url);
          jQuery('.fixie').text(url);
          window.location.replace( url );
        });
      });
    })(jQuery);
  };
  var z = jQuery('.rom_values .choice');
  var f = jQuery('.rom_values');
  var d = jQuery('.bld_values .choice');
  var j = jQuery('.bld_values');
  var n = jQuery('.block_values .choice');
  var p = jQuery('.block_values');
  new magicBox(z, f), 
  new magicBox(d, j),
  new magicBox(n, p);
  jQuery('body').append('<div class="fixie"></div>');
  if(window.location.href.indexOf('?') != -1 && window.location.href.indexOf('=') != -1)
  jQuery('.fixie').text(window.location.href)