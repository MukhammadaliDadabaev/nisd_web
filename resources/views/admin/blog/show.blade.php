@extends('admin.layouts.main')

@section('title', 'Blog-show Page')

@section('content')
        <!-- Main content -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Blogni ko'rish</h1>
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
        <section class="content">
           <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" text-center"><b>Bloglarni ko'rish</b></h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <th>Id raqami</th>
                                            <td>{{ $blog->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Post nomi</th>
                                            <td>{{ $blog->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $blog->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Til</th>
                                            <td>{{ $blog->lang }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sana</th>
                                            <td>{{ $blog->public_date }}</td>
                                        </tr>
                                        <tr>
                                            <th>Rasm</th>
                                            <td>
                                                <img src="{{ Storage::url($blog->image) }}" height="130px" alt="">
                                            </td>
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
