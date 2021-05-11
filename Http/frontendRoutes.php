<?php
use Illuminate\Routing\Router;

$locale = LaravelLocalization::setLocale() ?: App::getLocale();

/** @var Router $router */
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']], function (Router $router) use ($locale) {
    $router->get(trans('iappointment::routes.appointmentCategory.index') . '/{criteria}', [
        'as' => 'appointment.category.show',
        'uses' => 'PublicController@showCategory',
    ]);
});
