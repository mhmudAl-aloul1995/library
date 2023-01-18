@extends('semantic')
@section('title','المستخدمين')
@section('pageName','المستخدمين')

@section('content')
    <div class="modal container fadeIn" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet-title">
                        <div class="caption font-green-haze">
                            <i class="icon-wallet font-green-haze"></i>
                            <span class="caption-subject bold uppercase"></span>المستخدمين
                        </div>
                    </div>


                    <form method="POST" action="" data-toggle="validator" id="userForm" accept-charset="UTF-8"
                          class="form-horizontal form" role="form" enctype="multipart/form-data">

                        <input name="id" type="hidden" value="">
                        {{ csrf_field() }}
                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <label for="cs_name" class="col-md-4  control-label">الإسم</label>
                                                <div class="col-md-8">
                                                    <input required="" type="text" name="name" value=""
                                                           class="form-control" placeholder="الإسم">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <label for="cs_name" class="col-md-4  control-label">الإيميل</label>
                                                <div class="col-md-8">
                                                    <input required="" type="email" name="email" value=""
                                                           class="form-control" placeholder="الإيميل">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input">
                                                <label for="cs_name" class="col-md-4  control-label">العنوان</label>
                                                <div class="col-md-8">
                                                    <input required="" type="text" name="address" value=""
                                                           class="form-control" placeholder="العنوان">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group form-md-line-input">
                                                <label for="cs_mobile" class="col-md-4 control-label">الصورة</label>
                                                <div class="col-md-8">
                                                    <input required type="file" class="form-control" name="img"
                                                           placeholder="الصورة">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>

                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="userSubmit" class="btn green ok">حفظ التغييرات</button>
            <button type="button" data-dismiss="modal" class="btn btn-default">اغلاق</button>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>المستخدمين
                    </div>
                    <div class="tools"></div>
                </div>

                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button onclick="userModal()" class="btn sbold red"> إضافة جديد
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-container">
                        <table class="table table-striped  table-hover" id="userTable">
                            <thead>
                            <tr>
                                <th>الإسم</th>
                                <th>العنوان</th>
                                <th>الإيميل</th>
                                <th> الجوال</th>
                                <th> إجراء</th>

                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





@section('myScript')

    <script>
        var customer = $('#userTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{url('datatableCustomer')}}",
                data: function (d) {
                    // d.orph_mom_name = $('#orph_mom_name_search').val();
                }
            },
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            buttons: [
                {
                    text: 'تحديث',
                    className: 'btn green reload customerTable',
                    action: function (e, dt, node, config) {
                        dt.ajax.reload();
                    }
                },
            ],
            columns: [
                {className: 'text-center', data: 'name', name: 'name', searchable: true},
                {className: 'text-center', data: 'address', name: 'address', searchable: true},
                {className: 'text-center', data: 'email', name: 'email', searchable: true},
                {className: 'text-center', data: 'phone', name: 'phone', searchable: true},
                {className: 'text-left', data: 'action', name: 'action', searchable: false},
            ],
        });
    </script>
@endsection
