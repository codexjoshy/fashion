<?php

use Illuminate\Http\Request;

function saveFile(Request $request, $file, $path)
{
    $fileName = $request->file($file);
    $md5Name = md5_file($fileName->getRealPath());
    $guessExtension = $fileName->guessExtension();
    $file = $fileName->storeAs($path, $md5Name . '.' . $guessExtension, 'public');
}