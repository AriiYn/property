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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Contact</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Contact Example <a href="{{ route('admin.contact') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                <form action="{{ route('contact.update', $contact->id_contact) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Kamar Nama -->
                    <div class="form-group">
                        <label for="no_tlp">No Tlp</label>
                        <input type="text" name="no_tlp" id="no_tlp" class="form-control" value="{{ old('no_tlp', $contact->no_tlp) }}" required>
                    </div>

                    <!-- Kamar Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $contact->email) }}" required>
                    </div>

                    <!-- Ruang Tamu -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', $contact->alamat) }}" required>
                    </div>
                    
                    <!-- Ruang Tamu -->
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $contact->instagram) }}" required>
                    </div>
                    <!-- Ruang Tamu -->
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $contact->facebook) }}" required>
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
