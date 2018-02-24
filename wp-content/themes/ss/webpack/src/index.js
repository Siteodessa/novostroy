//import './style.css';
//import './bootstrap.css';
//import Icon from './icon.png';
// import search_any_req from './kvarts.js';
import _ from 'lodash';
import Data from './data.xml';
import React from 'react';
import ReactDOM from 'react-dom';
import $ from 'jquery';
//imports------------------------
$(window).scroll(function(){
if ($(window).scrollTop() >= 60) {
     $('nav').addClass('fixed-header');
  }
  else {
          $('nav').removeClass('fixed-header');
  };    if ($(window).scrollTop() >= 1700) {
         $('nav').addClass('animated-header');
      }
      else {    $('nav').removeClass('animated-header');
      };
});
function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
};
function search_any_req(possible_received_args){
 var pral = possible_received_args.length;
var search_object = {};
for (var k = 0; k < pral; k++) {
  if ((getParameterByName(possible_received_args[k])) != null) {
    var received_arg_name = (possible_received_args[k]);
    var received_args_value = (getParameterByName(possible_received_args[k]));
    search_object[received_arg_name] = received_args_value;
  };
};
  return search_object;
 };
function log_object(object){
     console.log('{');
jQuery.each(object, function(name, value) {
   console.log('' + name + ':' + value + '');
}),    console.log('}');
}
function Square(props) {
  return (
    <button className="square" onClick={props.onClick}>
      {props.value}
    </button>
  );
}
class Board extends React.Component {
     constructor(props) {
    super(props);
    this.state = {
      squares: Array(9).fill(null), xIsNext: true,
    };
  }
      handleClick(i) {
    const squares = this.state.squares.slice();
              if (calculateWinner(squares) || squares[i]) {
      return;
    }
squares[i] = this.state.xIsNext ? 'X' : 'O';
    this.setState({squares: squares,  xIsNext: !this.state.xIsNext,});
  }
  renderSquare(i) {
    return <Square
      value={this.state.squares[i]}
      onClick={() => this.handleClick(i)}
      />;
  }
  render() {
       const winner = calculateWinner(this.state.squares);
    let status;
    if (winner) {
      status = 'Победитель: ' + winner;
    } else {
      status = 'Новый игрок: ' + (this.state.xIsNext ? 'X' : 'O');
    }
    return (
      <div>
        <div className="status">{status}</div>
        <div className="board-row">
          {this.renderSquare(0)}
          {this.renderSquare(1)}
          {this.renderSquare(2)}
        </div>
        <div className="board-row">
          {this.renderSquare(3)}
          {this.renderSquare(4)}
          {this.renderSquare(5)}
        </div>
        <div className="board-row">
          {this.renderSquare(6)}
          {this.renderSquare(7)}
          {this.renderSquare(8)}
        </div>
      </div>
    );
  }
}
class Game extends React.Component {
  render() {
    return (
      <div className="game">
        <div className="game-board">
          <Board />
        </div>
        <div className="game-info">
          <div>{}</div>
          <ol>{/* TODO */}</ol>
        </div>
      </div>
    );
  }
}
function calculateWinner(squares) {
  const lines = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
  ];
  for (let i = 0; i < lines.length; i++) {
    const [a, b, c] = lines[i];
    if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
      return squares[a];
    }
  }
  return null;
}
// ========================================
 console.log(' open => (g + any back key) ')
 console.log(' open => (pageUp to upgrade) ')
 console.log(' __________________________________')
 console.log(' you must init => ')
  console.log(' office single template => false')
  console.log(' house single template => false')
  console.log(' ___________')
  console.log(' admin-gallery-lightgallery => false')
  console.log(' hide appartment fields while editing office => false')
  console.log(' objects single design => false')
  console.log(' houses single design => false')
  console.log(' office single ddesign => false')
  console.log(' office loop design => false')
  console.log(' ___________')
  console.log(' office object type fields => ok')
  console.log(' office loop => ok')
  console.log(' search_any_req issue => maybe ok')
  console.log(' objects single template => ok')
function showBabelHints() {
var link = 'https://babeljs.io';
var link1 = 'https://nodeguide.ru/doc/dailyjs-nodepad/';
  console.log('' + link);
  console.log('' + link1);
}
jQuery(document).keyup(function (e) {
  33 === e.keyCode && ReactDOM.render(
   <Game />,
   document.getElementById('revct')
 )  ;
});
jQuery(document).keyup(function (e) {
  33 === e.keyCode && showBabelHints()
});
let app_res = jQuery('.sub_search_menu');
let after_search = jQuery('div.after_search');
after_search.prependTo(app_res);
after_search.wrap('<div id="srch_stat"></div>');
var url = jQuery('#searchstarter').attr('href');
const input_tables = [jQuery('#rom'), jQuery('#bld'), jQuery('#block'), jQuery('#sqrt_inp'),
 jQuery('#prc_inp')];
const slctbl_np_tbls = [jQuery('#rom'), jQuery('#bld'), jQuery('#block'), jQuery('#floor')];
const possible_received_args = ['rom', 'bld', 'block', 'floor', 'mnp', 'mxp', 'mns', 'mxs'];
var link_addon = '';

