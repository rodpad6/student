 @extends('layouts.app')

 @section('content')
     <div class="my-3>
         <div class="card">
         <div class="card-body">
             <a href="{{ route('users.create') }}" class="btn btn-success float-start mb-2">Add User</a>
             <table class="table table-bordered table-striped w-100">
                 <thead>
                     <tr>
                         <th class="bg-dark text-light">ID</th>
                         <th class="bg-dark text-light">Name</th>
                         <th class="bg-dark text-light">Email</th>
                         <th class="bg-dark text-light">Role</th>
                         <th class="bg-dark text-light">Image</th>
                         <th class="bg-dark text-light">Date Created</th>
                         <th class="bg-dark text-light">Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $user)
                         <tr class="text-start align-middle">
                             <td class="col">{{ $user->id }}</td>
                             <td class="col">{{ $user->name }}</td>
                             <td class="col">{{ $user->email }}</td>
                             <td class="col">{{ $user->role }}</td>
                             <td class="col text-center">
                                 @if ($user->photo)
                                     <img src="{{ asset('storage/uploads/' . $user->photo) }}"
                                         class="img-thumbnail rounded-circle" width="50" object-fit: cover;">
                                 @else
                                     No Photo
                                 @endif
                             </td>
                             <td class="col">{{ $user->created_at }}</td>
                             <td class="col text-center">
                                 <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                                 <form id="deleteUser" action="{{ route('users.destroy', $user->id) }}"
                                     class="d-inline delete-form" method="POST">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">
                                         <i class="bi bi-trash"></i>
                                     </button>
                                 </form>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
     </div>
     <script>
         document.addEventListener("DOMContentLoaded", (event) => {
             console.log('test12');
             document.querySelectorAll('#navmenu a').forEach(link => {
                 link.classList.remove('active');
             });
             document.getElementById('usersIndex').classList.add('active');
         });
     </script>
 @endsection
