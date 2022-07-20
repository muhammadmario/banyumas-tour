@extends('main.user.main')

@section('content')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg px-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Wisata
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    Jam buka
                </th>
                <th scope="col" class="py-3 px-6">
                    Harga Tiket
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $destination->name }}
                </th>
                <td class="py-4 px-6">
                    {{ $destination->address }}
                </td>
                <td class="py-4 px-6">
                    08.00 - 16.00
                </td>
                <td class="py-4 px-6">
                  Rp.{{ $destination->price }}
                </td>
                <td class="py-4 px-6">
                    <a href="/tiket" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Pesan</a>
                </td>
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
</div>
@endsection