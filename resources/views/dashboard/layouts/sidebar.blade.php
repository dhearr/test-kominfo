<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-hero dark:bg-slate-900">
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
            type="button" class="ml-48 text-sm text-cyan-500 rounded-lg md:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-x-lg" viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
        </button>
        <a class="flex items-center pl-2.5 mb-4 text-xl md:text-3xl text-sky-700 font-bold leading-none">
            <img src="img/logo.png" alt="logo" width="150">
        </a>
        <form>
            <div class="relative">
                <input type="search" id="default-search"
                    class="block w-full p-2 mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-cyan-300 focus:border-cyan-300 dark:bg-gray-300"
                    placeholder="search...">
                <button type="submit"
                    class="text-white absolute right-1 bottom-2 bg-cyan-500 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-2 py-1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </div>
        </form>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="{{ request()->is('dashboard') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-cyan-500 hover:text-white group dark:text-white">
                    <svg class="{{ request()->is('dashboard') ? 'active' : '' }} w-5 h-5 text-gray-500 transition duration-75 group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/posts"
                    class="{{ request()->is('dashboard/posts*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-cyan-500 hover:text-white group dark:text-white">
                    <svg class="{{ request()->is('dashboard/posts*') ? 'active' : '' }} w-5 h-5 text-gray-500 transition duration-75 group-hover:text-white dark:group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-postcard-fill" viewBox="0 0 16 16">
                        <path d="M11 8h2V6h-2v2Z" />
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm8.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5ZM2.5 7a.5.5 0 0 0 0 1H6a.5.5 0 0 0 0-1H2.5ZM2 9.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5Zm8-4v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Z" />
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Data Pasien</span>
                </a>
            </li>
        </ul>
        @can('admin')
            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-gray-400 font-semibold">
                <span>Administrator</span>
            </h6>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/dashboard/categories"
                        class="{{ request()->is('dashboard/categories*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-cyan-500 hover:text-white group dark:text-white">
                        <svg class="{{ request()->is('dashboard/categories*') ? 'active' : '' }} w-5 h-5 text-gray-500 transition duration-75 group-hover:text-white dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Post Categories</span>
                    </a>
                </li>
            </ul>
        @endcan
        <form action="/logout" method="post" class="block lg:hidden mt-[300px]">
            @csrf
            <button
                class="block px-4 py-2 w-full font-semibold rounded-full bg-cyan-500 text-sm text-white hover:bg-cyan-600"
                type="submit">
                Logout
            </button>
        </form>
    </div>
</aside>
