@extends('test')
@section('content')

<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2 href="{{route('home')}}"><span>All Cousrses</span></h2>
                    </div>
                  </div>
            </div>
            @foreach($classes as $row)
            <div class="col-md-4">
                <div class="full blog_img_popular">
                   <img class="img-responsive" src="{{asset('frontend/images/img9.png')}}"  alt="#" />
                   <!--<h4><a class="hvr-radial-out button-theme" href="#">{{ $row->name }}</a> </h4> -->
                   {{-- <h4  href="{{route('home')}}">{{ $row->name }}</h4>   --}}
                   <h4><a href="{{url('/view/courses/'.$row->id)}}">{{ $row->name }}</a> </h4>
                </div>
            </div>
            @endforeach

            {{ $classes->links()}}
            
        </div>
    </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                       <h2><span>Popular </span>Courses</h2>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                   <img class="img-responsive" src="frontend/images/p1.png" alt="#" /> 
                   <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="frontend/images/p2.png" alt="#" />
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="frontend/images/p3.png" alt="#" />
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()