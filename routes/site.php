<?php

//Index
Route::any('/index.html', array('as' => 'site.index','uses' => Site.'\IndexController@index'));
Route::any('/single.html', array('as' => 'site.index','uses' => Site.'\SingleController@index'));
Route::any('/chi-tiet-don-hang.html', array('as' => 'site.index','uses' => Site.'\SingleCartController@index'));
Route::any('/gui-don-hang.html', array('as' => 'site.index','uses' => Site.'\SingleCartController@index'));
Route::any('/list-product.html', array('as' => 'site.index','uses' => Site.'\ListProductController@index'));
Route::any('/cart.html', array('as' => 'site.index','uses' => Site.'\CartController@index'));
