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
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Contact</h1><br>

        <!-- DataTales Example -->
        <div >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Question Example <a href="{{ route('admin.contact') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
            </div>
                <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="no_tlp">No Tlp</label>
                    <input type="text" name="no_tlp" class="form-control" placeholder="Enter No Telp">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="instagram">Link Instagram</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="facebook">Link Facebook</label>
                    <input type="text" name="facebook" class="form-control" placeholder="Enter Email">
                </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection