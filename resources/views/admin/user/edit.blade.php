@extends('admin.layouts.main')

@section('title', 'User-edit')

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
                    <form action="{{ route('admin.user.update', $user) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Ism</label>
                                <input type="text" class="form-control" name="name" id=""
                                    placeholder="Enter name" value="{{ $user->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Telefon</label>
                                <input type="number" class="form-control" name="phone" id=""
                                    placeholder="Enter telefon" value="{{ $user->phone }}">
                                @error('photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id=""
                                    placeholder="Enter email" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="e">Password</label>
                                <input type="password" class="form-control" name="password" id=""
                                    placeholder="Password" value="{{ $user->password }}">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Rasm qo'shing</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo">
                                        <label class="custom-file-label">User Rasm</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">YUKLASH</span>
                                    </div>
                                </div>
                                @error('photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Foydalanuvchini tanlang</label>
                                <select name="role" class="form-control">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
