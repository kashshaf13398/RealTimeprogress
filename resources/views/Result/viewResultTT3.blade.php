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
                    <th>TT3</th>
                    {{-- <th>TT2</th> --}}
                    {{-- <th></th> --}}
                </tr>
                @foreach($tt3 as $row)
                <tr>
                    <td>{{ $row->student->reg_no }}</td>
                    <td>{{ $row->student->name }}</td>
                    <td>{{ $row->score }}/{{$row->score_by}}</td>
                    {{-- <td>
                        <a href="{{url('/edit/attendance/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                    </td> --}}
                </tr>
                @endforeach
            </table>
         </div>
      </div>
    </div>             
</div>
</div>


@endsection