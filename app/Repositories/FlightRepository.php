<?php

namespace App\Repositories;

use App\Interfaces\FlightRepositoryInterface;
use App\Models\Flight;

class FlightRepository implements FlightRepositoryInterface
{
    public function index()
    {
        return Flight::get();
    }

    public function getOrigin()
    {
        return Flight::select('origin')->distinct()->get();
    }

    public function getDestiny($origin)
    {
        return Flight::select('destiny')->where('origin', $origin)->distinct()->get();
    }

    public function getTime($origin, $destiny)
    {
        return Flight::select('time')->where('origin', $origin)->where('destiny', $destiny)->distinct()->get();
    }
}