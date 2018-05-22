// JavaScript Document
function lodgeweb() {

  console.log("lodgeweb active");
  console.log(" ");
  
};


jQuery(document).ready(function() {

  setTimeout(lodgeweb, 1000);

  jQuery(window).resize(function() {
    lodgeweb();
  });

});
