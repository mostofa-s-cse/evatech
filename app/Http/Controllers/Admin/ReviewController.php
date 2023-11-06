<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('reviews')
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
                    ->addColumn('name', function ($data) {
                        return $data->name;
                    })
                    ->addColumn('designation', function ($data) {
                        return $data->designation;
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
                                        href="' . route('review.edit', $data->id) . '" class="btn btn-sm btn-success" style="cursor:pointer"
                                        title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-sm btn-danger" style="cursor:pointer"
                                       href="' . route('review.destroy', [$data->id]) . '"
                                       onclick="showDeleteConfirm(' . $data->id . ')" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>';
                    })
                    ->rawColumns(['title','sub_title', 'name','designation','image','status', 'action'])
                    ->make(true);
            }
            return view('back-end.pages.review.index');
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
            return view('back-end.pages.review.create');
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
            'name' => 'required',
            'designation'=>'required'
        ]);

        try {
            $image_url = 'public/image/no_image.jpg';

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/reviews'), $imageName);
                $image_url = 'uploads-image/reviews/' . $imageName;
            }

            DB::table('reviews')->insert([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'name' => $request->name,
                'designation'=>$request->designation,
                'image' => $image_url,
                'status' => 0,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('review.index')
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
            $reviews = DB::table('reviews')
                ->where('id', $id)
                ->first();

            return view('back-end.pages.review.edit', compact('reviews'));
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
            'name' => 'required',
            'designation'=>'required'
        ]);

        try {
            // Retrieve the existing slider record by its ID
            $reviews = DB::table('reviews')->where('id', $id)->first();

            if (!$reviews) {
                return redirect()->route('review.index')
                    ->with('error', 'reviews not found');
            }

            $image_url = $reviews->image; // Default to the existing image URL

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/reviews'), $imageName);
                $image_url = 'uploads-image/reviews/' . $imageName;

                // If a new image is uploaded, you may want to delete the old image here
                // To do so, you can use the File facade or Storage for more robust handling
            }

            // Update the slider record
            DB::table('reviews')->where('id', $id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'name' => $request->name,
                'designation'=>$request->designation,
                'image' => $image_url,
            ]);

            return redirect()->route('review.index')
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
            DB::table('reviews')
                ->where('id', $id)
                ->delete();

            return redirect()->route('review.index')
                ->with('success', 'Deleted Successfully');

        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }

    public function review_status_change(Request $request)
    {
        {
            $request->validate([
                'id' => 'required',
                'status' => 'required',
            ], []);

            try {

                DB::table('reviews')
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
