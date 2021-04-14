<?php

namespace App\Containers\VendorSection\Welcome\Actions;

use App\Ship\Parents\Actions\Action;

class FindMessageForApiRootVisitorAction extends Action
{
    public function run(): array
    {
        return ['Welcome to Apiato'];
    }
}
