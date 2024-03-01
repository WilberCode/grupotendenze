<?php get_template_part( 'templates/partials/document-open' ); ?>



<header class="header"> 
    <div class="header-wrap container m-auto flex  justify-between items-center  space-x-3 ">   
        <div class=" flex flex-col xl:flex-row xl:items-center maxl:space-y-1  xl:space-x-4  z-50  " >
               
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

                <?php if ( has_custom_logo() ) {  ?>
                    <a class="header-logo max-md:ml-7 mt-[37px]" href="<?php echo home_url(); ?>" rel="home">
                        <img class="  w-[120px]" src="<?php echo esc_url( $logo[0]);?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php }else{?>
                    <a href="<?php echo home_url(); ?>" rel="home"  class="no-underline ">
                    <h1 class="text-lg sm:text-2xl font-bold text-dark  tracking-normal "><?php echo get_bloginfo( "name" ); ?>  </h1> 
                    </a>
                 <?php } ?>
        </div> 
       
         <div class=" flex items-center  h-full " > 
             <?php  
                wp_nav_menu(array(
                    'theme_location'  => 'main',
                    'container'       => 'nav',
                    'container_class' => 'header-nav',   
                    'container_id'    => 'header-nav',  
                    'menu' => 'ul',
                    'menu_class'      => 'header-menu',
                    'menu_id'         => 'header-menu',
                ));  
            ?>
                
                <div class="mobile-nav-wrap" id="mobile-nav-wrap"  > 
                    <?php  
                    wp_nav_menu(array(
                        'theme_location'  => 'mobile',
                        'container'       => 'nav',
                        'container_class' => 'mobile-nav',
                        'container_id'    => 'mobile-nav',  
                        'menu' => 'ul',
                        'menu_class'      => 'mobile-menu',
                        'menu_id'         => 'mobile-menu' ,
                    ));  
                ?> 
                </div> 
            </div>  
            <div class="nav-toggle-wrap flex lg:hidden items-center   ">
              <button  id="nav-toggle" class="nav-toggle">  
                  <div  class="nav-toggle-icons" >
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span> 
                    <span ></span>  
                  </div>
              </button>
           </div>  
     </div>  
 </header>  
  
 <?php if ( is_front_page() ) { ?>
    <div class="max-sm:mt-5"> 
        <svg class="w-full h-[35px] sm:h-[35px] lg:h-[45px] "xmlns="http://www.w3.org/2000/svg" viewBox="0 0 389.5 42.3"  width="100" height="100" preserveAspectRatio="none" xmlns:v="https://vecta.io/nano"><path d="M389.5 0L0 42.3h389.5V0z" fill="#f9df3c"/></svg>
    </div>
 <?php } ?>

