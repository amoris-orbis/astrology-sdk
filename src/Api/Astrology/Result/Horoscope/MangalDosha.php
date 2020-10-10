<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Api\Astrology\Result\Horoscope;

class MangalDosha
{
    /**
     * @var bool
     */
    private $hasMangalDosha;
    /**
     * @var string
     */
    private $description;

    /**
     * MangalDosha constructor.
     *
     * @param bool   $hasMangalDosha
     * @param string $description
     */
    public function __construct($hasMangalDosha, $description)
    {
        $this->hasMangalDosha = $hasMangalDosha;
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getHasMangalDosha()
    {
        return $this->hasMangalDosha;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
