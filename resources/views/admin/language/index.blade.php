@extends('admin.layouts.main')

@section('title', 'Page-index')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Language page</h1>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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
                <div class="ml-2 mb-3">
                    <a href="{{ route('admin.language.create') }}" class="btn btn-block btn-primary">QO'SHISH</a>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class=" col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><b>Ma'lumotlar jadvali</b></h2>
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
                                        <th>Kod</th>
                                        <th>Iconka</th>
                                        <th>Default</th>
                                        <th>Active</th>
                                        <th>O'zgartirish</th>
                                        <th>O'chirish</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($languages as $language)
                                        <tr>
                                            <td>{{ $language->id }}</td>
                                            <td>{{ $language->name }}</td>
                                            <td>{{ $language->code }}</td>
                                            <td>{{ $language->flag }}</td>

                                            {{-- @if ($language->status == null)
                                                    <td><span class="badge bg-danger">{{ $language->code }}</span></td>
                                                @elseif ($language->status = 1)
                                                <td><span class="badge bg-danger">{{ $language->status }}</span></td>
                                                @endif --}}

                                            <td>{{ $language->is_default }}</td>
                                            <td>{{ $language->active }}</td>
                                            <td><a class="text-gray-dark"
                                                    href="{{ route('admin.language.show', $language) }}"><i
                                                        class="far fa-eye"></i></a>
                                            </td>
                                            <td><a class="text-success"
                                                    href="{{ route('admin.language.edit', $language) }}"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.language.destroy', $language) }}"
                                                    method="POST">
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
