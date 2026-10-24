<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#e9eaef">
    <title>Sign Up | Taskflow</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-[#e9eaef] px-4 py-8 font-sans text-[#252832] antialiased sm:px-8">
    <main class="mx-auto flex min-h-[calc(100vh-4rem)] max-w-6xl items-center justify-center">
        <div class="grid w-full overflow-hidden rounded-[1.75rem] bg-[#fafafa] shadow-xl shadow-slate-900/10 lg:min-h-[650px] lg:grid-cols-2">
            <aside class="flex items-center justify-center bg-gradient-to-br from-[#ff9f16] via-[#ff7130] to-[#ff4c3c] px-8 py-12 text-center text-white sm:px-14 lg:px-12">
                <div class="max-w-md">
                    <svg class="mx-auto mb-5 h-8 w-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M13 5h5a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5m-2-4 4-3-4-3m4 3H4" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h1 class="text-3xl font-bold tracking-tight sm:text-4xl">Welcome Back!</h1>
                    <p class="mx-auto mt-5 max-w-sm text-base leading-6 text-white/90 sm:text-lg">
                        To keep connected with us please log in with your personal info
                    </p>
                    <a
                        href="/login"
                        class="mt-8 inline-flex min-w-44 items-center justify-center gap-2 rounded-full border-2 border-white/70 px-7 py-3 text-sm font-bold tracking-wide text-white transition hover:bg-white hover:text-[#f45a36] focus:outline-none focus:ring-4 focus:ring-white/30"
                    >
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="m14 18-6-6 6-6M8 12h12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        LOG IN
                    </a>
                </div>
            </aside>

            <section class="flex items-center justify-center px-6 py-10 sm:px-12 sm:py-12 lg:px-12 xl:px-16">
                <div class="w-full max-w-md">
                    <h2 class="text-center text-4xl font-bold tracking-tight sm:text-5xl">Sign Up</h2>

                    <div class="mt-5 flex items-center justify-center gap-7" aria-label="Social sign-up options">
                        <span class="flex h-8 w-8 items-center justify-center text-[#252832]" aria-hidden="true">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.5 21v-8h2.7l.4-3.1h-3.1v-2c0-.9.3-1.5 1.6-1.5h1.7V3.6c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.1H7.3V13h2.8v8h3.4Z"/>
                            </svg>
                        </span>
                        <span class="flex h-8 w-8 items-center justify-center text-[#252832]" aria-hidden="true">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 5.9c-.7.3-1.5.5-2.3.6a4 4 0 0 0 1.8-2.2c-.8.5-1.7.8-2.6 1a4 4 0 0 0-6.9 3.6 11.4 11.4 0 0 1-8.3-4.2 4 4 0 0 0 1.2 5.3c-.7 0-1.3-.2-1.8-.5v.1c0 1.9 1.3 3.5 3.1 3.9-.6.2-1.2.2-1.8.1.5 1.6 2 2.7 3.8 2.8A8 8 0 0 1 2 18.1a11.3 11.3 0 0 0 6.1 1.8c7.3 0 11.3-6 11.3-11.3v-.5c.8-.6 1.4-1.3 2-2.2Z"/>
                            </svg>
                        </span>
                        <span class="flex h-8 w-8 items-center justify-center text-[#252832]" aria-hidden="true">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M12 2a10 10 0 0 0-3.2 19.5c.5.1.7-.2.7-.5v-1.8c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.3 1.1 2.9.8.1-.6.4-1.1.6-1.3-2.2-.3-4.5-1.1-4.5-5A3.9 3.9 0 0 1 6.7 9c-.1-.3-.5-1.3.1-2.7 0 0 .8-.3 2.8 1.1a9.7 9.7 0 0 1 5.1 0c2-1.4 2.8-1.1 2.8-1.1.6 1.4.2 2.4.1 2.7a3.9 3.9 0 0 1 1.1 2.7c0 3.9-2.4 4.7-4.6 5 .4.3.7.9.7 1.8V21c0 .3.2.6.7.5A10 10 0 0 0 12 2Z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                        <span class="flex h-8 w-8 items-center justify-center text-[#252832]" aria-hidden="true">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5.2 8.4H2V21h3.2V8.4ZM3.6 3a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 0 0 0-3.8ZM22 13.8c0-3.8-2-5.6-4.7-5.6-2.2 0-3.2 1.2-3.8 2V8.4h-3.2V21h3.2v-6.2c0-1.6.3-3.2 2.4-3.2 2 0 2.1 1.9 2.1 3.3V21h3.2l.8-7.2Z"/>
                            </svg>
                        </span>
                    </div>

                    <div class="my-5 flex items-center gap-4 text-sm text-[#a5a5a5]">
                        <span class="h-px flex-1 bg-[#d2d2d2]"></span>
                        <span>Or</span>
                        <span class="h-px flex-1 bg-[#d2d2d2]"></span>
                    </div>

                    <form action="/signup" method="post" class="space-y-3.5">
                        @csrf
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                autocomplete="name"
                                required
                                placeholder="name"
                                class="block w-full border border-transparent bg-[#ededed] px-4 py-3 text-[#252832] outline-none transition placeholder:text-[#858585] focus:border-[#ff6040] focus:bg-white focus:ring-2 focus:ring-[#ff6040]/15"
                            >
                        </div>

                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required
                                placeholder="email"
                                class="block w-full border border-transparent bg-[#ededed] px-4 py-3 text-[#252832] outline-none transition placeholder:text-[#858585] focus:border-[#ff6040] focus:bg-white focus:ring-2 focus:ring-[#ff6040]/15"
                            >
                        </div>

                        <div>
                            <label for="address" class="sr-only">Address</label>
                            <input
                                id="address"
                                name="address"
                                type="text"
                                autocomplete="street-address"
                                required
                                placeholder="address"
                                class="block w-full border border-transparent bg-[#ededed] px-4 py-3 text-[#252832] outline-none transition placeholder:text-[#858585] focus:border-[#ff6040] focus:bg-white focus:ring-2 focus:ring-[#ff6040]/15"
                            >
                        </div>

                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="password"
                                class="block w-full border border-transparent bg-[#ededed] px-4 py-3 text-[#252832] outline-none transition placeholder:text-[#858585] focus:border-[#ff6040] focus:bg-white focus:ring-2 focus:ring-[#ff6040]/15"
                            >
                        </div>

                        <div>
                            <label for="password_confirmation" class="sr-only">Confirm password</label>
                            <input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                autocomplete="new-password"
                                required
                                placeholder="confirm password"
                                class="block w-full border border-transparent bg-[#ededed] px-4 py-3 text-[#252832] outline-none transition placeholder:text-[#858585] focus:border-[#ff6040] focus:bg-white focus:ring-2 focus:ring-[#ff6040]/15"
                            >
                        </div>

                        <label class="flex cursor-pointer items-center gap-2 pt-1 text-sm text-[#aaa]">
                            <input
                                type="checkbox"
                                name="terms"
                                required
                                class="h-[18px] w-[18px] accent-[#ff5038] focus:ring-[#ff6040]"
                            >
                            <span>I accept the terms and conditions</span>
                        </label>

                        <button
                            type="submit"
                            class="w-full bg-[#ff4d35] px-5 py-3.5 text-base font-bold tracking-widest text-white transition hover:bg-[#ed402b] focus:outline-none focus:ring-4 focus:ring-[#ff6040]/30 active:scale-[0.99]"
                        >
                            REGISTER
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
