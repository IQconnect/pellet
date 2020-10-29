<section>
	<div class="container">
		<div class="text content">
				@while(have_posts()) @php the_post() @endphp
						@php the_content() @endphp
				@endwhile
		</div>
	</div>
</section>