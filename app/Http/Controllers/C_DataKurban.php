<?php

namespace App\Http\Controllers;

use App\Models\DataKurban;
use Illuminate\Http\Request;

class C_DataKurban extends Controller
{
	public function index(){
    	$data = 
    	['status' => true,
         'message' => 'Data Ditemukan',
         'code' => 200,
         'hasil' => DataKurban::all()];

        return [
        	'data'=> $data
        ];}

    public function inputdata(Request $request) {
        $this->validate($request, [
            'nama_pemilik' => 'required',
            'jenis_hewan' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);

        $inputan = DataKurban::create($request->all());
        $data = 
    	['status' => true,
         'message' => 'Berhasil Ditambahkan',
         'code' => 200,
         'hasil' => $inputan];

        return [
        	'data' => $data
        ];}

    public function view($id){
        $post = DataKurban::find($id);
        if (! $post) {
            return response()->json([
               'message' => 'post not found'
            ]);
        }

        $data = 
    	['status' => true,
         'message' => 'Data Ditemukan',
         'code' => 200,
         'hasil' => $post];

        return [
        	'data' => $data
        ];}

    public function update(Request $request, $id){
    
    $post = DataKurban::find($id);
    if ($post) {
        $post->update($request->all());

        $data = 
    	['status' => true,
         'message' => 'Data Berhasil Diupdate',
         'code' => 200,
         'hasil' => $post];

        return response()->json([
           'data' => $data
        ]);
    }
    return response()->json([
        'status' => false,
        'message' => 'Data Gagal Diupdate',
        'code' => 404,
        'hasil' => null
    ]);}

    //update with post
	public function updatedata(Request $request, $id){
	 $this->validate($request,
        	[
        		'title' =>'required',
        		'body' =>'required'
        	]);
    $post = DataKurban::find($id);
    if ($post) {
        $post->update($request->all());

        $data = 
    	['status' => true,
         'message' => 'Data Berhasil Diupdate',
         'code' => 200,
         'hasil' => $post];

        return response()->json([
        	'data' => $data
        ]);}
    return response()->json([
        'status' => false,
        'message' => 'Data Gagal Diupdate',
        'code' => 404,
        'hasil' => null
    ]);}

	public function delete($id){
        $post = DataKurban::find($id);

        if ($post) {
            $post->delete();

        $data = 
    		['status' => true,
         	 'message' => 'Data Berhasil Dihapus',
         	 'code' => 200,
         	 'hasil' => $post]; 
            return response()->json([
        		'data' => $data
            ]);
        }

        return response()->json([
            'status' => false,
        	'message' => 'Data Gagal Dihapus',
        	'code' => 404,
        	'hasil' => null
        ], 404);}

}