<?php
namespace Faker\Extension;
use MatanYadaev\EloquentSpatial\Objects\Point;
interface MatanYadaevSpatialExtension extends Extension
{
    /**
     * Returns a random point
     *
     * @example [48.8932, 2.3491]
     */
    public function randomPoint(int $srid=4326): Point;

}
