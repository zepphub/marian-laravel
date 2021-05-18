<div class="px-3 py-5 h-100 dashboard-fixed d-flex flex-column justify-content-between">
    <div>
        <img class="img-fluid w-75" src="{{ asset('img/logo-dash-blanco.svg')}}" alt="" />
        <!-- A vertical navbar -->
        <h4 class="mt-4 mb-2">Menú</h4>
        <hr class="border-white border-2 my-3 mx-0">
        <nav class="navbar p-md-0 nav-dashboard mt-5">
            <!-- Links -->
            <ul id="main-menu" class="navbar-nav flex-column">
                <li class="nav-item">
                    <div id="heading-1">
                      <a class="nav-link dropdown-toggle" href="#item-1" data-parent="#main-menu" data-toggle="collapse" aria-expanded="true" data-target="#item-1" aria-controls="item-1" > Blog </a>
                    </div>
                    <div id="item-1" class="collapse show bg-nude border-0" aria-labelledby="heading-1" data-parent="#main-menu">
                      <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.posts.index') }}">Todos los artículos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.categories.index') }}">Categorías</a>
                        </li>
                      </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div id="heading-2">
                      <a class="nav-link dropdown-toggle" href="#item-2" data-parent="#main-menu" data-toggle="collapse" aria-expanded="false" data-target="#item-2" aria-controls="item-2" > Servicios </a>
                    </a>
                    </div>
                    <div id="item-2" class="collapse show bg-nude border-0" aria-labelledby="heading-2" data-parent="#main-menu">
                      <ul class="nav flex-column ml-3">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.counselings.index') }}">Asesoría personalizada</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.mentorships.index') }}">Mentoría</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.events.index') }}">Talleres y eventos</a>
                        </li>
                      </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.resources.index') }}">Recursos Gratis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.newsletter') }}">Newsletter</a>
                </li>
            </ul>
        </nav>
    </div>
    <a class="text-bold" href="{{ route('logout') }}"><svg class="mb-1 mr-2" xmlns="http://www.w3.org/2000/svg" width="14.389" height="15.348" viewBox="0 0 14.389 15.348">
        <path id="Icon_metro-exit" data-name="Icon metro-exit" d="M14.082,11.521V9.6h-4.8V7.684h4.8V5.765L16.96,8.643Zm-.959-.959V14.4h-4.8v2.878L2.571,14.4V1.928H13.123v4.8h-.959V2.887H4.489L8.326,4.806v8.633h3.837V10.561Z" transform="translate(-2.571 -1.928)" fill="#b46063"/>
      </svg>
      Cerrar Sesión</a>
</div>


