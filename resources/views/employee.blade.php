<x-app-layout>
    <x-slot name="header">
        <div
            class="
                flex
                justify-between
                mx-3
                align-middle
                items-center
                flex-col
                md:flex-row
                space-y-4
                md:space-y-0
            "
        >
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a
                                href="#"
                                class="text-gray-400 hover:text-gray-500"
                            >
                                <!-- Heroicon name: solid/home -->
                                <svg
                                    class="flex-shrink-0 h-5 w-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                                    />
                                </svg>
                                <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg
                                class="flex-shrink-0 h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <a
                                href="#"
                                class="
                                    ml-4
                                    text-sm
                                    font-medium
                                    text-gray-500
                                    hover:text-gray-700
                                "
                                >Pekerja</a
                            >
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <!-- Success Alert -->
    @if(session('success'))
    <div
        class="
            rounded-md
            bg-green-50
            p-4
            border-2 border-green-300
            mx-10
            md:mx-20
            mt-12
            alert
        "
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/check-circle -->
                <svg
                    class="h-5 w-5 text-green-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                    />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">
                    {{ session("success") }}
                </p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button
                        onclick="dismiss_alert()"
                        type="button"
                        class="
                            inline-flex
                            bg-green-50
                            rounded-md
                            p-1.5
                            text-green-500
                            hover:bg-green-100
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-offset-green-50
                            focus:ring-green-600
                        "
                    >
                        <span class="sr-only">Dismiss</span>
                        <!-- Heroicon name: solid/x -->
                        <svg
                            class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Success Alert -->

    <!-- Failed Alert -->
    @if(session('failed'))
    <div
        class="
            rounded-md
            bg-red-50
            p-4
            border-2 border-red-300
            mx-10
            md:mx-20
            mt-12
            alert
        "
    >
        <div class="flex">
            <div class="flex-shrink-0">
                <svg
                    class="h-5 w-5 text-red-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd"
                    />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-red-800">
                    {{ session("failed") }}
                </p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button
                        onclick="dismiss_alert()"
                        type="button"
                        class="
                            inline-flex
                            bg-green-50
                            rounded-md
                            p-1.5
                            text-red-500
                            hover:bg-green-100
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-offset-red-50
                            focus:ring-red-600
                        "
                    >
                        <span class="sr-only">Dismiss</span>
                        <!-- Heroicon name: solid/x -->
                        <svg
                            class="h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Failed Alert -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div
                        class="
                            mb-6
                            flex
                            justify-between
                            items-center
                            flex-col
                            space-y-4
                            md:flex-row md:space-y-0
                        "
                    >
                        <div class="">
                            <a
                                href="{{ route('employee.create') }}"
                                class="
                                    inline-flex
                                    items-center
                                    px-3
                                    py-2
                                    border border-transparent
                                    shadow-sm
                                    text-sm
                                    leading-4
                                    font-medium
                                    rounded-md
                                    text-white
                                    bg-indigo-600
                                    hover:bg-indigo-700
                                    focus:outline-none
                                    focus:ring-2
                                    focus:ring-offset-2
                                    focus:ring-indigo-500
                                "
                            >
                                <!-- Heroicon name: solid/mail -->
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                Tambah Pekerja
                            </a>
                        </div>
                        <div>
                            <form action="/employee" method="get">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <div
                                        class="
                                            relative
                                            flex
                                            items-stretch
                                            flex-grow
                                            focus-within:z-10
                                        "
                                    >
                                        <div
                                            class="
                                                absolute
                                                inset-y-0
                                                left-0
                                                pl-3
                                                flex
                                                items-center
                                                pointer-events-none
                                            "
                                        >
                                            <!-- Heroicon name: solid/users -->
                                            <svg
                                                class="h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                                                />
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            name="search"
                                            id="search"
                                            class="
                                                focus:ring-indigo-500
                                                focus:border-indigo-500
                                                block
                                                w-full
                                                rounded-none rounded-l-md
                                                pl-10
                                                sm:text-sm
                                                border-gray-300
                                            "
                                            placeholder="Cari pekerja di sini"
                                            value="{{ request('search') }}"
                                        />
                                    </div>
                                    <button
                                        type="submit"
                                        class="
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
                                        "
                                    >
                                        <!-- Heroicon name: solid/sort-ascending -->
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- Tables --}}
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div
                                class="
                                    py-2
                                    align-middle
                                    inline-block
                                    min-w-full
                                    sm:px-6
                                    lg:px-8
                                "
                            >
                                <div
                                    class="
                                        shadow
                                        overflow-hidden
                                        border-b border-gray-200
                                        sm:rounded-lg
                                    "
                                >
                                    <table
                                        class="
                                            min-w-full
                                            divide-y divide-gray-200
                                        "
                                    >
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Nama
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Tarikh Pencen
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Jenis Pencen
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="
                                                        px-6
                                                        py-3
                                                        text-left text-xs
                                                        font-medium
                                                        text-gray-500
                                                        uppercase
                                                        tracking-wider
                                                    "
                                                >
                                                    Jabatan
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="relative px-6 py-3"
                                                >
                                                    <span class="sr-only"
                                                        >Edit</span
                                                    >
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="
                                                bg-white
                                                divide-y divide-gray-200
                                            "
                                        >
                                            @if (!count($employees))
                                            <tr>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        text-center
                                                        text-gray-600
                                                        font-medium
                                                    "
                                                    colspan="5"
                                                >
                                                    Belum ada pekerja yang telah
                                                    didaftarkan. Tambah pekerja
                                                    sekarang untuk melihat
                                                    mereka di sini!
                                                </td>
                                            </tr>
                                            @else @foreach ($employees as
                                            $employee)
                                            <tr>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                    "
                                                >
                                                    <div
                                                        class="
                                                            flex
                                                            items-center
                                                        "
                                                    >
                                                        <div
                                                            class="
                                                                flex-shrink-0
                                                                h-10
                                                                w-10
                                                            "
                                                        >
                                                            <img
                                                                class="
                                                                    h-10
                                                                    w-10
                                                                    rounded-full
                                                                "
                                                                src="{{ asset('/storage/images/'. $employee->image) }}"
                                                                alt=""
                                                            />
                                                        </div>
                                                        <div class="ml-4">
                                                            <div
                                                                class="
                                                                    text-sm
                                                                    font-medium
                                                                    text-gray-900
                                                                "
                                                            >
                                                                {{ $employee->name }}
                                                            </div>
                                                            <div
                                                                class="
                                                                    text-sm
                                                                    text-gray-500
                                                                "
                                                            >
                                                                {{ $employee->retiring_num }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                    "
                                                >
                                                    <div
                                                        class="
                                                            text-sm
                                                            text-gray-500
                                                        "
                                                    >
                                                        {{ date('d-m-Y', strtotime($employee->retiring_date)) }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-sm text-gray-500
                                                    "
                                                >
                                                    {{ $employee->retiring_type }}
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                    "
                                                >
                                                    <span
                                                        class="
                                                            px-2
                                                            inline-flex
                                                            text-xs
                                                            leading-5
                                                            font-semibold
                                                            rounded-full
                                                            bg-green-100
                                                            text-green-800
                                                        "
                                                    >
                                                        {{ $employee->department }}
                                                    </span>
                                                </td>
                                                <td
                                                    class="
                                                        px-6
                                                        py-4
                                                        whitespace-nowrap
                                                        text-md
                                                        font-medium
                                                    "
                                                >
                                                    <div
                                                        class="
                                                            flex
                                                            justify-center
                                                            space-x-2
                                                            items-center
                                                        "
                                                    >
                                                        <form
                                                            action="{{ route('employee.destroy', $employee->id) }}"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                href=""
                                                                class="
                                                                    text-indigo-500
                                                                    hover:text-indigo-900
                                                                    block
                                                                    mr-1
                                                                "
                                                            >
                                                                <i
                                                                    class="
                                                                        fad
                                                                        fa-trash
                                                                    "
                                                                ></i>
                                                            </button>
                                                        </form>
                                                        <a
                                                            href="{{ URL::to('employee\/') . $employee->id . '/edit' }}"
                                                            class="
                                                                text-indigo-500
                                                                hover:text-indigo-900
                                                                block
                                                            "
                                                            ><i
                                                                class="
                                                                    fad
                                                                    fa-edit
                                                                "
                                                            ></i
                                                        ></a>
                                                        <a
                                                            href="{{ route('employee.show', $employee->id) }}"
                                                            class="
                                                                text-indigo-500
                                                                hover:text-indigo-900
                                                                block
                                                            "
                                                            ><i
                                                                class="
                                                                    fad
                                                                    fa-eye
                                                                "
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach @endif

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-4">
                                    {{ $employees->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tables --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function dismiss_alert() {
        $(".alert").hide();
    }
</script>
