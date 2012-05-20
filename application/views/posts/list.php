<?php $data =  Post_Controller::_list(); ?>
<div id="posts-list">
    <h2>Blog Posts</h2>
    <?php /* $data is an array of data that we get from the controller.
              * We will get to HOW that data comes together in week 3.
              * But for now, all you need to know is that $data['posts'] is also an array.
              * Each post ($data['posts'][0], $data['posts'][1], etc.) is ALSO an array.
              * Each post has the following data 'title', 'text', 'username' and 'date_created'
              * Using a for loop or a foreach loop, loop through each post in $data['posts']
              * and echo out the title, text, username and date_created
              * There are the classes "post", "post-text", "post-footer", "post-date", and "post-blogger"
              * in the css file if you want your data to look like the example.
              * If you want, use the date() and strtotime() functions to format date_created
              */
        ?>
</div>