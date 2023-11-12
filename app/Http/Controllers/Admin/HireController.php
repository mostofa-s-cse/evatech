<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hire;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('hires')
                    ->orderBy('id', 'DESC')
                    ->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('image', function ($data) {
                        return '<a target="_blank" href="' . asset($data->image) . '">
                                   <img class="image" style="width:60px; height: 40px" src="' . asset($data->image) . '"/>
                                </a>';
                    })
                    ->addColumn('name', function ($data) {
                        return $data->name;
                    })
                    ->addColumn('status', function ($data) {
                        if ($data->status == 1) {
                            return "<select id='status-$data->id' onchange='StatusChange([$data->id])' class='form-control'>
                                            <option selected  value='1' >Active</option>
                                            <option  value='0'>In active</option>
                                        </select>";
                        } else {
                            return "<select id='status-$data->id' onchange='StatusChange([$data->id])' class='form-control'>
                                            <option  value='1' >Active</option>
                                            <option selected  value='0'>In active</option>
                                        </select>";
                        }

                    })
                    ->addColumn('action', function ($data) {
                        return '<div class="" role="group">
                                    <a id=""
                                        href="' . route('hire.edit', $data->id) . '" class="btn btn-sm btn-success" style="cursor:pointer"
                                        title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
                                       href="' . route('hire.destroy', [$data->id]) . '"
                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image','name', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.hire.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('back-end.pages.hire.create');
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
        ]);

        try {
            $image_url = 'public/image/no_image.jpg';

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/hires'), $imageName);
                $image_url = 'uploads-image/hires/' . $imageName;
            }

            DB::table('hires')->insert([
                'name' => $request->name,
                'image' => $image_url,
                'status' => 0,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('hire.index')
                ->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $hires = DB::table('hires')
                ->where('id', $id)
                ->first();

            return view('back-end.pages.hire.edit', compact('hires'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        try {
            // Retrieve the existing slider record by its ID
            $hires = DB::table('hires')->where('id', $id)->first();

            if (!$hires) {
                return redirect()->route('hire.index')
                    ->with('error', 'Hire not found');
            }

            $image_url = $hires->image; // Default to the existing image URL

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/hires'), $imageName);
                $image_url = 'uploads-image/hires/' . $imageName;
            }
            DB::table('hires')->where('id', $id)->update([
                'name' => $request->name,
                'image' => $image_url,
                // You can update other fields as needed
            ]);

            return redirect()->route('hire.index')
                ->with('success', 'Updated Successfully');
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
            DB::table('hires')
                ->where('id', $id)
                ->delete();

            return redirect()->route('hire.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    public function hire_status_change(Request $request)
    {
        {
            $request->validate([
                'id' => 'required',
                'status' => 'required',
            ], []);

            try {

                DB::table('hires')
                    ->where('id', $request->id)
                    ->update([
                        'status' => $request->status
                    ]);

            } catch (\Exception $exception) {
                return back()->with($exception->getMessage());
            }
        }
    }

}
