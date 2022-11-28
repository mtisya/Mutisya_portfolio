<!doctype html>

<title>Mutisya Portfolio</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
html {
    scroll-behavior: smooth;
}    
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="">
        <nav class="md:flex md:justify-between md:items-center">
            <div class="">
                <a href="/">
                    <img src="/images/logo7.png" alt="Company Logo" width="200" height="50" class="rounded-xl">
                </a>

            </div>

            <div class="y-2 md:flex md:justify-left md:items-center" style="flex-grow: 30">
                <a href="/samtish2010@gmail.com" class="ml-4">
                    <img src="/images/emailimage.jpg" alt="Company Logo" width="30" height="2"></a>
                <a href="/www.facebook.com" class=""><img src="/images/fbimage.jpg" alt="Company Logo" width="40" height="2"></a>
                <a href="/www.whatsapp.com" class=""><img src="/images/whatsappimage.jpg" alt="Company Logo" width="40" height=""></a>
                <p class="text-xs text-red-500 ml-4 font-semibold">Tel No. +254-714-795-773 / +254-716-940-422</p>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">

                @auth
	                <x-dropdown>
	                	<x-slot name="trigger">
	                	<button class="text-xs font-bold uppercase">Welcome,  {{ auth()->user()->name }}!
	                	</button>
	            		</x-slot>
	            		<x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
	            		<x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
	            		<x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

	            	<form id="logout-form" method="POST" action="/logout" class="hidden">
                    	@csrf

                    </form>
	            	</x-dropdown> 

                @else
                    <a href="#timeline" class="text-xs text-purple-700 font-bold uppercase">Timeline</a>
                    <a href="#portfolio" class="ml-4 text-xs text-purple-700 font-bold uppercase">Portfolio</a>
                    <a href="#blog" class="ml-4 text-xs text-purple-700 font-bold uppercase">My Blog</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

       {{ $slot }}

        <footer id="newsletter" class="bg-blue-200 border border-black border-opacity-5 text-center py-6 px-10 mt-16">

            <h5 class="text-xl">Stay in touch with the latest work and projects</h5>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                            <input id="email" name="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                            @error('email')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
<!--                 <p class="text-16xs font-bold text-purple-700 mt-10">Copyrights@ | Mutisya Softwares 2022</p>
 -->            </div>
        </footer>
    </section>

<x-flash />

</body>
