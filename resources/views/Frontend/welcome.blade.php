@extends('Frontend.layout.main')


@section('content')
    <!-- Main Content Start  -->

    <div class="container mx-auto mt-14 flex flex-col lg:flex-row items-center lg:items-start">
        <div class="lg:w-2/3 lg:ml-6 lg:pr-8">
            <h1 class="text-6xl font-serif mb-2 ml-3 max-sm:ml-5 mt-4 mx-3 max-sm:text-5xl">
                Welcome to My Profile
            </h1>
            <h1 id="typed-text"
                class="md:text-5xl  max-sm:text-4xl sm:text-5xl font-bold mb-4 opacity-0 transform -translate-y-4 transition duration-500 ml-3 mt-4 max-sm:ml-5 text-blue-600">
            </h1>
            <p class="text-xl from-slate-50 p-3 mt-1 max-sm:p-5 max-sm:text-balance font-sans">
                I am a Laravel developer with experience in backend and frontend development. I specialize in Laravel,
                Shopify, MySQL, and Tailwind CSS, creating user-friendly and responsive web applications.

                I enjoy building websites that are fast, functional, and visually appealing. With a strong understanding of
                database management and web design, I focus on writing clean and efficient code to bring ideas to life.

                I am always learning and improving my skills to create better web solutions. Explore my portfolio to see my
                work, and let’s build something great together! 🚀
            </p>
            <a href="{{ route('hackthone') }}">
                <button
                    class="bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 xl:ml-2 text-white font-bold px-6 max-sm:px-8 py-3 rounded-full transition duration-300 glow mt-4 max-sm:m-6 max-sm:text-xl">
                    Hackathon 2k23
                </button>
            </a>
            <a href="#">
                <button
                    class="bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300 xl:ml-2 text-white font-bold px-6 max-sm:px-8 py-3 rounded-full transition duration-300 glow mt-4 max-sm:m-6 max-sm:text-xl">
                    CV
                </button>
            </a>

        </div>
        <div class="lg:w-1/2">
            <div class="mx-auto max-w-[330px] h-[400px] overflow-hidden glow-container mt-4">
                <!-- Your Image -->
                <img src="../images/Web Developer.png" alt="Madin Bloch"
                    class="w-[330px] h-[400px] max-sm:w-[300px] transition-transform transform hover:scale-105 rounded-lg ">
            </div>
        </div>
    </div>

    <!-- Main Content End  -->


    <!-- Skills start  -->

    <div class="container m-auto" id="skills">
        <h2 href="" class="text-6xl font-bold mb-8 mt-[7%] text-center underline ">Skills</h2>
        <h2 class="text-3xl font-bold mb-8 mt-[4%] text-center">Tech Stack</h2>

        <!-- Grid for Tech Stack -->
        <div class="grid grid-cols-1 max-sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Skill Card -->
            <div class="w-full tap-transp">
                <div class="upward-hover-div h-full w-full lg:w-70 lg:h-60  cursor-pointer tap-transp glow-container">
                    <a href="{{route('laravel')}}">
                        <img src="../images/laravel.png" alt="HTML"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105">
                    </a>
                </div>
            </div>

            <div class="w-full tap-transp">
                <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60 ">

                    <a href="#">
                        <img src="../images/bootstrap.jpeg" alt="CSS"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </a>
                </div>
            </div>

            <div class="w-full tap-transp">
                <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                    <a href="#">    
                        <img src="../images/mysql-com-icon.avif" alt="JavaScript"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </a>
                </div>
            </div>

            <div class="w-full tap-transp">
                <a href="{{ route('tailwind') }}">
                    <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                        <img src="../images/tailwind.png" alt="React"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </div>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 max-sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <!-- Skill Card -->
            <div class="w-full tap-transp">
                <a href="{{ route('html') }}">
                    <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                        <img src="../images/html5.png" alt="HTML"
                            class="w-full h-full object-cover p-18 rounded-gradient transition-transform transform hover:scale-105 lg:w-130 lg:ml-3">
                    </div>
                </a>
            </div>

            <div class="w-full tap-transp">
                <a href="{{ route('css') }}">
                    <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                        <img src="../images/css-removebg-preview.png" alt="CSS"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </div>
                </a>
            </div>

            <div class="w-full tap-transp">
                <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                    <a href="#">
                        <img src="../images/js2.png" alt="JavaScript"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </a>
                </div>
            </div>

            <div class="w-full tap-transp">
                <a href="{{ route('php') }}">
                    <div class="upward-hover-div w-full h-full cursor-pointer tap-transp glow-container lg:w-70 lg:h-60">
                        <img src="../images/phpdark-removebg-preview.png" alt="React"
                            class="w-full h-full object-cover p-5 rounded-gradient transition-transform transform hover:scale-105 lg:w-60 lg:ml-7">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Skills End  -->

    <!-- About Section Start  -->

    <div class="container mx-auto my-14 text-center" id="about">
        <h2 class="text-5xl font-bold mb-8 mt-7 underline text-primary">About Me</h2>
    
        <div class="max-w-3xl mx-auto">
            <h1 class="text-6xl font-serif mb-4 max-sm:text-5xl">
                <p class="text-2xl font-serif leading-relaxed">
                    Hi, I'm <span class="font-bold text-accent">Bloch Madin</span>, a passionate web developer with a strong foundation in various technologies.
                </p>
            </h1>
    
            <ul class="list-none text-xl font-medium mt-4 space-y-2">
                <li><i class="fa-solid fa-star text-yellow-400"></i> Web Developer</li>
                <li><i class="fa-solid fa-star text-yellow-400"></i> Laravel Developer</li>
            </ul>
    
            <p class="text-xl mt-6 font-sans leading-relaxed px-4">
                Currently pursuing a Bachelor of Computer Applications (BCA) at Dr. Subhash University , 
                I am in my final year of the program. My education has provided me with strong knowledge in web development, programming fundamentals, and database management.
            </p>
        </div>
    </div>
    

    <!-- About Section End -->

    <!-- Contact Form Start  -->

    <section class="">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-6 text-4xl tracking-tight font-extrabold text-center text-white dark:text-white">Contact Us
            </h2>
            <p class="mb-10 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue?
                Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            <form action="https://getform.io/f/0a56b63d-49ff-4dd0-b1ce-b51ab0ae4f21" method="POST" class="space-y-8">
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Name</label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Name" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        Email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Example@gmail.com" required>
                </div>
                <div class="mb-4">
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" required>
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        Message</label>
                    <textarea id="message" name="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..." required></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-500  w-full sm:w-auto hover:bg-blue-700  focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                    Message</button>
            </form>
        </div>
    </section>

    <!-- Contact Form End  -->
@endsection
