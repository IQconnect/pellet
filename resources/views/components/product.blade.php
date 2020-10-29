<section class="section section--color product">
  <div class="container">
    <h2 class="title">
      {{ $data['title'] }}
    </h2>
    <p class="text section__desc">
      {!! $data['desc'] !!}
    </p>
    <div class="product__columns">
      <div class="product__boxes">
        @foreach($data['boxes'] as $item)
          <div class="product__box">
            <h3 class="title title--small product__box-title">
              <i class="{{ $item['icon'] }} title__icon @if($loop->last) title__icon--small @endif"></i>
              {{ $item['title'] }}
            </h3>
            <p class="text">
              {!! $item['desc'] !!}
            </p>
          </div>
        @endforeach
      </div>
      <div class="product__products">
        @foreach($data['products'] as $item)
          <div class="product__product">
            <div class="product__product-image">
              <img class="product__product-img" src="{{ $item['image']['url'] }}" alt="{{ $item['image']['title'] }}">
            </div>
            <div class="product__product-content">
              <h3 class="title title--medium">
                {{ $item['name'] }}
              </h3>
              <p class="title title--small product__product-price">
                {!! $item['price'] !!}
              </p>
              <a href="{{ $item['link']['url'] }}" class="button">
                {{ $item['link']['title'] }}
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>