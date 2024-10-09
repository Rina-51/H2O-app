<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Group') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('group.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Group Name</label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div class="mt-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="1">係</option>
                                <option value="2">ジャンル</option>
                                <option value="3">グループ</option>
                            </select>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Group</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>