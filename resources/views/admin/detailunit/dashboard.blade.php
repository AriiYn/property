<style>
    .alert {
    padding: 20px;
    margin: 15px 0;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    }

    .alert-success {
        background-color: #d4edda;
        border-left: 6px solid #28a745;
        color: #155724;
    }

    .alert-icon {
        font-size: 20px;
        margin-right: 15px;
        color: #28a745;
    }

    .alert-message {
        flex: 1;
        font-size: 16px;
        margin: 0;
    }

    .alert:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    /* Optional close button for the alert */
    .alert .close-btn {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        font-size: 18px;
        color: #155724;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .alert .close-btn:hover {
        color: #0b2e13;
    }
</style>
<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    @extends('app.layout') 
    @section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Detail Unit</h1>

        @if(session('success'))
            <div class="alert alert-success">
                <span class="alert-icon">✔</span>
                <p class="alert-message">{{ session('success') }}</p>
            </div>
        @endif


        <!-- DataTales Example -->
        <div class="card shadow mb-4" style="margin-top: 30px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Detail Unit Example <a href="{{ route('detailunit.create') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Tambah Data +</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="170%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Kamar Tidur</th>
                                <th>Kamar Mandi</th>
                                <th>Ruang Tamu</th>
                                <th>Balkon</th>
                                <th>Carport</th>
                                <th>Dapur</th>
                                <th>Luas Tanah</th>
                                <th>Luas Bangunan</th>
                                <th>Deskripsi</th>
                                <th>Aktion</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($units as $unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $unit->id_unit }}</td>
                                    <td>{{ $unit->kamar_tidur }}</td>
                                    <td>{{ $unit->kamar_mandi }}</td>
                                    <td>{{ $unit->ruang_tamu }}</td>
                                    <td>{{ $unit->balkon }}</td>
                                    <td>{{ $unit->carport }}</td>
                                    <td>{{ $unit->dapur }}</td>
                                    <td>{{ $unit->luas_tanah }}</td>
                                    <td>{{ $unit->luas_bangunan }}</td>
                                    <td>{{ $unit->description }}</td>
                                    <td>
                                        <form action="{{ route('detailunit.destroy',$unit->id_unit) }}" method="POST">
                                            <a class="btn btn-warning" href="{{ route('detailunit.edit',$unit->id_unit) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus user ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada data Unit yang ditemukan.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
    @endsection
</body>
</html>