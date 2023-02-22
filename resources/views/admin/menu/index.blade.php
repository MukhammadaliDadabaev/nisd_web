@extends('admin.layouts.main')

@section('content')
<div class="row">
    <section class="col-lg-7 connectedSortable ui-sortable">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    Menu
                </h3>
            </div>

            <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                    @foreach($menus as $menu)
                        <li>
                      <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                            <!-- checkbox -->
                            <div class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">{{ $menu->title }}</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                            </div>
                        </li>

                    @endforeach


                </ul>
            </div>
            <!-- /.card-body -->

        </div>
    </section>
    <section class="col-lg-5 connectedSortable ui-sortable">
            <form method="post" action="{{ route('store') }}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menu create</h3>
                    </div>
                    <div class="card-body">
                        <!-- Date -->
                        <div class="form-group">
                            <label>Заголовок пункта меню:</label>
                            <input type="text" class="form-control" name="title"/>
                        </div>
                        <!-- Date and time -->
{{--                        <div class="form-group">--}}
{{--                            <label>Опция:</label>--}}
{{--                                <input type="text" class="form-control" />--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label>Язык:</label>
                            {!! \App\helpers\getLangs() !!}
                        </div>

                        <div class="form-group">

                            <div class="icheck-success d-inline">
                                <input type="checkbox" checked="" id="checkboxSuccess1" name="is_published">
                                <label for="checkboxSuccess1">
                                    Актив
                                </label>
                            </div>

                        </div>
                        <!-- /.form group -->
                    </div>
                    <div class="card-footer clearfix">
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Save</button>
                    </div>
                    <!-- /.card-body -->
                </div>
</form>
    </section>
</div>


@endsection

