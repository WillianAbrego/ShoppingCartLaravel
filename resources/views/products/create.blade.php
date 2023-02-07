<x-guest-layout>
  <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf

    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
        autofocus />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Details -->
    <div class="mt-4">
      <x-input-label for="details" :value="__('Details')" />
      <x-text-input id="details" class="block mt-1 w-full" type="text" name="details" :value="old('details')" required />
      <x-input-error :messages="$errors->get('details')" class="mt-2" />
    </div>

    <!-- Price -->
    <div class="mt-4">
      <x-input-label for="price" :value="__('Price')" />
      <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
      <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>

    <!-- Shipping Cost -->
    <div class="mt-4">
      <x-input-label for="shipping_cost" :value="__('Shipping Cost')" />
      <x-text-input id="shipping_cost" class="block mt-1 w-full" type="text" name="shipping_cost" :value="old('shippingCost')"
        required />
      <x-input-error :messages="$errors->get('shipping_cost')" class="mt-2" />
    </div>

    <!-- Description -->
    <div class="mt-4">
      <x-input-label for="description" :value="__('Description')" />
      <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"
        required />
      <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <!-- image -->
    <div class="mt-4">
      <x-input-label for="image_path" :value="__('image_path')" />
      <x-text-input id="image_path" class="block mt-1 w-full" type="text" name="image_path" :value="old('image_path')" />
      <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
    </div>


    <div class="flex items-center justify-end mt-4">


      <x-primary-button class="ml-4">
        Registrar
      </x-primary-button>
    </div>
  </form>
</x-guest-layout>
