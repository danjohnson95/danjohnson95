<div class="flex items-center justify-center sticky bottom-10">
    <div class="backdrop-blur-lg bg-background/80 dark:bg-gray-800/80 shadow-2xl rounded-full border border-gray-300 dark:border-gray-700 p-3 px-8 font-medium flex items-center space-x-6 flex-shrink-0">
        <a href="{{ route('project.index', [], false) }}" @class(['!border-[#EDCD24]' => Route::is('project.*'), 'border-transparent border-b-2' => true])>Projects</a>
        <a href="{{ route('talk.index', [], false) }}" @class(['!border-[#EDCD24]' => Route::is('talk.*'), 'border-transparent border-b-2' => true])>Talks</a>
        <a href="{{ route('blog.index', [], false) }}" @class(['!border-[#EDCD24]' => Route::is('blog.*'), 'border-transparent border-b-2' => true])>Blog</a>
        <a href="{{ route('use.index', [], false) }}" @class(['!border-[#EDCD24]' => Route::is('use.*'), 'border-transparent border-b-2' => true])>Uses</a>
    </div>
</div>