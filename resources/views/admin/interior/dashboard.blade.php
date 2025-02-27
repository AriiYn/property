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
        <h1 class="h3 mb-2 text-gray-800">Data Interior</h1>

        @if(session('success'))
            <div class="alert alert-success">
                <span class="alert-icon">✔</span>
                <p class="alert-message">{{ session('success') }}</p>
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4" style="margin-top: 30px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Interior Example <a href="{{ route('interior.create') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Tambah Data +</a></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Type</th>
                            <th>Interior 1</th>
                            <th>Interior 2</th>
                            <th>Interior 3</th>
                            <th>Interior 4</th>
                            <th>Interior 5</th>
                            <th>Interior 6</th>
                            <th>Aktion</th>
                        </tr>
                        </thead>
                            @forelse ($interiors as $interior)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $interior->type ?? '' }}</td>
                                <td>
                                    @if($interior->img_interior1)
                                        <img src="{{ asset('storage/' . $interior->img_interior1) }}" width="50" object-fit="cover">
                                    @else
                                        <!-- Kolom kosong jika tidak ada gambar -->
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    @if($interior->img_interior2)
                                        <img src="{{ asset('storage/' . $interior->img_interior2) }}" width="50" object-fit="cover">
                                    @else
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    @if($interior->img_interior3)
                                        <img src="{{ asset('storage/' . $interior->img_interior3) }}" width="50" object-fit="cover">
                                    @else
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    @if($interior->img_interior4)
                                        <img src="{{ asset('storage/' . $interior->img_interior4) }}" width="50" object-fit="cover">
                                    @else
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    @if($interior->img_interior5)
                                        <img src="{{ asset('storage/' . $interior->img_interior5) }}" width="50" object-fit="cover">
                                    @else
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    @if($interior->img_interior6)
                                        <img src="{{ asset('storage/' . $interior->img_interior6) }}" width="50" object-fit="cover">
                                    @else
                                        <span></span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('interior.destroy',$interior->id_interior) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('interior.edit',$interior->id_interior) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah kamu yakin ingin menghapus user ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada data Promo yang ditemukan.</td>
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