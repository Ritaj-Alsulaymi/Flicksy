<x-layouts.default>
 <div class="my-auto card px-8 py-16 max-w-84 self-center">
        <a class="link text-base-content link-neutral text-3xl font-bold no-underline flex items-end justify-center text-center mb-16"
            href="{{ route('home') }}">
            <span>Flicksy</span>
            <span class="icon-[tabler--hexagon-letter-f] size-12"></span>
        </a>
        <div>
            {{ $slot }}
        </div>
    </div>
</x-layouts.default>