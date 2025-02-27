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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Report</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Report Example <a href="{{ route('admin.report') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                    <form action="{{ route('report.update', $reports->id_report) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_perumahan" class="form-label">Id Perumahan</label>
                            <select name="id_perumahan" id="id_perumahan" class="form-control" required>
                                <option value="">Pilih Id Perumahan</option>
                                @foreach($perumahan as $rumah)
                                    <option value="{{ $rumah->id_perumahan }}" 
                                            data-id_blok="{{ $rumah->id_blok }}"
                                            {{ $reports->id_perumahan == $rumah->id_perumahan ? 'selected' : '' }}>
                                        {{ $rumah->id_perumahan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_blok" class="form-label">Blok</label>
                            <input type="text" name="id_blok" id="id_blok" class="form-control" value="{{ $reports->id_blok }}" readonly required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" value="{{ $reports->nama_pembeli }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">Nik Pembeli</label>
                            <input type="text" name="nik" id="nik" class="form-control" value="{{ $reports->nik }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Pembeli</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $reports->alamat }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_tlp" class="form-label">No Telp Pembeli</label>
                            <input type="text" name="no_tlp" id="no_tlp" class="form-control" value="{{ $reports->no_tlp }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Pembeli</label>
                            <input type="email" name="email" id="nama_pembeli" class="form-control" value="{{ $reports->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tgl_pesan" class="form-label">Tgl Pesan</label>
                            <input type="date" name="tgl_pesan" id="tgl_pesan" class="form-control" value="{{ $reports->tgl_pesan }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tgl_selesai" class="form-label">Tgl Selesai</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" value="{{ $reports->tgl_selesai }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="jumlah_dp" class="form-label">Jumlah DP</label>
                            <input type="text" name="jumlah_dp" id="jumlah_dp" class="form-control" value="{{ $reports->jumlah_dp }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="sisa_bayar" class="form-label">Sisa Bayar</label>
                            <input type="text" name="sisa_bayar" id="sisa_bayar" class="form-control" value="{{ $reports->sisa_bayar }}" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <script>
                document.getElementById('id_perumahan').addEventListener('change', function () {
                    const selectedOption = this.options[this.selectedIndex];
                    const idBlok = selectedOption.getAttribute('data-id_blok');
                    
                    document.getElementById('id_blok').value = idBlok || ''; // Isi otomatis id_blok
                });
            </script>
        @endsection