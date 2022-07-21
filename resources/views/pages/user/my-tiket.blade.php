@extends('main.user.main')

@section('content')
<section class="w-full flex flex-col justify-center">
    @if(session()->has('status'))
        <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        </div>
    @endif

    <div class="block mt-2 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <table>
            <tr class="border-2">
                <th class="text-start">Nama Pemesan : </th>
                <td class="border-2">{{ $ticket->name }}</td>
            </tr>
            <tr class="border-2">
                <th class="text-start">Nomor Identitas :  </th>
                <td class="border-2"> {{ $ticket->NIK }}</td>  
            </tr>
            <tr class="border-2">
                <th class="text-start">No. HP :   </th>
                <td class="border-2">{{ $ticket->noHp }}</td>
            </tr>
            <tr class="border-2">
                <th class="text-start">Tempat Wisata : </th>
                <td class="border-2"> {{ $ticket->tempatWisata }}</td>
            </tr>
            <tr class="border-2">
                <th class="text-start">Pengunjung Dewasa : </th>
                <td class="border-2">{{ $ticket->pengunjungDewasa }} Orang</td>
          
            </tr>
            <tr class="border-2">
                <th class="text-start">Pengunjung Anak-anak :</th>
                <td class="border-2">{{ $ticket->pengunjungAnak }} Orang</td>
            </tr>
            <tr class="border-2">
                <th class="text-start">Harga Tiket :</th>
                <td class="border-2">Rp.{{ $ticket->hargaTiket }}</td>
            </tr>
            <tr class="border-2">
                <th class="text-start">Total Bayar :</th>
                <td class="border-2">Rp.{{ $ticket->totalHarga }}</td>
            </tr>
        </table>
       
    </div>
</section>

@endsection