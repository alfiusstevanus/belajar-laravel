<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Bloku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2  {{ Request::is('dashboard') ? 'text-danger' : 'text-dark' }}" aria-current="page" href="/dashboard">
              <svg class="bi"><span data-feather="home"></span></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'text-danger' : 'text-dark' }}" href="/dashboard/posts">
              <svg class="bi"><span data-feather="file-text"></span></svg>
              My Posts
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
              <form action="/logout" method="POST">
                  @csrf
              <button class="nav-link d-flex align-items-center gap-2 text-dark" href="#">
              <svg class="bi"><span data-feather="log-out"></span></svg>
              Logout
              </button>
              </form>
          </li>
        </ul>

        @can('isAdmin')          
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ms-4 text-danger">
          <span class="text-primary">
            ADMINISTRATOR
          </span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'text-danger' : 'text-dark' }}" href="/dashboard/categories">
              <svg class="bi"><span data-feather="grid"></span></svg>
              Post Categories
            </a>
          </li>
        </ul>
        @endcan
      </div>
    </div>
  </div>