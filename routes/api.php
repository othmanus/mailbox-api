<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// List messages
Route::get('messages', [
    'as' => 'messages.all',
    'uses' => 'Api\MessagesController@listMessages',
]);

// List archived messages
Route::get('messages/archived', [
    'as' => 'messages.archived',
    'uses' => 'Api\MessagesController@listArchivedMessages',
]);

// Show message
Route::get('messages/{id}', [
    'as' => 'messages.show',
    'uses' => 'Api\MessagesController@showMessage'
]);

// Read message
Route::get('messages/{id}/read', [
    'as' => 'messages.read',
    'uses' => 'Api\MessagesController@readMessage'
]);

// Archive message
Route::get('messages/{id}/archive', [
    'as' => 'messages.archive',
    'uses' => 'Api\MessagesController@archiveMessage'
]);
