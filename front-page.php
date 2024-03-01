<?php
/*
Template Name: Home
Template Post Type: post, page, event
*/ 
get_header();?>
   <main class="flex-1">
      <section  class="bg-primary" >
         <div class="container">
            <div  class=" px-5 xs:px-6 pt-6 pb-10" > 
               <div class="max-sm:ml-2 md:text-center w-full max-w-[880px] mx-auto">
                  <svg class="w-[55px] xs:w-[68px] h-[42px] xs:h-[53px]  sm:ml-2 ">  <use href="<?php echo get_bloginfo('template_directory').'/build/svg/icons.svg#signo'; ?>"> </svg> 
                     <h2   class="  text-[28px]  xs:text-[34.97px] mt-2  leading-tight  " >
                     Por qué solo <br class="md:hidden" >
                     seguir las tendencias <br class="md:hidden" >
                     si además las <br class="md:hidden" >
                     podemos crear 
                     </h2>
               </div>  
               <div id="experiencia" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-9 text-center mt-16  ">
                     <div>
                        <h3 class=" text-[18px] xs:text-[23.73px]  " >
                           <span class=" text-[80px] xs:text-[87.44px] leading-none  ">
                              +15  
                          </span> <br>
                           <span class="block -mt-1" >años de experiencia </span>
                        </h3> 
                     </div>
                     <div>
                        <h3 class=" text-[18px] xs:text-[23.73px]  " >
                           <span class=" text-[80px] xs:text-[87.44px] leading-none  ">
                            +20
                          </span> <br>
                           <span class="block -mt-1 leading-tight" >categorías trabajadas </span>
                        </h3> 
                     </div>
                     <div>
                        <h3 class=" text-[18px] xs:text-[23.73px]  " >
                           <span class=" text-[80px] xs:text-[87.44px] leading-none  ">
                              +50
                          </span> <br>
                           <span class="block -mt-1 leading-tight" >clientes cumpliendo <br> objetivos </span>
                        </h3> 
                     </div>
                     <div>
                        <h3 class=" text-[18px] xs:text-[23.73px]  " >
                           <span class=" text-[80px] xs:text-[87.44px] leading-none  ">
                              +1,100 
                          </span> <br>
                           <span class="block mt-1 leading-tight" >campañas realizadas </span>
                        </h3> 
                     </div>
                     <div class="sm:col-span-2">
                        <h3 class=" text-[18px] xs:text-[23.73px]  " >
                           <span class=" text-[80px] xs:text-[87.44px] leading-none  ">
                              +80
                          </span> <br>
                           <span class="block -mt-1 leading-tight" >profesionales desarrollando <br> sus habilidades con nosotros </span>
                        </h3> 
                     </div>
               </div>
               
            </div>
            <hr  class="w-[75%] mx-auto border-white border-[2px] mb-8 " > 
            <p  class="text-center text-[18px] xs:text-[21px] text-black  font-semibold px-2 xs:px-3 pb-16 m-0 " >Hemos superado crisis mundiales,
                  cambios tecnológicos impensables
                  desde internet hasta la inteligencia
                  artificial. Y en el camino alianzas
                  internacionales con empresas de Brasil,
                  Argentina, España. <strong class="font-bold" >Y seguimos aquí más
                  expertos que nunca listos para hacer
                  crecer tu negocio.</strong>
               </p>
         </div>  
      </section>  

      <section  class="text-center relative flex justify-center items-center md:h-[382px] " >
         <img class="w-full h-full object-cover " src="<?php echo get_bloginfo('template_directory').'/build/img/te-invitamos.jpg'; ?>" alt="image">
         <h3 class=" history-heading z-[2] " >
            <span>Te invitamos a ser</span> <br>
            <span> parte de nuestra historia</span><br>
            <span> y evolución</span> 
         </h3>
      </section>

      <section id="que-hacemos">
         <div class="w-full max-w-[1366px] mx-auto">
            <h2 class=" text-[30px] xs:text-[37.66px] text-center font-semibold py-7 " >¿Qué hacemos?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-4 text-center">
               <div class="wedo-item">
               <div  class="wedo-item-head" ><h3>ASE <br> <span>SO</span><br>RÍA</h3></div>
                  <p>Asesoría en estrategia de Marketing <br>
                     Estrategias de Branding <br>
                     Estrategias creativas <br>
                     Campañas Promocionales
                   </p>
               </div>
               <div class="wedo-item">
                  <div  class="wedo-item-head" ><h3>SERVICIOS <br><span>DIGITALES_</span></h3></div>
                  <p>
                  Desarrollo Web <br>
                  Desarrollo Tienda Online <br>
                  Gestión de Redes Sociales <br>
                  Creación de contenidos <br>
                  Catálogos <br>
                  Landing Pages <br>
                  Formularios
                  </p>
               </div>
               <div class="wedo-item">
                  <div  class="wedo-item-head" ><h3>PLAN DE<br> <span>DIFUSIÓN</span></h3></div>
                  <p> 
                     Estrategia Medios 360° <br>
                     Estrategia Medios Digitales <br>
                     Google Adwords <br>
                     Paid Ads Redes Sociales <br>
                     Programática <br>
                     Marketing Afiliados <br>
                     Campaña Influencers 
                   </p>
               </div>
               <div class="wedo-item"> 
                  <div  class="wedo-item-head" ><h3>PRO<br> <span>DUC</span><br>CIÓN</h3></div>
                  <p> 
                     Naming + diseño de logo <br>
                     Diseño de Brochures <br>
                     Memorias Anuales <br>
                     Photo Shooting <br>
                     Videos corporativos <br>
                     Eventos corporativos <br>
                     Activaciones en Punto Venta <br>
                     Merch creativo
                   </p>
               </div>
            </div>
         </div>
      </section>

      <section id="contacto" >
         <a href="https://api.whatsapp.com/send?phone=+51998315039&text=Hola%20Tendenze%20Per%C3%BA.%20Necesito%20m%C3%A1s%20informaci%C3%B3n"  class=" text-center relative flex justify-center items-center md:h-[383px] " >
            <img class="w-full h-full object-cover " src="<?php echo get_bloginfo('template_directory').'/build/img/heart.jpg'; ?>" alt="image">
            <h3 class=" absolute z-[2] font-normal text-[33px] xs:text-[39.78px] leading-[37px] xs:leading-[44.45px] " >
               <strong  >CONECTEMOS <br>
               PARA CONECTAR</strong> <br>
               CON TUS CLIENTES <br>
               <i class="icon-whatsapp text-[#2a2929]  text-[48px] mt-[8px] inline-block "></i> 
            </h3>
         
         </a>
      </section>
      <section>
         <div class="container">
            <h2 class="  text-center  pt-9 pb-8 text-[26px] xs:text-[30.38px]  leading-[1.1]" ><span class="font-semibold" >Algunas marcas </span> <br> ya lo hicieron</h2>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 place-content-center place-items-center pb-12">
               <?php   
               $marcas = get_field('marcas'); 
               if(!empty($marcas)){  ?>  
                  <?php   foreach( $marcas as $marcas_image ) {  ?>  
                     <figure>
                        <img src="<?=$marcas_image['url'];?>" alt="<?=$marcas_image['alt'];?>"  title="<?=$marcas_image['title'];?>"/>
                        <figcaption class="opacity-0 absolute -z-10" ><?=$marcas_image['title'];?></figcaption>
                     </figure> 
                  <?php }   
               }?>    
            </div> 
         </div> 
   </main>
<?php  
get_footer();
?>
<!-- 
admin_ct9ak2ea
Kw0oc*_On7XiH4bQ
admin@prueba.tendenzeperu.com -->