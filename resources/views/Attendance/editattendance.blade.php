@extends('test')

@section('content')

<div class="container">
    <div class="row">
      <!-- <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="full float-right_img">
             <img src="frontend/images/img10.png" alt="#">
         </div>
      </div> -->
      <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
         <div class="contact_form">
            <form action="{{url('/update/attendance/'.$attendance->id)}}" method="post">
                @csrf
               <fieldset>
            
                <table class="table table-responsive">
                    <tr>
                        <th>Reg no</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                        
                    </tr>
                    <tr>
                        <td>{{ $attendance->student->reg_no }}</td>
                        <td>{{ $attendance->student->name }}</td>
                        {{-- <td>{{ $attendance->score }}</td> --}}
                        <td>
                            <input type="number" value="{{$attendance->score}}" name="score" />
                        </td>
                    </tr>
                    
                </table>
                
            
            
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