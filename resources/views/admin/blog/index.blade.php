@extends('admin.layouts.main')

@section('title', 'Blog Page')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('blog') }}">Web blog</a></li>
                            <li class="breadcrumb-item active">Boshqaruv paneli</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="ml-2 mb-3">
                <a href="{{ route('admin.blog.create') }}" class="btn btn-block btn-primary">QO'SHISH</a>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class=" col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><b>Bloglar jadvali</b></h2>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Qidiruv">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sarlavha</th>
                                    <th>Faol</th>
                                    <th>Til</th>
                                    <th>Vaqt</th>
                                    <th>Ko'rish</th>
                                    <th>O'zgartirish</th>
                                    <th>O'chirish</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{!! \App\helpers\getIsActive($blog->status) !!}  </td>
                                        <td>{{ $blog->lang }}</td>
                                        <td>{{ $blog->public_date }}</td>
                                        <td><a class="text-gray-dark" href="{{ route('admin.blog.show', $blog) }}"><i
                                                    class="far fa-eye"></i></a>
                                        </td>
                                        <td><a class="text-success" href="{{ route('admin.blog.edit', $blog) }}"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.blog.destroy', $blog) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        {{-- </div>
    <!-- /.content-wrapper --> --}}
    @endsection
