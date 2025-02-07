@extends('Frontend.layout.main')

@section('content')

    <!-- Main Content Start  -->

    <h1 class="text-5xl text-center mt-5 font-extrabold text-blue-400 ">Hackathon 2k23</h1>
    <div class="container mx-auto p-8 mt-5">
        <div class="flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-12 mt-17">

            <!-- Left Side - Content -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl font-serif underline mb-9 text-white "> Hackathon Project Video </h1>
                <div class="mb-6">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/yLy_fBdOT7M?si=3-gKEv5EoPdaRoVJ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <h1 class="text-4xl font-serif underline mb-9 text-white ">Regional Round Video </h1>
                <div class="mb-6">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/N-U6c92QPeA?si=dxcfMfDgnQ74BdNB" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="lg:w-1/2 text-gray-800">

                <h2 class="text-3xl font-bold mb-4 text-blue-400 ">Hackathon Achievement</h2>
                <p class="text-lg mb-4 text-white ">
                    I'm thrilled to share with you that I recently participated in the Grand Final of "New India Vibrant
                    Hackathon - 2023". This experience has been a priceless journey, where I made new friends and gained
                    a wealth of knowledge.
                    <br><br>
                    Receiving the certificate for the final round is an honor, achieved through hard work and
                    dedication. This hackathon tested my technical skills and provided an opportunity to reach a new
                    level. I've always wanted to push my limits, and this hackathon was the perfect platform for that
                    challenge.
                    <br><br>
                    Throughout this journey, I realized the importance of teamwork and the joy of collaboration. My
                    fellow hackers became my mentors, and together we supported each other. It was teamwork that proved
                    instrumental in reaching the final round.
                    <br><br>
                    I want to express my gratitude to the organizers Pandit Deendayal Energy University (PDEU) of the
                    Hackathon for creating such a fantastic event. Their vision, planning, and execution are truly
                    commendable.
                    <br><br>
                    During this journey, I had the opportunity to learn new programming languages, and I've come to
                    understand that every challenge is an opportunity to learn.
                    <br><br>
                    In closing, I want to thank my fellow hackers who joined me on this journey. Working with all of you
                    has given me new perspectives and new friendships.
                    <br><br>
                    I am excited about the challenges and opportunities ahead, and I hope we can continue to inspire
                    each other as we reach new heights in the world of technology.
                </p>
            </div>
        </div>

        <!-- New Section for Certificates and Images -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold mb-4 text-center text-blue-400 ">Certificates and Images</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Replace these image paths with your actual images -->
                <img src="../images/certificateHackthnone.jpg" alt="Certificate 1" class="w-full h-auto rounded-lg">
                <img src="../images/imag1hackthone.jpg" alt="Certificate 2" class="w-full h-auto rounded-lg">
                <img src="../images/image2hackthone.jpg" alt="Certificate 3" class="w-full h-auto rounded-lg">
                <img src="../images/image3hackthone.jpg" alt="Certificate 4" class="w-full h-auto rounded-lg">
                <img src="../images/image5.jpg" alt="Certificate 7" class="w-full h-auto rounded-lg">
                <img src="../images/image9.jpg" alt="Certificate 8" class="w-full h-auto rounded-lg">
                <img src="../images/image7.jpg" alt="Certificate 9" class="w-full h-auto rounded-lg">

            </div>
            <p class="mt-8 text-center text-white ">
                Thanks For Visiting! Click to See My <a href="index.html#skills"
                    class="text-blue-600 hover:text-indigo-900">Skills More</a>
            </p>
        </div>
    </div>

    <!-- Main Content End  -->


@endsection