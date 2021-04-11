<?php

namespace App\Containers\VendorSection\Welcome\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\VendorSection\Welcome\Actions\FindMessageForApiRootVisitorAction;
use App\Containers\VendorSection\Welcome\Actions\FindMessageForApiV1VisitorAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
	public function apiRoot(): JsonResponse
	{
		$message = Apiato::call(FindMessageForApiRootVisitorAction::class);
		return response()->json($message);
	}

	public function v1ApiLandingPage(): JsonResponse
	{
		$message = Apiato::call(FindMessageForApiV1VisitorAction::class);
		return response()->json($message);
	}
}
