<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ContactController extends Controller
{
//    public function index(Request $request)
//    {
//        try {
//            if ($request->ajax()) {
//                $data = DB::table('contacts')
//                    ->orderBy('id', 'DESC')
//                    ->get();
//                return DataTables::of($data)
//                    ->addIndexColumn()
//                    ->addColumn('name', function ($data) {
//                        return $data->name;
//                    })
//                    ->addColumn('	email', function ($data) {
//                        return $data->	email;
//                    })
//                    ->addColumn('subject', function ($data) {
//                        return $data->subject;
//                    })
//                    ->addColumn('message', function ($data) {
//                        return $data->message;
//                    })
//                    ->addColumn('created_at', function ($data) {
//                        return $data->created_at->format('Y-m-d H:i:s');
//                    })
//                    ->addColumn('action', function ($data) {
//                        return '<div class="" role="group">
//                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
//                                       href="' . route('contacts.destroy', [$data->id]) . '"
//                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
//                                        <i class="fa fa-trash"></i>
//                                    </a>
//                                </div>';
//                    })
//                    ->rawColumns(['name','email', 'subject','message', 'action'])
//                    ->make(true);
//            }
//            return view('back-end.pages.contact.index');
//        } catch (\Exception $exception) {
//            return redirect()->back()->with('error', $exception->getMessage());
//        }
//    }
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('contacts')
                    ->orderBy('id', 'DESC')
                    ->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function ($data) {
                        return $data->name;
                    })
                    ->addColumn('email', function ($data) {
                        return $data->email;
                    })
                    ->addColumn('subject', function ($data) {
                        return $data->subject;
                    })
                    ->addColumn('message', function ($data) {
                        return $data->message;
                    })
                    ->addColumn('created_at', function ($data) {
                        return Carbon::parse($data->created_at)->format('d-M-Y');
                    })
                    ->addColumn('action', function ($data) {
                        return '<div class="" role="group">
                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
                                       href="' . route('contact.destroy', [$data->id]) . '"
                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['name',
                        'email',
                        'subject',
                        'message',
                        'created_at',
                        'action'])
                    ->make(true);
            }
            return view('back-end.pages.contact.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message'=>'required'
        ]);

        try {
            DB::table('contacts')->insert([
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->email,
                'message'=>$request->message,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('frontend.index')
                ->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::table('contacts')
                ->where('id', $id)
                ->delete();

            return redirect()->route('contact.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }





    public function create()
    {
        try {
            return view('back-end.pages.contact.create');
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
}
