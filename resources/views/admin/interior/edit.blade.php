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
        <h1 class="h3 mb-2 text-gray-800">Edit Data Interior</h1><br>

            <!-- DataTales Example -->
            <div >
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Interior Example <a href="{{ route('admin.interior') }}" class="btn btn-primary" style="float: right; text-decoration: none;">Back</a></h6>
                </div>
                <form action="{{ route('interior.update', $interior->id_interior) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')
                    <div class="form-group">
                            <label for="type">No Tlp</label>
                            <input type="text" name="type" value="{{ $interior->type }}" class="form-control" required>
                        </div>
                    <div class="form-group">
                        <label for="img_interior1">Interior 1</label>
                        <input type="file" name="img_interior1" id="img_interior1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img_interior2">Interior 2</label>
                        <input type="file" name="img_interior2" id="img_interior2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img_interior3">Interior 3</label>
                        <input type="file" name="img_interior3" id="img_interior3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img_interior4">Interior 4</label>
                        <input type="file" name="img_interior4" id="img_interior4" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img_interior5">Interior 5</label>
                        <input type="file" name="img_interior5" id="img_interior5" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img_interior6">Interior 6</label>
                        <input type="file" name="img_interior6" id="img_interior6" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
