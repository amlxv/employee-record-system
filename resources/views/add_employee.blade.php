<x-app-layout>
    <x-slot name="header">
        <div class="
                flex
                justify-between
                mx-3
                align-middle
                items-center
                flex-col
                md:flex-row
                space-y-4
                md:space-y-0
            ">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <!-- Heroicon name: solid/home -->
                                <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="{{ route('employee.index') }}" class="
                                    ml-4
                                    text-sm
                                    font-medium
                                    text-gray-500
                                    hover:text-gray-700
                                ">Pekerja</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="#" class="
                                    ml-4
                                    text-sm
                                    font-medium
                                    text-gray-500
                                    hover:text-gray-700
                                ">Tambah</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </x-slot>
    @if ($errors->all())

    <div class="rounded-md bg-red-50 p-4 mx-10 mt-12 border-2 border-red-500">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/x-circle -->
                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">
                    There were {{ count($errors) }} error(s) with your submission
                </h3>
                <div class="mt-2 text-sm text-red-700">
                    <ul role="list" class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mx-auto p-3">
                        {{-- Forms --}}
                        <form class="" method="post" action="{{ route('employee.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-8 divide-y divide-gray-200">
                                <div class="">
                                    <div>
                                        <h3 class="
                                                text-lg
                                                leading-6
                                                font-medium
                                                text-gray-900
                                            ">
                                            Maklumat Pekerja
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Sila penuhkan semua ruang yang
                                            disediakan dengan maklumat yang
                                            sahih.
                                        </p>
                                    </div>
                                    <div class="
                                            mt-6
                                            grid grid-cols-1
                                            gap-y-6 gap-x-4
                                            sm:grid-cols-6
                                        ">
                                        <div class="sm:col-span-3">
                                            <label for="name" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Nama
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="name" id="name" autocomplete="" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('name') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="ic" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                No. Kad Pengenalan
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="ic" id="ic" autocomplete="" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('ic') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="address" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Alamat
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="address" id="address" autocomplete="" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('address') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="phone_num" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                No. Telefon
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="phone_num" id="phone_num" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('phone_num') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="position" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Jawatan / Gred
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="position" id="position" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('position') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="department" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Jabatan / Bahagian
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="department" id="department"
                                                    autocomplete="postal-code" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('department') }}" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="retiring_num" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                No. Pencen
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="retiring_num" id="retiring_num" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('retiring_num') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="retiring_date" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Tarikh Pencen
                                            </label>
                                            <div class="mt-1">
                                                <input type="date" name="retiring_date" id="retiring_date" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('retiring_date') }}" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="retiring_type" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Jenis Pencen
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="retiring_type" id="retiring_type"
                                                    autocomplete="postal-code" class="
                                                        shadow-sm
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                        block
                                                        w-full
                                                        sm:text-sm
                                                        border-gray-300
                                                        rounded-md
                                                    " value="{{ old('retiring_type') }}" />
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6">
                                            <label for="cover-photo" class="
                                                    block
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                ">
                                                Gambar
                                            </label>
                                            <div class="
                                                    mt-1
                                                    flex
                                                    justify-center
                                                    px-6
                                                    pt-5
                                                    pb-6
                                                    border-2
                                                    border-gray-300
                                                    border-dashed
                                                    rounded-md
                                                ">
                                                <div class="
                                                        space-y-1
                                                        text-center
                                                    ">
                                                    <svg class="
                                                            mx-auto
                                                            h-12
                                                            w-12
                                                            text-gray-400
                                                        " stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="
                                                            flex
                                                            text-sm
                                                            text-gray-600
                                                        ">
                                                        <label for="image" class="
                                                                relative
                                                                cursor-pointer
                                                                bg-white
                                                                rounded-md
                                                                font-medium
                                                                text-indigo-600
                                                                hover:text-indigo-500
                                                                focus-within:outline-none
                                                                focus-within:ring-2
                                                                focus-within:ring-offset-2
                                                                focus-within:ring-indigo-500
                                                            ">
                                                            <span>Tekan di
                                                                sini</span>
                                                            <input id="image" name="image" type="file"
                                                                value="{{ old('image') }}" class="sr-only" />
                                                        </label>
                                                        <p class="pl-1">
                                                            untuk tambah gambar
                                                        </p>
                                                    </div>
                                                    <p class="
                                                            text-xs
                                                            text-gray-500
                                                        ">
                                                        PNG, JPG, JPEG kurang
                                                        daripada 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-8">
                                    <div>
                                        <h3 class="
                                                text-lg
                                                leading-6
                                                font-medium
                                                text-gray-900
                                            ">
                                            Maklumat Keluarga
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Sila penuhkan semua ruang yang
                                            disediakan dengan maklumat keluarga
                                            pekerja yang sahih.
                                        </p>
                                    </div>
                                    <div class="mt-6">
                                        <fieldset id="wifeCountForm">
                                            <legend class="
                                                    text-base
                                                    font-medium
                                                    text-gray-900
                                                ">
                                                Isteri
                                            </legend>
                                            <div class="
                                                    mt-2
                                                    flex
                                                    rounded-md
                                                    shadow-sm
                                                ">
                                                <div class="
                                                        relative
                                                        flex
                                                        items-stretch
                                                        flex-grow
                                                        focus-within:z-10
                                                    ">
                                                    <div class="
                                                            absolute
                                                            inset-y-0
                                                            left-0
                                                            pl-3
                                                            flex
                                                            items-center
                                                            pointer-events-none
                                                        ">
                                                        <!-- Heroicon name: solid/hash -->

                                                        <svg class="
                                                                h-5
                                                                w-5
                                                                text-gray-400
                                                            " xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                                        </svg>
                                                    </div>
                                                    <input type="text" name="wifeCount" id="wifeCount" class="
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            rounded-none
                                                            rounded-l-md
                                                            pl-10
                                                            sm:text-sm
                                                            border-gray-300
                                                        " placeholder="Masukkan bilangan Anak pekerja" />
                                                </div>
                                                <button type="button" id="setWifeButton" onclick="setWife()" class="
                                                        -ml-px
                                                        relative
                                                        inline-flex
                                                        items-center
                                                        space-x-2
                                                        px-4
                                                        py-2
                                                        border border-gray-300
                                                        text-sm
                                                        font-medium
                                                        rounded-r-md
                                                        text-gray-700
                                                        bg-gray-50
                                                        hover:bg-gray-100
                                                        focus:outline-none
                                                        focus:ring-1
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                    ">
                                                    <!-- Heroicon name: solid/sort-ascending -->
                                                    Sahkan!
                                                </button>
                                            </div>
                                        </fieldset>
                                        <div id="wifeSection"></div>

                                        <fieldset id="childCountForm" class="mt-4">
                                            <legend class="
                                                    text-base
                                                    font-medium
                                                    text-gray-900
                                                ">
                                                Anak
                                            </legend>
                                            <div class="
                                                    mt-2
                                                    flex
                                                    rounded-md
                                                    shadow-sm
                                                ">
                                                <div class="
                                                        relative
                                                        flex
                                                        items-stretch
                                                        flex-grow
                                                        focus-within:z-10
                                                    ">
                                                    <div class="
                                                            absolute
                                                            inset-y-0
                                                            left-0
                                                            pl-3
                                                            flex
                                                            items-center
                                                            pointer-events-none
                                                        ">
                                                        <!-- Heroicon name: solid/hash -->

                                                        <svg class="
                                                                h-5
                                                                w-5
                                                                text-gray-400
                                                            " xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                                        </svg>
                                                    </div>
                                                    <input type="text" name="childCount" id="childCount" class="
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            rounded-none
                                                            rounded-l-md
                                                            pl-10
                                                            sm:text-sm
                                                            border-gray-300
                                                        " placeholder="Masukkan bilangan anak pekerja" />
                                                </div>
                                                <button type="button" id="setChildButton" onclick="setChild()" class="
                                                        -ml-px
                                                        relative
                                                        inline-flex
                                                        items-center
                                                        space-x-2
                                                        px-4
                                                        py-2
                                                        border border-gray-300
                                                        text-sm
                                                        font-medium
                                                        rounded-r-md
                                                        text-gray-700
                                                        bg-gray-50
                                                        hover:bg-gray-100
                                                        focus:outline-none
                                                        focus:ring-1
                                                        focus:ring-indigo-500
                                                        focus:border-indigo-500
                                                    ">
                                                    <!-- Heroicon name: solid/sort-ascending -->
                                                    Sahkan!
                                                </button>
                                            </div>
                                        </fieldset>
                                        <div id="childSection"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button type="button" class="
                                            bg-white
                                            py-2
                                            px-4
                                            border border-gray-300
                                            rounded-md
                                            shadow-sm
                                            text-sm
                                            font-medium
                                            text-gray-700
                                            hover:bg-gray-50
                                            focus:outline-none
                                            focus:ring-2
                                            focus:ring-offset-2
                                            focus:ring-indigo-500
                                        ">
                                        Batal
                                    </button>
                                    <button type="submit" class="
                                            ml-3
                                            inline-flex
                                            justify-center
                                            py-2
                                            px-4
                                            border border-transparent
                                            shadow-sm
                                            text-sm
                                            font-medium
                                            rounded-md
                                            text-white
                                            bg-indigo-600
                                            hover:bg-indigo-700
                                            focus:outline-none
                                            focus:ring-2
                                            focus:ring-offset-2
                                            focus:ring-indigo-500
                                        ">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{-- Forms --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function setWife() {
        let wifeCount = $("#wifeCount").val();

        if (isNaN(wifeCount) || wifeCount <= 0) {
            return Swal.fire({
                title: "Peringatan",
                icon: "error",
                text: "Pastikan bilangan ditulis sebagai nombor dan tidak negatif atau sifar!",
            });
        }

        $("#wifeCountForm").hide();

        for (let i = 1; i <= wifeCount; i++) {
            $("#wifeSection").append(`<fieldset class="mb-8">
                                                <legend
                                                    class="
                                                        text-base
                                                        font-medium
                                                        text-gray-900
                                                    "
                                                >
                                                    Isteri ${i}
                                                </legend>
                                                <div
                                                    class="
                                                        mt-6
                                                        grid grid-cols-1
                                                        gap-y-6 gap-x-4
                                                        sm:grid-cols-6
                                                    "
                                                >
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="name_wife_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            Nama
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="name_wife_${i}"
                                                                id="name_wife_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="ic_wife_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            No. Kad Pengenalan
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="ic_wife_${i}"
                                                                id="ic_wife_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="phone_num_wife_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            No. Telefon
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="phone_num_wife_${i}"
                                                                id="phone_num_wife_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>`);
        }
    }

    function setChild() {
        let childCount = $("#childCount").val();

        if (isNaN(childCount) || childCount <= 0) {
            return Swal.fire({
                title: "Peringatan",
                icon: "error",
                text: "Pastikan bilangan ditulis sebagai nombor dan tidak negatif atau sifar!",
            });
        }

        $("#childCountForm").hide();

        for (let i = 1; i <= childCount; i++) {
            $("#childSection").append(`<fieldset class="mt-8">
                                                <legend
                                                    class="
                                                        text-base
                                                        font-medium
                                                        text-gray-900
                                                    "
                                                >
                                                    Anak ${i}
                                                </legend>
                                                <div
                                                    class="
                                                        mt-6
                                                        grid grid-cols-1
                                                        gap-y-6 gap-x-4
                                                        sm:grid-cols-6
                                                    "
                                                >
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="name_child_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            Nama
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="name_child_${i}"
                                                                id="name_child_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="ic_child_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            No. Kad Pengenalan
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="ic_child_${i}"
                                                                id="ic_child_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label
                                                            for="phone_num_child_${i}"
                                                            class="
                                                                block
                                                                text-sm
                                                                font-medium
                                                                text-gray-700
                                                            "
                                                        >
                                                            No. Telefon
                                                        </label>
                                                        <div class="mt-1">
                                                            <input
                                                                type="text"
                                                                name="phone_num_child_${i}"
                                                                id="phone_num_child_${i}"
                                                                autocomplete=""
                                                                class="
                                                                    shadow-sm
                                                                    focus:ring-indigo-500
                                                                    focus:border-indigo-500
                                                                    block
                                                                    w-full
                                                                    sm:text-sm
                                                                    border-gray-300
                                                                    rounded-md
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>`);
        }
    }
</script>