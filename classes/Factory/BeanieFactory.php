<?php

namespace Factory;

use Beanie;


class BeanieFactory
{
    public function create($data)
    {
        $bonnet = new Beanie();
        $bonnet->setDesignation($data['designation']);
        $bonnet->setPrix($data['prix']);
        $bonnet->setImage($data['image']);
        $bonnet->setDescription($data['description']);

        return $bonnet;
    }
}
