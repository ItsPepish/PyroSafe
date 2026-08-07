        <aside class="hidden w-64 shrink-0 flex-col bg-[#10222b] text-[#dee6e9] lg:flex">
            <div class="flex h-16 items-center border-b border-[#283b45] px-5">
                <p class="font-semibold text-2xl text-[#dee6e9]">Pyro<span class="text-[#0f7688]">Safe</span></p>
            </div>
            <nav class="flex-1 space-y-1 p-3">
                <button type="button" class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-colors text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9] cursor-pointer">
                    <x-icons.resum/>
                    Resumen
                </button>
                <button type="button" class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-colors text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9] cursor-pointer">
                    <x-icons.report/>
                    Reportes
                </button>
                <button type="button" class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-colors text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9] cursor-pointer">
                    <x-icons.map3/>
                    Establecimientos
                </button>
                <button type="button" class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-colors text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9] cursor-pointer">
                    <x-icons.book2/>
                    Publicaciones
                </button>
            </nav>
            <div class="border-t border-[#283b45] p-3">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex w-full items-center gap-2 rounded-lg px-3 py-2.5 text-sm text-[#dee6e9]/70 hover:bg-[#1b313d]/60 hover:text-[#dee6e9]">
                        <x-icons.logout/>
                        Logout
                    </button>
                </form>
            </div>
        </aside>