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
        <h1 class="h3 mb-2 text-gray-800">Tambah Data User</h1><br>

        <!-- DataTales Example -->
        <div >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data User Example <a href="{{ route('admin.pengguna') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
            </div>
                <form action="{{ route('admin.pengguna') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control" id="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection