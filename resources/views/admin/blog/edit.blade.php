@extends('admin.layouts.main')

@section('title', 'Blog-edit Page')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog yangilash</h1>
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
        <!-- .content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="blog nomi"
                                    value="{{ $blog->title }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content" rows="5" cols="82">{{ $blog->content }}</textarea>
                                @error('content')
                                    <div class="text-danger">👆{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Rasm qo'shing</label>
                                <div class="w-75 mb-2">
                                    <img class="img-fluid rounded" src="{{ Storage::url($blog->image) }}"
                                        style="width: 30%; height: 250px; object-fit: cover;" alt="Image">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Rasmlarni tanlang</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">YUKLASH</span>
                                    </div>
                                </div>
                            </div>
                            @error('image')
                                <div class="text-danger">👆{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="YANGILASH">
                            </div>
                        </form>
                    </div>
                    <!-- ./colНазвание категории -->
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
