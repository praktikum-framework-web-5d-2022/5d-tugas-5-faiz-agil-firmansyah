<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::get();
        return view('customer.index', ['customers'=>$customers]);
    }

    public function create(){
        return view('customer.create');
    }

    public function store(Request $request){
        $validatecustomer = $request->validate([
            'nik'=>'required|numeric',
            'nama'=>'required|min:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|min:10'
        ]);
        $biaya = $request->validate([
            'biaya_gantioli'=>'required|numeric',
            'biaya_gantiban'=>'required|numeric',
            'biaya_administrasi'=>'required|numeric',
            'biaya_lain'=>'required|numeric'
        ]);

        $customer = Customer::create($validatecustomer);
        $customer -> tagihan()->create($biaya);
        return redirect()->route('customer.index')->with('message', "Data customer {$validatecustomer['nama']} berhasil ditambahkan");
    }

    public function destroy(Customer $customer){
        $customer->tagihan()->delete($customer->id);
        $customer->delete($customer->id);
        return redirect()->route('customer.index')->with('message', "Data customer $customer->nama berhasil dihapus");
    }

    public function edit(Customer $customer){
        return view('customer.edit', ['customer'=>$customer]);
    }

    public function update(Request $request, Customer $customer){
        $validatecustomer = $request->validate([
            'nik'=>'required|numeric',
            'nama'=>'required|min:3',
            'jenis_kelamin'=>'required',
            'alamat'=>'required|min:10'
        ]);

        $biaya = $request->validate([
            'biaya_gantioli'=>'required|numeric',
            'biaya_gantiban'=>'required|numeric',
            'biaya_administrasi'=>'required|numeric',
            'biaya_lain'=>'required|numeric'
        ]);

        $customer1 = Customer::find($customer->id);
        $customer1->update($validatecustomer);
        $customer1->tagihan()->update($biaya);

        return redirect()->route('customer.index')->with('message', "Data customer $customer->nama berhasil diubah");
    }
}
