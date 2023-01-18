<?php

namespace App\Http\Controllers;

use App\Passport;
use App\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Project;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Enginges\EloquentEngine;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Gate;

class passportController extends Controller
{


    public function index()
    {


        return View::make('passport');

    }


    public function show(Request $request)
    {
        $data = $request->all();


        $users = Passport::query();
        if (isset($data['cus_id']) && $data['cus_id']!=null){
            $users->where('cus_id',$data['cus_id']);
        }
        return Datatables::of($users)
            ->addColumn('action', function ($ctr) {

                return '<div class="btn-group">
                                                        <button  class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> إجراء
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul  class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a onclick="showModal(`passport`,' . $ctr->id . ')" href="javascript:;">
                                                                    <i class="icon-pencil"></i> تعديل </a>
                                                            </li>
                                                            <li>
                                                                <a onclick="deleteThis(`passport`,' . $ctr->id . ')"  href="javascript:;">
                                                                    <i class="icon-trash"></i> حذف  </a>
                                                            </li>
                                                            </ul>
                                                    </div>';
            })
            ->rawColumns(['action' => 'action', 'passport_img' => 'passport_img'])
            ->make(true);
    }

    public function edit(Request $request, $id)
    {
        // abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = $request->all();


        $data = Passport::find($id);

        if ($data) {
            return response()->json($data);
        }
        return response(['message' => "تمت العملية بنجاح"], 500);

    }

    public function store(Request $request)
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data = $request->all();
        $validator = Validator::make($data, [
            'cus_id' => 'required|unique:passports,cus_id',

        ],
            ['cus_id.unique' => 'رقم الهوية مدرج مسبقا']
        );
        if (count($validator->errors()) > 0) {
            return response()->json([
                'success' => FALSE,
                'message' => $validator->errors()->all()[0],

            ]);
        }
        if ($validator->failed()) {

            return response()->json([
                'success' => FALSE,
                'message' => $validator->errors(),

            ]);
        }

        $data['user_id'] = Auth::id();
        $passport = Passport::create($data);

        if (!$passport) {

            return response()->json([
                'success' => FALSE,
                'message' => "فشلت العملية"

            ]);
        }
        return response()->json([
            'success' => TRUE,
            'message' => "تمت العملية بنجاح"
        ]);
    }

    public function update(Request $request)
    {
        // abort_if(Gate::denies('user_update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data = $request->all();
        $validator = Validator::make($data, [
            'cus_id' => 'required|unique:passports,cus_id,' . $data['id'],

        ]);
        if (count($validator->errors()) > 0) {
            return response()->json([
                'success' => FALSE,
                'message' => $validator->errors()->all()[0],

            ]);
        }

        $passport = Passport::find($data['id']);

        $passport->update($data);


        return response()->json([
            'success' => TRUE,
            'message' => "تمت العملية بنجاح"
        ]);
    }

    public function destroy(Request $request, $id)
    {

        if (Passport::find($id)->delete()) {
            return response()->json([
                'message' => "تمت العملية بنجاح",
            ]);
        }

        return response(['message' => "تمت العملية بنجاح"], 500);
    }


}
