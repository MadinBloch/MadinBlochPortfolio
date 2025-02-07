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
                width: 350px !important;
                height: 320px;
            }

            #start {
                flex-direction: column;
                gap: 25px;
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





    <header class="  text-white text-center py-4">
        <h1 class="text-4xl font-bold mt-5">Tailwind CSS Showcase</h1>
        <p class="mt-5">Exploring the Power of Tailwind CSS</p>
    </header>

    <!-- Content Section -->
    <section class="container mx-auto p-8 my-4">

        <!-- Introduction to Tailwind CSS -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-indigo-200">Tailwind CSS: A Utility-First Framework</h2>
            <p class="text-lg">
                Tailwind CSS is a utility-first CSS framework that simplifies the process of styling your web pages.
                Unlike traditional CSS frameworks, Tailwind doesn't provide pre-designed components; instead, it offers
                a
                set of low-level utility classes that you can apply directly in your HTML markup.

            </p>
        </div>

        <!-- Key Features of Tailwind CSS -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-indigo-200">Key Features of Tailwind CSS</h2>
            <ul class="list-item pl-5 text-lg ">
                <li class="text-blue-400">1. **Utility-First:** Tailwind CSS is centered around utility classes,
                    providing
                    flexibility and speed in styling.</li>
                <li class="text-blue-400">2. **Responsive Design:** Easily create responsive layouts using Tailwind's
                    responsive
                    utility classes.</li>
                <li class="text-blue-400">3. **Customization:** Tailwind is highly customizable, allowing you to define
                    color
                    schemes, spacing, and more in your configuration.</li>
                <li class="text-blue-400">4. **No Vendor Prefixes:** Tailwind eliminates the need for vendor prefixes
                    by
                    handling them automatically.</li>
                <li class="text-blue-400">5. **Optimized for Speed:** The generated CSS is optimized for production,
                    ensuring
                    minimal file size.</li>
            </ul>
        </div>


        <!-- Showcase Your Project -->
        <div class="mb-8">
            <h2 class="text-4xl font-bold mb-4 text-indigo-200">Showcase My Tailwind CSS Project</h2>
            <p class="text-lg">
                Explore a project created using Tailwind CSS. Watch the video to see how Tailwind CSS was applied and
                gain insights into the development process.
            </p>
            <div class="mt-9 flex justify-between" id="start">
                <!-- YouTube Video Embed -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PcBOCer0Vfo?si=uRmy9RAEQ_AYJSB_"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/8PF8-QACqJU?si=TcXj2jbSXectJv78"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>


        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-indigo-200">GitHub Repository</h2>
            <p class="text-lg">
                Check out the source code and collaborate on GitHub:-
                <a href="https://github.com/MadinBloch/Talwind-Journey" class="font-bold text-blue-400"
                    target="_blank">Tailwind CSS Project on GitHub</a>.
            </p>
        </div>
        <!-- Getting Started with Tailwind CSS -->


        <!-- Learn More with Videos -->


        <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-12 mt-17">

            <!-- Left Side - Content -->
            <div class="mb-8">
                <a href="/index.html#skills" class="font-bold text-indigo-500">
                    <h2 class="text-2xl font-bold mt-5 text-blue-400">See More Skills..</h2>
                </a>
            </div>
        </div>
        <section class="bg-blue-500 text-white text-center py-4">
            <div class="container mx-auto">
                <p class="mb-4 text-xl">Explore the code on GitHub: <a
                        href="https://github.com/MadinBloch/Talwind-Journey"
                        class="underline">GitHub
                        Repo</a></p>
            </div>
        </section>

        <!-- New Section for Certificates and Images -->

    </section>
  
@endsection