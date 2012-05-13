$(document).ready(function() {
    /**
     * allow resizing of main divs to be viewed on mobile
     * In an ideal world, this would be done with responsive css, but I am a back end developer
     */
    if($(window).width()<650){
           $('#primary-content').css('width', '100%');
           $('#secondary-content').css('width', '100%');
           $('textarea').css('width', '90%');
       }
    /**
     * Toggle form if someone clicks on Add new blog post button
     */
    $('#new-post').bind('click', function(){
        $('#add-new').toggle();
        if($(this).children('.button-text').html()==' Add new blog post'){
            $(this).children('.button-text').html('Cancel new blog post');
        }
        else{
            $(this).children('.button-text').html(' Add new blog post');
        }
    });
    /**
     * Toggle form if someone clicks on Edit blog post button
     */
    $('.edit-post').bind('click', function(){
       $(this).siblings('.edit-current').toggle();
        if($(this).children('.button-text').html()==' Edit blog post'){
            $(this).children('.button-text').html('Cancel edit post');
        }
        else{
            $(this).children('.button-text').html(' Edit blog post');
        }
    });
    /**
     * Toggle form if someone clicks on Delet blog post button
     */
    $('.delete-post').bind('click', function(){
       $(this).siblings('.delete-current').toggle();
        if($(this).children('.button-text').html()==' Delete blog post'){
            $(this).children('.button-text').html('Cancel delete post');
        }
        else{
            $(this).children('.button-text').html(' Delete blog post');
        }
    });



});
/**
 * allow resizing of main divs to be viewed on mobile
 * In an ideal world, this would be done with responsive css, but I am a back end developer
 */
$(window).resize(function() {
   if($(window).width()<650){
       $('#primary-content').css('width', '100%');
       $('#secondary-content').css('width', '100%');
       $('textarea').css('width', '90%');
   }
    else{
       $('#primary-content').css('width', '64%');
       $('#secondary-content').css('width', '32%');
       $('textarea').css('width', '450px');
   }

});