 @extends('layouts.app')

 @section('mainContent')
     <div class="my-3">
         <h1 class="mb-4">Edit User Record</h1>

         <form action="#" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')

             <input value={{ $user->id }}  name="id" hidden>
             <div class="row flex">
                 <div class="col mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input value="{{ old('name', $user->name) }}" name="name" class="form-control" id="name"
                         placeholder="Enter Student Name" required>
                 </div>
                 <div class="col mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input value="{{ old('email', $user->email) }}" name="email" class="form-control" id="email" placeholder="name@example.com"
                         required>
                 </div>
             </div>
             <div class="row">
                 <div class="col mb-3">
                     <label for="role" class="form-label">Role</label>
                     <select name="role" id="" class="form-control">
                         <option value="" disabled>Select Role...</option>
                         <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                         <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                     </select>
                 </div>
                 <div class="col mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" name="password" class="form-control" id="password" disabled>
                 </div>
             </div>
             <div class="row">
                 <div class="col mb-3">
                     <label for="photo" class="form-label">Upload Image</label>
                     @if ($user->photo)
                         <img src="{{ asset('storage/uploads/' . $user->photo) }}" width="50" class="mb-2">
                     @endif
                     <input type="file" name="photo" class="form-control" id="photo">
                 </div>
             </div>
             <div class="mb-3">
                 <button type="submit" class="btn btn-outline-primary">Update User</button>
             </div>
     </div>
     </form>
     </div>
 @endsection
