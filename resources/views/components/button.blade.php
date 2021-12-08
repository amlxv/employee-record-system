<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-5 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-wider uppercase hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
