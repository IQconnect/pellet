<section class="section section--color-top">
  <div class="container">
    <div class="delivery">
      <div class="delivery__image">
        <img src="{{ $data['image']['url'] }}" alt="{{ $data['image']['title'] }}" class="delivery__img">
      </div>
      <div class="delivery__content">
        <h2 class="title">
          {{ $data['title'] }}
        </h2>
        <p class="text delivery__desc">
          {!! $data['desc'] !!}
        </p>
      </div>
    </div>
  </div>
</section>