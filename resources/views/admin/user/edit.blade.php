@extends('app.layout')
    @section('content') 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data User</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data User Example <a href="{{ route('admin.pengguna') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                    <form action="{{ route('pengguna.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                        
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                        
                        <label for="password">Password (Opsional)</label>
                        <input type="password" name="password" id="password" class="form-control">
                        
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection