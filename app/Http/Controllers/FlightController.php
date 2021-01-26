<?php

namespace App\Http\Controllers;

use App\Interfaces\FlightRepositoryInterface;

/**
*   @OA\Info(
*       description="",
*       version="1.0.0",
*       title="Airport API",
*   )
 */
class FlightController extends Controller
{

    private $flightRepository;

    public function __construct(FlightRepositoryInterface $flightRepository)
    {
        $this->flightRepository = $flightRepository;
    }

    /**
    * @OA\Get(
    *     path="/api/flights",
    *     summary="Display flights",
    *     tags={"Flights"},
    *     @OA\Response(
    *         response=200,
    *         description="Display all flights"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */
    public function index()
    {        
        return $this->flightRepository->index();
    }

    /**
    * @OA\Get(
    *     path="/api/flights/origin",
    *     summary="Display origins",
    *     tags={"Flights"},
    *     @OA\Response(
    *         response=200,
    *         description="Display all origins"
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */
    public function getOrigin()
    {        
        return $this->flightRepository->getOrigin();
    }

    /**
    * @OA\Get(
    *     path="/api/flights/destiny/{origin}",
    *     summary="Display destinies",
    *     tags={"Flights"},
    *     @OA\Response(
    *         response=200,
    *         description="Display all destinies"
    *     ),
    *     @OA\Parameter(
    *       name="origin",
    *       in="path",
    *       required=true,
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */
    public function getDestiny($origin)
    {        
        return $this->flightRepository->getDestiny($origin);
    }

    /**
    * @OA\Get(
    *     path="/api/flights/time/{origin}/{destiny}",
    *     summary="Display times",
    *     tags={"Flights"},
    *     @OA\Response(
    *         response=200,
    *         description="Display all times"
    *     ),
    *     @OA\Parameter(
    *       name="origin",
    *       in="path",
    *       required=true,
    *     ),
    *     @OA\Parameter(
    *       name="destiny",
    *       in="path",
    *       required=true,
    *     ),
    *     @OA\Response(
    *         response="500",
    *         description="Something when wrong"
    *     )
    * )
    */
    public function getTime($origin, $destiny)
    {        
        return $this->flightRepository->getTime($origin, $destiny);
    }
}
