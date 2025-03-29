@props([
    'href' => null,
])

<a href="{{ $href }}" class="border px-4 py-2 rounded-sm border-border hover:bg-gray-50 dark:hover:bg-gray-800 hover:shadow:md shadow-xs flex items-center font-semibold">
    <span>See more</span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 -mr-1">
        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</a>