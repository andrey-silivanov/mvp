<?php
declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileCreateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function create()
    {
        return view('web.profile.create');
    }

    public function store(ProfileCreateRequest $request)
    {
        dd($request->all());
    }
}
