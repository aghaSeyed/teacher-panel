<?php

namespace App\Http\Controllers\Administrator;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class admin extends Controller
{
    public function storePic($file){
        $now = Carbon::now();
        $year = $now -> year;
        $month = $now -> month;
    $fileName = $file->getClientOriginalName();
    $locate= "/uploads/{$year}/{$month}/";
    $file=$file->move(public_path($locate),$fileName);
    $sizes=[150,300,900,1024];
    $this->resize($file,$sizes,$locate,$fileName);
    return $locate."300_".$fileName;
    }
    public function resize($file , $sizes , $locate , $fileName){
        foreach ($sizes as $size){
            $imageName =$locate."{$size}_".$fileName;
            Image::make($file)->resize($size,null,function ($constraint){
                $constraint->aspectRatio();
            })->save(public_path($imageName));
        }
    }
}
