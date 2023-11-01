<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Provide;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ProvideController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('provides')
                    ->orderBy('id', 'DESC')
                    ->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('image', function ($data) {
                        return '<a target="_blank" href="' . asset($data->image) . '">
                                   <img class="image" style="width:60px; height: 40px" src="' . asset($data->image) . '"/>
                                </a>';
                    })
                    ->addColumn('title', function ($data) {
                        return $data->title;
                    })
                    ->addColumn('sub_title', function ($data) {
                        return $data->sub_title;
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
                                        href="' . route('provide.edit', $data->id) . '" class="btn btn-sm btn-success" style="cursor:pointer"
                                        title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
                                       href="' . route('provide.destroy', [$data->id]) . '"
                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image','title', 'sub_title', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.provide.index');
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
            return view('back-end.pages.provide.create');
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|image',
        ]);

        try {
            $image_url = 'public/image/no_image.jpg';

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/provides'), $imageName);
                $image_url = 'uploads-image/provides/' . $imageName;
            }

            DB::table('provides')->insert([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'image' => $image_url,
                'status' => 0,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('provide.index')
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
            $provides = DB::table('provides')
                ->where('id', $id)
                ->first();

            return view('back-end.pages.provide.edit', compact('provides'));
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|image'
        ]);

        try {
            // Retrieve the existing slider record by its ID
            $slider = DB::table('provides')->where('id', $id)->first();

            if (!$slider) {
                return redirect()->route('provide.index')
                    ->with('error', 'Provides not found');
            }

            $image_url = $slider->image; // Default to the existing image URL

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/provides'), $imageName);
                $image_url = 'uploads-image/provides/' . $imageName;

                // If a new image is uploaded, you may want to delete the old image here
                // To do so, you can use the File facade or Storage for more robust handling
            }

            // Update the slider record
            DB::table('provides')->where('id', $id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'image' => $image_url,
                // You can update other fields as needed
            ]);

            return redirect()->route('provide.index')
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
            DB::table('provides')
                ->where('id', $id)
                ->delete();

            return redirect()->route('provide.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    public function customer_status_change(Request $request)
    {
        {
            $request->validate([
                'id' => 'required',
                'status' => 'required',
            ], []);

            try {

                DB::table('provides')
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
