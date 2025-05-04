<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
        
    }

    public function view(): View
    {
        $data = array(
            'user'         => User::orderBY('jabatan','asc')->get(),
            'tanggal'      => now()->format('d-m-Y'),
            'jam'          => now()->format('H.i.s'),
        );
        return view('admin.user.excel', $data);
    }
}

