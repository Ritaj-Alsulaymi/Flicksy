<x-layouts.auth>
    <form method="post" class="space-y-3">
        @csrf
        <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" label="كلمة المرور" minLength="8" icon="icon-[tabler--lock-square-rounded]"
            type="password" />

        <button type="submit" class="btn btn-primary w-full mt-8">تسجيل دخول</button>
        <span>
            ما عندك حساب؟
            <a href="{{ route('register') }}" class="link link-animated">سجل حساب</a>
        </span>
    </form>
</x-layouts.auth>