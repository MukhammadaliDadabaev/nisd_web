@extends('admin.layouts.main')

@section('title', 'Page-edit')

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
                   <form action="{{ route('admin.page.update', $page->id) }}" method="POST">
                       @csrf
                       @method('PATCH')
                       <div class="form-group">
                           <input type="text" class="form-control" name="title" placeholder="Toifa nomi" value="{{ $page->title }}">
                           @error('title')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="status" placeholder="Toifa nomi" value="{{ $page->status }}">
                           @error('status')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group">
                        <input type="text" class="form-control" name="lang" placeholder="Toifa nomi" value="{{ $page->lang }}">
                        @error('lang')
                             <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                        @enderror
                    </div>

                       <input type="submit" class="btn btn-primary" value="Tasdiqlash">
                   </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
