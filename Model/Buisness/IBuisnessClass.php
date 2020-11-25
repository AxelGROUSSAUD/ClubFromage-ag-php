<?php

namespace Club_Fromage\Model\Buisness;
interface IBuisnessClass
{
    public function hydrate(array $donnees);

    public function __construct(array $data);
}