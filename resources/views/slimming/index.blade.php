@extends('slimming.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('slimming.create') }}"> Create New student</a>
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
            <th>Name</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($slimming as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->no_hp }}</td>
            <td>
                <form action="{{ route('slimming.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('slimming.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('slimming.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $slimming->links() !!}
    </div>
      
@endsection