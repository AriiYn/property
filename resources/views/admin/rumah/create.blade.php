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
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Perumahan</h1><br>

        <!-- DataTales Example -->
        <div >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Perumahan Example <a href="{{ route('admin.perumahan') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
            </div>
                <form action="{{ route('perumahan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="id_unit" class="form-label">Unit</label>
                        <select name="id_unit" id="id_unit" class="form-control" required>
                            <option value="">Pilih Unit</option>
                            @foreach($detailunits as $unit)
                                <option value="{{ $unit->id_unit }}">{{ $unit->id_unit }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_blok" class="form-label">Blok</label>
                        <select name="id_blok" id="id_blok" class="form-control" required>
                            <option value="">Pilih Blok</option>
                            @foreach($bloks as $blok)
                                <option value="{{ $blok->id_blok }}">{{ $blok->blok }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga_rumah" class="form-label">Harga Rumah</label>
                        <input type="number" name="harga_rumah" id="harga_rumah" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="img_rumah" class="form-label">Gambar Rumah</label>
                        <input type="file" name="img_rumah" id="img_rumah" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="img_denah" class="form-label">Gambar Denah</label>
                        <input type="file" name="img_denah" id="img_denah" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_interior" class="form-label">Interior</label>
                        <select name="id_interior" id="id_interior" class="form-control" required>
                            <option value="">Pilih Type</option>
                            @foreach($interiors as $interior)
                                <option value="{{ $interior->id_interior }}">{{ $interior->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                    <label for="status">Status Rumah</label>
                        <select name="status" class="form-control" id="status">
                            <option value="">--Pilih Status--</option>
                            <option value="enable">Enable</option>
                            <option value="disable">Disable</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        @endsection