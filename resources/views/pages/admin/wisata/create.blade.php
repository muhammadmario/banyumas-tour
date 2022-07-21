@extends('main.admin.main')

@section('content')
{{-- form buat destinasi --}}
<form class="w-1/2 mx-auto" action="/admin/wisata" method="POST" enctype="multipart/form-data"> 
    @csrf
      <h2 class="font-semibold text-xl mb-4">Tambah Wisata</h2>
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
        <input value="{{ old('name') }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('name')
              <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
        <input value="{{ old('address') }}"   type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('address')
              <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi</label>
          <input value="{{ old('description') }}"  type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          @error('description')
              <p class="text-sm text-red-600">{{ $message }}</p>
          @enderror
      </div>

      <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga</label>
        <input value="{{ old('price') }}"  type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('price')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">URL video youtube</label>
        <input value="{{ old('video') }}"  type="text" id="video" name="video" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('video')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
        <input value="{{ old('image') }}"  type="file" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
          <button type="submit"  class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
      </div>
    </form>
@endsection
