<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
        {{ $label }}
    </label>
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <textarea id="{{ $id ?? $name }}" name="{{ $name }}" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ old($name) }}</textarea>
        @isset ($instructions)
            <p class="mt-2 text-sm text-gray-500">{{ $instructions }}</p>
        @endisset
    </div>
</div>