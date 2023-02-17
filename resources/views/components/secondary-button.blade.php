<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center border rounded-md btn-light transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
