<x-layouts.auth>
    <form method="post" enctype="multipart/form-data" class="space-y-3">
        @csrf
        <div class="max-w-sm input-floating">
            <input type="file" required accept="image/*" class="input" id="avatar" name="avatar" />
            <label class="input-floating-label" for="avatar">صورة الحساب</label>
            @error('avatar')
                <span class="text-error text-sm mt-1 block">
                    <i class="icon-[tabler--alert-circle] align-middle"></i>
                    <span class='align-middle'>{{ $message }}</span>
                </span>
            @enderror
        </div>
        <x-input id="name" label="اسم المستخدم" minLength="3" icon="icon-[tabler--user]" />
        <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" label="كلمة المرور" minLength="8" icon="icon-[tabler--lock-square-rounded]"
            type="password" />
        <x-input id="password_confirmation" label="تأكيد كلمة المرور" minLength="8"
            icon="icon-[tabler--lock-square-rounded]" type="password" />

        <button type="submit" class="btn btn-primary w-full mt-8">تسجيل حساب</button>
        <span>
            عندك حساب؟
            <a href="{{ route('login') }}" class="link link-animated">سجل دخول</a>
        </span>
    </form>
</x-layouts.auth>