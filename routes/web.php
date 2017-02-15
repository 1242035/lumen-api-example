<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-09T16:05:34+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-13T13:42:16+07:00
# @Copyright: Onemax.ltd.co


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return \App\Model\Test::all(); //$app->version();
});
