<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        //
        $ContactModel = new ContactModel();

        $ContactModel->insert_data(array(
            "usrname" => "hridaykc",
            "passwd" => "kathmandu",
            "fname" => "Hari",
            "lname" => "KC",
            "address" => "Al Fahidi zone, Dubai",
            "phoneno" => "562399384",
            "dpimgage" => "harikc.jpg",
            "whatsapp" => "562399384",
            "lastlogin" => "2021-11-20",
            "status" => "1"
        ));

    }
}
