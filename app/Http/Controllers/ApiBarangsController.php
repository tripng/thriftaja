<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use App\Models\Testimoni;

class ApiBarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * @OA\Get(
     *     path="/api/barangs",
     *      tags = {"Barang"},
     *     @OA\Response(response="200", description="Success")
     * )
     */
    public function index()
    {
        return response()->json(Barang::all());
    }

     /**
     * @OA\Get(
     *     path="/api/barangs/{id}",
     *      tags = {"Barang"},
     *      @OA\Parameter(
     *          in = "path",
     *          name = "id",
     *          required  = true,
     *      ),
     *     @OA\Response(response="200", description="Menampilkan Barang.")
     * )
     */
    public function show($id)
    {
        return response()->json(Barang::where('id','=',$id)->first());
    }

    /**
     * @OA\Get(
     *     path="/api/users",
     *      tags = {"User"},
     *     @OA\Response(response="200", description="Success")
     * )
     */
    public function indexUser(){
        return response()->json(User::all());
    }

     /**
     * @OA\Get(
     *     path="/api/users/{id}",
     *      tags = {"User"},
     *      @OA\Parameter(
     *          in = "path",
     *          name = "id",
     *          required  = true,
     *      ),
     *     @OA\Response(response="200", description="Success.")
     * )
     */
    public function showUser($id)
    {
        return response()->json(User::where('id','=',$id)->first());
    }

    /**
     * @OA\Get(
     *     path="/api/comments",
     *      tags = {"Comment"},
     *     @OA\Response(response="200", description="Success")
     * )
     */
    public function indexComment(){
        return response()->json(Testimoni::all());
    }

     /**
     * @OA\Get(
     *     path="/api/comments/{id}",
     *      tags = {"Comment"},
     *      @OA\Parameter(
     *          in = "path",
     *          name = "id",
     *          required  = true,
     *      ),
     *     @OA\Response(response="200", description="Success.")
     * )
     */
    public function showComment($id)
    {
        return response()->json(Testimoni::where('id','=',$id)->first());
    }
}