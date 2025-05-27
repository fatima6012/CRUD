<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-lg rounded-lg" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col items-start gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-user-check mr-3 text-purple-600"></i>
                            {{ __("You're logged in!") }}
                        </div>
                        <a href="{{ route('posts.index') }}" class="inline-flex items-center px-4 py-2 text-white rounded-md hover:opacity-90 transition-all" style="background: linear-gradient(to right, rgb(85, 39, 112), rgb(111, 93, 139));">
                            <i class="fas fa-newspaper mr-2"></i>
                            Go to My Food Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
