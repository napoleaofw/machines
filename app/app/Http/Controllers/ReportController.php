<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Establishment as EstablishmentModel;
use App\Models\Transaction as TransactionModel;
use App\Models\User as UserModel;

class ReportController extends Controller
{
    /**
     * Display the invoice report.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {
        $recordsTransaction = TransactionModel::all();

        $data = [
            'recordsTransaction' => $recordsTransaction
        ];
        return view('reports.invoice.index');
    }

    /**
     * Display the establishment report.
     *
     * @return \Illuminate\Http\Response
     */
    public function establishment()
    {
        // $recordsTransaction = TransactionModel::all();
        $recordsTransaction = TransactionModel::whereDay('date', '03')
        ->whereMonth('date', '05')
        ->whereYear('date', '2017')
        ->orderBy('date')
        ->get();
        
        $recordsTransaction = $recordsTransaction->sortBy('date')->groupBy(function($recordTransaction) {
            return Carbon::parse($recordTransaction->date)->format('d/m/Y');
        })->transform(function($records) {
            return $records->groupBy(function($recordTransaction) {
                return $recordTransaction->establishment->trade_name;
            });
        });

        // $recordsTransaction = $recordsTransaction->each(function($recordTransaction) {
        //     return $recordTransaction->each(function($recordEstablishment) {
        //         return $recordEstablishment->each(function($recordTransaction) {
        //             dd($recordTransaction);
        //         });
        //     });
        // });

        // dd($recordsTransaction);

        $data = [
            'recordsReport' => $recordsTransaction
        ];
        return view('reports.establishment.index', $data);
    }

    /**
     * Display the establishment report.
     *
     * @return \Illuminate\Http\Response
     */
    public function fiscal()
    {
        $recordsUser = UserModel::all();

        $data = [
            'recordsUser' => $recordsUser
        ];
        return view('reports.fiscal.index', $data);
    }
}
