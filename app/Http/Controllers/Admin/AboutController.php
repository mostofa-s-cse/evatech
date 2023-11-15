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
            'description' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'experience' => 'required',
        ]);

        try {
            $aboutsCount = DB::table('abouts')->count();

            $value = ($aboutsCount > 0) ? 'update' : 'insert';

            $image_url = $request->old_image;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/about-image'), $imageName);
                $image_url = 'uploads-image/about-image/' . $imageName;
            }

            $experience_image_url = $request->old_image2;
            if ($request->hasFile('experience_image')) {
                $imageName = time() . '.' . $request->experience_image->extension();
                $request->experience_image->move(public_path('uploads-image/about-image'), $imageName);
                $experience_image_url = 'uploads-image/about-image/' . $imageName;
            }

            DB::table('abouts')->$value([
                'title' => $request->title,
                'description' => $request->description,
                'mission' => $request->mission,
                'vision' => $request->vision,
                'experience' => $request->experience,
                'image' => $image_url,
                'experience_image' => $experience_image_url,
                'created_at' => now(),
            ]);

            return redirect()->route('about.index')->with('success', 'Added Successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }



}
