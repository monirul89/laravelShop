@extends('front-end.master')
@section('title')
    wproducts
@endsection
@section('mainContent')
<div class="women-product">
    <div class=" w_content">
        <div class="women">
            <a href="#">
                <h4>Enthecwear - <span>4449 itemms</span> </h4>
            </a>
            <ul class="w_nav">
                <li>Sort : </li>
                <li><a class="active" href="#">popular</a></li> |
                <li><a href="#">new </a></li> |
                <li><a href="#">discount</a></li> |
                <li><a href="#">price: Low High </a></li>
                <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- grids_of_4 -->
    <div class="grid-product">
        <div class="  product-grid">
            <div class="content_box"><a href="{{ route('singleProduct')}}">
                    <div class="left-grid-view grid-view-left">
                        <img src="{{ asset('/') }}/front-end/assets/images/pic13.jpg" class="img-responsive watch-right" alt="" />
                        <div class="mask">
                            <div class="info">Quick View</div>
                        </div>
                </a>
            </div>
            <h4><a href="#"> Duis autem</a></h4>
            <p>It is a long established fact that a reader</p>
            Rs. 499
        </div>
    </div>
    <div class="  product-grid">
        <div class="content_box"><a href="{{ route('singleProduct')}}">
                <div class="left-grid-view grid-view-left">
                    <img src="{{ asset('/') }}/front-end/assets/images/pic2.jpg" class="img-responsive watch-right" alt="" />
                    <div class="mask">
                        <div class="info">Quick View</div>
                    </div>
            </a>
        </div>
        <h4><a href="#"> Duis autem</a></h4>
        <p>It is a long established fact that a reader</p>
        Rs. 499
    </div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic3.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic4.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic6.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic7.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic8.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
	</div>
</div>
<div class="  product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic11.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class=" product-grid">
    <div class="content_box"><a href="{{ route('singleProduct')}}">
            <div class="left-grid-view grid-view-left">
                <img src="{{ asset('/') }}/front-end/assets/images/pic12.jpg" class="img-responsive watch-right" alt="" />
                <div class="mask">
                    <div class="info">Quick View</div>
                </div>
        </a>
    </div>
    <h4><a href="#"> Duis autem</a></h4>
    <p>It is a long established fact that a reader</p>
    Rs. 499
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
@endsection