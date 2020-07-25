<?php
declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function create()
    {
        return view('web.profile.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
