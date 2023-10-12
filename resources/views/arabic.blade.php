<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>وادي مكة للأستثمار</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:6.2;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center bg-center selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/user/profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">حسابي</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> دخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">تسجيل</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>

        <div class="menu">
          <div class="navbar">
              <img src="/img/الاستثمارية.png" class="logo">
              <nav>
                  <ul><li><a href="http://127.0.0.1:8002">EN</a></li> 
                   <li> <a href="#">من نحن</a>
                    <li> <a href="#">الشركاء</a></li> 
                    <li> <a href="#">الصفقات</a></li>
                    <li> <a href="#">الصندوق</a></li> <li> <a href="#">نماذج الأعمال</a></li>
                      <li> <a href="#">التركيز</a></li>
                     
                      
                     
                     
                    
                    <!--<ul class="dropdown"> 
                       <li><a href="#"> innvention</a></li>
                       <li><a href="#"> Team</a></li>
                      <li><a href="#"> Program</a></li> </ul> 
                      </li>  -->
                    
  </ul>
              </nav>  
            </div>
        </div>

        <div class="title">
              <h1>مرحبا بكم في وادي مكة للأستثمار</h1>
                <p> تتطلع شركة وادي مكة للأستثمار باستمرار إلى الاستثمار في الشركات الناشئة في مراحلها الأولى
                 ضمن صناعات التكنولوجيا العالية والحج والعمرة والإبداعية </p>
                 <h2> <br> رأس المال الاستثماري</h2>
            </div>
            <div class="button">
            <a href="#" class="btn1">قدم الآن</a>

            <a href="#" class="btn2">النتائج</a> 
        </div>
        <div id="focus" class="focus">
                        <h2> تركيز الشركة </h2>
                        <div class="kaaba"> <label><img src="https://www.wmvc.sa/image/icons/kaaba.png?v=3" id="kaabaimg" ></label> <p><b>نحن نستثمر في كل شيء تقني يساهم في نظام الحج والعمرة


</b></p> </div> 
                        <!--<script src="style.js"></script>-->
                        </div> 


<div class="image-container">
  <div class="image-wrapper">
    <img src="/img/ايقونات الاستثمار-03.png" alt="Image 1">
    <div class="image-caption"> <b>التعليم التقني</b> </div>
  </div>
  <div class="image-wrapper">
    <img src="/img/ايقونات الاستثمار-04.png" alt="Image 2">
    <div class="image-caption"> <b> الذكاء الاصطناعي </b></div>
  </div>
  <div class="image-wrapper">
    <img src="/img/ايقونات الاستثمار-05-01.png" alt="Image 3">
    <div class="image-caption"> <b> الصحة التقنيه </b> </div>
  </div>
  <div class="image-wrapper">
    <img src="/img/ايقونات الاستثمار-05-02.png" alt="Image 4">
    <div class="image-caption"> <b> الإعلام والإعلان </b> </div>
 </div>
 <div class="image-wrapper">
    <img src="/img/ايقونات الاستثمار-12.png" alt="Image 5">
    <div class="image-caption"> <b> الترفيه </b> </div>
</div>

</div>

<div class="image-container2">
<div class="image-wrapper2">
    <img src="/img/ايقونات الاستثمار-06.png" alt="Image 6">
    <div class="image-caption2"> <b> الضيافه والسياحه
 </b> </div>
</div>
<div class="image-wrapper2">
    <img src="/img/ايقونات الاستثمار-02.png" alt="Image 7">
    <div class="image-caption2"> <b> تكنلوجيا الزراعية </b> </div>
</div>
<div class="image-wrapper2">
    <img src="/img/ايقونات الاستثمار-08.png" alt="Image 8">
    <div class="image-caption2"> <b> تكنلوجيا القانونية
 </b> </div>
</div>
<div class="image-wrapper2">
    <img src="/img/ايقونات الاستثمار-09.png" alt="Image 9">
    <div class="image-caption2"> <b> المدن الذكية </b> </div>
</div>
<div class="image-wrapper2">
    <img src="/img/ايقونات الاستثمار-10.png" alt="Image 10">
    <div class="image-caption2"> <b> الأسواق الرقمية </b> </div>
</div>
            </div>

            <div id="Fund" class="Fund">
           <h2> نماذج الأعمال </h2>
          <!-- <hr size="8" width="80%" > -->

        
       
 
            
   <div id="Fund1" class="Fund1">
<h1> I نموذج  </h1> 
                         <div class="line3"></div>

