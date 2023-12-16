<?php
if(isset($_POST['conf'])) {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';

  $to = "contact@elistikmal.info";
  $subject_email = "Nouveau message de contact depuis le site web";

  $message_email = "Nom: " . $name . "\n";
  $message_email .= "Prénom: " . $surname . "\n";
  $message_email .= "Email: " . $email . "\n";
  $message_email .= "Téléphone: " . $phone . "\n\n";
  $message_email .= "Objet: " . $subject . "\n\n";
  $message_email .= "Message:\n" . $message . "\n";

  if (mail($to, $subject_email, $message_email)) {
    echo "Message envoyé avec succès.";
  } else {
    echo "Erreur lors de l'envoi du message.";
  }}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}  École Privée El-Istikmal </title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/LOGOISTIKMAL.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('image/LOGOISTIKMAL.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{ asset('js/index.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body id="root">

        <header>
            <img src="{{ asset('image/LOGOISTIKMAL.png')}}" alt="Logo de l'école" class="logo">
            <h1>Groupe scolaire privé El-Istikmal</h1>
        </header>

        <nav>
            <a href="#" onclick="openTab('Accueil')">ACCUEIL</a>
            <a href="#" onclick="openTab('Etudes')">ETUDES</a>
            <a href="#" onclick="openTab('Equipe')">A PROPOS DE NOUS</a>
            <a href="#" onclick="openTab('ENT')">ENT</a>
            <a href="#" onclick="openTab('Contact')">CONTACT</a>
        </nav>

        <div class="container">
            <div id="Accueil" class="tabcontent" style="display: block;">
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('image/imgA.png')}}" alt="Los Angeles" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/imgB.png')}}" alt="Chicago" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('image/imgC.png')}}" alt="New York" class="d-block w-100">
        </div>
          <div class="carousel-item">
            <img src="{{ asset('image/imgD.png')}}" alt="New York" class="d-block w-100">
          </div>
      </div>
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <style>
  .body2 {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: rgba(9, 176, 241, 0);
    transition: background-color 0.5s ease;
    padding: 0;
  }

  .header2 {
    background-color: #4ab7fc;
    color: #fff6f9;
    text-align: center;
    transition: background-color 0.5s ease, color 0.5s ease;
  }

  .stats-container2 {
    display: flex;
    justify-content: center;
    align-items: center;
    transition: margin-top 0.5s ease;
  }

  .stat {
    flex: 1;
    padding: 20px;
    margin: 20px;
    background-color: #4ab7fc;
    border-radius: 10px;
    text-align: center;
    overflow: hidden;
    color: #fff6f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.5s ease, box-shadow 0.5s ease;
  }

  .label2 {
    display: block;
    font-size: 20px;
    color: #fff6f9;
  }

  .value2 {
    display: block;
    font-size: 28px;
    margin-top: 10px;
    color: #fff6f9;
    font-weight: bold;
    transition: color 0.5s ease;
  }

  .stat:hover {
    transform: scale(1.1);
  }

  .image-container2 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0; /* Supprime la marge autour du conteneur */
  }

  .image-container2 img {
    width: 20%; /* Ajuste la largeur des images selon tes besoins */
    margin: 0; /* Ajoute un espacement entre les images */
    transition: transform 0.5s ease; /* Ajoute une transition d'animation au survol */
  }

  .image-container2 img:hover {
    transform: scale(1.1); /* Agrandit l'image au survol */
  }
    </style>

