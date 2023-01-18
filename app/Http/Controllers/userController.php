<?php

namespace App\Http\Controllers;

use App\AllocationDonor;
use App\User;
use App\Category;
use App\Donor;
use App\Municipality;
use App\Stage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Enginges\EloquentEngine;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Support\Facades\Auth;
use App\AllocationDonorMunicple;
use App\AllocationMunicple;

class userController extends Controller
{


    public function index()
    {


        return View::make('user');

    }


    public function datatableUser(Request $request)
    {
        $data = $request->all();

        $users = User::query();

        return Datatables::of($users)
            ->addColumn('user_img', function ($ctr) {

                return '<img width="150" height="150" src="' . url('public/user_img') . '/' . $ctr->user_img . '"/>';
            })
            ->addColumn('action', function ($ctr) {

                return '<div class="btn-group">
                                                        <button  class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> إجراء
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul  class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a onclick="showModal(`user`,' . $ctr->id . ')" href="javascript:;">
                                                                    <i class="icon-pencil"></i> تعديل </a>
                                                            </li>
                                                            <li>
                                                                <a onclick="deleteThis(`user`,' . $ctr->id . ')"  href="javascript:;">
                                                                    <i class="icon-trash"></i> حذف  </a>
                                                            </li>
                                                            </ul>
                                                    </div>';
            })
            ->rawColumns(['action' => 'action', 'user_img' => 'user_img'])
            ->make(true);
    }

    public function show(Request $request, $id)
    {

        $user = User::find($id);
        if ($user) {
            return response()->json([
                'user' => $user
            ]);
        }
        return response(['message' => 'فشلت العملية'], 500);

    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['id']);
     //   $data['user_id'] = Auth::id();
        $user = User::create($data);

        if (!$user) {

            return response()->json([
                'success' => FALSE,
                'message' => "حدث حطأ أثناء الإدخال"

            ]);
        }
        return response()->json([
            'success' => TRUE,
            'message' => "تم الإدخال بنجاح"

        ]);
    }

    public function update_user(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);
        $user->update($data);


        if (!$user) {
            return response()->json([
                'success' => TRUE,
                'message' => "حدث حطأ أثناء التعديل"

            ]);
        }
        return response()->json([
            'success' => TRUE,
            'message' => "تم التعديل بنجاح"
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (User::find($id)->delete()) {
            return response()->json([
                'message' => 'تمت العملية بنجاح',
            ]);
        }

        return response(['message' => 'فشلت العملية'], 500);
    }


}
