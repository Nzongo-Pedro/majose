<?php
namespace App\Helpers;

use App\Models\ProductsPhoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use PDOException;

class CrudAjaxHelper
{


    public static function store($data, $model)
    {
        try {
            DB::beginTransaction();

            $record = $model->create($data);
            DB::commit();

            return response()->json([
                'message' => 'Registro criado com sucesso',
                'data' => $record,
                'id_product' => $record->id,
                'code' => 201,
            ], 201);
        } catch (PDOException $e) {
            DB::rollBack();
            return response()->json([
                'errors' => 'Erro ao criar o registro.',
                'message' => $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }
    public static function update($data, $record)
    {
        try {
            DB::beginTransaction();
            $record->update($data);
            DB::commit();

            return response()->json([
                'message' => 'Registro atualizado com sucesso',
                'data' => $record,
                'code' => 200,
            ], 200);
        } catch (PDOException $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Erro ao atualizar o registro.',
                'error' => $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }

    public static function delete($record)
    {
        try {

            $image = ProductsPhoto::where('id_product', $record->id)->first();

            if ($image && $image->file_name && Storage::disk('public')->exists($image->file_name)) {
                Storage::disk('public')->delete('uploads/products/' . $image->file_name); // Remova 'storage/' daqui

                $image->delete();
            }

            $record->delete();

            return response()->json([
                'message' => 'Registro excluído com sucesso',
                'code' => 200,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao excluir o registro.',
                'error' => $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }
}
