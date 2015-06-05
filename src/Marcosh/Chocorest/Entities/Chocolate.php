<?php

namespace Marcosh\Chocorest\Entities;

class Chocolate
{
    /**
     * @var int
     */
    private $id;

    /**
     * the id of the producer
     *
     * @var int
     */
    private $producerId;

    /**
     * @var string
     */
    private $description;

    /**
     * the cocoa percentage, an integer between 0 and 100
     *
     * @var string|null
     */
    private $cocoaPercentage;

    /**
     * the type of the wrapper, a string among 'box', 'paper' and 'label'
     *
     * @var string
     */
    private $wrapper;

    /**
     * the quantity expressed in grams
     *
     * @var int|null
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $double;

    /**
     * where the wrapper is archived, a string among 'faldone' and 'raccoglitore'
     *
     * @var string|null
     */
    private $archive;

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var string mysql timestamp
     */
    private $createdAt;

    /**
     * @var string mysql timestamp
     */
    private $updatedAt;
}
