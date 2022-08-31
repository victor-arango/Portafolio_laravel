  <nav class="sidebar  {{NavbarActive('.*')}}">
          <header>
               <div class="image-text">
                    <span class="image">
                         <img src="{{ asset('img/logo va-01.svg') }}" alt="logo">
                    </span>
                    <div class="text header-text">
                         <span class="name">Victor Arango | Dev</span>
                         <span class="profession">Web developer</span>
                    </div>
               </div>

               <i class='bx bx-chevron-right toggle'></i>
           
          </header>

          <div class="menu-bar">
               <div class="menu">

                    <li class="search-box">
                         <i class='bx bx-search icon' ></i>
                         <input type="search" placeholder="Search..." class="search">
                    </li>
                    
                    <ul class="menu-liks">
                       
                         <li class="nav-link {{setActive('home')}} ">
                              <a href="{{ route('home')}}" >
                                   <i class="bx bx-home icon {{linkActive('home')}}"></i> 
                                   <span class="text nav-text {{linkActive('home')}}"> @lang('Home')</span>
                              </a>
                         </li>
                    </ul> 
                    <ul class="menu-liks">
                         <li class="nav-link {{setActive('about')}} ">
                              <a href="{{ route('about')}}">
                                   <i class="bx bx-user icon {{linkActive('about')}}"></i> 
                                   <span class="text nav-text {{linkActive('about')}}"> @lang('About me')</span>

                              </a>
                         </li>
                    </ul>
                    <ul class="menu-liks">
                         <li class="nav-link {{setActive('projects.*')}} ">
                             <a href="{{ route('projects.index')}}"> 
                              <i class="bx bxs-shopping-bag-alt icon {{linkActive('projects.*')}}"></i> 
                              <span class="text nav-text {{linkActive('projects.*')}}"> @lang('Projects')</span>

                                  
                                   
                              </a>
                         </li>
                    </ul>
                    <ul class="menu-liks">
                         <li class="nav-link {{setActive('contact')}} ">
                              <a href="{{ route('contact')}}">
                                   <i class="bx bxs-contact icon {{linkActive('contact')}}"></i> 
                                   <span class="text nav-text {{linkActive('contact')}}"> @lang('Contact')</span>
                              </a>
                         </li>
                    </ul>
               </div>

               <div class="bottom-content">
                    <ul class="menu-liks">
                         @auth
                         <li class="nav-link">
                              
                              <a href="#" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();
                              ">
                                   <i class="bx bx-log-out icon {{linkActive('.*')}}" ></i> 
                                   <span class="text-gl nav-text"> @lang('Logout')</span>
                              </a>
                         </li>
                         @else
                         <li class="nav__link">
                              <a href="{{ route('login')}}">
                                   <i class="bx bx-log-in icon {{linkActive('.*')}}"></i>
                                   <span class="text-gl nav-text {{linkActive('.*')}}">@lang('Login')</span>
                                 
                              </a>
                         </li> 
                         @endauth
                    </ul>
                    <li class="mode">
                         <div class="moon-sun">
                              <i class='bx bx-moon icon moon' ></i> 
                              <i class='bx bx-sun icon sun' ></i> 
                         </div>
                         <span class="mode-text text">@lang('Dark Mode')</span>
                         <div class="toggle-switch" >
                              <span class="switch"></span>
                         </div>
                    </li>
               </div>
          </div>
     </nav>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
     </form>
     
     
     
     
     
     
      @include('partials.session-status')
     
     
          

     <script>


 const toggle = document.querySelector(".toggle"),
     sidebar = document.querySelector(".sidebar");
    
     
     toggle.addEventListener("click", () => {
     sidebar.classList.toggle("close");
      toggle.classList.toggle("Active");


     if(sidebar.classList.contains('close')){
          localStorage.setItem("close-menu", "true");
     }else{
          
          localStorage.setItem("close-menu", "false");
     }

});


if(localStorage.getItem('close-menu') === "true"){
     sidebar.classList.add('close');
     toggle.classList.add('active')
}else{
     sidebar.classList.remove('close');
     toggle.classList.remove('active')
}



const modeSwitch = document.querySelector(".toggle-switch"),
     modeText = document.querySelector(".mode-text");

modeSwitch.addEventListener("click", () => {
     document.body.classList.toggle("dark");
     modeSwitch.classList.toggle("Active");



     if(document.body.classList.contains("dark")) {
          localStorage.setItem("dark-mode", "true");
          modeText.innerHTML = "Light Mode";
     }else { 
          localStorage.setItem("dark-mode", "false");
          modeText.innerHTML = "Dark Mode";
     }

    
});


if(localStorage.getItem("dark-mode") === "true") {
     document.body.classList.add('dark');
     modeSwitch.classList.add('active');

}else{
     document.body.classList.remove('dark');
     modeSwitch.classList.remove('active');
}


     </script>




