@extends('pages.layout')

@section('contenido')

    <div role="main" class="main full-height" id="main">
    <div class="slider-container rev_slider_wrapper" style="height: 100%;">
        <div id="revolutionSlider" class="slider rev_slider content_fondo" data-plugin-revolution-slider data-plugin-options="{'delay': 10000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
            <ul>
                <li data-transition="fade" class="after_div">
                    <img src="web/img/demos/medical/slides/color01.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label slider_maya_01"
                         data-x="right" data-hoffset="95"
                         data-y="center" data-voffset="-85"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Esto es un<br> texto de<br> un test</div>

                    <div class="tp-caption main-label triangulo_blanco"
                         data-x="right" data-hoffset="246"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption main-label slider_maya_02"
                         data-x="right" data-hoffset="350"
                         data-y="center" data-voffset="-32"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Atrévete</div>

                    <div class="tp-caption main-label triangulo_negro"
                         data-x="right" data-hoffset="371"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption bottom-label btn_slider" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="right" data-hoffset="240"
                         data-y="center" data-voffset="170"
                         data-start="2000"
                         style="z-index: 5; border: 1px solid #fff; padding: 15px 20px 15px 20px; cursor: pointer;"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="">Nuestros Servicios</div>

                    <div class="tp-caption bottom-label" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="left" data-hoffset="10"
                         data-y="center" data-voffset="130"
                         data-start="2000"
                         style="z-index: 5;"
                         data-transform_in="y:[100%];opacity:0;s:500;"><img src="web/img/slider/img.png" class="img_design" alt=""></div>

                </li>
                <li data-transition="fade">
                    <img src="web/img/demos/medical/slides/color02.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label slider_maya_01"
                         data-x="right" data-hoffset="95"
                         data-y="center" data-voffset="-85"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">Esto es un<br> texto de<br> un test</div>

                    <div class="tp-caption main-label triangulo_blanco"
                         data-x="right" data-hoffset="246"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption main-label slider_maya_02"
                         data-x="right" data-hoffset="350"
                         data-y="center" data-voffset="-32"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Atrévete</div>

                    <div class="tp-caption main-label triangulo_negro"
                         data-x="right" data-hoffset="371"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption bottom-label btn_slider" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="right" data-hoffset="240"
                         data-y="center" data-voffset="170"
                         data-start="2000"
                         style="z-index: 5; border: 1px solid #fff; padding: 15px 20px 15px 20px; cursor: pointer;"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="">Nuestros Servicios</div>

                    <div class="tp-caption bottom-label" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="left" data-hoffset="10"
                         data-y="center" data-voffset="130"
                         data-start="2000"
                         style="z-index: 5;"
                         data-transform_in="y:[100%];opacity:0;s:500;"><img
                                src="web/img/slider/img.png" class="img_design" alt=""></div>
                </li>
                <li data-transition="fade">
                    <img src="web/img/demos/medical/slides/color03.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label slider_maya_01"
                         data-x="right" data-hoffset="95"
                         data-y="center" data-voffset="-85"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Esto es un<br> texto de<br> un test</div>

                    <div class="tp-caption main-label triangulo_blanco"
                         data-x="right" data-hoffset="246"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption main-label slider_maya_02"
                         data-x="right" data-hoffset="350"
                         data-y="center" data-voffset="-32"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Atrévete</div>

                    <div class="tp-caption main-label triangulo_negro"
                         data-x="right" data-hoffset="371"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption bottom-label btn_slider" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="right" data-hoffset="240"
                         data-y="center" data-voffset="170"
                         data-start="2000"
                         style="z-index: 5; border: 1px solid #fff; padding: 15px 20px 15px 20px; cursor: pointer;"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="">Nuestros Servicios</div>

                    <div class="tp-caption bottom-label" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="left" data-hoffset="10"
                         data-y="center" data-voffset="130"
                         data-start="2000"
                         style="z-index: 5;"
                         data-transform_in="y:[100%];opacity:0;s:500;"><img
                                src="web/img/slider/img.png" class="img_design" alt=""></div>

                </li>
                <li data-transition="fade">
                    <img src="web/img/demos/medical/slides/color04.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label slider_maya_01"
                         data-x="right" data-hoffset="95"
                         data-y="center" data-voffset="-85"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Esto es un<br> texto de<br> un test</div>

                    <div class="tp-caption main-label triangulo_blanco"
                         data-x="right" data-hoffset="246"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption main-label slider_maya_02"
                         data-x="right" data-hoffset="350"
                         data-y="center" data-voffset="-32"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;">Atrévete</div>

                    <div class="tp-caption main-label triangulo_negro"
                         data-x="right" data-hoffset="371"
                         data-y="center" data-voffset="79"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style=""
                         data-mask_in="x:0px;y:0px;"></div>

                    <div class="tp-caption bottom-label btn_slider" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="right" data-hoffset="240"
                         data-y="center" data-voffset="170"
                         data-start="2000"
                         style="z-index: 5; border: 1px solid #fff; padding: 15px 20px 15px 20px; cursor: pointer;"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="">Nuestros Servicios</div>

                    <div class="tp-caption bottom-label" onclick="window.open('servicios.html','_self'); return false;"
                         data-x="left" data-hoffset="10"
                         data-y="center" data-voffset="130"
                         data-start="2000"
                         style="z-index: 5;"
                         data-transform_in="y:[100%];opacity:0;s:500;"><img
                                src="web/img/slider/img.png" class="img_design" alt=""></div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection