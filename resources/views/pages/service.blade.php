@extends('pages.layout')

@section('contenido')
    <div role="main" class="main full-height" id="main" style="background-color: #000;">
        <ul style="display: none" class="nav nav-pills sort-source mt-5 mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
            <li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
        </ul>


        	<div class="sort-destination-loader sort-destination-loader-showing">
				<div style="margin-bottom: 0px !important;" class="row portfolio-list no-gutters sort-destination mb-5 portfolio_maya" data-sort-id="portfolio">
					@foreach($services as $service)
						<div class="col-md-4 col-lg-4 isotope-item m-0 p-0 websites {{ $service->class }}">
							<div class="portfolio-item m-0">
								<a href="{{ route('services.show', $service) }}">
									<h2 class="title_service_maya">{{ $service->name }}</h2>
									<img class="{{ $service->class_img }}" src="web/img/servicio-01.png"/>
									<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
										<span class="thumb-info-wrapper">
											<img class="img_fondo_maya" src="web/img/01.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner text_column">
													{{ $service->content }}
												</span>
												<span class="thumb-info-type">Ver</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
    </div>
@endsection