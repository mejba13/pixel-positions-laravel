<x-layout>
    <x-page-heading>Login </x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.button>Log in</x-forms.button>
    </x-forms.form>
</x-layout>
