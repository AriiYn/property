@extends('app.layout')

@section('content')
<div class="container">

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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Promo</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Promo Example <a href="{{ route('admin.promo') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                <form action="{{ route('promo.update', $promo->id_promo) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="banner">Image</label>
                        <input type="file" name="banner" id="banner" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
