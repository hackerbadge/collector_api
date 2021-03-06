<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/api/promote', 'ApiController@promote');
Route::any('/api/demote', 'ApiController@demote');

Route::any('/api/slack', 'ApiController@slack');
Route::any('/api/slack/', 'ApiController@slack');

Route::any('/api/github-issues', 'ApiController@githubIssues');
Route::any('/api/github-issues/', 'ApiController@githubIssues');


