@extends('Frontend.layout.main')

@section('content')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .highlight {
            background-color: #f3f3f3;
        }

        .code-block {
            background-color: #f7fafc;
            border: 1px solid #cbd5e0;
            border-radius: 0.375rem;
            padding: 1rem;
            margin-top: 1.5rem;
            overflow-x: auto;
        }

        .image-container {
            max-width: 100%;
            margin: 2rem 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1.5rem;
        }

        th,
        td {
            border: 1px solid #e2e8f0;
            padding: 0.75rem;
            text-align: left;
        }

        @media only screen and (max-width: 700px) {

            iframe {
                width: 340px !important;
                height: 300px;
            }

            #start {
                flex-direction: column;
            }

            #start img {
                margin-top: 14px;

            }
        }

        @media only screen and (max-width: 1000px) {


            #start {
                flex-direction: column;
            }

            #start img {
                margin-top: 14px;

            }
        }
    </style>



    <!-- Header Section -->
    <header class=" text-blue-400 text-center py-4">
        <h1 class="text-4xl font-bold mt-5">PHP Showcase</h1>
        <p class="mt-2">Exploring the Power of PHP</p>
    </header>

    <!-- Content Section -->
    <section class="container mx-auto p-8 my-4">

        <!-- Introduction to PHP -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-blue-400">PHP: Server-Side Scripting Language</h2>
            <p class="text-lg text-white">
                PHP is a widely-used server-side scripting language that is especially suited for web development. It is
                embedded in HTML code and executed on the server, generating dynamic content for web pages.
            </p>
        </div>

        <!-- Key Topics in PHP -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-blue-400">Key Topics in PHP that I Know </h2>
            <ul class="list-item pl-5 text-lg">
                <li class="text-white">1. **Variables and Data Types:** Learn how to declare variables and work with
                    different data types.</li>
                <li class="text-white">2. **Control Structures:** Understand if statements, loops, and switch
                    statements for flow control.</li>
                <li class="text-white">3. **Functions:** Explore the creation and use of functions in PHP.</li>
                <li class="text-white">4. **Arrays:** Learn about indexed arrays, associative arrays, and array
                    functions.</li>
                <li class="text-white">5. **Database Interaction:** Connect to databases and perform CRUD operations
                    with PHP.</li>
            </ul>
        </div>

        <!-- Showcase Your PHP Project -->
        <div class="mb-8">
            <h2 class="text-4xl font-bold mb-4 text-blue-400">Showcase My PHP Project</h2>
            <p class="text-lg text-white">
                Explore a project created using PHP. Watch the video to see how PHP was applied, and gain insights into
                the development process.
            </p>
            <div class="mt-9 flex justify-between" id="start">
                <!-- YouTube Video Embeds for PHP Project -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yLy_fBdOT7M?si=xtMyB6sbIxgwDYaf"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>

        <h2 class="text-4xl font-bold mb-4 text-blue-400">Php Payment Integrated</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-fUR7kieisU?si=W5P083JdayT4Kuza"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        <!-- GitHub Repository Section -->
        <div class="mb-8">
            <a href="/index.html#skills" class="font-bold text-indigo-500">
                <h2 class="text-2xl font-bold mt-5 text-blue-400">See More Skills..</h2>
            </a>
        </div>

    </section>


@endsection