<?php

declare(strict_types=1);

namespace App\Repository\Enabel;

use App\Entity\Enabel\Country;
use Doctrine\Persistence\ManagerRegistry;
use Enabel\PartnerCountriesBundle\Repository\CountryRepository as BaseCountryRepository;

/**
 * @method Country|null   find($id, $lockMode = null, $lockVersion = null)
 * @method Country|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<Country> findAll()
 * @method array<Country> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountryRepository extends BaseCountryRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Country::class);
    }
}
