<?php
namespace App\Repository;

use App\Entity\Pizza;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Pizza::class)]
class PizzaRepository extends Repository
{

}