if (jQuery('div#homecover')){

var get_req_object =  new search_any_req(possible_received_args);
jQuery.each(get_req_object, function(name, value) {
  value = value.split(',');
  var value_len = value.length;
  if (value_len == 1)
    {jQuery('input.' + name + '').each(function(){
       if (jQuery(this).val() == value){
          jQuery(this).attr('checked',true);
        }}); }
        else  {
            for (let k = 0 ; k < value_len; k++){
               jQuery('input.' + name + '').each(function(){
                  if (jQuery(this).val() == value[k]){
                    jQuery(this).attr('checked',true);
                   }});}}
});
};
function src_val(){
         var c = {};
  jQuery('div#src_val input[type="checkbox"]').each(function(){
  if (jQuery(this).prop( "checked" ) == true){
          var a = jQuery(this).attr('srch-type');
          var b = jQuery(this).val();
     if (!c[a]){ c[a] = b; }
    else {
  var g = c[a];
   c[a] = ''+ b + ',' + g + '';
    }
  };
  })  ;
  var o = c;
    var generated_url = '';
  for (var key in o) {
    generated_url += key + '=' + o[key] +'&';
  };
    var cut_url = generated_url;
    var default_url = ''+ link_prefix +'';
    var done_url = default_url += cut_url;
         done_url = done_url.slice(0, -1),
    jQuery('#searchstarter').attr('search-direct', done_url);
}
jQuery('div#src_val').on('change', 'input[type="checkbox"]', function() {
src_val();
});
jQuery('#searchstarter').click(function(){
jQuery('.choices').addClass('nxpan');
src_val();
var readysearchdirect = jQuery(this).attr('search-direct');
var input_link_builder = '';
  jQuery('div#sqrt_inp input, div#prc_inp input').each(function(){
    var srch_type = jQuery(this).attr('data-srch-type');
    var srch_val = jQuery(this).val();
    var srch_val_len = jQuery(this).val().length;
 if (srch_val_len > 0 && srch_val_len < 9 )
  input_link_builder += srch_type + '=' + srch_val + '&';
});
if (input_link_builder.substr(-1) == '&')
{   input_link_builder = input_link_builder.slice(0, -1)}
if (readysearchdirect.indexOf('?') == -1)
{
readysearchdirect += '?' + input_link_builder
, window.location.replace( readysearchdirect );
}
else {
  readysearchdirect += '&' + input_link_builder
  , window.location.replace( readysearchdirect );
}
});
function closeDrops() {
  setTimeout(function(){
      jQuery('#srch_vals').attr('class', 'search_block');
}, 296)
  jQuery('#srch_vals').attr('class', 'search_block z-dom2');
};
jQuery('.f_name').click(function () {
var dis = jQuery(this);
  var current_class = jQuery(this).parent('div').find('.vs').attr('class');
if (typeof(current_class) === 'undefined')
{
  var current_class = jQuery(this).parent('div').find('.vs').attr('class');
}
  if( jQuery('#srch_vals').hasClass(current_class) == false){
  jQuery('#srch_vals').attr('class', 'search_block z-dom2 active');
  jQuery('#srch_vals').attr('class', 'search_block z-dom2 active ' + current_class + '');
  }
else {
 closeDrops();
}
});
$(".apps_holder").click(function() {
closeDrops()
});
/* ---------------------------------------- */
var current = 0;
  var slides = $(".slide");
  $("#right").click(function() {
    slide(1);
  });
  $("#left").click(function() {
    slide(-1);
  });
  function slide(offset) {
    var next = (current + offset) % slides.length;
    if (next < 0) {
      next = slides.length + next;
    }
    $(slides[next]).removeClass("fromRight");
    $(slides[next]).removeClass("fromLeft");
    $(slides[current]).removeClass("fromLeft");
    $(slides[current]).removeClass("fromRight");
    if (offset > 0) {
      $(slides[current]).addClass("fromLeft");
      $(slides[next]).addClass("fromRight");
    } else {
      $(slides[current]).addClass("fromRight");
      $(slides[next]).addClass("fromLeft");
    }
    $(slides[next]).addClass("active");
    $(slides[current]).removeClass("active");
    $(slides[current]).addClass("closing");
    var oldCur = current;
    current = next;
    $("#count").html(current + 1);
  }
  setInterval(function() {
    $("#left").click();
  }, 5000);
  jQuery('.jumpo button').on('click', function(){
  function createOneMenu(){
    if (jQuery('.side-menu').length < 1){
    jQuery('body').prepend(`<div class="side-menu">
    <ul>
    <li><a href="/wp-admin/post.php?post=960&action=edit">Кастомные поля</a></li>
    <li><a href="/wp-admin/edit.php?post_type=objects">Все объекты</a></li>
    <li><a href="/wp-admin/edit.php?post_type=objects">

меню ховеры




    </a></li>
     </ul>
     </div>`);
      setTimeout(function(){
        jQuery(document).find('.side-menu').addClass('opened');
        jQuery(document).find('body').addClass('s-menu-opened');
      }, 200);
  } else {
    jQuery(document).find('.side-menu').toggleClass('opened');
    jQuery(document).find('body').toggleClass('s-menu-opened');
  }
  };createOneMenu();
  });



  function show_more_info(){

    jQuery('ul.appartment').on('mouseenter', function(){
          jQuery(this).addClass('active');
    });
    jQuery('ul.appartment').on('mouseleave', function(){
          jQuery(this).removeClass('active');
    });
  };show_more_info()

  function show_app_more_info(){

    jQuery('.app_info.closed').on('mouseenter', function(){
          jQuery(this).removeClass('closed');

    });
    jQuery('.app_info.closed').on('mouseleave', function(){
          jQuery(this).addClass('closed');
    });
  };show_app_more_info()
