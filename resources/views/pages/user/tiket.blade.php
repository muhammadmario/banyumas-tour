@extends('main.user.main')

@section('content')
<section class="w-full px-8">
    <form class="w-1/2 m-auto" action="/tiket" method="POST">
      @csrf
        <h2 class="font-semibold text-xl mb-4">Form Pemesanan</h2>
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
          <input value="{{ old('name') }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-6">
          <label for="NIK" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Identitas</label>
          <input value="{{ old('NIK') }}"   type="number" id="NIK" name="NIK" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('NIK')
                <p class="text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-6">
            <label for="noHp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Hp</label>
            <input value="{{ old('noHp') }}"  type="number" id="noHp" name="noHp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            @error('noHp')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="tempatWisata" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tempat Wisata</label>
            <select id="tempatWisata" name="tempatWisata" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Pilih Tempat Wisata</option>
              @foreach ($destinations as $destination)
              <option value="{{ $destination->name }}">{{ $destination->name }}</option>
              @endforeach
            </select>   
            @error('tempatWisata')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="tanggalKunjungan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal Kunjungan</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input value="{{ old('tanggalKunjungan') }}"  datepicker datepicker-format="dd/mm/yyyy" type="text" name="tanggalKunjungan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih tanggal">
            </div>
            @error('tanggalKunjungan')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="pengunjungDewasa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pengunjung Dewasa</label>
            <input value="{{ old('pengunjungDewasa') }}"  min="0" type="number" id="pengunjungDewasa" name="pengunjungDewasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            @error('pengunjungDewasa')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="pengunjungAnak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pengunjung Anak-anak</label>
            <input value="{{ old('pengunjungAnak') }}"   min="0" type="number" id="pengunjungAnak" name="pengunjungAnak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            @error('pengunjungAnak')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
          <label for="hargaTiket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Tiket</label>
          <input readonly  min="0" type="number" id="hargaTiket" name="hargaTiket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          
        </div>
        <div class="mb-6">
          <label for="totalHarga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Total Harga</label>
          <input  readonly  min="0" type="number" id="totalHarga" name="totalHarga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
 
        <div class="flex items-start mb-6">
          <div class="flex items-center h-5">
            <input id="setuju" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
          </div>
          <label for="setuju" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
        </div>
        <div class="mb-6">
            <button type="button" id="btn-hitungTotal"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hitung Total Bayar</button>
            <button type="submit" id="btn-pesan" disabled class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Pesan Tiket</button>
            <button type="reset" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</button>
        </div>
      </form>
</section>

<script>
    const setuju = document.getElementById('setuju');
    const btnPesan = document.getElementById('btn-pesan');

    const destination = {{ Js::from($destinations) }};
    console.log(destination)
    
    const tempatWisata = document.getElementById('tempatWisata');
    const hargaTiket = document.getElementById('hargaTiket');
    const totalHarga = document.getElementById('totalHarga');
    const pengunjungDewasa = document.getElementById('pengunjungDewasa');
    const pengunjungAnak = document.getElementById('pengunjungAnak');
    const btnHitungTotal = document.getElementById('btn-hitungTotal');

    // toggle tombol pesanan
    setuju.addEventListener("change", function () {
            if (this.checked) {
                btnPesan.disabled = false;
            } else {
                btnPesan.disabled = true;
            }
    })

    // cari tempat wisata yang sama dengan yang dipilih user
    tempatWisata.addEventListener('change', function () {
      const cekDestinasiWisata = destination.find(des=>des.name == tempatWisata.value )
      hargaTiket.value=cekDestinasiWisata.price
    })

    // hitung total harga
    btnHitungTotal.addEventListener('click', function () {
      const DiskonAnak = hargaTiket.value / 2;
      const TotalHargaAnak = DiskonAnak * pengunjungAnak.value; 
      const TotalHargaDewasa = hargaTiket.value * pengunjungDewasa.value;
      const TotalHarga = TotalHargaAnak + TotalHargaDewasa;
      totalHarga.value = TotalHarga;
    })

    console.log("halo")
</script>

@endsection