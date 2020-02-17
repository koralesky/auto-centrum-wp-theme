<?php
/*
    Template Name: Kontakt
*/
get_header();?>

<div class="container-fluid contact-hero zeropadding">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1041.4086795690362!2d15.148123667844818!3d51.62501856149344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470898b09af6f5b5%3A0x3ed0d093ae85f3ab!2sTenisowa%2C%2068-200%20%C5%BBary!5e0!3m2!1spl!2spl!4v1581536626237!5m2!1spl!2spl"
        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="">
      </iframe>
    </div>



    <div class="container-fluid my-5">
      <div class="row contact-page justify-content-center zeromargin">

        <div class="col-md-10 contact-section">
          <div class="row">
            <div class="col-md-8 form-section">

              <div class="row justify-content-center my-4">

                <div class="col-11 md-mt-3 mb-2">
                  <h3>Napisz wiadomość</h3>
                </div>

                <!--Grid column-->
                <div class="col-md-11 ">
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
                    <a class="btn btn-dark px-4" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
                  </div>
                  <div class="status"></div>
                </div>
                <!--Grid column-->

              </div>

            </div>
            <div class="col-md-4 info dark-bg">
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
    </div>


<?php get_footer();?>