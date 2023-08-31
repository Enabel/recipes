<?php

declare(strict_types=1);

namespace App\Entity\Enabel;

use App\Repository\Enabel\CountryRepository;
use Doctrine\ORM\Mapping as ORM;
use Enabel\PartnerCountriesBundle\Entity\Country as BaseCountry;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country extends BaseCountry
{
}
