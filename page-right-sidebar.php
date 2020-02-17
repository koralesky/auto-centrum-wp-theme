<?php 
/*
    Template Name: Right Sidebar
*/
get_header();?>

<?php if(has_post_thumbnail( )):?>
            <div class="conainer-fluid">
                <div class="row feature">
                    <img src="<?php the_post_thumbnail_url();?>" class="front-img">
                    <div class="feature-text">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        <?php endif;?>

        <div class="container about-us-page">
      <div class="row my-5 justify-content-around">
        <div class="col-md-9 page-content">
          <h2 class="mb-3">Kompleksowa rejestracja pojazdów</h2>
          <p style="font-weight:500;">Oferujemy usługi kompleksowej rejestracji pojazdów osobowych,
            ciężarowych,przyczep,lawet, motocykli , czterokołowców krajowych jak i sprowadzonych z zagranicy. Załatwimy
            za Państwa wszelkie formalności w Wydziale Komunikacji jak i Urzędzie Skarbowym.</p>
          <h3>Zakres usług:</h3>
          <ul>
            <li>złożenie deklaracji akcyzowej w US, pcc 3 i inne</li>
            <li>rejestracja aut nowych i używanych zakupionych w kraju jak i innych państwach </li>
            <li>wyrabianie wtórników: dowód rejestracyjny, karta pojazdu, tablice </li>
            <li>nabicie numeru nadwozia </li>
            <li>indywidualne tablice rejestracyjne </li>
            <li>zgłoszenie sprzedaży pojazdu</li>
            <li>adnotacje urzędowe np. hak, gaz, VAT,taxi ,wymiana dowodu rejestracyjnego na nowy </li>
            <li>zgłoszenie sprzedaży lub nabycia pojazdu </li>
            <li>wyrobienie wtórnika nalepki na szybę</li>
            <li>zgłoszenie podatku</li>
            <li>tłumaczenie przysięgłe dokumentów (angielski , niemiecki, niderlandzki, włoski, francuski )</li>
          </ul>
          <p>
            I wiele innych.
            Dojazd na terenie Żar gratis. Obszar działania : Żary, Żagań, Nowa Sól, Zielona Góra, Krosno Odrzańskie i
            okolice. Możliwość dojazdu do klienta w obszarze 60 km od Żar.
          </p>
        </div>
        <div class="col-md-3 bg-dark p-4">
        <?php if(is_active_sidebar( 'right-sidebar' )):?>
            <ul id="sidebar">
                <?php dynamic_sidebar( 'right-sidebar' );?>
            </ul>
        <?php endif;?> 
            
        </div>
      </div>
    </div>



<?php get_footer();?>