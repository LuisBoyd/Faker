<?php

namespace Faker\Core;

use Faker\Extension\Helper;
use Faker\Extension\MatanYadaevSpatialExtension;
use MatanYadaev\EloquentSpatial\Objects\Point;

final class Spatial implements MatanYadaevSpatialExtension
{

    public function randomPoint(int $srid=4326): Point
    {
        $lat = Helper::randomfloatBetween(-90, 90);
        $lon = Helper::randomfloatBetween(-180, 180);
        return new Point($lat, $lon,$srid);
    }
}
