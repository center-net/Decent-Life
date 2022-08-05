<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Setting;
use Illuminate\Support\Facades\File;
use App\Traits\UploadTrait;

class SettingController extends Controller
{
    use UploadTrait;
    public function show()
    {
        $setting = Setting::first();
        return view('Backend.setting', ['title' => trans('setting_tran.setting')],compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if(isset($request->logo)){
                $setting = Setting::findOrFail($request->id);
                if (File::exists(public_path('Upload/'.$setting->logo))) {
                    File::delete(public_path('Upload/'.$setting->logo)) ;
                    $imageName = $this->UploadImage($request, 'setting', 'logo');
                    $data['logo'] = $imageName;
                }
            }
            if(isset($request->favicon)){
                if (File::exists(public_path('Upload/'.$setting->favicon))) {
                    File::delete(public_path('Upload/'.$setting->favicon)) ;
                    $imageName = $this->UploadImage($request, 'setting', 'favicon');
                    $data['favicon'] = $imageName;
                }
            }

            $data['title'] = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $data['content'] = ['en' => $request->content_en, 'ar' => $request->content_ar];
            $data['address'] = ['en' => $request->address_en, 'ar' => $request->address_ar];
            $data['team'] = ['en' => $request->team_en, 'ar' => $request->team_ar];

            $data['facebook'] = $request->facebook;
            $data['instagram'] = $request->instagram;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            Setting::where('id',$id)->update($data);

            toastr()->success(trans('messages.Update'));
            return redirect()->route('admin.setting.show');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