<h2> هو أول صندوق أنشأته شركة وادي مكة للمشاريع في عام 2015. تضم محفظة الصندوق عددًا من الاستثمارات الناجحة في بدء التشغيل. تم إغلاقه في عام 2017. تمكنت ثلاثة من حيازات الصندوق من تأمين جولات ثانية من الاستثمارات. </h2>
<div class="line2"></div>
  

 <div class="slider">
                  <div class="slide-track">
                      <div class="slide">
                          <img src="/img/Breez.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                          <img src="/img/AVEROS.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                          <img src="/img/Lucidya-logo.png" height="100" width="250" alt="">
            </div>
            <div class="slide">
                          <img src="/img/Hazen AI.jpeg" height="100" width="250" alt="">
            </div>
            <div class="slide">
                          <img src="/img/Breez.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                          <img src="/img/AVEROS.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                          <img src="/img/AVEROS.png" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                          <img src="/img/Lucidya-logo.png" height="100" width="250" alt="">
            </div>
            <div class="slide">
                          <img src="/img/Hazen AI.jpeg" height="100" width="250" alt="">
            </div>
            <div class="slide">
                          <img src="/img/Breez.png" height="100" width="250" alt="" />
            </div> 
            </div>
            </div>

 </div>
 </div>

 <div id="Fund2" class="Fund2">
                <h1>II نموذج  </h1> 

              <h2> تأسست بموجب قرار مجلس الإدارة الصادر في ديسمبر 2018 بغرض الاستثمار في الشركات الناشئة والمرحلة الأولى "الشركات الناشئة المحتضنة". يحتفظ الصندوق باستثمارات مختارة من برامج الحاضنة 2018 التعاونية. </h2>


 </div>

 <div class="slider2">
                  <div class="slide-track2">
                      <div class="slide2">
                          <img src="/img/homenio.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/mabeet.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/doctor.png" height="100" width="250" alt="">
            </div>
            <div class="slide2">
                          <img src="/img/lila.png" height="100" width="250" alt="">
            </div>
            <div class="slide2">
                          <img src="/img/اواصل.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/homenio.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/doctor.png" height="100" width="250" alt="">
            </div>
            <div class="slide2">
                          <img src="/img/lila.png" height="100" width="250" alt="">
            </div>
            <div class="slide2">
                          <img src="/img/اواصل.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/25.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/homenio.png" height="100" width="250" alt="" />
            </div>
            <div class="slide2">
                          <img src="/img/doctor.png" height="100" width="250" alt="">
            </div>
            <div class="slide2">
                          <img src="/img/lila.png" height="100" width="250" alt="">
            </div>

            </div>          

            </div>


            <div id="FundDirectory" class="FundDirectory"> 
             <h2> الصندوق </h2>  
    <div class="line"></div>
           
 
<div class="image-container-Directory">
  <div class="image-wrapper-Directory">
    <img src="/img/wadi-V.png" height="30" width="250" alt="Image 2">
    <div class="image-caption-Directory"> <b> مدير صندوق </b></div>
  </div>
  <div class="image-wrapper-Directory">
    <img src="/img/reyl.png" height="100" width="250" alt="Image 3">
    <div class="image-caption-Directory" > <b> مستشار استثماري </b> </div>
  </div>

  <div class="image-wrapper-Directory">
    <img src="/img/pwc.png"  height="0" width="250" alt="Image 4">
    <div class="image-caption-Directory"> <b> ضريبة الصندوق </b> </div>
 </div>

 <div class="image-wrapper-Directory">
    <img src="/img/reyl.png" height="100" width="250" alt="Image 3">
    <div class="image-caption-Directory" > <b> مستشار استثماري </b> </div>
  </div>
 </div>
            
           
 </div>




 <div id="DIFFERENT" class="DIFFERENT">
<h2>  لماذا نحن مختلفين</h2>


<div class="image-container-dif">
  <img src="/img/Screen Shot 2023-08-05 at 6.02.45 PM.png" alt="Image 1">
  <h2>الدعم المالي<br> والأستثمار</h2>
  <p>مشروع وادي مكة يحفز الشركات الناشئة المحتضنة من خلال تقديم الدعم والتمويل الأولي.</p></p>

</div>
<div class="image-container-dif">
  <img src="/img/legal.png" alt="Image 2">
  <h2>الاستشارات القانونية
</h2>
  <p>.توظف شركة وادي مكة فينتشر محامين أعمال متخصصين لتقديم المساعدة الحيوية لرواد الأعمال</p>
</div>
<div class="image-container-dif">
  <img src="/img/networking.png" alt="Image 3">
  <h2>الشبكات
</h2>
  <p>.يستأجر وادي مكة خبراء تقنيين على استعداد لتزويد رواد الأعمال بالاستشارات المهنية لضمان منتجات عالية الجودة</p>
</div>
 </div> 



 @php
$DealFlow = App\Models\DealFlow::get();
@endphp


