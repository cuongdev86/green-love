<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

function uploadFile($request, $fieldName, $folderName)
{
    if ($request->hasFile($fieldName)) {
        $file =  $request->$fieldName;
        $fileNameOriginal = $file->getClientOriginalName();
        $fileNameHas = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
        $filePath = $request->file($fieldName)->storeAs('public/' . $folderName, $fileNameHas);
        $result = [
            'file_name' => $fileNameOriginal,
            'file_path' => Storage::url($filePath)
        ];
        return $result;
    }
    return null;
}

function uploadFileMultiple($file, $folderName)
{
    try {
        $fileNameOriginal = $file->getClientOriginalName();
        $fileNameHas = Str::random(20) . time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/' . $folderName, $fileNameHas);
        $result = [
            'file_name' => $fileNameOriginal,
            'file_path' => Storage::url($filePath)
        ];
        return $result;
    } catch (Exception $e) {
        return null;
    }
}

function deleteFile($filePath)
{
    $fileToDelete = str_replace('/storage', 'public', $filePath);
    if (Storage::exists($fileToDelete)) {
        Storage::delete($fileToDelete);
        return true;
    }
    return false;
}
