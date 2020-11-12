@php
  $lang = pll_current_language();
@endphp

<div class="lang">
  @if($lang == 'pl')
    <div class="lang__selected">
      <img class="lang__img" src="@asset('images/pl.png')" alt="pl" />
      <span>
        Polski
      </span>
      <i class="fas fa-angle-down lang__arrow"></i>
    </div>
  @endif
  @if($lang == 'en')
    <div class="lang__selected">
      <img class="lang__img" src="@asset('images/en.png')" alt="en" />
      <span>
        English
      </span>
      <i class="fas fa-angle-down lang__arrow"></i>
    </div>
  @endif
  @if($lang == 'it')
    <div class="lang__selected">
      <img class="lang__img" src="@asset('images/it.png')" alt="it" />
      <span>
        Italiano
      </span>
      <i class="fas fa-angle-down lang__arrow"></i>
    </div>
  @endif
  @if($lang == 'de')
    <div class="lang__selected">
      <img class="lang__img" src="@asset('images/de.png')" alt="de" />
      <span>
        Deutsch
      </span>
      <i class="fas fa-angle-down lang__arrow"></i>
    </div>
  @endif
  <div class="lang__dropdown">
    @if($lang != 'pl')
      <a href="{{ get_home_url() }}" class="lang__item">
        <img class="lang__img" src="@asset('images/pl.png')" alt="pl" />
        <span>
          Polski
        </span>
      </a>
    @endif
    @if($lang != 'en')
      <a href="{{ get_home_url() }}/en" class="lang__item">
        <img class="lang__img" src="@asset('images/en.png')" alt="en" />
        <span>
          English
        </span>
      </a>
    @endif
    @if($lang != 'it')
      <a href="{{ get_home_url() }}/it" class="lang__item">
        <img class="lang__img" src="@asset('images/it.png')" alt="it" />
        <span>
          Italiano
        </span>
      </a>
    @endif
    @if($lang != 'de')
      <a href="{{ get_home_url() }}/de" class="lang__item">
        <img class="lang__img" src="@asset('images/de.png')" alt="de" />
        <span>
          Deutsch
        </span>
      </a>
    @endif
  </div>
</div>
