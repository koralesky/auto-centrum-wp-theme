<?php get_header();?>


<div class="container-fluid zeropadding mb-5">
    <div class="row feature">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/cars.png'?>" alt="">
        <div class="feature-text">
            <h1><?php the_field('tekst_glowny');?>
            <br/>
            <a href="oferta.html">
                <div class="btn btn-light">Zobacz ofertę</div>
            </a></h1>
        </div>
        
    </div>
</div>

<div class="container-fluid zeropadding">
      <div class="row newestcars justify-content-center mb-5 zeromargin">
        <div class="col-md-10 stripe-red-skew">
          <div class="text">Najnowsze auta</div>
        </div>
        <div class="col-md-10 newest-cars">
          

          <?php 

$posts = get_posts(array(
	'posts_per_page'	=> 4,
  'post_type'			=> 'post',
  'cat' => 5
));

if( $posts ): ?>


	
	<div class="card-deck py-2 m-2">
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
	<a class="car-link" href="<?php the_permalink(); ?>">
        <div class="card"> <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_field('cena')?></p>
              </div>
            </div>
    </a>
    
    
    
	
	<?php endforeach; ?>
	
	</div>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>


            <!-- <div class="card"> <img src="assets/newest-cars-panel/mercedes-benz-gla-class.png" class="card-img-top"
                alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Mercedes GLA200</h5>
                <p class="card-text">102.203 PLN</p>
              </div>
            </div>
            <div class="card"> <img src="assets/newest-cars-panel/smart-brabus-cabrio-electrique-730x411.png"
                class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Smart Brabus</h5>
                <p class="card-text">64.900 PLN</p>
              </div>
            </div>
            <div class="card"> <img src="assets/newest-cars-panel/mondeo_02-2.png" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ford Mondeo</h5>
                <p class="card-text">48.800 PLN</p>
              </div>
            </div>
            <div class="card"> <img src="assets/newest-cars-panel/due-6-plus-nowy-2020r-kat-am-14-lat-520428299.png"
                class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Microcar M.GO</h5>
                <p class="card-text">39.990 PLN</p> -->
              
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
      <div class="skewed mb-5">
        <div class="content d-flex align-items-center">
          <div class="text">
            <h1>Sprzedaż <br />
              microcarów</h1>
            <p>Sprawdź pojazdy dostępne<br />
              w naszej ofercie</p>
            <a href="oferta.html">
              <div class="btn btn-light">Zobacz</div>
            </a>
          </div>
        </div>
        <div class="image-box"></div>
      </div>
      <div class="row uslugi-2 justify-content-center mb-5 zeromargin">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-6 usluga-card">
              <div class="col-md-12 innercard laweta d-flex align-items-center">
                <div class="content ml-md-5">
                  <h1>Usługi <br />Auto Laweta</h1>
                  <div class="btn btn-light">Sprawdź</div>
                </div>
              </div>
            </div>
            <div class="col-md-6 usluga-card">
              <div class="col-md-12 innercard slub d-flex align-items-center">
                <div class="content ml-md-5">
                  <h1>Wynajem auta <br /> do ślubu</h1>
                  <div class="btn btn-light">Sprawdź</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row usluga-1 mb-5 zeromargin d-flex align-items-center">
        <div class="content">
          <h1>Kompleksowa rejestracja pojazdów</h1>
          <div class="btn btn-light">Sprawdź</div>
        </div>
      </div>

      <div class="row contact justify-content-center mb-5 zeromargin">
        <div class="col-md-8 stripe-red-skew">
          <div class="text">Skontaktuj się z nami</div>
        </div>
        <div class="col-md-4 redbg"></div>
        <div class="col-md-12 contact-section">
          <div class="row">
            <div class="col-md-8 form-section">

              <div class="row justify-content-center my-4">

                <div class="col-11 md-mt-3 mb-2">
                  <h3>Napisz wiadomość</h3>
                </div>

                <!--Grid column-->
                <div class="col-md-11 mb-md-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6 pr-md-1">
                        <div class="md-form mb-2">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Imię">

                        </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6 pl-md-1">
                        <div class="md-form mb-2">
                          <input type="text" id="email" name="email" class="form-control" placeholder="Email">

                        </div>
                      </div>
                      <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form mb-2">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="Temat">

                        </div>
                      </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                        <div class="md-form mb-2">
                          <textarea type="text" id="message" name="message" rows="12" class="form-control md-textarea"
                            placeholder="Twoja wiadomość"></textarea>

                        </div>

                      </div>
                    </div>
                    <!--Grid row-->

                  </form>

                  <div class="text-center text-md-right md-mb-3">
                    <a class="btn btn-light px-4" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
                  </div>
                  <div class="status"></div>
                </div>
                <!--Grid column-->

              </div>

            </div>
            <div class="col-md-4 info redbg">
              <div class="row justify-content-center my-4">
                <div class="col-10 md-mt-3">
                  <h3 class="mb-3">Dane Kontaktowe</h3>
                  <p>PPUH. Auto-Centrum</p>
                  <p>Piotr Ważny</p>
                  <p>68-200 Żary</p>
                  <p>ul. Tenisowa 22</p>
                  <br />
                  <p>tel. 666 666 666</p>
                  <p>e-mail: info@auto-centrum.pl</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row map-section justify-content-center mb-5 zeromargin">
        <div class="col-md-12 stripe-red-skew">
          <div class="text">Jak do nas dotrzeć</div>
        </div>
        <div class="col-md-12 map zeropadding"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1041.4086795690362!2d15.148123667844818!3d51.62501856149344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470898b09af6f5b5%3A0x3ed0d093ae85f3ab!2sTenisowa%2C%2068-200%20%C5%BBary!5e0!3m2!1spl!2spl!4v1581536626237!5m2!1spl!2spl"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
      </div>

    </div>





<?php get_footer();?>