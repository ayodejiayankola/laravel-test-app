  
                <div class="top-right links">
              
                        <a {{Request::route()->getName()== 'welcome' ? "style=color:red;" : "" }} href="{{route('welcome')}}">Home</a>
                   
                        <a {{Request::route()->getName()== 'about' ? "style=color:red;" : "" }} href="{{route('about')}}">About</a>

                            <a {{Request::route()->getName()== 'post' ? "style=color:red;" : "" }} href="">Posts</a>
                             <a {{Request::route()->getName()== 'contact' ? "style=color:red;" : "" }} href="{{route('contact')}}">Contact us</a>
                    
                </div>
            