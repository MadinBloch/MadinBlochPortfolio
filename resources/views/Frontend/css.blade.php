@extends('Frontend.layout.main')
@section('content')

<style>
       
    
    </style>



    <!-- Main Content Start -->

    <div class="container mx-auto p-8 mt-5 text-center">
        <h1 class="text-4xl font-bold mb-4 text-blue-400">CSS Skills Showcase</h1>
        <p class="text-lg text-white">Explore the world of CSS with my showcased skills in various areas.</p>
    </div>

    <!-- CSS Topics Section -->
    <div class="container mx-auto p-8 mt-5 mb-8 flex justify-between" id="start">
        <div class="w-full md:w-2/3">
            <h2 class="text-4xl font-bold mb-4 text-blue-400">CSS Topics I Know :</h2>
            <ul class="list-item pl-5 text-lg font-medium text-white">
                <li>CSS Selectors</li>
                <li>CSS Box Model</li>
                <li>Flexbox and Grid Layout</li>
                <li>CSS Animations</li>
                <li>Transitions</li>
                <li>Responsive Design with CSS</li>
                <li>Tailwind CSS</li>
                <li>Advanced CSS Techniques</li>
            </ul>
        </div>
        <div class="w-full md:w-1/3">
            <img src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y3NzfGVufDB8fDB8fHww"
                alt="CSS Image" class="w-full h-auto rounded-md">
        </div>
    </div>

    <!-- CSS Code Snippets Section -->
    <div class="container mx-auto p-8 mb-8">
        <h2 class="text-2xl font-bold mb-4 text-blue-400">CSS Code Snippets:</h2>
        <div class="code-block  text-black ">
            <p class="mb-2 ">Centering an Element:</p>
            <pre class="whitespace-pre-wrap">
.center {
  display: flex;
  justify-content: center;
  align-items: center;
}
            </pre>

            <p class="mb-2">Creating a Responsive Grid:</p>
            <pre class="whitespace-pre-wrap">
.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 16px;
}
            </pre>
            
        </div>
    </div>

    <!-- YouTube Video Section -->
    <div class="container mx-auto p-8 mt-5">
        <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-12 mt-17">
            <div class="lg:w-1/2">
                <h1 class="text-4xl font-serif underline mb-9 text-blue-400">MY CSS Project : </h1>
                <div class="mb-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/y4Hl6KLlxu8?si=zgSLOcdOLUM9gLwf"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="lg:w-1/2 text-gray-800">
                <h2 class="text-3xl font-bold mb-4 text-blue-400">Context of Video</h2>
                <p class="text-lg mb-4 text-white">
                    Join me in this CSS project showcase where I unveil a collection of diverse websites and their
                    captivating designs! From sleek portfolios to dynamic landing pages, each project demonstrates the
                    power of CSS in creating visually appealing and responsive web experiences.
                </p>
            </div>
        </div>
        <!-- New Section for Certificates and Images -->
        <div class="mb-8 text-blue-400">
            <a href="#" class="font-bold ">
                <h2 class="text-2xl font-bold mt-5 ">See More Skills..</h2>
            </a>
        </div>
    </div>

    <!-- GitHub Repo Link -->
    <section class="bg-blue-500 text-white text-center py-4">
        <div class="container mx-auto">
            <p class="mb-4 text-xl">Explore the code on GitHub:
                <a href="https://github.com/MadinBloch/Web-Development-2.0-Course-Repository" target="_blank"
                    class="underline">GitHub
                    Repo</a>
            </p>
        </div>
    </section>
    <!-- Main Content  End  -->

@endsection