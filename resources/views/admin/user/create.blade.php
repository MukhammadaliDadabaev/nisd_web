@extends('admin.layouts.main')

@section('title', 'User-create')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User qo'shish </h1>
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
            {{-- <!-- Small boxes (Stat box){!! \App\helpers\getLangs() !!} --> --}}
            <div class="row">
                <div class="col-10 mx-auto">
                    <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Ism</label>
                                <input type="text" class="form-control" name="name" id=""
                                    placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }} 👆</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Familya</label>
                                <input type="text" class="form-control" name="last_name" id=""
                                    placeholder="Enter familya" value="{{ old('last_name') }}">
                                @error('last_name')
                                    <div class="text-danger">{{ $message }} 👆</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Telefon</label>
                                <input type="number" class="form-control" name="phone" id=""
                                    placeholder="Enter telefon" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-danger">{{ $message }} 👆</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" id=""
                                    placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }} 👆</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="e">Password</label>
                                <input type="password" class="form-control" name="password" id=""
                                    placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="text-danger">{{ $message }} 👆</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Rasm qo'shing</label>
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

                            <div class="form-group w-100">
                                <label>Foydalanuvchini tanlang</label>
                                <select name="role" class="form-control">
                                    @foreach ($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == old('role') ? ' selected' : '' }}>
                                            {{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="status" value="1">
                                <label class="form-check-label">Public</label>
                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

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
    </div>
    <!-- /.content-wrapper -->

@endsection
