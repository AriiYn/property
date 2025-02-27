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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Question</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Question Example <a href="{{ route('admin.question') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                <form action="{{ route('question.update', $question->id_question) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $question->nama) }}" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $question->email) }}" required>
                    </div>

                    <!-- Tlp -->
                    <div class="form-group">
                        <label for="no_tlp">NO Tlp</label>
                        <input type="text" name="no_tlp" id="no_tlp" class="form-control" value="{{ old('no_tlp', $question->no_tlp) }}" required>
                    </div>

                    <!-- Text -->
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" name="text" id="text" class="form-control" value="{{ old('text', $question->text) }}" required>
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
