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
                    <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary">QO'SHISH</a>
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
                                        <th>FIO</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Parol</th>
                                        <th>Rasm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            @if ($user->role == null)
                                                <td><span class="badge bg-primary">Admin</span></td>
                                            @elseif ($user->role == 1)
                                                <td><span class="badge bg-success">Manager</span></td>
                                                @elseif ($user->role == 2)
                                                <td><span class="badge bg-warning">Blogger</span></td>
                                            @endif
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>
                                                <img src="{{ Storage::url($user->photo) }}" height="50px" width="60px" style="border-radius: 50%" alt="IMAGE">
                                            </td>
                                            <td><a class="text-gray-dark" href="{{ route('admin.user.show', $user) }}"><i
                                                        class="far fa-eye"></i></a>
                                            </td>
                                            <td><a class="text-success" href="{{ route('admin.user.edit', $user) }}"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.user.destroy', $user) }}" method="POST">
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
