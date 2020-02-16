<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title();?>
    </title>
    <?php wp_head();?>
</head>
<body class="d-flex flex-column" <?php body_class();?>>

    <nav class="navbar top-nav navbar-expand-lg navbar-light py-0"> <a class="navbar-brand" href="index.html"><img
            src="<?php echo get_template_directory_uri() . '/assets/auto-centrum.png';?>" class="logo-img" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"> <a class="nav-link" href="index.html">Strona główna <span
                class="sr-only"></span></a> </li>
            <li class="nav-item"> <a class="nav-link" href="o-nas.html">O nas <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Usługi </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item"
                href="#">Kompleksowa rejestracja pojazdów</a> <a class="dropdown-item" href="#">Auto-Laweta</a> <a
                class="dropdown-item" href="#">Wynajem auta do ślubu</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="oferta.html"
                id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> Oferta </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"> <a class="dropdown-item"
                href="oferta.html">Microcary</a> <a class="dropdown-item" href="oferta.html">Samochody</a> </div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="kontakt.html">Kontakt</a> </li>
        </ul>
        </div>
    </nav>

<main>