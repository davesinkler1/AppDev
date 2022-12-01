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
 <div class="justify-center flex text-center shadow-sm max-w-xs m-auto">
  @foreach ($photos as $photo)
  <li>{{$photo -> name}}</li>
  <img src="{{asset('public/images/profile/'. $photo -> name)}}" id="imageName" class="object-cover w-24 h-24 float-left mr-5">
  @endforeach
</div>
  </div>
  </div>
  <form action="/profile" method="post" enctype="multipart/form-data">
  @csrf
 <input type="file" name="picture" id="my-file">
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
      document.getElementById('imageName').setAttribute('src', e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
  }
}
</script>

</html>