<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">   
                <div class="sb-sidenav-menu-heading">Operations</div>

                <a class="nav-link collapsed" href="{{route('admin.category')}}" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.add-category')}}">Add category</a>
                        <a class="nav-link" href="{{route('admin.category')}}">View Category</a>
                       
                    </nav>
                </div>




                
                <a class="nav-link collapsed" href="{{route('admin.posts')}}" data-bs-toggle="collapse" data-bs-target="#posts" aria-expanded="false" aria-controls="pagesCollapseError">
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="posts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.add-post')}}">Add Posts</a>
                        <a class="nav-link" href="{{route('admin.posts')}}">View Posts</a>
                     
                    </nav>
                </div>


                <a class="nav-link collapsed" href="{{route('admin.authors')}}" data-bs-toggle="collapse" data-bs-target="#author" aria-expanded="false" aria-controls="pagesCollapseError">
                    Authors
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="author" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.add-author')}}">Add author</a>
                        <a class="nav-link" href="{{route('admin.authors')}}">View author</a>
                     
                    </nav>
                </div>

             
                <a class="nav-link"  href="{{route('admin.users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>