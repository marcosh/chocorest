<?php

namespace marcosh\chocorest\entities;

class Chocolate {

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
     * @var string
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
     * @var int
     */
    private $quantity;
}
