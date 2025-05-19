<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Ekstrakulikuler
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Open Sans', sans-serif;
      margin: 0; /* Remove default margin */
      padding: 0; /* Remove default padding */
      height: 100vh; /* Set body height to full viewport height */
      display: flex;
      flex-direction: column;
   }
   .font-montserrat {
      font-family: 'Montserrat', sans-serif;
   }
   main {
      min-height: calc(100vh - 100px); /* Adjust height to fill the viewport */
   }
  </style>
 </head>
 <body>
  <header>
   <nav class="flex items-center justify-between px-8 py-4" style="background: linear-gradient(90deg, #d92f6e 0%, #dba94a 100%)">
    <div class="flex items-center space-x-2">
     <img alt="White airplane icon" class="w-8 h-8" height="64" src="../front/Logo.png" width="64"/>
     <span class="font-montserrat font-extrabold text-white text-xl select-none">
      Ekskul
     </span>
    </div>
  </header>
  
 {{ $slot }}

  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="mb-2">Contact us: bagasyoas@example.com</p>
      <div class="flex justify-center space-x-4">
        <a href="https://web.facebook.com/?_rdc=1&_rdr#" class="text-white hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
        <a href="https://github.com/Bagas1701" class="text-white hover:text-gray-400"><i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/" class="text-white hover:text-gray-400"><i class="fab fa-instagram"></i></a>
      </div>
      <p class="mt-4">&copy; 2025</p>
      <p>Data Ekstrakulikuler Page.</p>
      <p>Data Murid yang telah daftar Ekskul yang bakal dimasukin disini.</p>
    </div>
  </footer>

  <script>
    window.onload = function() {
      alert("Welcome to our landing page!");
    };
  </script>
 </body>
</html>
