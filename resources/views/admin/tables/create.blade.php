<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-start m-2 p-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">All Tables</a>
            </div>

            <div class="flex flex-col m-4 p-4 bg-slate-100 px-6 py-6">

                <form method="POST" action="{{ route('admin.tables.store') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-400 @enderror">
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Guest Number</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('guest_number') border-red-400 @enderror" aria-describedby="guest_number_help" type="number" min="0.00" max="10000.00" step="0.01" id="guest_number" name="guest_number">
                        @error('guest_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('status') border-red-400 @enderror">Status</label>
                        <select id="status" name="status" class="form-multiselect w-full block">

                            @foreach(\App\Helpers\Constant::TABLE_STATUS as $key => $value)
                                <option value="{{ $key }}">{{ $key }}</option>
                            @endforeach

                        </select>
                        @error('status')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Location</label>

                        <select name="location" id="location" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('location') border-red-400 @enderror" required>

                            @foreach(\App\Helpers\Constant::TABLE_LOCATION as $key => $value)
                                <option value="{{ $key }}">{{ $key }}</option>
                            @endforeach

                        </select>
                        @error('location')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

            </div>
        </div>
    </div>

</x-admin-layout>
