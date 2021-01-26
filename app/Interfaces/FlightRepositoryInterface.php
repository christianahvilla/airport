<?php

namespace App\Interfaces;

interface FlightRepositoryInterface 
{
    public function index();

    public function getOrigin();

    public function getDestiny($origin);

    public function getTime($origin, $destiny);
}