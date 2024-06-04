<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class LaptopController extends Controller
{
    public function ViewLaptop(Request $r)
    {
        $role_check = $r->session()->get('role');

        if (!$r->session()->has('email') || $role_check !== 'admin') {
            return redirect(route('admin.login.view'));
        }

        $data = \DB::select("SELECT * FROM laptops");

        return view('admin.laptop.data', [
            'data_laptop' => $data,
        ]);
    }

    public function AddLaptop(Request $r)
    {
        $role_check = $r->session()->get('role');

        if (!$r->session()->has('email') || $role_check !== 'admin') {
            return redirect(route('admin.login.view'));
        }
        Alert::success('Berhasil Menambah Laptop');
        \DB::insert("INSERT INTO laptops VALUES (null, '$r->nama_laptop','$r->price','Ready','',null)");
        return redirect(route('admin.home.laptop'));
    }

    public function DeleteLaptop(Request $r, $id)
    {
        $role_check = $r->session()->get('role');

        if (!$r->session()->has('email') || $role_check !== 'admin') {
            return redirect(route('admin.login.view'));
        }
        Alert::success('Laptop Berhasil Dihapus');
        \DB::delete("DELETE FROM laptops WHERE id = $id");
        return redirect(route('admin.home.laptop'));
    }

    public function EditLaptop(Request $r, $id)
    {
        $role_check = $r->session()->get('role');

        if (!$r->session()->has('email') || $role_check !== 'admin') {
            return redirect(route('admin.login.view'));
        }

        $data = \DB::select("SELECT * FROM laptops WHERE id = '$id'");
        if (count($data) === 0) {
            return redirect(route('admin.home.laptop'));
        }
        return view('admin.laptop.edit', [
            'data' => $data[0]
        ]);
    }

    public function UpdateLaptop(Request $r)
    {
        $role_check = $r->session()->get('role');

        if (!$r->session()->has('email') || $role_check !== 'admin') {
            return redirect(route('admin.login.view'));
        }
        if ($r->id_operator === NULL) {
            Alert::success('Data Berhasil Diubah');
            \DB::update("UPDATE laptops SET nama_laptop='$r->nama_laptop', price='$r->price', status='$r->status', note='$r->note', id_operator = NULL WHERE id='$r->id'");
            return redirect(route('admin.home.laptop'));
        }
        Alert::success('Data Berhasil Diubah');
        \DB::update("UPDATE laptops SET nama_laptop='$r->nama_laptop', price='$r->price', status='$r->status', note='$r->note', id_operator = '$r->id_operator' WHERE id='$r->id'");
        return redirect(route('admin.home.laptop'));

    }
}
