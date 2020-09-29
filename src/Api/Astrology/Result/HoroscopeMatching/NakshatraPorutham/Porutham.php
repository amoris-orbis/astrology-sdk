<?php

namespace Prokerala\Api\Astrology\Result\HoroscopeMatching\NakshatraPorutham;

class Porutham
{
    /**
     * @var bool
     */
    private $hasPorutham;

    /**
     * @var string
     */
    private $poruthamStatus;
    /**
     * @var int
     */
    private $point;
    /**
     * @var string
     */
    private $description;

    /**
     * Porutham constructor.
     * @param bool $hasPorutham
     * @param string $poruthamStatus
     * @param int $point
     * @param string $description
     */
    public function __construct($hasPorutham, $poruthamStatus, $point, $description)
    {
        $this->hasPorutham = $hasPorutham;
        $this->poruthamStatus = $poruthamStatus;
        $this->point = $point;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPoruthamStatus()
    {
        return $this->poruthamStatus;
    }

    /**
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function getHasPorutham()
    {
        return $this->hasPorutham;
    }
}
