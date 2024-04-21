<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Bill;
use App\Models\Field;
use App\Models\Head;
use App\Models\Inv;
use App\Models\Invoice;
use App\Models\Log;
use App\Models\Patrner;
use App\Models\Setting;
use DB;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('IsPermission:master');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exp = Invoice::where('type', 'kanrihi')->latest()->first();
        if($exp)
        {
            $exp->inv[0]->time;
            $month = date('m', strtotime($exp->created_at)) + $exp->inv[0]->time;
            $time = ($month == date('m')) ? true : false;
            $next = Invoice::where('type', 'kanrihi')->whereMonth('created_at', $month)->whereMonth('created_at', date('m'))->latest()->exists();
            $repay = ($time && $next == false) ? true : false;
        }
        else
        {
            $repay = false;
        }
        $da = Invoice::latest()->get();
        $bill = Bill::where('status',0)->get();
        $data = 'Invoice';
        return view('admin.invoices.index', compact('da', 'data', 'bill', 'repay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = 'Tambah Invoice';
        $head = Head::get();     
        return view('admin.invoices.create', compact('data', 'head'));
    }

    public function pile($id)
    {
        $set = Setting::first();
        $da = Invoice::where(DB::raw('md5(id)'), $id)->first();
        $pdf = Pdf::loadView('admin.invoices.pdf.tem' . $da->template, compact('da', 'set'));
        // return view('admin.invoices.pdf.tem5',compact('da','set'));
        return $pdf->stream();
    }

    public function bill($id)
    {
        $set = Setting::first();
        $da = Bill::where(DB::raw('md5(id)'), $id)->first();
        $pdf = Pdf::loadView('admin.invoices.pdf.bill', compact('da', 'set'));
        // return view('admin.invoices.pdf.tem5',compact('da','set'));
        return $pdf->stream();
    }

    public function repay(Request $request, $id)
    {

        $old = Invoice::where(DB::raw('md5(id)'), $id)->first();

        $invoice = new Invoice;
        $invoice->parent   = $old->id;
        $invoice->mitra    = $old->mitra;
        $invoice->type     = $old->type;
        $invoice->note     = $old->note;
        $invoice->agen     = $old->agen;
        $invoice->template = $old->template;
        $invoice->due      = $request->due;
        $invoice->tanggal  = $request->invoice;
        $invoice->save();

        foreach ($old->inv as $item) {
            $sub = new Inv;
            $sub->inv = $invoice->id;
            $sub->siswa = $item->siswa;
            $sub->time = $item->time;
            $sub->tanggal = $item->tanggal;
            $sub->nominal = $item->nominal;
            $sub->save();
        }

        $log = new Log;
        $log->in = $old->agen;
        $log->to = $old->mitra;
        $log->args = 'Plane Ticket Invoce ' . $invoice->heads->partner->name;
        $log->par = 'invoice';
        $log->save();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();

    }

    public function billStore(Request $request)
    {
        $da = Bill::where('status', 0)->where('mitra',$request->lpk)->get();

        $invoice = new Invoice;
        $invoice->mitra = $request->lpk;
        $invoice->type = 'ticket_pesawat';
        $invoice->note = $request->note;
        $invoice->agen = $da[0]->heads->comp->agen->id;
        $invoice->template = $request->template;
        $invoice->due = $request->due;
        $invoice->tanggal = $request->invoice;
        $invoice->save();

        foreach ($da as $item) {
            $inv = new Inv;
            $inv->inv = $invoice->id;
            $inv->siswa = $item->siswa;
            $inv->nominal = $item->nominal;
            $inv->save();
        }

        $log = new Log;
        $log->in = $da[0]->heads->comp->agen->user;
        $log->to = $invoice->mitra;
        $log->args = 'Plane Ticket Invoce ' . $invoice->heads->partner->name;
        $log->par = 'invoice';
        $log->save();

        $da = Bill::where('status', 0)->where('mitra',$request->lpk)->update(['status' => 1]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('invoice.index');
    }

    public function step($req)
    {       
        $da = Head::where('mitra', $req->lpk)->where('agen',$req->agen);
        $cc = $da->exists();
        if($cc)
        {
            $da = $da->get();
            $type = $req->type;
            $data = 'Tambah Invoice ' . ucwords(str_replace('_', ' ', $req->type));
            $kanrihi = ($req->type == 'kanrihi') ? true : false;
            $note = $req->note;
    
            return view('admin.invoices.step', compact('data', 'da', 'kanrihi', 'type', 'note'));
        }
        else
        {
            toastr()->error('Oops! Something went wrong!');
            return back();
        }      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lpk = $request->has('lpk');

        if ($lpk) {

            $rule = [
                'type' => 'required',
                'lpk'  => 'required',
                'note' => 'required',
                'agen' => 'required',
            ];

            $request->validate($rule);  
            return $this->step($request);

        } else {

            $invoice = new Invoice;
            $invoice->mitra = $request->mitra;
            $invoice->type = $request->type;
            $invoice->note = $request->note;
            $invoice->agen = $request->agen;
            $invoice->template = $request->template;
            $invoice->due = $request->due;
            $invoice->tanggal = $request->invoice;
            $invoice->save();

            $siswa = $request->siswa;
            $time = $request->time;
            $tanggal = $request->departure;
            $nom = $request->nominal;

            for ($i = 0; $i < count($siswa); $i++) {

                $inv = new Inv;
                $inv->inv = $invoice->id;
                $inv->siswa = $siswa[$i];
                if ($time) {
                    $inv->time = $time[$i];
                }
                $inv->nominal = $nom[$i];
                $inv->tanggal = $tanggal[$i];
                $inv->save();

                $field = Field::where('id', $siswa[$i])->first();
                if ($field) {
                    $field->departure = $tanggal[$i];
                    $field->save();
                }

                $field = Field::where('id', $siswa[$i])->first();
                $log = new Log;
                $log->in = $invoice->heads->mitra;
                $log->to = $invoice->heads->comp->agen->user;
                $log->args = str_replace('_', ' ', $request->type) . ' Invoce ' . $field->name;
                $log->par = 'invoice';
                $log->save();

            }

            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->route('invoice.index');

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {  
        $data = 'Edit Invoice ' . $invoice->number;
        $head = Head::get();   
        return view('admin.invoices.create', compact('data', 'head', 'invoice'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function estep($invoice, $request)
    {
        $da = Head::where('mitra', $request->lpk)->where('agen',$request->agen)->get();     

        $type = $request->type;
        $data = 'Edit Invoice ' . $invoice->number;
        $kanrihi = ($request->type == 'kanrihi') ? true : false;
        return view('admin.invoices.step', compact('data', 'da', 'kanrihi', 'type', 'invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $lpk = $request->has('lpk');
        if ($lpk) {
            $rule = [
                'type' => 'required',
                'lpk' => 'required',
                'note' => 'required',
            ];

            $request->validate($rule);

            $invoice->mitra = $request->lpk;
            $invoice->type = $request->type;
            $invoice->note = $request->note;
            $invoice->save();

            $da = Patrner::where('id', $request->lpk)->first();
            return $this->estep($invoice, $request);
        } else {
            $invoice->type = $request->type;
            $invoice->agen = $request->agen;
            $invoice->template = $request->template;
            $invoice->due = $request->due;
            $invoice->tanggal = $request->invoice;
            $invoice->save();

            $siswa = $request->siswa;
            $time = $request->time;
            $tanggal = $request->departure;
            $nom = $request->nominal;

            for ($i = 0; $i < count($siswa); $i++) {

                $inv = Inv::where('inv', $invoice->id)->where('siswa', $siswa[$i])->first();
                $inv->inv = $invoice->id;
                if ($time) {
                    $inv->time = $time[$i];
                }
                $inv->nominal = $nom[$i];
                $inv->tanggal = $tanggal[$i];
                $inv->save();

            }

            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->route('invoice.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {

        foreach ($invoice->inv as $item) {
            $del = Inv::where('id', $item->id)->delete();
        }
        $invoice->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
