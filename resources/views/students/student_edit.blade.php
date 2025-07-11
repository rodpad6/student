 @extends('layouts.app')

 @section('content')
     <div class="my-3">
         <h1 class="mb-4">Create Student Record</h1>

         <form action="{{ route('students.edit') }}" method="POST">
             @csrf
             @method('PUT')

             <input value={{ $posts->id }} type="id" name="id" hidden>

             <div class="mb-3">
                 <label for="name" class="form-label">Name</label>
                 <input value="{{ $posts->name }}" type="name" name="name" class="form-control" id="name">
             </div>
             <div class="mb-3">
                 <label for="type" class="form-label">Type</label>
                 <input type="type" value="{{ $posts->type }}" name="type" class="form-control" id="type">
             </div>
             <div class="mb-3">
                 <button type="submit" class="btn btn-outline-warning">Update Student</button>
                 <a href="{{ route('index') }}">Go to Index</a>
             </div>
         </form>
     </div>
 @endsection
