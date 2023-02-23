@extends('admin.layouts.main')

@section('title', 'Role-index')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Roles</h1>
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
            <div class="col-md-12" data-select2-id="16">
                <div class="card" data-select2-id="15">
                    <div class="card-header"><h3>Add Permission</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('admin.role.store') }}"
                              data-select2-id="14">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="permission">Permission name<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" id="permission" name="name"
                                               placeholder="Permission Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" data-select2-id="13">
                                        <label>Foydalanuvchi Roleli</label>
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
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded">QO'SHISH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class=" col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><b>Permission jadvali</b></h2>
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
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role</th>
                                    <th>ISM</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)

{{--                                    @foreach($users as $user)--}}

                                    <tr role="row" class="odd">
                                        <td id="perm_2" title="Click to edit permission">{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
{{--                                        <td>{{ $user->name }}</td>--}}
                                        <td><a class="text-success" href="{{ route('admin.role.edit', $role) }}"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.role.destroy', $role) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
{{--                                    @endforeach--}}
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

