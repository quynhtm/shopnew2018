<?php

//Index
Route::any('/trangchu.html', array('as' => 'site.index','uses' => Site.'\IndexController@index'));