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

use Prokerala\Api\Astrology\Result\ResultInterface;
use Prokerala\Api\Astrology\Traits\Result\RawResponseTrait;

class KaalSarpDosha implements ResultInterface
{
    use RawResponseTrait;

    /**
     * @var string|null
     */
    private $type;
    /**
     * @var string|null
     */
    private $doshaType;
    /**
     * @var bool
     */
    private $hasDosha;
    /**
     * @var string
     */
    private $description;

    /**
     * KaalSarpDosha constructor.
     * @param string|null $type
     * @param string|null $doshaType
     * @param bool $hasDosha
     * @param string $description
     */
    public function __construct($type, $doshaType, $hasDosha, $description)
    {

        $this->type = $type;
        $this->doshaType = $doshaType;
        $this->hasDosha = $hasDosha;
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDoshaType()
    {
        return $this->doshaType;
    }

    /**
     * @return bool
     */
    public function hasDosha()
    {
        return $this->hasDosha;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return \stdClass|null
     */
    public function getApiResponse()
    {
        return $this->apiResponse;
    }


}
