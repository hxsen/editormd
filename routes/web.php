<?php

use Hxsen\EditorMd\Http\Controllers\EditorMdController;

Route::get('editormd', EditorMdController::class.'@index');