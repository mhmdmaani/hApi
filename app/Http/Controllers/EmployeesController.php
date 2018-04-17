<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = new Client();
      $body = $client->get("http://goozo.se/hogia/")->getBody();

$obj = json_decode($body);
  foreach ($obj as $key => $value){
    $EmployeeNumber				 = $value->EmployeeNumber;
    $SecurityNumber 			 = str_replace('-','',$value->SecurityNumber);
    $FirstName 					 = $value->FirstName;
    $LastName 					 = $value->LastName;
    $MonthlySalary				 = $value->MonthlySalary;
    $HourySalary 				 = $value->HourySalary;
    $ServiceGrade				 = $value->ServiceGrade;
    $FulltimeWeeklyWorkHours 	 = $value->FulltimeWeeklyWorkHours;
    $transactions 				 = $value->transactions;
  	foreach($transactions as $key =>$tr){
     dd($tr);
  	}
  }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
