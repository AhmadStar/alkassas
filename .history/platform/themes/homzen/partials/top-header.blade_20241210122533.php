<div class="bg-surface top-header">
    <div class="top-header-left">
        @if($hotline = theme_option('hotline'))
            <div class="top-header-item">
                <x-core::icon name="ti ti-phone" style="width: 1.25rem; height: 1.25rem" />
                <a href="tel:{{ $hotline }}">{{ $hotline }}</a>
            </div>
        @endif
        @if($email = theme_option('email'))
            <div class="top-header-item">
                <x-core::icon name="ti ti-mail" style="width: 1.25rem; height: 1.25rem" />
                <a href="mailto:{{ $email }}">{{ $email }}</a>
            </div>
        @endif
    </div>
</div>
