<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  {{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          {{ __("You're logged in!") }}
        </div>
      </div>
    </div>
  </div> --}}
  <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

    @forelse ($products as $product)
      <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/mountain.jpg" alt="Mountain">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
          <p class="text-gray-700 text-base">{{ $product->description }}</p>
          <p class="text-gray-700 text-base">${{ $product->price }}</p>
          <p class="text-gray-700 text-base">${{ $product->shipping_cost }}</p>
          <a href="{{ route('products.edit', $product->id) }}"> <button
              class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
              Editar
            </button></a>

          <button
            class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
            Eliminar
          </button>
        </div>
      </div>
    @empty
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>No contacts saved yet</p>
          <a href="{{ route('products.create') }}">Add One!</a>
        </div>
      </div>
    @endforelse
  </div>
</x-app-layout>
