 @extends('layouts.app')

 @section('content')
     <div class="my-3">
         <h1 class="mb-4">Create Student Record</h1>

         <form action="{{ route('students.add') }}" method="POST">
             @csrf
             <div class="mb-3">
                 <label for="name" class="form-label">Name</label>
                 <input type="name" name="name" class="form-control" id="name" placeholder="Enter Student Name"
                     required>
             </div>
             <div class="mb-3">
                 <label for="type" class="form-label">Type</label>
                 <input type="type" name="type" class="form-control" id="type" placeholder="name@example.com"
                     required>
             </div>
             <div class="mb-3">
                 <button type="submit" class="btn btn-outline-primary">Add Student</button>
                 <a href="{{ route('students.showStudents') }}">Back to Student Pagex</a>
             </div>
         </form>
     </div>
 @endsection
