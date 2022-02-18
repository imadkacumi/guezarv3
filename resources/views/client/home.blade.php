@extends('client_layout.client')

@section('content')

	<!-- start content -->

    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			@foreach ($sliders as $slider)
			  <div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}});">
				  <div class="overlay"></div>
			  <div class="container">
				  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					  <div class="col-md-12 ftco-animate text-center">
						  <h1 class="mb-2">{{$slider->description1}}</h1>
						  <h2 class="subheading mb-4">{{$slider->description2}}</h2>
						  <p><a href="{{('/shop')}}" class="btn btn-primary">Commander</a></p>
					  </div>
				  </div>
			  </div>
			  </div>  
			@endforeach
		</div>
  </section>

  <section class="ftco-section">
		  <div class="container">
			  <div class="row no-gutters ftco-services">
		<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services mb-md-0 mb-4">
			<div class=" active d-flex justify-content-center align-items-center mb-2">
				<img class="icone" src="frontend/images/icone1v1.png">
			</div>
			<div class="media-body">
			  <h3 class="heading">Livraison</h3>
			  <span>On order over $100</span>
			</div>
		  </div>      
		</div>
		<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services mb-md-0 mb-4">
			<div class="d-flex justify-content-center align-items-center mb-2">
				<img class="icone" src="frontend/images/icone2v1.png">
			</div>
			<div class="media-body">
			  <h3 class="heading">Viandes Fraîche</h3>
			  <span>Product well package</span>
			</div>
		  </div>    
		</div>
		<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services mb-md-0 mb-4">
			<div class=" d-flex justify-content-center align-items-center mb-2">
				<img class="icone" src="frontend/images/icones3v1.png">
			</div>
			<div class="media-body">
			  <h3 class="heading">Halal Meat</h3>
			  <span>Quality Products</span>
			</div>
		  </div>      
		</div>
		<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
		  <div class="media block-6 services mb-md-0 mb-4">
			<div class=" d-flex justify-content-center align-items-center mb-2">
				<img class="icone" src="frontend/images/icone4v1.png">
			</div>
			<div class="media-body">
			  <h3 class="heading">Support</h3>
			  <span>Horaires</span>
			</div>
		  </div>      
		</div>
	  </div>
		  </div>
	  </section>

  <section class="ftco-section">
	  <div class="container">
			  <div class="row justify-content-center mb-3 pb-3">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<span class="subheading">Featured Products</span>
		  <h2 class="mb-4">Produits du moments</h2>
		  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		</div>
	  </div>   		
	  </div>
	  <div class="container">
		  <div class="row">
			  @foreach ($products as $product)	
			  <div class="col-md-6 col-lg-3 ftco-animate">
				  <div class="product">
					  <a href="#" class="img-prod"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="Colorlib Template">
						  <div class="overlay"></div>
					  </a>
					  <div class="text py-3 pb-4 px-3 text-center">
						  <h3><a href="#">{{$product->product_name}}</a></h3>
						  <div class="d-flex">
							  <div class="pricing">
								  <p class="price"><span class="mr-2 ">{{$product->product_price}}</span></p>
							  </div>
						  </div>
						  <div class="bottom-area d-flex px-3">
							  <div class="m-auto d-flex">
								  <a href="{{url('/ajouteraupanier/'.$product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
									  <span><i class="ion-ios-cart"></i></span>
								  </a>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
			  @endforeach
		  </div>
	  </div>
  </section>
	  
	  <section class="ftco-section img" style="background-image: url(frontend/images/boucherie-halal.jpeg);">
	  <div class="container">
			  <div class="row justify-content-end">
		<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
			<span class="subheading">Best Price For You</span>
		  <h2 class="mb-4">Deal of the day</h2>
		  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		  <h3><a href="#">Spinach</a></h3>
		  <span class="price">$10 <a href="#">now $5 only</a></span>
		  <div id="timer" class="d-flex mt-5">
						<div class="time" id="days"></div>
						<div class="time pl-3" id="hours"></div>
						<div class="time pl-3" id="minutes"></div>
						<div class="time pl-3" id="seconds"></div>
					  </div>
		</div>
	  </div>   		
	  </div>
  </section>

	
@endsection