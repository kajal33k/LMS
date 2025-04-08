<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GOLS EdTech - Innovative learning solutions for your success">
  <title>GOLS EdTech - Your Path to Success</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#E53E3E',
            secondary: '#F6AD55',
            accent: '#3182CE',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    
    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')

</body>
</html>