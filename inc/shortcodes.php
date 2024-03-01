<?php 
/* Shortcode - List post in frontpage */ 
function get_post_infront($posttype=''){ 
	global $post; 
	$post_result = '';
	$post_title = '';
  
	$post_link = '';
	 
	$args = array(
	'post_type' =>  $posttype,
	'orderby' => 'date',
	'order' => 'desc',
	'posts_per_page' => 3,
	);

	$listing = new WP_query($args);
	
	if ($listing->have_posts()) : 
		while ($listing->have_posts()) : $listing->the_post();

			/* $arr_image = get_image_url_custom('339','319');  */ 
			$arr_image = thumbnail_image_url('big-thumbnail-card'); 
			if ($arr_image!= '' ) :
				$url_image = $arr_image;
			else :
					$url_image = get_template_directory_uri()."/build/img/thumbnail-default.jpg";
			endif;  
		   $post_result .=  '<a class="card" href="'.get_the_permalink().'" >
								<img  src="'.$url_image.'" alt="'.get_the_title().'">   
								<div  class=" card-body " > 
									<h2 class="!text-2xl" > '.get_the_title().' </h2>
									<p> '.custom_excerpt_with_limit(150).' </p>
								</div>
								<div  class="card-footer" >
								<time datetime="'.get_the_date().'">'.get_the_date().'</time> <span class="card-footer__posttype" >'.get_post_type().'</span>
								</div>
								</a>'; 
 
	    endwhile;
	endif; 
	// reset the query
	wp_reset_postdata();
	return $post_result;
	
    

}

/* Shortcode */

add_shortcode ('biooil_post','get_post_infront'); 
 