<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Prokerala\Api\Astrology\Location;
use Prokerala\Common\Api\Client;
use Prokerala\Common\Api\Exception\QuotaExceededException;
use Prokerala\Common\Api\Exception\RateLimitExceededException;

include 'prepend.inc.php';

$client = new Client($apiKey);

/**
 * Kaal Sarp Dosha.
 */
$input = [
    'datetime' => '2020-05-12T09:20:00+05:30',
    'latitude' => '22.6757521',
    'longitude' => '88.0495418', // Kolkata
];

$datetime = new DateTime($input['datetime']);
$tz = $datetime->getTimezone();

$location = new Location($input['latitude'], $input['longitude'], 0, $tz);

try {
    $method = new \Prokerala\Api\Astrology\Service\PlanetPosition($client);
    $method->process($location, $datetime);
    $result = $method->getResult();
    $planetPositions = $result->getPlanetPosition();
    $planetPositionResult = [];
    foreach ($planetPositions as $position) {
        $planetPositionResult[] = [
            'id' => $position->getId(),
            'name' => $position->getName(),
            'longitude' => $position->getLongitude(),
            'isReverse' => $position->getIsreverse(),
            'position' => $position->getPosition(),
            'degree' => $position->getDegree(),
            'rasi' => $position->getRasi(),
            'rasiLord' => $position->getRasilord(),
            'rasiLordEn' => $position->getRasilorden(),
        ];
    }
    print_r($planetPositionResult);
} catch (QuotaExceededException $e) {
} catch (RateLimitExceededException $e) {
}
