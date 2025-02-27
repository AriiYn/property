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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Unit</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Unit Example <a href="{{ route('admin.detailunit') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                <form action="{{ route('detailunit.update', $unit->id_unit) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Kamar Tidur -->
                    <div class="form-group">
                        <label for="kamar_tidur">Kamar Tidur</label>
                        <input type="number" name="kamar_tidur" id="kamar_tidur" class="form-control" value="{{ old('kamar_tidur', $unit->kamar_tidur) }}" required>
                    </div>

                    <!-- Kamar Mandi -->
                    <div class="form-group">
                        <label for="kamar_mandi">Kamar Mandi</label>
                        <input type="number" name="kamar_mandi" id="kamar_mandi" class="form-control" value="{{ old('kamar_mandi', $unit->kamar_mandi) }}" required>
                    </div>

                    <!-- Ruang Tamu -->
                    <div class="form-group">
                        <label for="ruang_tamu">Ruang Tamu</label>
                        <input type="text" name="ruang_tamu" id="ruang_tamu" class="form-control" value="{{ old('ruang_tamu', $unit->ruang_tamu) }}" required>
                    </div>

                           <!-- Ruang Tamu -->
                           <div class="form-group">
                        <label for="balkon">Balkon</label>
                        <input type="text" name="balkon" id="balkon" class="form-control" value="{{ old('balkon', $unit->balkon) }}" required>
                    </div>

                    <!-- Carport -->
                    <div class="form-group">
                        <label for="carport">Carport</label>
                        <input type="text" name="carport" id="carport" class="form-control" value="{{ old('carport', $unit->carport) }}" required>
                    </div>

                        <!-- Dapur -->
                        <div class="form-group">
                        <label for="dapur">Dapur</label>
                        <input type="text" name="dapur" id="dapur" class="form-control" value="{{ old('dapur', $unit->dapur) }}" required>
                    </div>

                    <!-- Luas Tanah -->
                    <div class="form-group">
                        <label for="luas_tanah">Luas Tanah (m²)</label>
                        <input type="text" name="luas_tanah" id="luas_tanah" class="form-control" value="{{ old('luas_tanah', $unit->luas_tanah) }}" required>
                    </div>

                    <!-- Luas Bangunan -->
                    <div class="form-group">
                        <label for="luas_bangunan">Luas Bangunan (m²)</label>
                        <input type="text" name="luas_bangunan" id="luas_bangunan" class="form-control" value="{{ old('luas_bangunan', $unit->luas_bangunan) }}" required>
                    </div>

                     <!-- Luas Description -->
                     <div class="form-group">
                        <label for="description">Deskripsi Property</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $unit->description) }}">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
