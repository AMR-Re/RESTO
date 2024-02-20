<x-guest-layout>

<!-- menu section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-0 col-md-12 col-sm-12 text-center">
				<h1 class="heading">Our Special Categories</h1>
				<hr>
			</div>

            @foreach ($categories as $category)

                <div class="col-md-4 col-sm-4 mt-4 mb-4">
                    <img class="h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <a href="{{ route('categories.show', $category->id) }}">
                        <h4 class="uppercase">{{ $category->name }} ................ <span>❤️</span></h4>
                    </a>
                    <h5>{{ $category->description }}</h5>
                </div>

            @endforeach

			{{-- <div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Vegetable ................ <span>$20.50</span></h4>
				<h5>Chicken / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Meat ........................... <span>$30.50</span></h4>
				<h5>Meat / Rosemary / Lemon</h5>
			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Lemon-Rosemary Pork ........................ <span>$40.75</span></h4>
				<h5>Pork / Tooplate / Lemon</h5>
			</div> --}}

		</div>
	</div>
</section>
</x-guest-layout>
