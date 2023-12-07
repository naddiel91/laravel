<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $store = DB::table('stores')->paginate(5);
        $store = Store::paginate(5);
                
        return view('fruits.store', ['store'=>$store]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fruit = Store::find((int)$id);
        // return $fruit;

        
        return !(is_null($fruit)) ? view('fruits.fruit', ['fruit'=>$fruit]) : response("the provided id does not exist");
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flavor = Store::fund($id);
        if(!is_null($flavor )){

        }
        else
            return redirect(route('allproducts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Store::destroy($id) ? view('default', ['slot' => "trying to destroy something?"]) : response("apologize, the record you are trying to destroy does not exist", 404);                
    }
}
