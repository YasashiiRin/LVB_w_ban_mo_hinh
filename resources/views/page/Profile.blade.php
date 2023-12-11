
@extends('master')
@section('content')
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="left">
        <h4>{{Auth::user()->full_name}}</h4>
         <p>UI Developer</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>{{Auth::user()->email}}</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>{{Auth::user()->phone}}</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Projects</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Date</h4>
                    <p>{{Auth::user()->Ngaysinh}}</p>
                 </div>
                 <div class="data">
                   <h4>Address</h4>
                    <p>{{Auth::user()->address}}</p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
    </div>
</div>

@endsection