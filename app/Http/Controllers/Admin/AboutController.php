<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    //
    public function index()
    {
        try {
            $abouts = DB::table('abouts')->first();
            return view('back-end.pages.about.index', compact('abouts'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'title' => 'required',
            'description'=> 'required',
            'mission' => 'required',
            'vision' => 'required'
        ], []);
        try {

            $abouts = DB::table('abouts')
                ->count();

            if ($abouts > 0) {
                $value = 'update';
            } else {
                $value = 'insert';
            }

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/about-image'), $imageName);
                $image_url = 'uploads-image/about-image/' . $imageName;
            }
            else {
                $image_url = $request->old_image;
            }

            DB::table('abouts')->$value([
                'title' => $request->title,
                'description' => $request->description,
                'mission'=>$request->mission,
                'vision'=>$request->vision,
                'image'=>$image_url,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('about.index')
                ->with('success', 'Added Successfully');
        } catch (\Exception $exception) {

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


}
