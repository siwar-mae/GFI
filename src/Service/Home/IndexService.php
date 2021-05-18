<?php


use App\Entity\Intervention;
use Symfony\Component\HttpFoundation\Request;

class IndexService
{
    function addAction (Request $request){
        $intervention = new Intervention();
        $intervention->setAgency($request->get('agency'));
        $intervention->setEndDate($request->get('endDate'));
        $intervention->setStartDate($request->get('startDate'));
        $intervention->setIntervenant($request->get('agency'));
        $intervention->setObservation();

    }

}