<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Auth;
use App\Models\Log;
use App\Models\Setting;
use DB;
use PDF;

class PaymentController extends Controller
{

    public function __construct()
    {  
        $this->middleware('IsPermission:agency');         
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $da = Invoice::whereHas('agency',function($q){
            $q->where('user',Auth::user()->id);
        })->latest()->get();
        $data = 'Data Payment';
        return view('agency.payment.index', compact('data', 'da'));
    }

    public function pile($id)
    {
        $set = Setting::first();
        $da = Invoice::where(DB::raw('md5(id)'), $id)->first();
        $pdf = Pdf::loadView('admin.invoices.pdf.tem' . $da->template, compact('da', 'set'));
        return $pdf->stream();
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
    public function pay(Request $request, $id)
    {
        $rule = [
            'nominal' => 'required',
            'photo' => 'required|file|mimes:jpg,jpeg,png|max:1024',          
        ];

        $request->validate($rule);

        $inv = Invoice::where(DB::raw('md5(id)'),$id)->first();
        $inv->status = 1;
        $inv->save();

        $pay = new Payment;
        $pay->inv = $inv->id;
        $pay->nominal = $request->nominal;

        $cv = $request->file('photo');
        $ext = $cv->getClientOriginalExtension();
        $path = $cv->storeAs(
            'assets/data/agency/' . Auth::user()->id . '/ss_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $pay->file = $path;
        $pay->type = $inv->type;
        $pay->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
