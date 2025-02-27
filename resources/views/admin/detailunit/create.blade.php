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
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Unit</h1><br>

        <!-- DataTales Example -->
        <div >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Unit Example <a href="{{ route('admin.detailunit') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
            </div>
                <form action="{{ route('detailunit.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="kamar_tidur">Kamar Tidur</label>
                    <input type="number" name="kamar_tidur" class="form-control" placeholder="Enter Jumlah Kamar Tidur">
                </div>

                <div class="form-group">
                    <label for="kamar_mandi">Kamar Mandi</label>
                    <input type="number" name="kamar_mandi" class="form-control" placeholder="Enter Jumlah Kamar Mandi">
                </div>

                <div class="form-group">
                    <label for="ruang_tamu">Ruang Tamu</label>
                    <input type="number" name="ruang_tamu" class="form-control" placeholder="Enter Jumlah Ruang Tamu">
                </div>

                <div class="form-group">
                    <label for="balkon">Balkon</label>
                    <input type="number" name="balkon" class="form-control" placeholder="Enter Jumlah Ruang Tamu">
                </div>

                <div class="form-group">
                    <label for="carport">Carport</label>
                    <input type="number" name="carport" class="form-control" placeholder="Enter Jumlah Garasi/Tempat Parkir">
                </div>

                <div class="form-group">
                    <label for="dapur">Dapur</label>
                    <input type="number" name="dapur" class="form-control" placeholder="Enter Jumlah Dapur">
                </div>

                <div class="form-group">
                    <label for="luas_tanah">Luas Tanah</label>
                    <input type="text" name="luas_tanah" class="form-control" placeholder="Enter Jumlah Luas Tanah">
                </div>

                <div class="form-group">
                    <label for="luas_bangunan">Luas Bangunan</label>
                    <input type="text" name="luas_bangunan" class="form-control" placeholder="Enter Jumlah Luas Bangunan">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Property</label>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        @endsection