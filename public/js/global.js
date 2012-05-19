$(document).ready(function() {
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
    /**
     * Toggle form if someone clicks on Register blogger button
     */
    $('#new-blogger').bind('click', function(){
        $('#register-blogger').toggle();
        if($(this).children('.button-text').html()==' Register'){
            $(this).children('.button-text').html(' Cancel');
        }
        else{
            $(this).children('.button-text').html(' Register');
        }
    });
    /**
     * Toggle form if someone clicks on Edit blogger button
     */
    $('.edit-blogger').bind('click', function(){
       $(this).siblings('.edit-current-blogger').toggle();
    });
    /**
     * Toggle form if someone clicks on Delete blogger post button
     */
    $('.delete-blogger').bind('click', function(){
       $(this).siblings('.delete-current-blogger').toggle();
    });
    /**
     * Toggle form if someone clicks on Login
     */
    $('#login').bind('click', function(){
       $(this).siblings('#login-blogger').toggle();
        if($(this).children('.button-text').html()==' Login'){
            $(this).children('.button-text').html(' Cancel');
        }
        else{
            $(this).children('.button-text').html(' Login');
        }
    });
    /**
     * Toggle form if someone clicks on Login
     */
    $('#logout').bind('click', function(){
       $(this).siblings('#logout-blogger').toggle();
        if($(this).children('.button-text').html()==' Logout'){
            $(this).children('.button-text').html(' Cancel');
        }
        else{
            $(this).children('.button-text').html(' Logout');
        }
    });





});