<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evgenia Trubina</title>
  <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url'); ?>./assets/img/icons/logo-mini.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <style>
    :root {
      --red-color: #FF0000;
      --white-text: #fff;
      --color-title: linear-gradient(101deg, #000 23.31%, #F00 64.09%);
      --black-color: #000;
    }
  </style>
  <?php wp_head() ?>
</head>

<body>
  <div class="wrapper">
    <?php
    $title = get_the_title();
    if ($title == 'Домашня сторінка') { // Проверяем, является ли текущая страница "Home"
    ?>
    <header class="header">
      <div class="container header__container">
        <div>
          <a class="header__logo logo" href="#index.html">
            <img class="header__logo-img logo--img" src="<?php bloginfo('template_url'); ?>./assets/img/icons/logo.svg" alt="logo">
            <img width="55px" height="62px" class="header__logo-img logo--mini" src="<?php bloginfo('template_url'); ?>./assets/img/icons/logoMini.png" alt="logo">
          </a>
        </div>
        <nav class="nav">
          <ul class="nav__navigation-list">
            <li class="nav__menu-item nav__menu-item--mobile"><a href="#about" data-scroll class="nav__link">Про автора</a></li>
            <li class="nav__menu-item nav__menu-item--mobile"><a href="#who" data-scroll class="nav__link">Для кого?</a></li>
            <li class="nav__menu-item"><a href="#moduls" data-scroll class="nav__link">Програма</a></li>
            <li class="nav__menu-item"><a href="#cases" data-scroll class="nav__link">Кейси</a></li>
            <li class="nav__menu-item"><a href="#price" data-scroll class="nav__link">Тарифи</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <?php
    }
    ?>


    