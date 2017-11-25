<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $recordsEstablishment = EstablishmentModel::all();

        $data = [
            'recordsEstablishment' => $recordsEstablishment
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
