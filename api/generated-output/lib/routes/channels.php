<?php

/**
 * Konnex User API
 * An API that allows for creating, reading, updating and deleting of Konnex User data.
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


Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
