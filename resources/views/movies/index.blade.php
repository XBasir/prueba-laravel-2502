@extends('movies.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All movies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}"> Create new Movie</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>

        @if($movies)
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->category }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>
                        <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
      
@endsection