<br><br>
  <body class="body2">
    <header class="header2">
      <h1>Nos résultats</h1>
    </header>

    <div class="stats-container2">
      <div class="stat hover-effect2" id="sixieme">
        <span class="label2">6EME</span>
        <span class="value2">0%</span>
      </div>
      <div class="stat hover-effect2" id="bac">
        <span class="label2">BAC</span>
        <span class="value2">0%</span>
      </div>
      <div class="stat hover-effect2" id="brevet">
        <span class="label2">BREVET</span>
        <span class="value2">0%</span>
      </div>
    </div>
    <br>
    <header class="header2">  <h1>Nos infrastructures</h1></header>
    <br><br>
    <div class="image-container2">
      <img src="{{ asset('image/imgA1.png')}}" alt="Image 1">
      <img src="{{ asset('image/imgA2.png')}}" alt="Image 2">
      <img src="{{ asset('image/imgA4.png')}}" alt="Image 1">
      <img src="{{ asset('image/imgA3.png')}}" alt="Image 2">
    </div>

    <script>
      // Définit les valeurs maximales pour l'animation
      const maxsixiemePercentage = 100;
      const maxBacPercentage = 100;
      const maxBrevetPercentage = 100;

      // Définit la fonction d'animation
      function animateStats() {
        // Array of targets and max values
        const animations = [
          { target: document.getElementById("sixieme").querySelector(".value2"), max: maxsixiemePercentage },
          { target: document.getElementById("bac").querySelector(".value2"), max: maxBacPercentage },
          { target: document.getElementById("brevet").querySelector(".value2"), max: maxBrevetPercentage }
        ];

        // Iterate through animations and apply animation to each
        animations.forEach(animation => {
          const target = animation.target;
          const maxValue = animation.max;

          let currentValue = 0;

          const updateValue = () => {
            if (currentValue <= maxValue) {
              target.innerHTML = Math.floor(currentValue) + "%";
              currentValue += 1;
              requestAnimationFrame(updateValue);
            }
          };

          updateValue();
        });
      }

      // Déclenche l'animation lorsque la page est chargée
      document.addEventListener("DOMContentLoaded", animateStats);
    </script>
            </div>
    </div></div>
            <div id="Etudes" class="tabcontent">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                <div class="container-fluid p-5 bg-primary text-white text-center"style="background-color:#38b6ff;">
                    <h1>Primaire - Notre Approche Éducative</h1>
                    <p>Nous offrons une éducation primaire complète qui stimule la curiosité et la créativité des élèves,
                       avec un programme qui intègre des activités artistiques, sportives et culturelles pour un développement global.</p>
                </div>

                <div class="container mt-5">
                  <div class="row">
                    <div class="col-sm-4">
                      <h3>Column 1</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 2</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 3</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                  </div>
                </div>
                <div class="container-fluid p-5 bg-primary text-white text-center">
                    <h1>Collège - Préparation pour l'Excellence</h1>
                    <p>Notre collège fournit une éducation rigoureuse avec un éventail d'options académiques et extrascolaires
                       pour préparer nos élèves à des études secondaires approfondies et à la réussite personnelle.</p>
                </div>

                <div class="container mt-5">
                  <div class="row">
                    <div class="col-sm-4">
                      <h3>Column 1</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 2</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 3</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                  </div>
                </div>
                <div class="container-fluid p-5 bg-primary text-white text-center">
                    <h1>Lycée - Vers un Avenir Brillant</h1>
                    <p>Le lycée El-Istikmal met l'accent sur l'excellence académique, la préparation universitaire et le
                      développement personnel, en équipant les élèves des compétences nécessaires pour exceller dans un
                      monde compétitif.</p>
                </div>

                <div class="container mt-5"style="background-color:#38b6ff;">
                  <div class="row">
                    <div class="col-sm-4">
                      <h3>Column 1</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 2</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                    <div class="col-sm-4">
                      <h3>Column 3</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                    </div>
                  </div>
            </div>

            </div>
            <div id="ENT" class="tabcontent">
                <h2>ENT</h2>
                <p>Espace Numérique d'Information</p>
            @if (Route::has('login'))
                <div class="div-links">
                @auth
                <a href="{{ url('/profile')}}" class="link"> Mon Profil </a>
                <a href="{{ url('/logout')}}" class="link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> Se déconnecter </a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style='...'> @csrf </form>
                </div>
            @else
                <div class="div-links">
                    <a href="{{ route('login')}}" class="link">
                        Connexion
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register')}}" class="link">
                        Inscription
                    </a>

                    @endif
                </div>
            @endif
                @endauth

            </div>
            <div id="Equipe" class="tabcontent">
                <h2>Notre équipe</h2>
                <p>N'hésitez pas à nous contacter pour toute question ou information supplémentaire.</p>
            </div>
            <div id="Contact" class="tabcontent">
              <div class="row">
                <div class="column" style="background-color: #0D6EFD;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.345284590212!2d2.8341398753691482!3d36.71426787253959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fa3f1cb699cf3%3A0xcbc52144577bfa8e!2sEL%20ISTIKMAL%20SCHOOL!5e0!3m2!1sfr!2sfr!4v1700738649592!5m2!1sfr!2sfr" width="100%"  height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
                <div class="column" style="background-color: #0D6EFD;">
                  <h2 style="color: white;">Contact</h2>
                  <table class="invisible-table">
                    <tr>
                        <td>
                            <i class="fas fa-envelope"></i>
                        </td>
                        <td>
                            <a href="mailto:contact@elistikmal.info">contact@elistikmal.info</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fas fa-phone"></i>
                        </td>
                        <td>
                            <a href="tel:+123456789">+1 (234) 567-89</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-facebook"></i>
                        </td>
                        <td>
                            <a href="https://www.facebook.com/votrepage" target="_blank">Notre Page Facebook</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-instagram"></i>
                        </td>
                        <td>
                            <a href="https://www.instagram.com/el_istikmal/" target="_blank">Notre Compte Instagram</a>
                        </td>
                    </tr>
                </table>

                </div>
              </div>
                <h2>Contactez-nous</h2>
                <p>N'hésitez pas à nous contacter pour toute question ou information supplémentaire.</p>
                <div class="formm">
                    <form id="contact-form" method="post" action="contact.php">
                      <div class="form-group">
                        <label for="name">Nom*</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="surname">Prénom*</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" pattern="[\+0-9]+" maxlength="15">
                      </div>
                      <div class="form-group">
                        <label for="subject">Objet*</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea class="form-control" id="message" name="message" required"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" name="conf">Envoyer</button>
                    </form>
                    <div class="container">
                        <div id="ENT" class="tabcontent">
                            <p>HELLO WORLD</p>
                            </div>
                    </div>

                     <script>
                    const form = document.getElementById("contact-form");
                    const nameInput = document.getElementById("name");
                    const surnameInput = document.getElementById("surname");
                    const emailInput = document.getElementById("email");
                    const phoneInput = document.getElementById("phone");
                    const subjectInput = document.getElementById("subject");
                    const messageInput = document.getElementById("message");
                    const errorMessage = document.getElementById("error-message");

                    form.addEventListener("submit", (e) =>
                      e.preventDefault());
                      if (!validateName(nameInput.value)) {
                        showError(nameInput, "Le nom ne doit pas contenir de chiffres.");
                      }
                      else if (!validateName(surnameInput.value)) {
                        showError(surnameInput, "Le prénom ne doit pas contenir de chiffres.");
                      }

                      else if (!validateEmail(emailInput.value)) {
                        showError(emailInput, "Veuillez saisir un email valide.");
                      }
                      else if (!validatePhone(phoneInput.value)) {
                        showError(phoneInput, "Le numéro de téléphone doit contenir 10 chiffres ou un + suivi de 11 chiffres maximum.");
                      }
                      else if (!validateRequired(subjectInput.value)) {
                        showError(subjectInput, "Veuillez saisir un objet pour votre message.");
                      }
                      else if (!validateRequired(messageInput.value)) {
                        showError(messageInput, "Veuillez saisir un message.");
                      }
                      else {
                        form.submit(){
                        (messageInput, "Merci pour votre message, je vous recontacte très rapidement !");
                      }
                    };


                    function validateName(value) {
                      return /^[a-zA-ZÀ-ÿ]+$/.test(value);
                    }


                    function validateEmail(value) {
                      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                    }


                    function validatePhone(value) {
                      return /^(\+?\d{1,11})?$/.test(value) && value.replace(/\D/g,'').length >= 10;
                    }


                    function validateRequired(value) {
                      return value.trim() !== "";
                    }

                    function showError(input, message) {
                      input.classList.add("error");
                      errorMessage.innerText = message;
                    }


                        </script>


                    </div>

            </div>
        </div>

        <footer>
            <p>&copy; 2023 Groupe scolaire privé El-Istikmal. Tous droits réservés.</p>
        </footer>

    </body>
    </html>

