<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $transactions = Transaction::whereRaw('DATE_FORMAT(date_transaction, "%c %Y") = DATE_FORMAT(NOW(), "%c %Y")')->orderBy('date_transaction', 'desc')->get();
        return view('index', [
            'transactions' => $transactions,
            'total' => Transaction::totalAmount()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request['_token'] === csrf_token()){
            $transaction = new Transaction;
            $transaction->name = strip_tags($request['name']);
            $transaction->date_transaction = strip_tags($request['date']);
            $transaction->amount = floatval($request['amount']);
            $transaction->category_id = intval($request['category']);
            $transaction->save();
            return self::index();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = intval($id);
        DB::table('transactions')->where('id', '=', $id)->delete();
        return self::index();
    }
}
