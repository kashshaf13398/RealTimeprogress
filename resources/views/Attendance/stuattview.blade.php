@extends('test')
@section('content')

<hr>


<div class="container">
    <div class="row">
      <!-- <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="full float-right_img">
             <img src="frontend/images/img10.png" alt="#">
         </div>
      </div> -->
      <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
         <div class="contact_form">
            <table class="table table-responsive">
                <tr>
                    <th>Reg no</th>
                    <th>Student Name</th>
                    <th>Attendance</th>
                    <th> </th>
                    {{-- <th></th> --}}
                </tr>
                
                <tr>
                    <td>{{ $attendance->student->reg_no }}</td>
                    <td>{{ $attendance->student->name }}</td>
                    <td>{{ $attendance->score }}/{{$attendance->score_by}}</td>
                </tr>
                
            </table>
         </div>
      </div>
    </div>             
</div>
</div>


@endsection