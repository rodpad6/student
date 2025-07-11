 @extends('layouts.app')

 @section('content')

     @if ($errors->any())
         <div class="alert alert-danger">
             <ul class="mb-0">
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif

     <div class="my-3">
         <h1 class="mb-4">Create User Record</h1>

         <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="row flex">
                 <div class="col mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="name" name="name" class="form-control" id="name"
                         placeholder="Enter User's Name" required>
                 </div>
                 <div class="col mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                         required>
                 </div>
             </div>
             <div class="row">
                 <div class="col mb-3">
                     <label for="role" class="form-label">Role</label>
                     <select name="role" id="" class="form-control">
                         <option value="" disabled selected>Select Role...</option>
                         <option value="user">User</option>
                         <option value="admin">Admin</option>
                     </select>
                 </div>
                 <div class="col mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" name="password" class="form-control" id="password"
                         placeholder="Create Password..." required>
                 </div>
             </div>
             <div class="row">
                 <div class="col mb-3">
                     <label for="photo" class="form-label">Upload Image</label>
                     <input type="file" name="photo" class="form-control" id="photo">
                 </div>
             </div>
             <div class="mb-3">
                 <button type="submit" class="btn btn-outline-primary">Add User</button>
                 {{-- <a href="{{ route('students.store') }}">Go to Index</a>ss --}}
             </div>
     </div>
     </form>
     </div>
 @endsection
