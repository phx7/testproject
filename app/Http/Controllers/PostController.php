<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Operator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addFunds(Request $request)
    {
        $funds = $request->get('amount');
        $operatorName = $request->get('operator');
        $phone = $request->get('phone');
        $userId = $request->get('user_id');
        /** @var Operator $operator */
        if (!$operator = Operator::all()->firstWhere('name', '=', $operatorName)) {
            return response()->json('Operator not found', 404);
        }
        /** @var Balance $balance */
        if (!$balance = Balance::all()
            ->where('operator_id', '=', $operator->id)
            ->firstWhere('phone', '=', $phone)) {
            $balance = new Balance([
                'total' => 0,
                'phone' => $phone,
                'operator_id' => $operator->id,
                'user_id' => $userId
            ]);
        }
        $balance->total += $funds;

        $balance->save();

        return response()->json('success');
    }

    public function getFunds(Request $request)
    {
        $operatorName = $request->get('operator');
        $phone = $request->get('phone');
        $userId = $request->get('user_id');

        /** @var Operator $operator */
        if (!$operator = Operator::all()->firstWhere('name', '=', $operatorName)) {
            return response()->json('Operator not found', 404);
        }
        /** @var Balance $balance */
        $balance = Balance::all()
            ->where('user_id', '=', $userId)
            ->where('operator_id', '=', $operator->id)
            ->where('phone', '=', $phone)
            ->first();

        return response()->json($balance->total);
    }
}
