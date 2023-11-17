//We learnt in section 5
====================================
//1 current page title
<?php  the_title();?>
Difference between <?php  the_title();?> and <?php  get_the_title();?>
the_title() gives the title of the current page whereas get_the_title requires an id to show the title of that spacific page
//2 current page content
<?php  the_content();?>
//3. To show the Id of the current page
<?php echo get_the_ID();?>
//4. To show the Id of the current page parent
<?php echo get_post_parent_id(get_the_ID());?>
//5 For Titile of the page
//in functions.php file
<?php
function page_title_function( {
	add_theme_support('title-tag');
})

add_action ('after_setup_theme', 'page_title_function');
?>
//6 site link and page link
<?php echo site_url() ?>
<?php echo site_url('/about-us') ?> 
//7 To show all pages 
<?php echo wp_list_pages() ?> 
//8 To show menu 
<?php echo wp_nav_menu() ?> 

//We learnt in section 6
==================================
Lesson objectives:
1.How to create a blog page 
2.How to bring posts elements on the page 
------------
3.How to add pagination in blog page
4.How to create a single post page
------------
5.How to create a blog archive page

//We learnt in section 8
==================================
Lesson objectives:
1. How to create a custom post type named 'Program'
2. How to create relationship between two custom post types by creating relation field and bringing them to front end
---------------
For lesson objective 1(lessn 36):
1. To create a custom post type we added a set of code in must plugin file 
2. We created a single page and a archive page for the new custom post type
3. We created a related field in event post to link program post
---------------
For lesson objective 2(lessn 37):
1. To create a custom post type we added a set of code in must plugin file 
2. We created a single page and a archive page for the new custom post type
3. We created a related field in event post to link program post in event post page
4. We added a filter to 2 upcoming post(already used in home page) to show program related post
---------------
For lesson objective 2(lessn 37):
1. Link program page to the menu

//We learnt in section 9
==================================
Lesson objectives:
1. How to create a custom post type named 'Professor'
2. How to associate an image with each professor post

---------------
For lesson objective 1(lessn 40):
1. To create a custom post type we added a set of code in must plugin file 
2. We created a single page template for it
3. We linked the previously created relation field for event
4. We created a relation to Program post type in single-program.php file
--------------
Lesson 43: How to make page banner background dynamic

//We learnt in section 10
==================================
Lesson 45. we are trying to create a dynamic page banner for all pages and custom post types
   i. We created a function called pageBanner in function.php which will work like a global function and and can be used anywhere in the site like other wordpress function.
   ii. The function is having some if conditions for title, subtitle, and background image which will work on passing arguments
        By the way meanwhile we created two more custom fields for all post type. The fields are 'page banner subtile' and 'page banner background image'
       conditon - if a page does not have custom title, it will have a fallback title. Same for subtitle too.
       conditon - if a page does not have custom uploaded background, it will have a fallback image
   ii. First of all we will use page banner function in page.php file 