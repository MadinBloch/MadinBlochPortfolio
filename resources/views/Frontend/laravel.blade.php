@extends('Frontend.layout.main')
@section('content')

<div class="container mx-auto p-8 mt-5 text-center">
    <h1 class="text-4xl font-bold mb-4 text-blue-400">Laravel Skills Showcase</h1>
    <p class="text-lg text-white">Explore my expertise in Laravel and backend development.</p>
</div>

<!-- Laravel Skills Section -->
<div class="container mx-auto p-8 mt-5 mb-8 flex flex-col lg:flex-row justify-between items-center">
    <div class="w-full lg:w-2/3">
        <h2 class="text-4xl font-bold mb-4 text-blue-400">Laravel Topics I Know:</h2>
        <ul class="list-disc pl-5 text-lg font-medium text-white">
            <li>Routing & Middleware</li>
            <li>Eloquent ORM & Query Builder</li>
            <li>Blade Templating Engine</li>
            <li>Authentication & Authorization</li>
            <li>RESTful APIs & AJAX</li>
            <li>Database Migrations & Seeding</li>
            <li>Laravel Livewire & Inertia.js</li>
            <li>Testing & Debugging in Laravel</li>
        </ul>
    </div>
    <div class="w-full lg:w-1/3">
        <img src="../images/laravel.png"
            alt="Laravel Image" class="w-full h-auto rounded-md">
    </div>
</div>

<!-- Laravel Code Snippets Section -->
<div class="container mx-auto p-8 mb-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-400">Laravel Code Snippets:</h2>
    <div class="code-block text-black">
        <p class="mb-2">Basic Route Example:</p>
        <pre class="whitespace-pre-wrap">
Route::get('/about', function () {
    return view('about');
});
        </pre>

        <p class="mb-2">Eloquent Query Example:</p>
        <pre class="whitespace-pre-wrap">
$users = User::where('status', 'active')->orderBy('name')->get();
        </pre>
    </div>
</div>

<!-- Laravel Video Showcase Section -->
<div class="container mx-auto p-8 mt-5">
    <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-12 mt-17">
        <div class="lg:w-1/2">
            <h1 class="text-4xl font-serif underline mb-9 text-blue-400">My Laravel Project:</h1>
            <div class="mb-6">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/EMP0RciGICg?si=uCB88H1X5DuMgGeu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="lg:w-1/2 text-gray-800">
            <h2 class="text-3xl font-bold mb-4 text-blue-400">Project Overview</h2>
            <p class="text-lg mb-4 text-white">
                In this Laravel project, I demonstrate how to build a Car Web Services using Laravel.
                Watch the video to see FrontEnd Side of It,and build dynamic UIs with Blade
                and Tailwind CSS.
            </p>
        </div>
    </div>
</div>

<!-- GitHub Repo Link -->
<section class="bg-blue-500 text-white text-center py-4">
    <div class="container mx-auto">
        <p class="mb-4 text-xl">Explore the code on GitHub:
            <a href="https://github.com/MadinBloch/Laravel-Projects" target="_blank" class="underline">GitHub Repo</a>
        </p>
    </div>
</section>

@endsection
