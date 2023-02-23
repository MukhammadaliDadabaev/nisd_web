@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <section class="col-lg-7 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header ui-sortable-handle" style=" cursor: move;">
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
            <form method="post" action="{{ route('admin.menus.store') }}">
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

                       <div class="form-group">
                            <div class="icheck-success d-inline">
                                <input type="checkbox" checked="" id="checkboxSuccess1" name="order">
                                <label for="checkboxSuccess1">
                                    Order
                                </label>
                            </div>
                       </div>
                       <div class="form-group">
                            <label for="">Rasm qo'shing</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="url">
                                    <label class="custom-file-label">User Rasm</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">YUKLASH</span>
                                </div>
                            </div>
                            @error('url')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Save
                        </button>
                    </div>
                    <!-- /.card-body -->
                </div>
            </form>
        </section>
    </div>
@endsection


{{--@push('javascript')--}}
{{--    <script src="{{ asset('assets/js/jquery.nestable.js') }}"></script>--}}
{{--    <script type="text/javascript">--}}

{{--        $(document).ready(function () {--}}
{{--            // $('#notification').show().delay(4000).fadeOut(700);--}}
{{--            // publish settings--}}
{{--            $(".publish").bind("click", function (e) {--}}
{{--                var id = $(this).attr('id');--}}
{{--                e.preventDefault();--}}

{{--                $.ajax({--}}
{{--                    type: "POST",--}}
{{--                    url: "{!! url( '/admin/menus/" + id + "/toggle-publish/') !!}",--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')--}}
{{--                    },--}}
{{--                    success: function (response) {--}}
{{--                        if (response['result'] == 'success') {--}}
{{--                            var imagePath = (response['changed'] == 1) ? "fa fa-check" : "fa fa-trash-alt";--}}
{{--                            var message = (response['changed'] == 1) ? "published" : "unpublished";--}}
{{--                            $("#publish-image-" + id).attr('class', imagePath);--}}
{{--                            $("#msg").html('<div class="msg-save" style="float:right; color:red;">' + message + '</div>');--}}
{{--                        }--}}
{{--                    },--}}
{{--                    error: function () {--}}
{{--                        $("#msg").html('<div class="msg-save" style="float:right; color:red;">Saving!</div>');--}}
{{--                        alert("error");--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            $('.type').change(function () {--}}
{{--                    var selected = $('input[class="type"]:checked').val();--}}
{{--                    if (selected == "custom") {--}}
{{--                        $('.modules').css('display', 'none');--}}
{{--                        $('.url').css('display', 'block');--}}
{{--                    } else {--}}
{{--                        $('.modules').css('display', 'block');--}}
{{--                        $('.url').css('display', 'none');--}}
{{--                    }--}}
{{--                }--}}
{{--            );--}}

{{--            $(".type").trigger("change");--}}


{{--            var updateOutput = function (e) {--}}
{{--                var list = e.length ? e : $(e.target),--}}
{{--                    output = list.data('output');--}}
{{--                if (window.JSON) {--}}
{{--                    var jsonData = window.JSON.stringify(list.nestable('serialize'));--}}
{{--                    console.log(window.JSON.stringify(list.nestable('serialize')));--}}
{{--                    $.ajax({--}}
{{--                        type: "POST",--}}
{{--                        url: "{{ route('admin.menus.save') }}",--}}
{{--                        data: {'json': jsonData},--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-Token': $('meta[name="_token"]').attr('content')--}}
{{--                        },--}}
{{--                        success: function (response) {--}}

{{--                            //$("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');--}}
{{--                            $("#msg").html('<div class="msg-save" style="float:right; color:red;">Saving!</div>');--}}
{{--                            // $('.msg-save').delay(1000).fadeOut(500);--}}
{{--                        },--}}
{{--                        error: function () {--}}
{{--                            alert("error");--}}
{{--                        }--}}
{{--                    });--}}

{{--                } else {--}}
{{--                    alert('error');--}}
{{--                }--}}
{{--            };--}}

{{--            $('#nestable').nestable({--}}
{{--                group: 1--}}
{{--            }).on('change', updateOutput);--}}
{{--        });--}}
{{--    </script>--}}

{{--@endpush--}}

