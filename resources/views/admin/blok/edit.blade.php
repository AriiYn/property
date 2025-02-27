@extends('app.layout')
    @section('content') 

    @if ($errors->any())
        <div>
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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Blok</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Blok Example <a href="{{ route('admin.blok') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                    <form action="{{ route('blok.update', $blok->id_blok) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="blok">Blok</label>
                        <input type="text" name="blok" id="blok" value="{{ $blok->blok }}" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection