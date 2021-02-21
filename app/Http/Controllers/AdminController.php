<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        //
        public function login1()
        {
            #code
            return view('login1');
        }
        public function home()
        {
            #code
            return view('home');
        }
        public function suratmasuk()
        {
            #code
            return view('admin/suratmasuk');
        }

        public function suratkeluar()
        {
            #code
            return view('admin/suratkeluar');
        }
        public function masuk()
        {
            #code
            return view('admin/masuk');
        }
        public function keluar()
        {
            #code
            return view('admin/keluar');
        }
        public function editmasuk()
        {
            #code
            return view('admin/editmasuk');
        }
        // public function editkeluar()
        // {
        //     #code
        //     return view('admin/editkeluar');
        // }
}