<div id="DealFlow" class="DealFlow">
    <h2>الصفقات</h2>
    <div class="line4"></div>
    @foreach($DealFlow as $Deal)
        <div class="containerdeal">
        <img src="/uploads/{{$Deal->image}}" alt="Member 1" class="imagedeal">
        <div class="textdeal"> 
          <h1>{{$Deal->text}}</h1>
      <li> آلة طحن LPKF D104 PCB لإنتاج 4 طبقات من لوحات الدوائر المطبوعة (PCB)</li>
        <li> القص والنقش والطباعة على أنواع مختلفة من المواد بمساعدة Trotec Speedy 400 Flexx Laser
        </li>
        <li>بالقص والنقش والطباعة على أنواع مختلفة من المواد بمساعدة Trotec Speedy 400 Flexx Laser
        </li>
        <b> info@wmvc.sa : للتواصل </b>
        </div>
    </div>  <div class="line5"></div>
       
    @endforeach 
  
</div>
<!--
<div id="DealFlow" class="DealFlow">
    <h2>Deal Flow</h2>
    <div class="line4"></div>
    <div class="textdeal">
      <h1>Wadi Makkah Venture has established its own state-of-the-art laboratory where innovators can convert their ideas into a tangible object. They can use</h1>
      <h1>
        <li> LPKF D104 PCB milling Machine to produce 4 layers Printed Circuit Boards (PCB)</li>
        <li>Cut, Engrave and Print on different types of materials with the help of Trotec Speedy 400 Flexx Laser Cutter/Engraver/Marker which have C02 and Fiber laser embedded in a single machine</li>
            </h1>
      <b>Please contact : info@wmvc.sa</b>
    </div>  <div class="line5"></div>

    <div class="containerdeal2">
    
    <img src="/img/الشعارات-١٤.png" alt="Example Image" class="imagedeal2">
    <div class="textdeal2">
      <h1>Wadi Makkah Venture Training Program (Masar) aims to offer a high-quality training program in the field of entrepreneurship and technology. We use scientific and practical methods in our training program that will prepare our trainees with the proper knowledge to join the workforce. Masar also works to encourage the trainees to contribute to the Saudi economy by providing them with the right amount of knowledge to establish their startups.

<b>This program also includes:</b></h1>
      <h1>
        <li> LPKF D104 PCB milling Machine to produce 4 layers Printed Circuit Boards (PCB)</li>
        <li>Cut, Engrave and Print on different types of materials with the help of Trotec Speedy 400 Flexx Laser Cutter/Engraver/Marker which have C02 and Fiber laser embedded in a single machine</li>
            </h1>
            <div class="buttondeal">
            <a href="#" class="btn3">Maser Program</a>
    </div>
</div>
            </dive>-->
            

@php
$team = App\Models\Team::get();
@endphp


<div id="DealFlow1" class="DealFlow1">
    <h2>الفريق</h2>
    @foreach($team as $member)
        <div class="team-member">
        <img src="/uploads/{{$member->image}}" alt="Member 1">
            <b>{{$member->name}}</b>
            <p>{{$member->position}}</p>
        </div>
       
    @endforeach 
  
</div>

  
@php
$board = App\Models\Board::get();
@endphp                     

<div id="DealFlow2" class="DealFlow2">
    <h2>مجلس المديرين</h2>
    @foreach($board as $director)
        <div class="team-member2">
        <img src="/uploads/{{$director->image}}" alt="Member 1">
            <b>{{ $director ->name }}</b>
            <p {{ $director -> position }}</p>
        </div>
        
    @endforeach
</div>
         
@php
$partner = App\Models\Partner::get();
@endphp

<div id="partners" class="partners">
    <h2>الشركاء</h2>
    
    <!-- First Row of Images -->
    <div class="image-row">
        @foreach($partner as $partners)
        <div class="image-container-partners">
            <img src="/uploads/{{$partners->image}}" alt="Partner Image">
        </div>
        @endforeach
    </div>
    
    <!-- Second Row of Images -->
    <div class="image-row">
        @foreach($partner as $partners)
        <div class="image-container-partners">
            <img src="/uploads/{{$partners->image}}" alt="Partner Image">
        </div>
        @endforeach
    </div>
</div>



    <footer class="footer">
    <a href="https://twitter.com/wadimakkahvc?lang=ar">
      <i class="fab fa-twitter footer-icon"></i>
      <span class="footer-text">Twitter</span>
            </a>
    <a href="wmvc@wadimakkah.sa">
      <i class="fas fa-envelope footer-icon"></i>
      <span class="footer-text"> wmvc@wadimakkah.sa </span>
    </a>
    <a href="tel:+1234567890">
      <i class="fas fa-phone-alt footer-icon"></i>
      <span class="footer-text"> +966 125503322</span>
    </a>
  </div>
    </footer>
</div>

    </body>
</html>
