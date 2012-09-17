<?php $data =  Blogger_Controller::_list();?>
<div id="bloggers-list">
    <h2>Bloggers</h2>
   <?php /* $data is an array of data that we get from the controller.
          * We will get to HOW that data comes together in week 3.
          * But for now, all you need to know is that $data['bloggers'] is also an array.
          * Each blogger ($data['bloggers'][0], $data['bloggers'][1], etc.) is ALSO an array.
          * Each blogger has the following data 'email', 'password', 'username' and 'date_created'
          * Using a for loop or a foreach loop, loop through each blogger in $data['bloggers']
          * and echo out the username (and any other information you want)
          * There are classes "blogger" and "blogger-name" in the css file if you want your
          * list of bloggers to look like the one in the sample.
          */
?>
</div>