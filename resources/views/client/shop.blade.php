@extends('client_layout.client')

@section('content')
    <!-- END nav -->

	<!-- start content -->
	
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontend/images/bggg.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">The shop</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="{{url('/shop')}}" class="{{request()->is('shop') ? 'active' : ''}}">Tout</a></li>
						@foreach ($categories as $category)
							<li><a href="{{url('/select_par_cat/'.$category->category_name)}}" class="{{request()->is('select_par_cat/'.$category->category_name) ? 'active' : ''}}">{{$category->category_name}}</a></li>							
						@endforeach
    				</ul>
    			</div>
    		</div>
    		<div class="row">
    			@foreach ($products as $product)
				<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="">
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$product->product_name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">{{$product->product_price}}</span></p>
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
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

@endsection