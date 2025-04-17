<button class="btn-open cursor-pointer p-2 bg-shape rounded text-white font-medium m-2 absolute top-0 left-0">
    Menu
</button>
    <header class="bg-primary text-white px-4 pt-12 h-full absolute top-0 -left-full transition-all z-20 shadow-2xl shadow-black/70">
        <div class="header-content relative">
            {{-- <div class="btn-close "> --}}
                <button class="btn-close absolute cursor-pointer -top-11 right-0 font-bold bg-shape rounded-full  text-xl w-10 h-10">
                    x
                </button>
            {{-- </div> --}}
            <h1 class="text-3xl font-medium">{{ $page }}</h1>
        </div>
        <nav>
            <ul class="flex flex-col font-medium gap-3">
                <div class="flex gap-3">
                    <li>
                        <a href={{ route('admin.home') }}>Home</a>
                    </li>
                    @if (auth('admin')->check())
                        
                    <li class="">
                        <form action={{ route('logout') }} method="post">
                            @csrf
                            <button type="submit">Sair</button>
                        </form>
                    </li>
                    @endif
                </div>
                <div class="mt-4 flex flex-col gap-4 text-center w-full text-2xl">
                    {{ $links }}
                </div>
            </ul>
        </nav>
    </header>
    
<Script>
    const btnClose = document.querySelector('.btn-close');
    const btnOpen = document.querySelector('.btn-open');
    const header = document.querySelector('header');
    btnClose.addEventListener('click', () => {
        header.classList.toggle('-left-full');
    })
    btnOpen.addEventListener('click', () => {
        header.classList.toggle('-left-full');
    })
</Script>