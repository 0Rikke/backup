<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{

//
//      categories
//
      public function createCategories(Request $request) {
        $data = $request->all();
        var_dump($data);
        DB::table('categories')->insert($data);
      }

      public function getCategories($id) {
        $userCategories =
        DB::table('categories')
        ->select('mercado','home','work','projectName')
        ->where('id_user','=',$id)
        ->get();

        return json_encode($userCategories);
      }

      public function updateCategories(Request $request, $id) {
        // logic to update a student record goes here
      }

      public function deleteCategories($id) {
        // logic to delete a student record goes here
      }

      //
      // tasks
      //

      public function getTasks($id) {
        $userTasks =
        DB::table('tasks')
        ->select('nome','id')
        ->where('id_user','=',$id)
        ->get();

        return json_encode($userTasks);
      }
}
