@extends('pages.layout')

@section('contenido')


    <div style="position: fixed; height: 100%; width: 100%; ">

    </div>
    <div role="main" class="main" style="background-color: #fff; position: relative; top: 160px; z-index: 99;">

        <div>

            <div id="porfolioAjaxBox" class="ajax-box ajax-box-init">

                <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>

                <div class="ajax-box-content" id="porfolioAjaxBoxContent"></div>

            </div>
            <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Todo</a></li>
                @foreach($categories as $category)
                    <li class="nav-item" data-option-value=".{{ $category->url }}"><a class="nav-link" href="#">{{ $category->name }}</a></li>
                @endforeach
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing pb-4 mt-4 pt-2">
                <div class="row portfolio-list no-gutters sort-destination" data-sort-id="portfolio">
                    {{-- @foreach($category->portfolios as $portfolio)--}}
                    @foreach($portfolios as $portfolio)
                        @if($portfolio->category->id === 1)
                            <div class="col-lg-3 isotope-item m-0 p-0 {{ $portfolio->category->url }}">{{-- {{ $portfolio->category->url }} --}}
                                <div class="portfolio-item m-0">
                                    <a href="#" data-href="ajax/test.html" data-ajax-on-page>
                                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
                                            <span class="thumb-info-wrapper">
                                                {!! Html::image('web/img/projects/test01.jpg','Maya comunicación integral', array('class' => 'img-fluid')) !!}
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner" style="color: #000;">{{ $portfolio->category->name }}</span>
                                                    <span class="thumb-info-type">{{ $portfolio->name }}</span>
                                                </span>
                                                <span class="thumb-info-action">
                                                    <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @elseif($portfolio->category->id === 2)
                            <div class="col-lg-3 isotope-item m-0 p-0 {{ $portfolio->category->url }}">{{-- {{ $portfolio->category->url }} --}}
                                <div class="portfolio-item m-0">
                                    <a href="#" data-href="ajax/test.html" data-ajax-on-page>
                                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
                                        <span class="thumb-info-wrapper">
                                            {!! Html::image('web/img/projects/test01.jpg','Maya comunicación integral', array('class' => 'img-fluid')) !!}
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner" style="color: #000;">{{ $portfolio->category->name }}</span>
                                                <span class="thumb-info-type">{{ $portfolio->name }}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        @elseif($portfolio->category->id === 3)
                            <div class="col-lg-3 isotope-item m-0 p-0 {{ $portfolio->category->url }}">{{-- {{ $portfolio->category->url }} --}}
                                <div class="portfolio-item m-0">
                                    <a href="#" data-href="ajax/test.html" data-ajax-on-page>
                                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
                                        <span class="thumb-info-wrapper">
                                            {!! Html::image('web/img/projects/test01.jpg','Maya comunicación integral', array('class' => 'img-fluid')) !!}
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner" style="color: #000;">{{ $portfolio->category->name }}</span>
                                                <span class="thumb-info-type">{{ $portfolio->name }}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection