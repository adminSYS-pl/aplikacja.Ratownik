<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-table>
                        <x-slot name="header">
                            <x-table-column>#</x-table-column>
                            <x-table-column>Email</x-table-column>
                            <x-table-column>Imię</x-table-column>
                            <x-table-column>Nazwisko</x-table-column>
                            <x-table-column>Nr telefonu</x-table-column>
                            <x-table-column>Akcja</x-table-column>
                        </x-slot>
                        @foreach ($users as $user)
                            <tr>
                                <x-table-column>{{ $user->id }}</x-table-column>
                                <x-table-column>{{ $user->email }}</x-table-column>
                                <x-table-column>{{ $user->name }}</x-table-column>
                                <x-table-column>{{ $user->surname }}</x-table-column>
                                <x-table-column>{{ $user->phone_number }}</x-table-column>
                                <x-table-column></x-table-column>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
