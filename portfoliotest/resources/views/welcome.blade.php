
     @include('includes.header')
<!-- First Container -->
<div class="container-fluid bg-1" id="me" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="2500">
<div class="row">
  <h3 class="margin">Who am I</h3>
   <div class="col-sm-6">
   <h3 class="margin">I'm Web Developer</h3>
  <img src="images/try.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h4><i>"I design and code websites."</i><br>-Shilpa Arora</h4>
  </div>
  <div class="col-sm-6">
  <h3>My Resposibilities</h3>
  <p><ul>
  <li>Create visually appealing sites.</li>
  <li>Write code form scratch.</li><li>Modify existing websites according to client's specification </li>
  <li>Keep myself upto date with latest technology.</li>
  </ul></p>
</div>
</div>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2" id="learned" data-aos="zoom-in">
<h3 class="margin">What I learned</h3><br>
      
  <div class="row">
    <div class="col-sm-6">
    <h3 class="margin" data-aos="fade-zoom-in">Front End Development</h3>
      <p><ul data-aos="fade-up-right">
      <li>Html 5, Css 3, Sass, jQuery and Js</li> 
      <li>Bootstrap and Foundation</li> 
      <li>Angular JS</li> 
      <li>GreenSock Library</li>  
      <li>D3 library</li> 
      <li>Ionic Framework</li> 
      <li>PhoneGap Build</li> 
      <li>JSFiddle</li> 
      </ul></p>
    </div>
    <div class="col-sm-6"> 
    <h3 class="margin" data-aos="fade-zoom-in">Back End Development</h3>
      <p><ul data-aos="fade-up-left">
      <li>Mean Stack</li> 
      <li>Wamp/Mamp Stack</li> 
      <li>Laravel Framework</li>  
      <li>Php build</li>
      <li>MySql and MongoDb</li>  
      <li>MVC structure applications</li>  
      <li>GitHub: Version control</li> 
      </ul></p>
      </div>
  </div>
</div>

<!-- Third Container (Grid) -->
<div div class="container-fluid bg-3" id="hexagonCon" data-aos="zoom-in-down" data-aos-duration="2000">
    <h3 class="margin">Projects</h3>
 <ul id="hexGrid">
  <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork1') }}">
            <img src="images/cofee break.jpg" alt="" />
            <h1>Coffee Break</h1>
            <p>4/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork2') }}">
            <img src="images/mini site.jpg" alt="" />
            <h1>Swing: Mini Site</h1>
            <p>3.5/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork3') }}">
            <img src="images/live search.jpg" alt="" />
            <h1>Ajax Live Search</h1>
            <p>3.5/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork4') }}">
            <img src="images/star wars.jpg" alt="" />
            <h1>Star Wars API</h1>
            <p>4.5/5</p>
          </a>
        </div>
      </li>
      
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork5') }}">
            <img src="images/thesis.jpg" alt="" />
            <h1>Swing</h1>
            <p>4/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork6') }}">
            <img src="images/game of thrones.jpg" alt="" />
            <h1>Game of Thrones</h1>
            <p>4.5/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork7') }}">
            <img src="images/Voyage.jpg" alt="" />
            <h1>Voyage:Travel</h1>
            <p>3/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork8') }}">
            <img src="images/phonegap.png" alt="" />
            <h1>Tom Cruise: Phonegap</h1>
            <p>4/5</p>
          </a>
        </div>
      </li>
      
            <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork9') }}">
            <img src="images/bootstrap.jpg" alt="" />
            <h1>Photography: Bootstrap</h1>
            <p>3.5/5</p>
          </a>
        </div>
      </li>
      
      
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork10') }}">
            <img src="images/OOP.jpg" alt="" />
            <h1>Object Oriented Programming</h1>
            <p>3/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork11') }}">
            <img src="images/ionic.jpg" alt="" />
            <h1>Tom Cruise: Ionic</h1>
            <p>4/5</p>
          </a>
        </div>
      </li>
      

      
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork12') }}">
            <img src="images/g a.jpg" alt="" />
            <h1>Generative art: Canvas</h1>
            <p>3/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork13') }}">
            <img src="images/g a.jpg" alt="" />
            <h1>Nodemailer</h1>
            <p>3.5/5</p>
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="{{ url('/mywork14') }}">
            <img src="images/g a.jpg" alt="" />
            <h1>D3 library</h1>
            <p>4/5</p>
          </a>
        </div>
      </li>
      
    </ul>
    </div>
    <!-- fourth con -->
<div class="container-fluid bg-4" id="find" data-aos="zoom-out-down">    
<h3 class="margin" data-aos="fade-zoom-in" data-aos-duration="2500">Find Me</h3>
  <p data-aos="fade-zoom-in">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  
</div>

@include('includes.footer')
