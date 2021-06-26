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
                     
                        <form action="{{url('/store/assignment/'.$id)}}" method="post">
                            @csrf
                           <fieldset>
                               <div class="full field">
                                  <input type="text" placeholder="Assignment Name" name="name" />
                               <div class="full field">
                                  <textarea placeholder="Assignment Description" name="description"></textarea>
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

@endsection()
