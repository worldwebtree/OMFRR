<button {{ $attributes->merge(['type' => 'submit', 'class' => 'login-btn inline-flex items-center px-4 py-2 border border-transparent rounded-pill font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
