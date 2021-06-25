@extends('test')
@section('content')

<div class="section contact_section" style="background:#12385b;">
    <div class="container">
           <div class="row">
             <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="full float-right_img">
                    <img src="frontend/images/img10.png" alt="#">
                </div>
             </div> -->
             <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
                <div class="contact_form">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                       <ul>
                          @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                          @endforeach
                       </ul>
                    </div>
                 @endif
                    <form action="{{url('/store/student/'.$id)}}" method="post">
                        @csrf
                       <fieldset>
                           <div class="full field">
                              <input type="text" placeholder="Name" name="name" />
                           </div>
                           <div class="full field">
                                <input type="text" placeholder="Reg No" name="reg_no" />
                           </div>
                           <div class="full field">
                              <div class="center"><button>Submit</button></div>
                           </div>
                       </fieldset>
                    </form>
                </div>
             </div>
           </div>             
       </div>
    </div>

@endsection