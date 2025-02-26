@php
    $items = [
        route('index') => 'Home',
        route('about') => 'About-Us',
        route('contacts') => 'Contacts',
        route('login') => 'Login',
        route('register') => 'Register',
    ];
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach($items as $href => $label)
            <x-nav-item :href="$href">{{ $label }}</x-nav-item>
        @endforeach
    </ul>
</nav>