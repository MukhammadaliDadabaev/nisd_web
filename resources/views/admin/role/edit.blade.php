@extends('admin.layouts.main')

@section('title', 'User-edit')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ma'lumotni yangilash</h1>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Boshqaruv paneli</li>
                    </ol>
                </div><!-- /.colDashboard -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.role.update', $role) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="">Role</label>
                                    <input type="text" class="form-control" name="name" id=""
                                           placeholder="Enter name" value="{{ $role->name }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group" data-select2-id="13">
                                    <label>Roleni o'zgartirish</label>
                                    <select name="name" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

@endsection
