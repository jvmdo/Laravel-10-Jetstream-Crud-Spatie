@php $editing = isset($uss_provider) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text name="name" label="Name" :value="old('name', $editing ? $uss_provider->name : '')" maxlength="255" placeholder="Your provider name"
            required></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text name="email" type="email" label="Email" :value="old('email', $editing ? $uss_provider->email : '')"
            placeholder="Your provider email address" required></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text name="cnpj" label="CNPJ" :value="old('cnpj', $editing ? $uss_provider->cnpj : '')" placeholder="00.000.000/0001-00"
            required></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.text name="drones" label="drones" :value="old('drones', $editing ? $uss_provider->drones : '')"
            placeholder="The number of drones your provider owns" required></x-inputs.text>
    </x-inputs.group>
</div>
