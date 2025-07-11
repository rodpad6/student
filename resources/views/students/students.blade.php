 @extends('layouts.app')

 @section('content')
     <div class="my-3">
         <h1>Welcome to the Students Module</h1>
         <p class="lead">This is your homepage where you can manage student profiles and perform related actions.</p>
         @if (session('success'))
             <div class="alert alert-success"><i class="bi bi-hand-thumbs-up mx-2"></i>{{ session('success') }}</div>
         @endif

         <div class="card">
             <div class="card-body">
                 <a href="{{ route('students.view') }}" class="btn btn-success float-start mb-2">Add Students</a>
                 <table class="table table-bordered table-striped w-100">
                     <thead>
                         <tr>
                             <th class="bg-dark text-light">ID</th>
                             <th class="bg-dark text-light">Name</th>
                             <th class="bg-dark text-light">Type</th>
                             <th class="bg-dark text-light">Date Created</th>
                             <th class="bg-dark text-light">Actions</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($posts as $post)
                             <tr class="text-start align-middle">
                                 <td class="col">{{ $post->id }}</td>
                                 <td class="col">{{ $post->name }}</td>
                                 <td class="col">{{ $post->type }}</td>
                                 <td class="col">{{ $post->created_at }}</td>
                                 <td class="col text-center">
                                     <a href="{{ route('students.edit.form', $post->id) }}" class="btn btn-primary">
                                         <i class="bi bi-pencil-square"></i>
                                     </a>
                                     <form action="{{ route('students.delete', $post->id) }}" class="d-inline delete-form"
                                         method="POST">
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
 @endsection
