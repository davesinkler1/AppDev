<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/app.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="bg-white shadow">
  <div>

    <div class="relative bg-white">
      <div class="w-60 h-60 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
<!--svg xmlns="http://www.w3.org/2000/svg" viewBox="-91 -170 200 200" height="-1" width="1394">
  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
</svg-->
 <div class="justify-center flex text-center shadow-sm max-w-xs m-auto">
  <img src="https://th.bing.com/th/id/OIP.eCrcK2BiqwBGE1naWwK3UwHaHa?w=183&h=183&c=7&r=0&o=5&dpr=1.1&pid=1.7" id="profile-pic" class="object-cover w-24 h-24 float-left mr-5">
</div>
  </div>
  </div>
  <form action="/upload" method="POST" enctype="multipart/form-data">
  @csrf
  <!--@foreach($photos as $photo)-->
  <!--@if ( asset('/storage/app/public/images/profile/', $photo -> name) )-->
  <!--img src="{ asset('/storage/app/public/images/profile/', $photo -> name) }" id="profile-pic" class="object-cover w-24 h-24 float-left mr-5"-->
 <!--@else-->
  <img src="https://th.bing.com/th/id/OIP.eCrcK2BiqwBGE1naWwK3UwHaHa?w=183&h=183&c=7&r=0&o=5&dpr=1.1&pid=1.7" id="profile-pic" class="object-cover w-24 h-24 float-left mr-5">
 <!--@endif-->
 <!--@endforeach-->
<input type="submit" name="Upload">
</form>
<br>
    <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center text-center">
<button class="text-black py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
  Connect
</button>
    <button class="text-black py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
  Message
</button>
    </div>
  </div>
<br>
  <div class="mt-20 text-center border-b pb-12">
    <h1 class="text-4xl font-medium text-gray-700">Jessica Jones</h1>
    <p class="font-light text-gray-600 mt-3">123 Address</p>

    <p class="mt-8 text-gray-500">Rentee</p>
  </div>

  <div class="mt-12 flex flex-col justify-center">
    <p class="text-gray-600 text-center font-light lg:px-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  <div class="justify-center flex text-center">
    <button class="text-indigo-500 py-2 px-4  font-medium mt-4 ">
  Show more
</button>
</div>
  </div>

</div>
</div>
</body>

<script>
  document.getElementById("my-file").onchange = function() {
  if (this.files && this.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    	// e.target.result is a base64-encoded url that contains the image data
      document.getElementById('profile-pic').setAttribute('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  }
}
</script>

</html>

<?php