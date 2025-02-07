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


    <div class="container mx-auto p-8 mt-5">

        <!-- Header Section -->


        <!-- HTML Topics Section -->
        <div class="mb-8 flex justify-between" id="start">
            <div class="">
                <h2 class="text-4xl font-bold mb-4 text-blue-400">HTML Topics I Know:</h2>
                <ul class="list-item pl-5  text-2xl font-medium">
                    <li class="text-white">HTML Basics</li>
                    <li class="text-white">HTML5 Features</li>
                    <li class="text-white">Semantic HTML</li>
                    <li class="text-white">Forms and Input Elements</li>
                    <li class="text-white">Tables and Lists</li>
                    <li class="text-white">Responsive Web Design with HTML</li>
                    <li class="text-white">HTML Accessibility</li>
                    <li class="text-white">Canvas and SVG</li>
                    <li class="text-white">Audio and Video Elements</li>
                </ul>
            </div>
            <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aHRtbHxlbnwwfHwwfHx8MA%3D%3D"
                alt="" class="w-[30%]">
        </div>

        <!-- Common HTML Elements Section -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-4 text-blue-400">Common HTML Elements:</h2>
            <table class="w-full text-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border bg-indigo-500 text-black">Element</th>
                        <th class="py-2 px-4 border bg-indigo-500 text-black">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">h1, h2, h3, ..., h6</td>
                        <td class="py-2 px-4 border">Heading Elements</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">p</td>
                        <td class="py-2 px-4 border">Paragraph</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">a</td>
                        <td class="py-2 px-4 border">Anchor (Link)</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">img</td>
                        <td class="py-2 px-4 border">Image</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">ul, ol, li</td>
                        <td class="py-2 px-4 border">Lists</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">table, tr, td</td>
                        <td class="py-2 px-4 border">Table Structure</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">form, input, button</td>
                        <td class="py-2 px-4 border">Forms</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Code Snippets Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4 text-blue-400">Code Snippets:</h2>
            <div class="code-block  text-black">
                <p class="mb-2">Basic HTML Structure:</p>
                <pre class="whitespace-pre-wrap">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My HTML Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
            </div>
        </div>




        <div class="container mx-auto p-8 mt-5">
            <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-12 mt-17">

                <!-- Left Side - Content -->
                <div class="lg:w-1/2">
                    <h1 class="text-4xl font-serif underline mb-9 text-blue-400">Emmet Explained: </h1>
                    <div class="mb-6">

                        <iframe class="max-sm:w-[200px]" width="560" height="315"
                            src="https://www.youtube.com/embed/LS1Ydc5R9Us?si=7GiL2nPv325Rnu0b"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>
                    <h1 class="text-4xl font-serif underline mb-9 text-blue-400">Div tag: </h1>
                    <div class="mb-6">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/L1zPyoMHNzM?si=Qxp6CzsAc-2EUeUk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <h1 class="text-4xl font-serif underline mb-9 text-blue-400">Unveiling the Web's Building Blocks
                    </h1>
                    <div class="mb-6">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/5K9OC6rz5_E?si=9f8FdUN8uvWvLBNs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Right Side - Content -->
                <div class="lg:w-1/2 text-white">

                    <h2 class="text-3xl font-bold mb-4 text-blue-400">Context of Viedo </h2>
                    <p class="text-lg mb-4 text-slate-300">
                        We dive deep into the world of Emmet, an essential tool for web developers. Whether you're a
                        beginner or an experienced developer, Emmet can revolutionize your HTML workflow, making you
                        more efficient and productive.
                        <br><br>
                        We explore the ins and outs of Emmet, uncovering its powerful features and demonstrating how it
                        can supercharge your web development skills. Get ready to unleash the full potential of Emmet
                        and take your HTML coding to the next level!
                        <br><br> <br>

                        We dive deep into the world of div tags. If you've ever wondered what div tags are and how they
                        work, this video is the perfect starting point for you. I'll guide you through the fundamentals,
                        explaining the purpose and functionality of div tags in HTML. From their role in structuring web
                        pages to their flexibility in styling and positioning elements, you'll gain a clear
                        understanding of how div tags form the backbone of modern web development. Join me on this
                        educational journey as we unravel the power of div tags in HTML!
                        <br> <br>
                        Whether you're a beginner or looking to enhance your skills, this series is your ultimate guide
                        to understanding HTML from scratch. Join us as we cover the essential concepts, tags, and
                        elements that form the backbone of the web. With hands-on projects and engaging assignments,
                        you'll gain practical experience and create impressive web pages that showcase your newfound
                        expertise. Get ready to unlock the potential of HTML and unleash your creativity in the digital
                        realm!


                    </p>
                </div>
            </div>

            <!-- New Section for Certificates and Images -->
            <div class="mb-8 text-blue-400">
                <a href="/index.html#skills" class="font-bold ">
                    <h2 class="text-2xl font-bold mt-5 ">See More Skills..</h2>
                </a>
            </div>
        </div>


@endsection