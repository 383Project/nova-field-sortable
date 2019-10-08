<?php
//Reorder
Route::patch(
    '{resource}/{resourceId}/reorder',
    'Project383\NovaFieldSortable\Http\Controllers\ResourceSortingController@handle'
);
