<?php
namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function showForm()
    {
        return view('detail.detail_form');
    }

    public function search(Request $request)
    {
        $detail = Detail::where('detailid', $request->id)->first();
        return view('detail.detail_result', compact('detail'));
    }
}
