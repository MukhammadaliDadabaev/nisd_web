@extends('admin.layouts.main')

@section('title', 'Language-create')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Language qo'shish</h1>
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.language.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Toifa nomi">
                                @error('name')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="Kod"
                                    value="{{ old('code') }}">
                                @error('code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="flag" placeholder="Iconka tangflag"
                                    value="{{ old('flag') }}">
                                @error('flag')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="is_default" placeholder="Tilni tangis_default"
                                    value="{{ old('is_default') }}">
                                @error('is_default')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="active" placeholder="Tilni tangactive"
                                    value="{{ old('active') }}">
                                @error('active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Qo'shish">
                        </form>
                    </div>
                    <!-- ./colНазвание категории -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
