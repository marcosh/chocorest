<?php

namespace Marcosh\Chocorest\Entities;

class Producer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * code of the country
     *
     * @var string
     */
    private $country;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string mysql timestamp
     */
    private $createdAt;

    /**
     * @var string mysql timestamp
     */
    private $updatedAt;
}
