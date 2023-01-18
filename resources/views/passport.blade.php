@extends('semantic')
@section('title','جوازات السفر')
@section('pageName','جوازات السفر')


@section('content')

    <div class="modal container fadeIn" id="passportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet-title">
                        <div class="caption font-green-haze">
                            <i class="icon-wallet font-green-haze"></i>
                            <span class="caption-subject bold uppercase"></span>جوازات السفر
                        </div>
                    </div>


                    <form method="POST" action="" data-toggle="validator" id="passportForm" accept-charset="UTF-8"
                          class="form-horizontal form" role="form" enctype="multipart/form-data">

                        <input name="id" type="hidden" value="">

                        <div class="portlet-body form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الأول بالعربي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_ar_first_name"  value=""
                                                            class="form-control" placeholder="الإسم الأول بالعربي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الثاني بالعربي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_ar_second_name"  value=""
                                                            class="form-control" placeholder="الإسم الثاني بالعربي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الثالث بالعربي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_ar_third_name"  value=""
                                                            class="form-control" placeholder="الإسم الثالث بالعربي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الرابع بالعربي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_ar_fourth_name"  value=""
                                                            class="form-control" placeholder="الإسم الرابع بالعربي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الأول بالإنجليزي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_en_first_name"  value=""
                                                            class="form-control" placeholder="الإسم الأول بالإنجليزي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الثاني بالإنجليزي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_en_second_name"  value=""
                                                            class="form-control" placeholder="الإسم الثاني بالإنجليزي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الثالث بالإنجليزي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_en_third_name"  value=""
                                                            class="form-control" placeholder="الإسم الثالث بالإنجليزي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الإسم الرابع بالإنجليزي
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_en_fourth_name"  value=""
                                                            class="form-control" placeholder="الإسم الرابع بالإنجليزي">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">الجنس
                                                </label>
                                                <div class="col-md-6">
                                                    <select name="cus_gender"
                                                            class="select2-container select2-container-multi form-control"
                                                            >
                                                        <option value=""  selected>الجنس
                                                        </option>

                                                        <option value="0">ذكر</option>
                                                        <option value="1">أنثى</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">رقم الهوية
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3"maxlength="9" required="" type="text" name="cus_id"  value=""
                                                            class="form-control" placeholder="رقم الهوية">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input ">
                                                <label class="col-md-6 control-label" for="cus_birth_date">تاريخ الميلاد</label>
                                                <div class="col-md-6">
                                                    <div id="datePicker1" class="input-group  date date-picker"
                                                         data-date-format="yyyy-mm-dd">
                                                        <input name="cus_birth_date" placeholder="تاريخ الميلاد" type="text"
                                                                class="form-control">
                                                        <span class="input-group-btn">
                                                                <button class="btn default" type="button"><i
                                                                        class="fa fa-calendar"></i></button>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label"> مكان الميلاد
                                                </label>
                                                <div class="col-md-6">
                                                    <input  required="" type="text" name="cus_birth_place"  value=""
                                                            class="form-control" placeholder="مكان الميلاد">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">عنوان السكن
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3" required="" type="text" name="cus_address"  value=""
                                                            class="form-control" placeholder="عنوان السكن">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label"> إسم الأم
                                                </label>
                                                <div class="col-md-6">
                                                    <input  required="" type="text" name="cus_mother_name"  value=""
                                                            class="form-control" placeholder="إسم الأم">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">  إسم الزوجة
                                                </label>
                                                <div class="col-md-6">
                                                    <input  required="" type="text" name="cus_wife_name"  value=""
                                                            class="form-control" placeholder="إسم الزوجة">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label">   رقم هوية الزوجة
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="3"maxlength="9" required="" type="text" name="cus_wife_id"  value=""
                                                            class="form-control" placeholder="رقم هوية الزوجة">
                                                    <div class="form-control-focus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input">
                                                <label for="pat_name" class="col-md-6  control-label"> رقم الجوال
                                                </label>
                                                <div class="col-md-6">
                                                    <input  minlength="1" maxlength="10" required="" type="text" name="cus_phone"  value=""
                                                            class="form-control" placeholder="رقم الجوال">
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
            <button type="button" onclick="submitForm('passport')" class="btn green ok">حفظ التغييرات</button>
            <button type="button" data-dismiss="modal" class="btn btn-default">اغلاق</button>
        </div>
    </div>

    <div class="row">
        <div id="search_form" class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">

                    <div class="caption">
                        <i class="fa fa-search"></i>فلاتر البحث
                    </div>
                    <div class="actions">
                        <a id="public_search" href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-search"></i> بحث </a>
                    </div>

                </div>
                <div class="portlet-body collapse1">
                    <div style=" " class="row">
                        {{--
                                                <div class="col-md-4" id="date">
                                                    <div class="form-group form-md-line-input ">
                                                        <label class="col-md-4 control-label" for="dob_search">تاريخ الميلاد</label>
                                                        <div class="col-md-8">
                                                            <div id="datePicker1" class="input-group  date date-picker"
                                                                 data-date-format="yyyy-mm-dd">
                                                                <input id="dob_search" placeholder="تاريخ الميلاد" type="text"
                                                                       class="form-control">
                                                                <sgpan class="input-group-btn">
                                                                <button class="btn default" type="button"><i
                                                                        class="fa fa-calendar"></i></button>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        --}}
                        <input type="hidden" value="false" name="offer" id="offer">

                    {{--    <div class="col-md-4">
                            <div class="form-group form-md-line-input ">

                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012"
                                     data-date-format="yyyy-mm-dd">
                                    <input id="date_from" placeholder="التاريخ من" type="text" class="form-control"
                                           name="from">
                                    <span class="input-group-addon"> إلى </span>
                                    <input id="date_to" placeholder="التاريخ إلى" type="text" class="form-control"
                                           name="to"></div>

                            </div>
                        </div>--}}
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input">
                                <label for="cus_id" class="col-md-4  control-label">رقم الهوية
                                </label>
                                <div class="col-md-8">
                                    <input  minlength="3"maxlength="9" required="" type="text" name="cus_id"  value=""
                                            class="form-control" placeholder="رقم الهوية">
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>جوازات السفر
                    </div>
                    <div class="tools">

                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button onclick="showModal('passport',null)" class="btn sbold red"> إضافة جديد
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-container">

                        <table class="table table-striped  table-hover" id="passportTable">
                            <thead>
                            <tr>
                                <th> #  </th>
                                <th> رقم هوية الزبون</th>
                                <th> إسم الزبون بالعربي</th>
                                <th>رقم الجوال</th>
                                <th>عنوان السكن</th>
                                <th>تاريخ الميلاد</th>
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

        var passport = $('#passportTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{url('passport/{passport}')}}",
                data: function (d) {
                    d.cus_id = $('#search_form').find('[name="cus_id"]').val();
                }
            },
            dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
            buttons: [
                {
                    text: 'تحديث',
                    className: 'btn green reload passportTable',
                    action: function (e, dt, node, config) {
                        dt.ajax.reload();
                    }
                },

            ],
            columns: [
                {className: 'text-center', data: 'id', name: 'id', searchable: true},
                {className: 'text-center', data: 'cus_id', name: 'cus_id', searchable: true},
                {className: 'text-center', data: 'cus_ar_first_name', name: 'cus_ar_first_name', searchable: true},
                {className: 'text-center', data: 'cus_phone', name: 'cus_phone', searchable: true},
                {className: 'text-center', data: 'cus_address', name: 'cus_address', searchable: true},
                {className: 'text-center', data: 'cus_birth_date', name: 'cus_birth_date', searchable: true},
                {className: 'text-left', data: 'action', name: 'action', searchable: false},
            ],
        });


        $('#public_search').on('click', function (e) {
            passport.draw();
            e.preventDefault();
        });
    </script>
@endsection
