@extends('admin.layouts.main')

@section('title', 'Page-edit')

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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.language.update', $language->id) }}" method="POST" class="w-25">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Toifa nomi"
                                    value="{{ $language->name }}">
                                @error('name')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="code" placeholder="Toifa nomi"
                                    value="{{ $language->code }}">
                                @error('code')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="flag" placeholder="Toifa nomi"
                                    value="{{ $language->flag }}">
                                @error('flag')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="is_defaule" placeholder="Toifa nomi"
                                    value="{{ $language->is_defaule }}">
                                @error('is_defaule')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="active" placeholder="Toifa nomi"
                                    value="{{ $language->active }}">
                                @error('active')
                                    <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary" value="Tasdiqlash">
                        </form>
                    </div>
                    <!-- ./colНазвание категории -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
