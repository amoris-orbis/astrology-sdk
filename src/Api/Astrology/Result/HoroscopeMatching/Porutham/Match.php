<?php
namespace Prokerala\Api\Astrology\Result\HoroscopeMatching\Porutham;

use Prokerala\Api\Astrology\Traits\StringableTrait;

class Match
{
    use StringableTrait;
    /**
     * @var string
     */
    private $name;
    /**
     * @var bool
     */
    private $hasPorutham;
    /**
     * @var int
     */
    private $id;

    /**
     * Match constructor.
     * @param int $id
     * @param string $name
     * @param bool $hasPorutham
     */
    public function __construct(
        $id,
        $name,
        $hasPorutham

    ) {
        $this->name = $name;
        $this->hasPorutham = $hasPorutham;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function hasPorutham()
    {
        return $this->hasPorutham;
    }

}
