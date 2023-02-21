@extends('layouts.main-layout')

@section('content')
<div class="main-about">
    <div class="cont-about">
        <div class="cont-text">
            <div class="cont-title">
                <span class=title>ABOUT ME</span>
            </div>
            <div class="cont-desc">
                <span class=desc2> <strong>Hi, my name is Ibrahim Char, i'm 20 years old and i`m a Junior Full Stack Web Developer.</strong>  </span>
            </div>
            <div class="cont-prj">
                <span class=desc>I live in Gorla Maggiore in the province of Varese, I graduated from high school in July 2022 in computer science and telecommunications and after that I started a 6 month course to become Junior Full Stack Web Developer. </span>
            </div>
            <div class="cont-soc2">
                <span class=desc><strong>Check out my <a href="https://www.linkedin.com/in/ibrahim-char-251b29209/" target="_blank">LinkedIn Profile</a></strong></span>
            </div>
            <div class="cont-sk">
                <span class=skills-title>My Skills</span> 
             
            </div>
            <div class="cont-cards-logos">
                <div class="cont-card-front">
                  <div class="text-card">Front End </div>
                    <div class="cont-logos">
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/html5.jpg')}}" class=img-logo> </div>
                        <div class="cont-text-logo"><span class=text-logo>HTML5</span></div> 
                      </div>
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/css.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>CSS</span></div> 
                      </div>
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/sass.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>SCSS</span></div> 
                      </div>
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/bootstrap.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>Bootstrap</span></div> 
                      </div>
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/js.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>JavaScript</span></div> 
                      </div>
                   
                      <div class="logo">
                        <div class=cont-img-logo>  <img src="{{url('/img/vue.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>VueJS</span></div> 
                      </div>
                  
                    </div>
                </div>
                <div class="cont-card-back">
                 <div class="text-card"> Back End </div>
                    <div class="cont-logos">
                        <div class="logo">
                         <div class=cont-img-logo>  <img src="{{url('/img/php.svg')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>PHP</span></div> 
                        </div>
                       <div class="logo">
                         <div class=cont-img-logo>  <img src="{{url('/img/laravel.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>Laravel</span></div> 
                        </div>
                        <div class="logo">
                         <div class=cont-img-logo>  <img src="{{url('/img/mysql.png')}}" class=img-logo> </div>
                         <div class="cont-text-logo"><span class=text-logo>My SQL</span></div> 
                        </div>
                    </div>
                </div>
                <div class="cont-card-others">
                    <div class="text-card"> Others </div>
                       <div class="cont-logos">
                           <div class="logo">
                            <div class=cont-img-logo>  <img src="{{url('/img/git.png')}}" class=img-logo> </div>
                            <div class="cont-text-logo"><span class=text-logo>Git</span></div> 
                           </div>
                          <div class="logo">
                            <div class=cont-img-logo>  <img src="{{url('/img/github.png')}}" class=img-logo> </div>
                            <div class="cont-text-logo"><span class=text-logo>GitHub</span></div> 
                           </div>
                         
                        </div>
                </div>
                
            </div>
            <div class="return-cont">
                <a class="btn-submit btntheme btnsize" href="{{route('project.welcome')}}">RETURN ON PROJECTS PAGE</a> 
            </div>
            
        </div>
        </div>
    </div>

</div>
@endsection