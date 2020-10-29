<footer class="footer">
  <div class="container footer__columns">
    <div class="footer__logo">
      <a href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo2")['url'] }}" alt="{{  get_option_field("logo2")['alt'] }}">
      </a>
    </div>
    <div class="footer__content">
      <div class="footer__row">
        <div>
          <h3 class="title footer__title">
            Kontakt
          </h3>
          <p class="text text--2 footer__block">
            {!! get_option_field("name") !!}
          </p>
          <p class="text text--2 footer__block">
            {!! get_option_field("address") !!}
          </p>
          <p class="text text--2 footer__block">
            Tel. <a class="footer__link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
              {{ get_option_field("phone") }}
            </a>
            <br>
            Email: <a class="footer__link" href="mailto:{{ str_replace(' ','', get_option_field('email')) }}">
              {{ get_option_field("email") }}
            </a>
          </p>
        </div>
        <div>
          <h3 class="title footer__title">
            Nawigacja
          </h3>
          @if(get_option_field("footer-nav"))
            <ul class="text text--3 footer__nav">
              @foreach(get_option_field("footer-nav") as $item)
                <li>
                  <a class="footer__link" href="{{ $item['link']['url'] }}">
                    {{ $item['link']['title'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      </div>
    </div>
  </div>
</footer>