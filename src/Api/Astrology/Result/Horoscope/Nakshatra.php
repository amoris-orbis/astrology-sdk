<?php
namespace Prokerala\Api\Astrology\Result\Horoscope;

use Prokerala\Api\Astrology\Result\Horoscope\Nakshatra\NakshatraInfo;
use Prokerala\Api\Astrology\Result\Rasi;

/**
 * Defines Nakshatra
 */
class Nakshatra
{
    /**
     * @var string
     */
    private $nakshatraName;
    /**
     * @var float
     */
    private $nakshatraLongitude;
    /**
     * @var string
     */
    private $nakshatraStart;
    /**
     * @var string
     */
    private $nakshatraEnd;
    /**
     * @var float
     */
    private $nakshatraPada;
    /**
     * @var \Prokerala\Api\Astrology\Result\Rasi
     */
    private $chandraRasi;
    /**
     * @var \Prokerala\Api\Astrology\Result\Rasi
     */
    private $sooryaRasi;
    /**
     * @var \Prokerala\Api\Astrology\Result\Rasi
     */
    private $zodiac;
    /**
     * @var \Prokerala\Api\Astrology\Result\Horoscope\Nakshatra\NakshatraInfo
     */
    private $additionalInfo;

    /**
     * Nakshatra constructor.
     * @param string $nakshatraName
     * @param float $nakshatraLongitude
     * @param string $nakshatraStart
     * @param string $nakshatraEnd
     * @param float $nakshatraPada
     * @param \Prokerala\Api\Astrology\Result\Rasi $chandraRasi
     * @param \Prokerala\Api\Astrology\Result\Rasi $sooryaRasi
     * @param \Prokerala\Api\Astrology\Result\Rasi $zodiac
     * @param NakshatraInfo $additionalInfo
     */
    public function __construct(
        $nakshatraName,
        $nakshatraLongitude,
        $nakshatraStart,
        $nakshatraEnd,
        $nakshatraPada,
        Rasi $chandraRasi,
        Rasi $sooryaRasi,
        Rasi $zodiac,
        NakshatraInfo $additionalInfo
    )
    {

        $this->nakshatraName = $nakshatraName;
        $this->nakshatraLongitude = $nakshatraLongitude;
        $this->nakshatraStart = $nakshatraStart;
        $this->nakshatraEnd = $nakshatraEnd;
        $this->nakshatraPada = $nakshatraPada;
        $this->chandraRasi = $chandraRasi;
        $this->sooryaRasi = $sooryaRasi;
        $this->zodiac = $zodiac;
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return string
     */
    public function getNakshatraName()
    {
        return $this->nakshatraName;
    }

    /**
     * @return float
     */
    public function getNakshatraLongitude()
    {
        return $this->nakshatraLongitude;
    }

    /**
     * @return string
     */
    public function getNakshatraStart()
    {
        return $this->nakshatraStart;
    }

    /**
     * @return string
     */
    public function getNakshatraEnd()
    {
        return $this->nakshatraEnd;
    }

    /**
     * @return float
     */
    public function getNakshatraPada()
    {
        return $this->nakshatraPada;
    }

    /**
     * @return \Prokerala\Api\Astrology\Result\Rasi
     */
    public function getChandraRasi()
    {
        return $this->chandraRasi;
    }

    /**
     * @return \Prokerala\Api\Astrology\Result\Rasi
     */
    public function getSooryaRasi()
    {
        return $this->sooryaRasi;
    }

    /**
     * @return \Prokerala\Api\Astrology\Result\Rasi
     */
    public function getZodiac()
    {
        return $this->zodiac;
    }

    /**
     * @return \Prokerala\Api\Astrology\Result\Horoscope\Nakshatra\NakshatraInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

}
