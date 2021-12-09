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
                noprint
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
                                ">Maklumat Pekerja</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
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
                                </div>
                                <div class="
                                        mt-6
                                        grid grid-cols-1
                                        gap-y-6 gap-x-4
                                        sm:grid-cols-6
                                    ">
                                    <div class="sm:col-span-6">
                                        <label for="cover-photo" class="
                                                block
                                                text-sm
                                                font-medium
                                                text-gray-700
                                            ">
                                            Gambar
                                        </label>
                                        <div class="sm:col-span-6 mt-3">
                                            <a href="{{ asset('/storage/images/'. $employee->image) }}" target="_blank">
                                                <img class="h-20 w-20 rounded-lg"
                                                    src="{{ asset('/storage/images/'. $employee->image) }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
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
                                                " value="{{ $employee->name }}" disabled />
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
                                                " value="{{ $employee->ic }}" disabled />
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
                                                " value="{{ $employee->address }}" disabled />
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
                                                " value="{{ $employee->phone_num }}" disabled />
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
                                                " value="{{ $employee->position }}" disabled />
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
                                                " value="{{ $employee->department }}" disabled />
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
                                                " value="{{ $employee->retiring_num }}" disabled />
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
                                                " value="{{ $employee->retiring_date }}" disabled />
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
                                                " value="{{ $employee->retiring_type }}" disabled />
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
                                        @if (count(json_decode($employee->wife))
                                        && count(json_decode($employee->child)))
                                        Maklumat Keluarga @endif
                                    </h3>
                                </div>
                                <div class="mt-6">
                                    @for ($i = 0; $i < count(json_decode($employee->wife)); $i++)
                                        <fieldset class="mb-8">
                                            <legend class="
                                                text-base
                                                font-medium
                                                text-gray-900
                                            ">
                                                Isteri {{ $i + 1 }}
                                            </legend>
                                            <div class="
                                                mt-6
                                                grid grid-cols-1
                                                gap-y-6 gap-x-4
                                                sm:grid-cols-6
                                            ">
                                                <div class="sm:col-span-3">
                                                    <label for="name_wife_{{ $i + 1 }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                        Nama
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="name_wife_{{
                                                            $i + 1
                                                        }}" id="name_wife_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->wife, true)[$i]['name'] }}"
                                                            disabled />
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-3">
                                                    <label for="ic_wife_{{ $i + 1 }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                        No. Kad Pengenalan
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="ic_wife_{{
                                                            $i + 1
                                                        }}" id="ic_wife_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->wife, true)[$i]['ic'] }}"
                                                            disabled />
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-3">
                                                    <label for="phone_num_wife_{{
                                                        $i + 1
                                                    }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                        No. Telefon
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="phone_num_wife_{{
                                                            $i + 1
                                                        }}" id="phone_num_wife_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->wife, true)[$i]['phone_num'] }}"
                                                            disabled />
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-3">
                                                    <label for="phone_num_wife_{{
                                                        $i + 1
                                                    }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                        Alamat
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="address_wife_{{
                                                            $i + 1
                                                        }}" id="address_wife_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->wife, true)[$i]['address'] }}"
                                                            disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        @endfor @for ($i = 0; $i < count(json_decode($employee->child)); $i++)
                                            <fieldset class="mt-8">
                                                <legend class="
                                                text-base
                                                font-medium
                                                text-gray-900
                                            ">
                                                    Anak {{ $i + 1 }}
                                                </legend>
                                                <div class="
                                                mt-6
                                                grid grid-cols-1
                                                gap-y-6 gap-x-4
                                                sm:grid-cols-6
                                            ">
                                                    <div class="sm:col-span-3">
                                                        <label for="name_child_{{
                                                        $i + 1
                                                    }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                            Nama
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="name_child_{{
                                                            $i + 1
                                                        }}" id="name_child_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->child, true)[$i]['name'] }}"
                                                                disabled />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label for="ic_child_{{ $i + 1 }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                            No. Kad Pengenalan
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="ic_child_{{
                                                            $i + 1
                                                        }}" id="ic_child_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->child, true)[$i]['ic'] }}"
                                                                disabled />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label for="phone_num_child_{{
                                                        $i + 1
                                                    }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                            No. Telefon
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="phone_num_child_{{
                                                            $i + 1
                                                        }}" id="phone_num_child_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->child, true)[$i]['phone_num'] }}"
                                                                disabled />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label for="phone_num_child_{{
                                                        $i + 1
                                                    }}" class="
                                                        block
                                                        text-sm
                                                        font-medium
                                                        text-gray-700
                                                    ">
                                                            Alamat
                                                        </label>
                                                        <div class="mt-1">
                                                            <input type="text" name="address_child_{{
                                                            $i + 1
                                                        }}" id="address_child_{{
                                                            $i + 1
                                                        }}" autocomplete="" class="
                                                            shadow-sm
                                                            focus:ring-indigo-500
                                                            focus:border-indigo-500
                                                            block
                                                            w-full
                                                            sm:text-sm
                                                            border-gray-300
                                                            rounded-md
                                                        " value="{{ json_decode($employee->child, true)[$i]['address']}}"
                                                                disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            @endfor
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
                                    " onclick="window.print()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- Forms --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>