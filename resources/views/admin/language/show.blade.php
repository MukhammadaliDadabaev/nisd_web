@extends('admin.layouts.main')

@section('title', 'Language-show')

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
                                            <td>{{ $language->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sarlavha nomi</th>
                                            <td>{{ $language->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $language->code }}</td>
                                        </tr>
                                        <tr>
                                            <th>Icon</th>
                                            <td>{{ $language->flag }}</td>
                                        </tr>
                                        <tr>
                                            <th>Default</th>
                                            <td>{{ $language->is_default }}</td>
                                        </tr>
                                        <tr>
                                            <th>Active</th>
                                            <td>{{ $language->active }}</td>
                                        </tr>
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
