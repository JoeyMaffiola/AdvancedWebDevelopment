<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Subjects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('subjects.update', $subject->id) }}">
                @method('put')
                @csrf

                <!-- Subject -->
                <div>
                    <x-input-label for="subject" :value="__('Subject')" />
                    <textarea id="subject" class="block mt-1 w-full" name="subject" :value="old('subject', $subject - > subject)" autofocus>{{ old('subject', $subject->subject) }}</textarea>
                    @error('subject')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
                </div>

                <!-- Full Name -->
                <div>
                    <x-input-label for="full_name" :value="__('Full Name')" />
                    <textarea id="full_name" class="block mt-1 w-full" name="full_name" :value="old('full_name', $subject - > full_name)">{{ old('full_name', $subject->full_name) }}</textarea>
                    @error('full_name')
                        <div class='alert alert-danger'>{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Update Subject') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
