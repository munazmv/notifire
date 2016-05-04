<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateChannelRequest;

class ChannelController extends Controller
{
	public function store(CreateChannelRequest $request)
	{
		return $request->all();
	}
}
