<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

//DISIMULASIKAN INI ADALAH CLASS CONTROLLER PRODUCT
class ProductController extends Controller
{
    // GUNAKAN TRAIT YANG SUDAH DIBUAT
    use ResponseFormatter;

    // MAGIC METHOD, METHOD INI AKAN DIAKSES PADA SAAT PEMBUATAN OBJECT.
    public function __construct()
    {
        //SET ATRIBUT CONTROLLERNAME PADA PARENT CLASS CONTROLLER
        $this->controllerName = "Get All Product";
        //SET ATRIBUT CONTROLLERMETHOD PADA PARENT CLASS CONTROLLER
        $this->controllerMethod = "GET";
    }
    public function getAllproduct()
    {
        $dummyData = [
            "Air Mineral",
            "kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute"=> $this->getControllerAttribute(),
            "product"=> $dummyData
        ];
        return $this->responseFormatter(200, "success", $response);
    }
}