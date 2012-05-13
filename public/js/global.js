$(document).ready(function() {
});

$(window).resize(function() {
   if($(window).width()<460){
       $('#primary-content').css('width', '100%');
       $('#secondary-content').css('width', '100%');
   }
    else{
       $('#primary-content').css('width', '64%');
       $('#secondary-content').css('width', '32%');
   }

    });