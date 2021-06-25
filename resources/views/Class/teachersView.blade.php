@extends('test')
@section('content')

<div class="section margin-top_50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 layout_padding_2">
                <div class="full">
                    <div class="heading_main text_align_left">
                       <h2><span>Welcome {{$class->user->name}} To</span> {{$class->name}}</h2>
                    </div>
                    <div class="full">
                      <p> {{$class->description}} </p>
                    </div>
                    <div class="full">
                       <a class="hvr-radial-out button-theme" href="{{url('/take/attendance/'.$class->id)}}">Take Attendance</a>
                    </div>
                    <div class="full">
                        <a class="hvr-radial-out button-theme" href="#">Upload Termtest result</a>
                     </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <img src="{{asset('frontend/images/img2.png')}}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection