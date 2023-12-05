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
    $request->validate([
        'first_name' => 'required',
        'last_name'=> 'required',
        'email'=> 'required',
        'phone'=> 'required',
        'address' => 'required',
    ], []);
    try {
        $image_url = $request->old_image;
        if ($request->hasFile('image')) {
            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads-image/site-image'), $image_name);
            $image_url = 'uploads-image/site-image/' . $image_name;
        }

        $logo_url = $request->old_logo;
        if ($request->hasFile('logo')) {
            $logo_name = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads-image/site-image'), $logo_name);
            $logo_url = 'uploads-image/site-image/' . $logo_name;
        }

        $abouts = DB::table('site_infos')
            ->count();

        if ($abouts > 0) {
            $value = 'update';
        } else {
            $value = 'insert';
        }

        DB::table('site_infos')->$value([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$image_url,
            'logo'=>$logo_url,
            'provide_top_title'=>$request->provide_top_title,
            'provide_title'=>$request->provide_title,
            'about_top_title'=>$request->about_top_title,
            'about_title'=>$request->about_title,
            'project_top_title'=>$request->project_top_title,
            'project_title'=>$request->project_title,
            'customer_top_title'=>$request->customer_top_title,
            'customer_title'=>$request->customer_title,
            'hire'=>$request->hire,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('site-info.index')
            ->with('success', 'Added Successfully');
    } catch (\Exception $exception) {

        return redirect()->back()->with('error', $exception->getMessage());
    }
}
}
