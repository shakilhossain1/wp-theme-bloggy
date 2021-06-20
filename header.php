<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body
    x-data="{navOpen: false, searchOpen: false}"
    <?php body_class('py-4') ?>
    :class="{'overflow-hidden': navOpen || searchOpen}"
  >
    <!-- Mobile Nav Overlay -->
    <div
      x-show.transition.opacity="navOpen"
      class="fixed bg-gray-300 bg-opacity-90 inset-0 z-10"
      id="navOverlay"
    ></div>
    <!-- Mobile Nav -->
    <div
      id="mobileNav"
      x-show="navOpen"
      x-transition
      @click.away="navOpen = false"
      class="fixed right-0 top-0 z-50 min-h-full w-5/6 ml-auto bg-white shadow-md px-8 max-w-[300px] flex flex-col justify-start py-10"
    >
      <header class="flex items-center justify-between">
        <img src="<?= bloggy_build_path('imgs/logo.svg') ?>" alt="Logo" />
        <button @click="navOpen = false" class="text-2xl text-skin-muted">
          x
        </button>
      </header>
      <ul class="mt-8">
        <li class="py-2 border-b border-skin-muted">
          <a href="#" class="nav-link active">Home</a>
        </li>
        <li class="py-2 border-b border-skin-muted">
          <a href="#" class="nav-link">About</a>
        </li>
        <li class="py-2 border-b border-skin-muted">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      <footer class="mt-auto">bottom</footer>
    </div>
    <!-- Search Overlay -->
    <div
      id="searchOverlay"
      x-show="searchOpen"
      x-transition
      class="fixed bg-white inset-0 z-20 flex flex-col justify-start py-6 px-6"
    >
      <button
        @click="searchOpen = false"
        class="text-2xl text-skin-muted ml-auto"
      >
        x
      </button>
      <div class="md:max-w-[650px] w-full md:mx-auto">
        <form action="#" class="mt-6 text-center">
          <h2 class="text-skin-dark text-2xl font-bold">Press Esc to close</h2>
          <input
            type="search"
            placeholder="Type Here.."
            class="
              mt-4
              border border-skin-muted
              focus:outline-none
              focus:border-skin-primary
              rounded-full
              py-2
              px-4
              w-full
            "
          />
        </form>
        <div id="searchContent"></div>
      </div>
    </div>
    <header id="header" class="text-skin-light">
      <nav
        class="px-3 py-6 flex justify-between items-center lg:max-w-7xl mx-auto"
      >
        <div>
          <img src="<?= bloggy_build_path('imgs/logo.svg') ?>" alt="Logo" />
        </div>
        <div class="flex space-x-3">
          <button
            @click="searchOpen = true"
            id="searchButton"
            type="button"
            class="bg-skin-primary rounded-full p-2"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-skin-light"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </button>
          <button
            id="navButton"
            @click="navOpen = true"
            class="bg-skin-primary lg:hidden rounded-full p-2"
            type="button"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-skin-light"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </div>
      </nav>
    </header>
