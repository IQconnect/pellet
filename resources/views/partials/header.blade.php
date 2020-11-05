<header class="header" header>
  <div class="container">
    <div class="header__row">
      <a class="header__brand" href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
      </a>
      <div class="header__buttons">
        {{-- <a class="button button--primary header__contact" href="./koszyk/">
          <i class="fas fa-shopping-cart button__icon"></i>
          Koszyk
        </a> --}}
        <div class="header__contact">
          @if (has_nav_menu('koszyk'))
            {!! wp_nav_menu(
              [
                'theme_location' => 'koszyk',
              ]) !!}
          @endif
        </div>
        <div class="burger burger-slip header__burger">
          <div class="burger-lines"></div>
        </div>
      </div>
    </div>
  </div>
  <nav class="nav col-auto" data-nav>
    @if (has_nav_menu('primary_navigation'))
     {!! wp_nav_menu(
       [
         'theme_location' => 'primary_navigation',
         'menu_class' => 'nav__menu',
       ]) !!}
    @endif
  </nav>
</header>