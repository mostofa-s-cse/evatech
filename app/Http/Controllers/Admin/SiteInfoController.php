<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\siteInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteInfoController extends Controller
{
    public function index()
    {
        try {
            $site_infos = DB::table('site_infos')->first();
            return view('back-end.pages.site-info.index', compact('site_infos'));
        } catch (\Exception $exception) {
            return back()->with($exception->getMessage());
        }
    }
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'first_name' => 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'address' => 'required',
            'image'=>'required',
        ], []);
        try {

            $abouts = DB::table('site_infos')
                ->count();

            if ($abouts > 0) {
                $value = 'update';
            } else {
                $value = 'insert';
            }
            $image_url = $request->old_image;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads-image/site-image'), $imageName);
                $image_url = 'uploads-image/site-image/' . $imageName;
            }
            DB::table('site_infos')->$value([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'image'=>$image_url,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('site-info.index')
                ->with('success', 'Added Successfully');
        } catch (\Exception $exception) {

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
