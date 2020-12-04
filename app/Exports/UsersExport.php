<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{

/**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with('address')->get();
    }


    public function map($user) : array {
        return [
            $user->id,
            $user->firstname,
            $user->lastname,
            $user->email,
            $user->address->street,
            $user->entreprise,


        ] ;


    }



    public function headings(): array
    {
        return [
            'id',
            'Nom',
            'Prénom',
            'Email',
            'Adresse',
            'Entreprise',

        ];
    }
}
