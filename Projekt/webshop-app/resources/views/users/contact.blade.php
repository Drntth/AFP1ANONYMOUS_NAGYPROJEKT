<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-custom-bg bg-fixed bg-cover">
    <div x-data="{ open: @if($errors->any()) true @else false @endif }" x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-custom-bg p-6 rounded-lg shadow-lg w-11/12 max-w-md text-center">
            <h2 class="text-white font-bold text-xl mb-4">Errors</h2>
            <div id="error-messages" class="text-white font-bold text-left ml-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button
                @click="open = false; window.location.href='{{ route('contact.create') }}';"
                class="text-white px-3 py-1 mt-5 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">
                Close
            </button>
        </div>
    </div>
    <div class="w-11/12 max-w-xl absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
        <div>
            <div class="p-4 shadow-2xl shadow-black rounded-lg backdrop-blur-3xl border-slate-500 border-4">
                <h1 class="text-white text-lg text-center pb-5">Contact Us</h1>
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    @method('POST')
                    <div>
                        <label class="text-white" for="name">Name</label>
                        <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="text" name="name" id="name" placeholder="Name" value="{{ old('name', auth()->check() ? auth()->user()->name : '') }}">
                    </div>

                    <div class="pt-2">
                        <label class="text-white" for="email">Email</label>
                        <input class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" type="email" name="email" id="email" placeholder="Email" value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}">
                    </div>

                    <div class="pt-2">
                        <label class="text-white" for="message">Message</label>
                        <textarea class="block mt-1 w-full rounded-md focus:border-slate-600 focus:ring-slate-600 border-2" name="message" id="message" placeholder="Your message">{{ old('message') }}</textarea>
                    </div>

                    <div class="pt-5 flex justify-between flex-col space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                        <a href="/" class="text-center text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600">Back</a>
                        <button class="text-white px-3 py-1 rounded-md bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-0 focus:ring-transparent ring-offset-transparent active:bg-slate-600" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
