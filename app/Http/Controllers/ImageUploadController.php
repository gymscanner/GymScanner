<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
    public function upload()
    {
        return view('image_upload');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        
        try {
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('upload'), $imageName);

            $imageUpload = new Banner();
            $imageUpload->image_path = $imageName;
            $imageUpload->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();

            throw $e;
        }
            
        return response()->json(['success' => $imageName]);
    }

    public function delete(Request $request)
    {
        $filename = $request->get('filename');
        Banner::where('image_path', $filename)->delete();
        $path = public_path() . '/upload/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}