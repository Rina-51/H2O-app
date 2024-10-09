<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Group: ' . $group->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h3 class="text-lg font-semibold">Members</h3>
                    <ul class="space-y-2">
                        @foreach($members as $member)
                            <li class="text-gray-700">{{ $member->name }}</li>
                        @endforeach
                    </ul>

                    <h3 class="mt-6 text-lg font-semibold">Add Member</h3>
                    <form action="{{ route('group.addMember', $group->id) }}" method="POST">
                        @csrf
                        <div class="flex items-center space-x-4">
                            <select name="user_id" class="border rounded p-2">
                                <option value="">Select a user</option>
                                @foreach($allUsers as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="bg-blue-500 text-white rounded p-2">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>