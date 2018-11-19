<?php

/**
 * Konnex Contact Details API
 * An API that allows for creating, reading, updating and deleting of Konnex User Contact Details data.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@konnex-engine.io
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > swagger-codegen/modules/swagger-codegen/src/main/resources/php-laravel/
 */


namespace KonnexEngine\Http\Controllers;

use Illuminate\Support\Facades\Request;

class ContactDetailsController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation getContactDetails
     *
     * Retrieves all available Konnex User cotact detail data.
     *
     * @param string $objectType The type of object to get contact details for. (required)
     * @param int $objectID The leadID of the Lead to get contact details for (required)
     *
     * @return Http response
     */
    public function getContactDetails($objectType, $objectID)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getContactDetails as a get method ?');
    }
    /**
     * Operation objectTypeObjectIDContactdetailsPost
     *
     * Creates a new Contact Detail.
     *
     * @param string $objectType The type of object to get contact details for. (required)
     * @param int $objectID The objectID of the object to get addresses for (required)
     *
     * @return Http response
     */
    public function objectTypeObjectIDContactdetailsPost($objectType, $objectID)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing objectTypeObjectIDContactdetailsPost as a post method ?');
    }
    /**
     * Operation objectTypeObjectIDContactdetailsContactIDDelete
     *
     * Delete contact detail data..
     *
     * @param string $objectType The type of object to get contact details for. (required)
     * @param int $objectID The leadID of the Lead to get addresses for (required)
     * @param int $contactID The contact ID for the specific contact to delete. (required)
     *
     * @return Http response
     */
    public function objectTypeObjectIDContactdetailsContactIDDelete($objectType, $objectID, $contactID)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing objectTypeObjectIDContactdetailsContactIDDelete as a delete method ?');
    }
    /**
     * Operation objectTypeObjectIDContactdetailsContactIDGet
     *
     * Returns a specific contact detail by ID.
     *
     * @param string $objectType The type of object to get contact details for. (required)
     * @param int $objectID The leadID of the Lead to get addresses for (required)
     * @param int $contactID The Contact ID for the specific contact detail. (required)
     *
     * @return Http response
     */
    public function objectTypeObjectIDContactdetailsContactIDGet($objectType, $objectID, $contactID)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing objectTypeObjectIDContactdetailsContactIDGet as a get method ?');
    }
    /**
     * Operation objectTypeObjectIDContactdetailsContactIDPut
     *
     * Update contact detail data..
     *
     * @param string $objectType The type of object to get contact details for. (required)
     * @param int $objectID The leadID of the Lead to get addresses for (required)
     * @param int $contactID The Contact Detail ID for the specific company. (required)
     *
     * @return Http response
     */
    public function objectTypeObjectIDContactdetailsContactIDPut($objectType, $objectID, $contactID)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing objectTypeObjectIDContactdetailsContactIDPut as a put method ?');
    }
}
