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
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Blok</h1><br>

        <!-- DataTales Example -->
        <div >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Blok Example <a href="{{ route('admin.blok') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
            </div>
                <form action="{{ route('admin.blok') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="blok">Blok</label>
                        <input type="text" name="blok" class="form-control" id="blok" value="{{ old('blok') }}" placeholder="Masukkan Blok Perumahan">
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection