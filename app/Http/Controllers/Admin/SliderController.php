<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    //

     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('sliders')
                    ->orderBy('id', 'DESC')
                    ->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('title', function ($data) {
                        return $data->title;

                    })
                    ->addColumn('sub_title', function ($data) {
                        return $data->sub_title;
                    })
                    ->addColumn('image', function ($data) {
                        return '<a target="_blank" href="' . asset($data->image) . '">
                                   <img class="image" style="width:60px; height: 40px" src="' . asset($data->image) . '"/>
                                </a>';
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
                                        href="' . route('slider.edit', $data->id) . '" class="btn btn-sm btn-success" style="cursor:pointer"
                                        title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
                                       href="' . route('slider.destroy', [$data->id]) . '"
                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['image','title', 'sub_title', 'status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.slider.index');
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
            return view('back-end.pages.slider.create');
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
            $request->image->move(public_path('uploads-image/sliders'), $imageName);
            $image_url = 'uploads-image/sliders/' . $imageName;
        }

        DB::table('sliders')->insert([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $image_url,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('slider.index')
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
            $sliders = DB::table('sliders')
                ->where('id', $id)
                ->first();

            return view('back-end.pages.slider.edit', compact('sliders'));
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
            'image' => 'image', // You can add validation for image type here, but it's not required for updates
        ]);

        try {
            // Retrieve the existing slider record by its ID
            $slider = DB::table('sliders')->where('id', $id)->first();

            if (!$slider) {
                return redirect()->route('slider.index')
                    ->with('error', 'Slider not found');
            }

            $image_url = $slider->image; // Default to the existing image URL

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/sliders'), $imageName);
                $image_url = 'uploads-image/sliders/' . $imageName;

                // If a new image is uploaded, you may want to delete the old image here
                // To do so, you can use the File facade or Storage for more robust handling
            }

            // Update the slider record
            DB::table('sliders')->where('id', $id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'image' => $image_url,
                // You can update other fields as needed
            ]);

            return redirect()->route('slider.index')
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
            DB::table('sliders')
                ->where('id', $id)
                ->delete();

            return redirect()->route('slider.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    public function slider_status_change(Request $request)
    {
        {
            $request->validate([
                'id' => 'required',
                'status' => 'required',
            ], []);

            try {

                DB::table('sliders')
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
