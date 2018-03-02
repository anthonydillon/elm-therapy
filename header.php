<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ElmTherapy
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/wp-content/themes/elm-therapy/favicon.png" type="image/x-icon" />
    <title>ELM Therapy; for a happier, healthier you.</title>
    <meta name="description" content="Massage benefits the whole body, both physiologically and psychologically.">
    <!-- Stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Nunito+Sans:200" rel="stylesheet">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-1.6.3.min.css" />
    <link rel="stylesheet" href="/wp-content/themes/elm-therapy/css/main.css">
  </head>
  <body>
    <header id="navigation" class="p-navigation">
      <div class="row">
        <div class="p-navigation__banner">
          <div class="p-navigation__logo">
            <a class="p-navigation__link" href="/">
              <img src="/wp-content/themes/elm-therapy/images/logo.png" alt="" class="p-navigation__image">
              <span>ELM Therapy</span>
            </a>
          </div>
          <a href="#navigation" class="p-navigation__toggle--open" title="menu">Menu</a>
          <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu">Close menu</a>
        </div>
        <nav class="p-navigation__nav" role="menubar">
          <span class="u-off-screen">
            <a href="#main-content">Jump to main content</a>
          </span>
          <ul class="p-navigation__links" role="menu">
            <li class="p-navigation__link" role="menuitem"><a href="/#about">About us</a></li>
            <li class="p-navigation__link" role="menuitem"><a href="/#treatments">Treatments</a></li>
            <li class="p-navigation__link" role="menuitem"><a href="/#blog">Blog</a></li>
            <li class="p-navigation__link" role="menuitem"><a href="/#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>