<section class="hero">
    <div class="hero__content">
      <h1>
        <span class="title hero__title">
          {{ $data['title'] }}
        </span>
        <span class="title hero__subtitle">
          {{ $data['subtitle'] }}
        </span>
      </h1>
    </div>
    <video class="hero__bg" playsinline="" autoplay="" muted="" loop="" poster="">
      <source src="{{ $data['bg']['url'] }}" type="video/mp4">
    </video>
</section>