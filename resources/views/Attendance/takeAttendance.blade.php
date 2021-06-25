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
            <form action="{{url('/store/attendance/'.$student[0]->class_id)}}" method="post">
                @csrf
               <fieldset>
            
                <table class="table table-responsive">
                    <tr>
                        <th>Reg no</th>
                        <th>Student Name</th>
                        <th>Slug Name</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    @foreach($student as $row)
                    <tr>
                        <td>{{ $row->reg_no }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->class_id }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <input type="radio" id="present" name="{{$row->User_id}}" value="present">
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