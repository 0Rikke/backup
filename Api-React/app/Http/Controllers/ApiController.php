<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllcategories() {
        $categories = DB::table('categories')->get();

        return json_encode($categories);
        //return view('teste.index',['categorias'=>$categories]);
      }

      public function createCategories(Request $request) {
        // logic to create a student record goes here
      }

      public function getCategories($id) {
        $userCategories =
        DB::table('categories')
        ->select('mercado','home','work')
        ->where('id_user','=',$id)
        ->get();

        //essa aqui ta certo já so testa
        //na verdade tem que ser um redirect dependendo da ação
        //return json_encode($userCategories);
    //    return view('teste.indexUser',['user'=>$userCategories]);
        return json_encode($userCategories);
      }

      public function updateCategories(Request $request, $id) {
        // logic to update a student record goes here
      }

      public function deleteCategories($id) {
        // logic to delete a student record goes here
      }
}
