<section class="section section--color-bottom">
  <div class="container">
    <div class="about">
      <div class="about__content">
        <h2 class="title">
          {{ $data['title'] }}
        </h2>
        <p class="text about__desc">
          {!! $data['desc'] !!}
        </p>
        <a href="{{ $data['link']['url'] }}" class="button">
          {{ $data['link']['title'] }}
        </a>
      </div>
      <div class="about__image">
        <img src="{{ $data['image']['url'] }}" alt="{{ $data['image']['title'] }}" class="about__img">
      </div>
    </div>
  </div>
</section>