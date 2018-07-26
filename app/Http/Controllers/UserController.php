<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
    	$jsonString = "{
			    id: 1,
			    name: 'Dakota Ricex',
			    salary: '$36.738',
			    country: 'Niger',
			    city: 'Oud-Turnhout'
			  },
			  {
			    id: 2,
			    name: 'Minerva Hooper',
			    salary: '$23,789',
			    country: 'Curaçao',
			    city: 'Sinaai-Waas'
			  },
			  {
			    id: 3,
			    name: 'Sage Rodriguez',
			    salary: '$56,142',
			    country: 'Netherlands',
			    city: 'Baileux'
			  },
			  {
			    id: 4,
			    name: 'Philip Chaney',
			    salary: '$38,735',
			    country: 'Korea, South',
			    city: 'Overland Park'
			  },
			  {
			    id: 5,
			    name: 'Doris Greene',
			    salary: '$63,542',
			    country: 'Malawi',
			    city: 'Feldkirchen in Kärnten'
			  }";


       $jsonString = str_replace(array('.', ' ', "\n", "\t", "\r"), '', $jsonString);

        return [$jsonString];   
    
    }
}
