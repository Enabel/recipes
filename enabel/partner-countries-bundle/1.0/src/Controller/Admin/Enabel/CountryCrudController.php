<?php

declare(strict_types=1);

namespace App\Controller\Admin\Enabel;

use App\Entity\Enabel\Country;
use Enabel\PartnerCountriesBundle\Controller\Admin\CountryCrudController as BaseCountryCrudController;

class CountryCrudController extends BaseCountryCrudController
{
    public static function getEntityFqcn(): string
    {
        return Country::class;
    }
}
