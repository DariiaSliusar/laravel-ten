<x-form {{ $attributes->merge([
'method' => 'post']) }}>
    <x-form-item>
        <x-label required>{{ __('Title post') }}</x-label>
        <x-input name="title" autofocus/>

       <x-error name="title" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Content post') }}</x-label>
        <x-textarea name="content" rows="10"/>

        <x-error name="content" />
    </x-form-item>

    <x-button typr="submit">
        {{ __('Create post') }}
    </x-button>
</x-form>

{{--<x-form action="{{ route('user.posts.store') }}" method="POST">--}}


