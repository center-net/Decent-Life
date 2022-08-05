<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Initiative;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class InitiativeController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $initiatives = Initiative::All();
        return view('Backend.initiatives', ['title' => trans('initiatives_tran.initiatives')],compact('initiatives'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $initiative = new Initiative();
            if(isset($request->image)){
                $imageName = $this->UploadImage($request, 'initiatives', 'image');
                $initiative->image = $imageName;
            }else{
                $initiative->image = 'user_icon.png';
            }

            $initiative->title = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $initiative->description = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $initiative->subject = ['en' => $request->subject_en, 'ar' => $request->subject_ar];

            $initiative->save();
             toastr()->success(trans('messages.success'));
            return redirect()->route('admin.initiatives');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            if(isset($request->image)){
                $initiative = Initiative::findOrFail($request->id);
                if (File::exists(public_path('Upload/'.$initiative->image))) {
                    File::delete(public_path('Upload/'.$initiative->image)) ;
                    $imageName = $this->UploadImage($request, 'initiatives', 'image');
                    $data['image'] = $imageName;
                }
            }

            $data['title'] = ['en' => $request->title_en, 'ar' => $request->title_ar];
            $data['description'] = ['en' => $request->description_en, 'ar' => $request->description_ar];
            $data['subject'] = ['en' => $request->subject_en, 'ar' => $request->subject_ar];
            Initiative::where('id',$id)->update($data);

            toastr()->success(trans('messages.Update'));
            return redirect()->route('admin.initiatives');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $initiative = Initiative::findOrFail($request->id);
        if (File::exists(public_path('Upload/'.$initiative->image))) {
            File::delete(public_path('Upload/'.$initiative->image)) ;
        }
        $initiative->delete();
        toastr()->success(trans('messages.Delete'));
        return redirect()->route('admin.initiatives');
    }
}
