
<div class="">
    <header class="bg-cyan-400">
        <nav class="flex items-center justify-between px-12 h-16 lg:gap-8">
            <a href="" class="text-2xl font-bold border-2 px-2 py-1 whitespace-nowrap">Ven y da un vistazo</a>


            <div class="dropdown-menu abosolute -top-full left-0 max-lg:bg-cyan-400 w-full flex flex-col gap-6 items-center py-2 text-lg font-bold lg:static lg:flex-row lg:justify-between">

                <ul class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8">
                    <li class="hover:text-cyan-700">Home</li>
                    <li class="hover:text-cyan-700 whitespace-nowrap">Blog</li>
                    <li class="hover:text-cyan-700">Quienes somos</li>
                    <li class="hover:text-cyan-700">Nuevos productos</li>
                </ul>
            

                <div class="flex flex-col items-center  gap-6 lg:flex-row lg:gap-8">
                    <button class="hover:text-cyan-700">Iniciar sesion</button>
                    <button class="bg-cyan-700 rounded-lg px-2 py-1 whitespace-nowrap">Registrarse</button>
                </div>
        </div>

        <div class="toggle-button lg:hidden">
            <i class="fa-solid fa-bars fa-lg"></i>
        </div>

        </nav>
    </header>

    <script>

        const toggleBtn = document.querySelector(".toggle-button");
        const dropdown = document.querySelector(".dropdown-menu");


        toggleBtn.addEventListener("click", ()=> {
            dropdown.classList.toggle('top-16')
        })

    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }

    </script>

</div>






    