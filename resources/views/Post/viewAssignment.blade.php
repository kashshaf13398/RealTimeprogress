@extends('test')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       
     @foreach($post as $row)
      <div>
      	
      	 	
      	   <h3>{{ $row->name }}</h3>
      	   {{-- <p>Category Name : {{ $post->name }} </p> --}}
      	   <p>{{ $row->description }}</p>
      	 
      </div>
     @endforeach
     </div>
   </div>
</div>
@endsection