<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center btn-primary border border-transparent rounded-md text-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
