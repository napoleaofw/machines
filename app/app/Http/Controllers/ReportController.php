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
        $recordsReport = TransactionModel::whereDay('date', '25')
        // ->whereMonth('date', '10')
        // ->whereYear('date', '2017')
        // ->orderBy('date')
        ->get();
        
        $recordsReport = $recordsReport->sortBy('date')->groupBy(function($recordTransaction) {
            return Carbon::parse($recordTransaction->date)->format('d/m/Y');
        })->transform(function($records) {
            return $records->groupBy(function($recordTransaction) {
                return $recordTransaction->establishment->trade_name;
            });
        });

        $recordsReport = $recordsReport->each(function($recordsEstablishment) {
            $recordsEstablishment->each(function($recordsTransaction) {
                $recordsTransaction->prepend($recordsTransaction->sum(function($recordTransaction) {
                    return $recordTransaction->establishment_commission_amount;
                }), 'establishment_commission_amount');
                $recordsTransaction->prepend($recordsTransaction->sum(function($recordTransaction) {
                    return is_object($recordTransaction) ? $recordTransaction->credit_amount : 0;
                }), 'establishment_credit_amount');
            });
            $recordsEstablishment->prepend($recordsEstablishment->sum(function($recordsTransaction) {
                return $recordsTransaction['establishment_commission_amount'];
            }), 'date_commission_amount');
            $recordsEstablishment->prepend($recordsEstablishment->sum(function($recordsTransaction) {
                return $recordsTransaction['establishment_credit_amount'];
            }), 'date_credit_amount');

            // structure

            // $recordsEstablishment->each(function($recordsTransaction) {
                
            //     $recordsTransaction->each(function($recordTransaction) {
                    


            //     });

            // });

        });

        // dd($recordsReport);

        $data = [
            'recordsReport' => $recordsReport
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
