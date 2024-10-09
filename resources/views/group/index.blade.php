<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Groups') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('group.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">
                            Create New Group
                        </a>
                    </div>
                    
                    <ul class="space-y-4">
                        @foreach($groups as $group)
                            <div>
                                <a href="groups/{{ $group->id }}" class="text-lg text-gray-700">
                                    {{ $group->name }} - {{ $group->status == 1 ? '係' : ($group->status == 2 ? 'ジャンル' : 'グループ') }}
                                </a>
                            </div>
                        @endforeach
                    </ul>
                    @if($groups->isEmpty())
                        <div class="mt-4 text-center">
                            <p class="text-gray-500">You are not part of any groups.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>