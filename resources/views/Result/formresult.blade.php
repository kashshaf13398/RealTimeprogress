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
            
            <form action="{{url('/store/result/'.$stu[0]->class_id)}}" method="post">
                @csrf
               <fieldset>
                <input type="text" placeholder="TT Name" name="tt_name" />
                <input type="number" placeholder="Total Marks" name="score_by" />
                <hr>
            
                <table class="table table-responsive">
                    <tr>
                        <th>Reg no</th>
                        <th>Student Name</th>
                        
                        <th>number</th>
                    </tr>
                    @foreach($stu as $row)
                    <tr>
                        <td>{{ $row->reg_no }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <input type="number" value="" name="{{$row->User_id}}" />
                        </td>
                    </tr>
                    @endforeach
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