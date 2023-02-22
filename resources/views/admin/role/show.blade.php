@extends('admin.layouts.main')

@section('title', 'User-show')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-center m-3"><b>Ma'lumotlarni ko'rish</b></h1>
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
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class=" text-center"><b>Ma'lumotlarni ko'rish</b></h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <th>Id raqami</th>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>User nomi</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Familiya</th>
                                        <td>{{ $user->last_name }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th>Status</th>
                                        @if ($user->status == null)
                                            <td><span class="badge bg-danger">{{ $user->status }}</span></td>
                                        @elseif ($user->status = 1)
                                            <td><span class="badge bg-danger">{{ $user->status }}</span></td>
                                        @endif
                                    </tr> --}}
                                    {{-- <tr>
                                        <th>Users </th>
                                        <td>{{ $user->is_users }}</td>
                                    </tr> --}}
                                    <tr>
                                        <th>User role id:</th>
                                        <td>{{ $user->role }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telefon</th>
                                        <td>{{ $user->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Parol</th>
                                        <td>{{ $user->password }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <td>
                                        <img src="{{ Storage::url($user->photo) }}" height="130px" alt="IMAGE">
                                    </td>

                                    <td>
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
