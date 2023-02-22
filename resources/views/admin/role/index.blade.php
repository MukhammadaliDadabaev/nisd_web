@extends('admin.layouts.main')

@section('title', 'User-index')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
                        <li class="breadcrumb-item active">Boshqaruv paneli v1</li>
                    </ol>
                </div><!-- /.col -->
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
                    <a href="{{ route('admin.role.create') }}" class="btn btn-block btn-primary">QO'SHISH</a>
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
                                        <th>ISM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                             @foreach($roles as $role)
                                                @if ($role->id == 1)
                                                    <td><span class="badge bg-black">Super Admin</span></td>
                                                @elseif ($role->id == 2)
                                                    <td><span class="badge bg-primary">Admin</span></td>
                                                @elseif ($role->id == 3)
                                                    <td><span class="badge bg-success">Manager</span></td>
                                                @elseif ($role->id == 4)
                                                    <td><span class="badge bg-info">Editor</span></td>
                                                @elseif ($role->id == 5)
                                                    <td><span class="badge bg-warning">Member</span></td>
                                                @endif
                                            @endforeach
                                            <td><a class="text-gray-dark" href="{{ route('admin.role.show', $user) }}"><i
                                                        class="far fa-eye"></i></a>
                                            </td>
                                            <td><a class="text-success" href="{{ route('admin.role.edit', $user) }}"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.role.destroy', $user) }}" method="POST">
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
@endsection