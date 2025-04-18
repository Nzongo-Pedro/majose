<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class UploadImageHelper
{
    public static function validateAndUploadImage($file, $folder = 'uploads/products')
    {
        if (!$file instanceof UploadedFile || !$file->isValid()) {
            return response()->json([
                'errors' => 'Erro ao criar o registro.',
                'message' => 'Foto inválida',
                'code' => 500
            ], 500);
        }

        $extension = strtolower($file->getClientOriginalExtension());
        $allowedExtensions = ['jpeg', 'jpg', 'png', 'webpp'];

        if (!in_array($extension, $allowedExtensions)) {
            return response()->json([
                'errors' => 'Erro ao criar o registro.',
                'message' => 'Formato ' . $extension . ' não permitido',
                'code' => 500
            ], 500);
        }

        $fileName = Str::uuid() . '.' . $extension;

        $file->storeAs($folder, $fileName, 'public');
        return $fileName;
    }
}
