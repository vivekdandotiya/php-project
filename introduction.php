<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // If not logged in, redirect to the login page
    header("Location: login.html");
    exit(); // Ensure no further code is executed after redirect
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            cursor: none;
        }
        .cursor-dot {
            width: 10px;
            height: 10px;
            background-color: #3b82f6; 
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }
        .cursor-outline {
            width: 30px;
            height: 30px;
            border: 2px solid rgba(59, 130, 246, 0.5); 
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            transform: translate(-50%, -50%);
            z-index: 9998;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <div id="cursor-dot" class="cursor-dot"></div>
    <div id="cursor-outline" class="cursor-outline"></div>

    <div class="bg-gray-950 flex items-center justify-center text-xs py-2">
        We believe in good management. Do you?
    </div>

    <nav class="bg-gradient-to-r from-indigo-300 via-purple-300 to-pink-300 p-6 text-black font-bold shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-3xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600 flex items-center gap-2">
                TIME IS MONEY
            </a>
            <ul class="flex space-x-6">
                <li><a href="aboutus.html" class="hover:underline italic text-lg hover:text-purple-600 transition-all duration-300 hover:scale-110">About</a></li>
                <li><a href="services.html" class="hover:underline italic text-lg hover:text-purple-600 transition-all duration-300 hover:scale-110">Services</a></li>
                <li><a href="contact.html" class="hover:underline italic text-lg hover:text-purple-600 transition-all duration-300 hover:scale-110">Contact</a></li>
                <!-- Logout Button -->
                <li><a href="logout.php" class="hover:underline italic text-lg hover:text-purple-600 transition-all duration-300 hover:scale-110">Logout</a></li>

            </ul>
        </div>
    </nav>

    <!-- Welcome Message -->
    <div class="flex">
        <div>
            <h1 class="text-5xl font-bold italic mt-25 p-8 mx-40">A Better Way To</h1>
            <h2 class="text-5xl font-bold italic mx-40 underline text-blue-400 hover:text-blue-300 animate-bounce delay-700">Manage Event</h2>
            <p class="text-xl font-bold p-5 mx-40">-- World's Most Advanced Event Management Software powered by AI ....</p>
        </div>
    </div>
    
    <!-- Content Section 1 -->
    <div class="flex space-x-20">
        <div class="py-20">
            <h1 class="text-4xl fonr-bold px-20 py-4 text-blue-600 italic">More than just planning</h1>
            <p class="px-3 text-xl font-bold">Organize meetings and events, invite your team members and <br> external users, plan your day.</p>
            <button class="p-2 px-2 text-2xl font-bold borde-3 bg-lime-600 text-white px-5 border rounded mx-20 my-5 italic hover:text-black duration-300 ease-in">
                <a href="calendar.html"> Start For Free</a>
            </button>
        </div>
        <div class="h-[50px] w-[600px]">
            <a href="calendar.html">
                <img class="rounded-xl" src="https://www.bitrix24.in/upload/optimizer/converted/images/content_en/product/collaboration/free_online_calendar_software/box_img_1.jpg.webp?1741952127945" alt="Event Management">
            </a>
        </div>
    </div>

    <!-- Content Section 2 -->
    <div class="flex space-x-20 p-20 rounded-xl">
        <div class="h-[50px] w-[600px]">
            <img id="slide-right-image" class="rounded-xl" src="https://www.bitrix24.in/upload/optimizer/converted/images/content_en/product/collaboration/free_online_calendar_software/box_img_2.jpg.webp?1741952127945" alt="">
        </div>
        
        <div class="py-20">
            <h1 class="text-4xl px-20 py-4 text-blue-600 italic">More than just organizing</h1>
            <p class="px-3 text-xl font-bold"> There’s so much you can do with a simple event in Bitrix24 Calendar: create a quick chat, set up an online meeting, or assign a task.</p>
            <button class="p-2 px-2 text-2xl font-bold borde-3 bg-lime-600 text-white px-5 border rounded mx-20 my-5 italic hover:text-black"><a href="calendar.html">Start For Free</a></button>
        </div>
    </div>

    <!-- Footer -->
    <div class="text-center">Privacy Policy | Terms of Service | Official Community | Creation Guideline | HOME Terms of Service</div>
    <div class="justify-center flex gap-7 p-3 ">
        <div>--@亗卄iṁąのれu</div>
        <div>--@ḐɽヤḌ٥５m</div>
    </div>
    <div class="justify-center flex gap-7 ">
        <div>--@ŠØUL๛Vivek</div>
        <div>--@Lîôṅ๛heart</div>
    </div>

    <script>
        const cursorDot = document.querySelector('#cursor-dot');
        const cursorOutline = document.querySelector('#cursor-outline');

        document.addEventListener('mousemove', (e) => {
            gsap.to(cursorDot, { x: e.clientX, y: e.clientY, duration: 0.01 });
            gsap.to(cursorOutline, { x: e.clientX, y: e.clientY, duration: 0.2, ease: "power2.out" });
        });
    </script>

</body>
</html>
