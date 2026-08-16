<aside class="hidden shrink-0 flex-col bg-[#10222b] text-[#dee6e9] lg:flex">
    <div class="flex h-16 items-center justify-center border-b border-[#283b45] px-5">
        <p class="text-2xl font-semibold text-[#dee6e9]">Pyro<span class="text-[#0f7688]">Safe</span></p>
    </div>
    <nav class="flex-1 space-y-1 p-3">
        <a
            href="{{ route('admin.reports.index') }}"
            class="flex w-full cursor-pointer items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-[#dee6e9]/70 transition-colors hover:bg-[#1b313d]/60 hover:text-[#dee6e9]">
            <x-icons.report />
            Reportes
        </a>
        <a
            href="{{ route('admin.establishments.index') }}"
            class="flex w-full cursor-pointer items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-[#dee6e9]/70 transition-colors hover:bg-[#1b313d]/60 hover:text-[#dee6e9]">
            <x-icons.map3 />
            Establecimientos
        </a>
        <a
            href="{{ route('admin.publications.index') }}"
            class="flex w-full cursor-pointer items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-[#dee6e9]/70 transition-colors hover:bg-[#1b313d]/60 hover:text-[#dee6e9]">
            <x-icons.book2 />
            Publicaciones
        </a>
    </nav>
    <div class="border-t border-[#283b45] p-3">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="flex w-full cursor-pointer items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9]">
                <x-icons.logout />
                Logout
            </button>
        </form>
    </div>
</aside>
