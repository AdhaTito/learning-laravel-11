<!DOCTYPE html>
<html lang="en" class="dark">

{{-- Header html --}}
<x-header>{{ $title }}</x-header>
{{-- End Header --}}

<body class="bg-gray-300 font-poppins">

    {{-- navbar --}}
    <x-navbar></x-navbar>
    {{-- navbar end --}}

    {{-- Field --}}
    {{ $slot }}
    {{-- end Field --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
