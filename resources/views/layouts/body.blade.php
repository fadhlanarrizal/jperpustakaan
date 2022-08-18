
    <body data-background-color="dark">
        <div class="wrapper">
            
            @include('layouts.partials.navbar')
        
            @include('layouts.partials.sidebar')
        
            <div class="main-panel">
                <div class="content">
                    <div class="container mt-3">
                        
                    @yield('content')
    
                    </div>
                </div>
            </div>
        </div>
    
        @include('layouts.partials.scripts')
    
    </body>    
        
    </html>
