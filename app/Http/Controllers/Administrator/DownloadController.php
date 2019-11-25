<?php

namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function download($id) {

        $q = Question::find($id);
        return Response::download(public_path($q->img));
    }
}
