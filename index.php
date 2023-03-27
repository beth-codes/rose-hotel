<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;700&family=Oxygen:wght@400;700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
   <!-- <link rel="stylesheet" href="style.css"> -->
   <title>Rose Hotel</title>
</head>

<body>
   <header class="header">
      <nav>
         <div class="logo">
            <!-- <svg height="35px" width="35px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#de135c"> <?php the_field('header_logo_svg'); ?></svg> -->
            <svg height="35px" width="35px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
               xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#de135c">
               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
               <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                     .st0 {
                        fill: #de135c;
                     }
                  </style>
                  <g>
                     <path class="st0"
                        d="M502.774,221.7c0-109.2-88.53-197.729-197.729-197.729c-43.089,0-82.928,13.83-115.412,37.225 c63.915,4.943,131.847,38.619,184.149,97.488c53.544,60.28,73.426,136.009,63.839,215.107 C478.369,335.448,502.774,274.354,502.774,221.7z">
                     </path>
                     <path class="st0"
                        d="M173.399,386.897c-41.275-49.044-64.884-121.098-59.561-199.669c5.445-80.44,57.733-156.186,124.848-184.945 C178.763-7.309,105.882,14.155,68.335,51.067c-77.869,76.56-78.937,201.752-2.391,279.626 C96.16,361.419,133.943,380.129,173.399,386.897z">
                     </path>
                     <path class="st0"
                        d="M246.736,405.277c-78.978,16.225-163.847-12.311-204.594-50.662c4.792,59.923,39.929,104.532,85.531,130.86 c94.568,54.604,215.501,22.197,270.1-72.368c21.545-37.323,29.492-78.74,25.474-118.567 C387.005,347.419,323.873,389.417,246.736,405.277z">
                     </path>
                     <path class="st0"
                        d="M176.363,95.756c-23.968,9.584-40.743,81.495-31.16,119.838c67.111-100.661,179.764-50.331,179.764-50.331 C296.208,122.12,210.262,82.195,176.363,95.756z">
                     </path>
                     <path class="st0"
                        d="M194.885,372.307c20.289,15.966,90.944-5.462,119.368-32.943c-120.74-7.777-133.48-130.502-133.48-130.502 C157.799,255.34,166.194,349.734,194.885,372.307z">
                     </path>
                     <path class="st0"
                        d="M247.259,294.657c45.951,19.738,130.476,7.071,146.428-21.536c11.283-20.212-19.484-86.849-49.016-112.729 C356.86,276.438,247.259,294.657,247.259,294.657z">
                     </path>
                     <path class="st0"
                        d="M255.465,174.856c-45.544,4.791-50.339,64.714-23.971,83.89c26.363,19.167,55.13-11.988,43.143-31.164 c-23.972,4.792-28.764-16.78-9.593-26.362c19.18-9.584,35.96,7.187,28.764,33.56C315.384,208.406,301.004,170.063,255.465,174.856z ">
                     </path>
                  </g>
               </g>
            </svg>
            <small class="none">
               <?php the_field('header_logo_text_bold'); ?><span>
                  <?php the_field('header_logo_text'); ?>
               </span>
            </small>

         </div>
         <div class="navbar">
            <a href="#about">
               <li class="navbar-list">
                  <?php the_field('about'); ?>
               </li>
            </a>
            <a href="#gallery">
               <li class="navbar-list">
                  <?php the_field('gallery'); ?>
               </li>
            </a>
            <a href="#contact">
               <li class="navbar-list">
                  <?php the_field('contact_us'); ?>
               </li>
            </a>
            <button class="btn-white none">
               <?php the_field('header_btn_one'); ?>
            </button>
         </div>
      </nav>
      <div class="header-desc">
         <svg height="40px" width="40px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#de135c">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <style type="text/css">
                  .st0 {
                     fill: #de135c;
                  }
               </style>
               <g>
                  <path class="st0"
                     d="M502.774,221.7c0-109.2-88.53-197.729-197.729-197.729c-43.089,0-82.928,13.83-115.412,37.225 c63.915,4.943,131.847,38.619,184.149,97.488c53.544,60.28,73.426,136.009,63.839,215.107 C478.369,335.448,502.774,274.354,502.774,221.7z">
                  </path>
                  <path class="st0"
                     d="M173.399,386.897c-41.275-49.044-64.884-121.098-59.561-199.669c5.445-80.44,57.733-156.186,124.848-184.945 C178.763-7.309,105.882,14.155,68.335,51.067c-77.869,76.56-78.937,201.752-2.391,279.626 C96.16,361.419,133.943,380.129,173.399,386.897z">
                  </path>
                  <path class="st0"
                     d="M246.736,405.277c-78.978,16.225-163.847-12.311-204.594-50.662c4.792,59.923,39.929,104.532,85.531,130.86 c94.568,54.604,215.501,22.197,270.1-72.368c21.545-37.323,29.492-78.74,25.474-118.567 C387.005,347.419,323.873,389.417,246.736,405.277z">
                  </path>
                  <path class="st0"
                     d="M176.363,95.756c-23.968,9.584-40.743,81.495-31.16,119.838c67.111-100.661,179.764-50.331,179.764-50.331 C296.208,122.12,210.262,82.195,176.363,95.756z">
                  </path>
                  <path class="st0"
                     d="M194.885,372.307c20.289,15.966,90.944-5.462,119.368-32.943c-120.74-7.777-133.48-130.502-133.48-130.502 C157.799,255.34,166.194,349.734,194.885,372.307z">
                  </path>
                  <path class="st0"
                     d="M247.259,294.657c45.951,19.738,130.476,7.071,146.428-21.536c11.283-20.212-19.484-86.849-49.016-112.729 C356.86,276.438,247.259,294.657,247.259,294.657z">
                  </path>
                  <path class="st0"
                     d="M255.465,174.856c-45.544,4.791-50.339,64.714-23.971,83.89c26.363,19.167,55.13-11.988,43.143-31.164 c-23.972,4.792-28.764-16.78-9.593-26.362c19.18-9.584,35.96,7.187,28.764,33.56C315.384,208.406,301.004,170.063,255.465,174.856z ">
                  </path>
               </g>
            </g>
         </svg>
         <small>
            <?php the_field('header_logo_text_two'); ?>ROSE HOTEL
         </small>
         <h1>
            <?php the_field('header_desc'); ?>
         </h1>
         <button class="btn-white">
            <?php the_field('header_btn_two'); ?>
         </button>
      </div>
   </header>

   <main>
      <section class="first-container" id="gallery">
         <div class="container">
            <div class="first-container-img">
               <img src="http://rosehotel.x10.mx/wp-content/uploads/2023/03/Image-1.jpg" alt="room" />
            </div>
            <div class="first-container-desc">
               <div class="first-container-desc-content">
                  <small>
                     <?php the_field('first_cont_small_header'); ?>
                  </small>
                  <h3>
                     <?php the_field('first_cont_header_text'); ?>
                  </h3>
                  <p>
                     <?php the_field('first_cont_desc'); ?>
                  </p>
                  <div class="first-container-btn">
                     <button>
                        <?php the_field('first_cont_btn_one'); ?>
                     </button>
                     <button class="btn-red">
                        <?php the_field('first_cont_btn_two'); ?>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="frame-sect" id="about">
         <div class="frame-container">
            <div class="row-two">
               <div class="icon-cont">
                  <svg width="60px" height="60px" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                     xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, -1, 0, 0)rotate(-45)">
                     <g id="SVGRepo_bgCarrier" stroke-width="1"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#de135c"
                        stroke-width="0"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path d="M3 18H21M12 6V4M4 15V14C4 9.58172 7.58172 6 12 6V6C16.4183 6 20 9.58172 20 14V15H4Z"
                           stroke="#de135c" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_one'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_one'); ?>
                     </p>
                  </div>
               </div>
               <div class="icon-cont">
                  <svg fill="#de135c" width="40px" height="40px" viewBox="0 0 32 32" version="1.1"
                     xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <title>calendar-star</title>
                        <path
                           d="M28 5.25h-1.25v-3.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 3.25h-18.5v-3.25c0-0.414-0.336-0.75-0.75-0.75s-0.75 0.336-0.75 0.75v0 3.25h-1.25c-1.518 0.002-2.748 1.232-2.75 2.75v19.998c0.002 1.518 1.232 2.748 2.75 2.75h24c1.518-0.002 2.748-1.232 2.75-2.75v-19.998c-0.002-1.518-1.232-2.748-2.75-2.75h-0zM4 6.75h24c0.69 0.001 1.249 0.56 1.25 1.25v3.25h-26.5v-3.25c0.001-0.69 0.56-1.249 1.25-1.25h0zM28 29.248h-24c-0.69-0.001-1.249-0.56-1.25-1.25v-15.248h26.5v15.248c-0.001 0.69-0.56 1.249-1.25 1.25h-0zM22.326 18.83h-4.287l-1.326-4.078c-0.124-0.276-0.396-0.464-0.713-0.464s-0.589 0.189-0.711 0.459l-0.002 0.005-1.325 4.078h-4.289c-0.414 0-0.75 0.336-0.75 0.75 0 0.249 0.121 0.469 0.307 0.606l0.002 0.001 3.469 2.52-1.324 4.078c-0.023 0.069-0.037 0.149-0.037 0.232 0 0.415 0.336 0.751 0.751 0.751 0.165 0 0.318-0.053 0.442-0.144l-0.002 0.001 3.469-2.521 3.469 2.521c0.122 0.090 0.275 0.144 0.441 0.144 0.414 0 0.75-0.336 0.75-0.75 0-0.083-0.014-0.164-0.039-0.239l0.002 0.005-1.326-4.078 3.471-2.52c0.188-0.138 0.309-0.358 0.309-0.607 0-0.414-0.336-0.75-0.75-0.751h-0zM17.976 21.812c-0.188 0.138-0.309 0.358-0.309 0.607 0 0.083 0.014 0.163 0.039 0.238l-0.002-0.005 0.779 2.4-2.041-1.484c-0.122-0.090-0.276-0.144-0.441-0.144s-0.319 0.054-0.444 0.145l0.002-0.001-2.042 1.486 0.779-2.402c0.024-0.070 0.037-0.15 0.037-0.233 0-0.249-0.121-0.469-0.307-0.606l-0.002-0.001-2.042-1.482h2.525c0 0 0.001 0 0.001 0 0.331 0 0.612-0.215 0.71-0.512l0.002-0.005 0.78-2.401 0.78 2.401c0.1 0.303 0.381 0.518 0.712 0.518 0 0 0.001 0 0.001 0h2.524z">
                        </path>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_two'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_two'); ?>
                     </p>
                  </div>

               </div>
               <div class="icon-cont">
                  <svg width="64px" height="64px" viewBox="0 0 64 64" id="SVGRoot" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                     xmlns:dc="http://purl.org/dc/elements/1.1/"
                     xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                     xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                     xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                     xmlns:svg="http://www.w3.org/2000/svg" fill="#de135c" stroke="#de135c"
                     transform="matrix(-1, 0, 0, 1, 0, 0)">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <title id="title7560"></title>
                        <defs id="defs7542"></defs>
                        <g id="layer1">
                           <path d="m 29.324219,51.78125 -0.867188,0.5 1.75586,3.041016 0.867187,-0.5 z" id="path5149"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 31.972656,50.251953 -0.867187,0.5 1.755859,3.041016 0.867188,-0.5 z" id="path5151"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 34.621094,48.722656 -0.865235,0.5 1.75586,3.041016 0.865234,-0.5 z" id="path5153"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 37.269531,47.193359 -0.865234,0.5 1.755859,3.041016 0.865235,-0.5 z" id="path5155"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 39.919922,45.664062 -0.867188,0.5 1.75586,3.041016 0.867187,-0.5 z" id="path5157"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 42.568359,44.134766 -0.865234,0.5 1.755859,3.041015 0.865235,-0.5 z" id="path5159"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path d="m 45.216797,42.605469 -0.865235,0.5 1.75586,3.041015 0.865234,-0.5 z" id="path5161"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path
                              d="m 22.135638,48.980675 0.25,0.433013 2.00586,3.47425 23.382686,-13.5 -2.255859,-3.907263 z m 1.366026,0.366025 21.650635,-12.5 1.25586,2.175213 -21.650636,12.5 z"
                              id="rect5145"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path
                              d="m 15.386719,7.2890625 -2.597657,1.5 19.75,34.2070315 0.865235,-0.5 -19.25,-33.3417971 0.865234,-0.5 19.25,33.3417971 0.867188,-0.5 z"
                              id="path5163"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                           <path
                              d="m 46.560547,39.337891 -0.662109,0.748047 c 0.620328,0.550076 1.187301,1.944684 1.890624,3.074218 0.328117,0.526954 0.725986,0.985192 1.251954,1.279297 L 29.927734,55.474609 c -0.553293,0.319446 -0.850079,0.299566 -1.146484,0.15625 C 28.484845,55.487544 28.162938,55.129744 27.853516,54.632812 27.23467,53.63895 26.734364,52.18653 25.777344,51.337891 l -0.664063,0.748047 c 0.620329,0.550077 1.187302,1.944684 1.890625,3.074218 0.351662,0.564767 0.753834,1.086806 1.341797,1.371094 0.587963,0.284288 1.336288,0.23915 2.082031,-0.191406 l 20.783204,-12 -0.5,-0.865235 c -0.553295,0.319446 -0.848127,0.299566 -1.144532,0.15625 -0.296405,-0.143315 -0.620265,-0.501115 -0.929687,-0.998047 -0.618845,-0.993862 -1.119152,-2.446282 -2.076172,-3.294921 z"
                              id="path5187"
                              style="color:#de135c;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#de135c;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#de135c;solid-opacity:1;vector-effect:none;fill:#de135c;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.99999994px;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_three'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_three'); ?>
                     </p>
                  </div>

               </div>
               <div class="icon-cont">
                  <svg fill="#de135c" width="50px" height="50px" viewBox="0 0 512 512" data-name="Layer 1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" stroke="#de135c" stroke-width="0">
                     <g id="SVGRepo_bgCarrier" stroke-width="1"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <title></title>
                        <path
                           d="M259.1,29.94a4.89,4.89,0,0,0-.73-.26,5.37,5.37,0,0,0-1.27-.46,5.59,5.59,0,0,0-1,0,5.16,5.16,0,0,0-1.24.06,6.29,6.29,0,0,0-1.17.42,6.42,6.42,0,0,0-.8.29C244.11,35.3,38,162.89,73,307.91c20.51,84.81,91.36,96.61,129.18,96.61a147.31,147.31,0,0,0,24.23-1.76,5.94,5.94,0,0,0,4.75-6.94,6.06,6.06,0,0,0-6.94-4.78c-4.67.89-114,19.87-139.63-85.92C53.83,177.72,230.42,58.58,256,42.1c25.57,16.48,202.18,135.62,171.38,263C401.8,410.93,292.43,392,287.74,391a6,6,0,0,0-6.93,4.78,5.94,5.94,0,0,0,4.75,6.94,147.17,147.17,0,0,0,24.23,1.76c37.81,0,108.67-11.8,129.17-96.61C474,162.89,267.89,35.3,259.1,29.94Z">
                        </path>
                        <path
                           d="M366.34,256.47A6,6,0,1,0,357.9,248L262,344V291.64l76.84-76.82a6,6,0,1,0-8.44-8.45L262,274.76V222.44l42.22-42.23a6,6,0,1,0-8.44-8.44L262,205.55V151.73a6,6,0,1,0-11.92,0v53.83l-33.77-33.78a6,6,0,0,0-8.44,8.42L250,222.42v52.33l-68.39-68.38a6,6,0,0,0-8.44,8.45L250,291.64V344L154.1,248a6,6,0,1,0-8.45,8.45L250,360.87v116a6,6,0,1,0,11.92,0v-116Z">
                        </path>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_four'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_four'); ?>
                     </p>
                  </div>

               </div>
            </div>
            <div class="row-one">
               <div class="icon-cont">
                  <svg fill="#de135c" height="50px" width="50px" version="1.1" id="Capa_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="-24.47 -24.47 293.62 293.62" xml:space="preserve"
                     transform="rotate(0)matrix(-1, 0, 0, 1, 0, 0)">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#de135c"
                        stroke-width="0.489356"></g>
                     <g id="SVGRepo_iconCarrier">
                        <g>
                           <path
                              d="M122.34,101.129c19.966,0,36.209-16.243,36.209-36.208c0-19.966-16.243-36.209-36.209-36.209 c-19.967,0-36.211,16.243-36.211,36.209C86.129,84.887,102.373,101.129,122.34,101.129z M122.34,43.712 c11.695,0,21.209,9.514,21.209,21.209c0,11.694-9.514,21.208-21.209,21.208c-11.696,0-21.211-9.514-21.211-21.208 C101.129,53.227,110.644,43.712,122.34,43.712z">
                           </path>
                           <path
                              d="M158.548,179.755c0-19.965-16.244-36.208-36.21-36.208s-36.21,16.243-36.21,36.208c0,19.966,16.244,36.209,36.21,36.209 S158.548,199.721,158.548,179.755z M122.338,200.964c-11.695,0-21.21-9.514-21.21-21.209c0-11.694,9.515-21.208,21.21-21.208 s21.21,9.514,21.21,21.208C143.548,191.45,134.033,200.964,122.338,200.964z">
                           </path>
                           <path
                              d="M143.548,122.339c0,19.966,16.243,36.209,36.208,36.209c19.966,0,36.209-16.243,36.209-36.209 c0-19.966-16.243-36.21-36.209-36.21C159.791,86.129,143.548,102.373,143.548,122.339z M179.756,101.129 c11.695,0,21.209,9.515,21.209,21.21c0,11.695-9.514,21.209-21.209,21.209c-11.694,0-21.208-9.514-21.208-21.209 C158.548,110.644,168.062,101.129,179.756,101.129z">
                           </path>
                           <path
                              d="M101.13,122.337c0-19.965-16.243-36.208-36.208-36.208c-19.966,0-36.209,16.243-36.209,36.208 c0,19.967,16.243,36.211,36.209,36.211C84.887,158.548,101.13,142.304,101.13,122.337z M64.922,143.548 c-11.695,0-21.209-9.515-21.209-21.211c0-11.694,9.514-21.208,21.209-21.208c11.694,0,21.208,9.514,21.208,21.208 C86.13,134.033,76.616,143.548,64.922,143.548z">
                           </path>
                           <circle cx="122.339" cy="122.339" r="9.601"></circle>
                           <path
                              d="M237.178,229.674h-56.191c37.923-20.803,63.691-61.116,63.691-107.337c0-67.455-54.88-122.334-122.336-122.334 C54.882,0.004,0,54.882,0,122.337c0,67.457,54.882,122.337,122.342,122.337h114.836c4.142,0,7.5-3.358,7.5-7.5 C244.678,233.032,241.32,229.674,237.178,229.674z M15,122.337C15,63.153,63.153,15.003,122.342,15.003 c59.185,0,107.336,48.15,107.336,107.334c0,59.186-48.151,107.337-107.336,107.337C63.153,229.674,15,181.523,15,122.337z">
                           </path>
                        </g>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_five'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_five'); ?>
                     </p>
                  </div>

               </div>
               <div class="icon-cont">
                  <svg fill="#de135c" height="50px" width="50px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                     xml:space="preserve">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <g>
                           <g>
                              <path
                                 d="M445.1,282.811v-68.703c0-44.711-15.889-88.097-44.741-122.167c-26.627-31.444-62.836-53.363-102.698-62.355 c0.152-1.128,0.256-2.321,0.256-3.622C297.915,11.647,286.376,0,272.19,0c-6.889,0-12.043,2.509-16.273,5.692 C251.57,2.395,246.579,0,239.68,0c-14.163,0-25.686,11.647-25.686,25.964c0,1.312,0.083,2.516,0.221,3.63 c-39.856,8.998-76.057,30.921-102.678,62.364c-28.842,34.067-44.726,77.448-44.726,122.15v32.919v35.379L44.462,485.522h22.349 v19.361h15.223v-19.361h47.394l-22.484-203.123v-23.757c76.959-53.225,115.291-104.145,133.935-137.687 c6.912-12.434,11.714-23.452,15.061-32.683c3.347,9.231,8.149,20.249,15.061,32.683c18.642,33.54,56.97,84.457,133.92,137.678 v23.774l-22.349,203.116h47.305v19.361H445.1v-19.361h22.438L445.1,282.811z M82.034,262.249h9.688v12.961h-9.688V262.249z M112.427,470.299H61.451l19.791-179.867h11.275L112.427,470.299z M226.956,114.663c-18.025,32.044-55.205,80.909-130.001,132.364 H82.034v-32.919c0-82.785,57.866-153.58,138.319-170.268c6.245,8.211,18.322,19.088,25.589,25.351 C243.328,79.338,237.945,95.127,226.956,114.663z M255.939,57.116l-0.735-0.046c-10.118-8.79-21.985-20.09-24.256-24.688 l-0.075-0.152c-0.961-1.945-1.656-3.352-1.656-6.267c0.001-6.023,4.596-10.741,10.463-10.741c3.913,0,6.19,1.518,11.042,6.079 l5.272,4.955l5.216-5.014c4.242-4.079,6.967-6.02,10.98-6.02c5.889,0,10.503,4.718,10.503,10.741c0,2.69-0.783,4.34-1.692,6.25 l-0.132,0.278c-1.953,4.12-13.139,15.036-24.174,24.577L255.939,57.116z M284.922,114.663 c-10.986-19.53-16.368-35.312-18.983-45.461c7.296-6.263,19.403-17.134,25.616-25.363 c80.456,16.687,138.321,87.476,138.321,170.268v32.919h-14.954C340.129,195.572,302.948,146.707,284.922,114.663z M429.831,262.249v12.961h-0.001h-9.687v-12.961H429.831z M399.56,470.299l19.791-179.867h11.275l19.91,179.867H399.56z">
                              </path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path
                                 d="M285.279,383.466v-2.939h63.957v-15.223h-63.957H226.63h-63.956v15.223h63.956v2.939c0,13.538,9.223,24.957,21.714,28.318 v67.054l-30.229,20.578L226.681,512l29.258-19.917L285.195,512l8.566-12.584l-30.197-20.557v-67.076 C276.055,408.422,285.279,397.003,285.279,383.466z M255.955,397.568c-7.777,0-14.102-6.326-14.102-14.102v-2.939h28.204v2.939 C270.057,391.241,263.732,397.568,255.955,397.568z">
                              </path>
                           </g>
                        </g>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_six'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_six'); ?>
                     </p>
                  </div>

               </div>
               <div class="icon-cont">
                  <svg width="50px" height="50px" viewBox="0 0 64.00 64.00" xmlns="http://www.w3.org/2000/svg"
                     stroke-width="2" stroke="#de135c" fill="none">
                     <g id="SVGRepo_bgCarrier" stroke-width="1"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path d="M21.84,37.11a17.78,17.78,0,0,1,20.24-.35" stroke-linecap="round"></path>
                        <path d="M14.79,29.32a28.27,28.27,0,0,1,34.61-.19" stroke-linecap="round"></path>
                        <path d="M7.58,21.68a38.73,38.73,0,0,1,48.84-.34" stroke-linecap="round"></path>
                        <circle cx="32.09" cy="47.11" r="3.58" stroke-linecap="round"></circle>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_seven'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_seven'); ?>
                     </p>
                  </div>

               </div>
               <div class="icon-cont">
                  <svg fill="#de135c" height="50px" width="50px" version="1.1" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 305.952 305.952" xml:space="preserve">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <g>
                           <g>
                              <g>
                                 <path
                                    d="M254.588,143.01c1.556-0.568,3.108-1.144,4.648-1.788c6.956-2.904,13.692-6.38,19.632-11.064 c9.06-7.144,16.836-17.532,17.84-29.372c0.824-9.696-3.176-20.4-13.016-23.804c-12.18-4.212-23.372,4.128-32.144,11.744 c0-0.032,0.008-0.064,0.008-0.096c0-13.54-34.14-21.532-70.308-23.156c-1.312-0.588-2.564-1.212-3.636-1.952 c-1.756-1.208-3.132-3.608-3.424-5.968c-0.184-1.464,0.076-2.72,0.736-3.568c0.58-0.508,1.072-1.092,1.448-1.768l-3.264-1.82 c-1.2,2.144-5.92,2.94-10.084,3.64c-1.024,0.172-2.036,0.344-2.996,0.532c-8.26,1.616-15.748,6.024-20.464,11.908 C109.172,69.346,83.5,76.902,83.5,88.638c0,0.356,0.048,0.704,0.092,1.048c-0.368,0.316-0.628,0.752-0.668,1.264 c-0.204,2.68-0.304,5.088-0.304,7.364c0,10.332,1.728,20.216,4.732,29.464c-17.224,1.76-34.02,6.776-50.148,15.16 c-4.308,2.24-8.584,4.812-12.7,7.652c-3.224,2.22-5.168,5.08-5.612,8.276c-0.4,2.852,0.484,5.796,2.42,8.612 c-8.08,7.384-14.756,15.736-19.8,24.876c-2.668,4.844-1.768,9.856,2.412,13.412c1.14,0.968,2.436,1.68,3.668,2.32 c0.844,0.444,1.688,0.88,2.536,1.32c-3.192,10.172-3.736,23.456-1.216,32.984c0.404,1.52,1.5,3.104,2.792,4.028 c1.508,1.08,3.232,1.64,4.988,1.64c0.6,0,1.2-0.064,1.8-0.196c2.504-0.548,4.724-2.24,6.092-4.64l1.54-2.74 c1.504-2.692,3.06-5.476,4.76-8.048c1.44-2.184,3.044-4.268,4.732-6.452c26.112,17.756,71.692,29.572,123.556,29.572 c80.936,0,146.78-28.712,146.78-64.004C305.956,172.142,285.984,154.754,254.588,143.01z M252.748,92.642 c9.424-8.312,28.612-21.836,37.836-5.132c6.248,11.32,0.252,25.22-7.704,33.9c-7.848,8.56-18.368,13.852-29.056,17.952 c-4.776,1.832-9.332,3.316-13.532,5.62c0.524-0.932,1.032-1.876,1.524-2.828c5.568-6.568,17.316-8.128,24.676-12.388 c10.848-6.28,23.368-16.516,23.276-30.26c-0.052-7.524-3.804-15.736-12.052-16.66c-9.452-1.056-18.288,6.888-25.328,13.224 c-0.028-1.004-0.072-2.056-0.136-3.14C252.42,92.854,252.592,92.782,252.748,92.642z M177.752,169.774 c-3.092,2.064-6.8,3.276-10.788,3.276c-3.964,0-7.624-1.216-10.684-3.276H177.752z M156.74,168.29v-0.868h0.004 c0.436-0.864,0.784-1.724,1.016-2.572h19.424v3.44H156.74z M177.708,162.858c-0.164,0.448-0.292,0.472-0.716,0.508 c-6.324-0.036-12.644-0.032-18.968,0c0.152-1.144,0.18-2.268-0.06-3.34c-0.62-2.76-2.564-5.184-5.596-7.044l-0.176-0.464 c0.78-0.168,1.488-0.488,2.064-1c0.532,0.568,1.06,1.14,1.584,1.712l1.372,1.488c0.116,0.124,0.244,0.232,0.404,0.368 l0.212,0.176c0.192,0.164,0.448,0.22,0.692,0.148c0.24-0.068,0.432-0.256,0.504-0.5l0.096-0.316 c0.064-0.204,0.116-0.372,0.156-0.544l0.556-2.288c0.376-1.552,0.752-3.108,1.148-4.656c0.044,0,0.076,0.024,0.12,0.024 c0.736,0,1.416-0.196,2.04-0.492c0.596,1.52,1.188,3.044,1.776,4.568l0.992,2.564c0.056,0.132,0.12,0.256,0.2,0.404l0.088,0.164 c0.112,0.224,0.38,0.316,0.628,0.34c0.312,0.02,0.544-0.14,0.696-0.332c0.072-0.092,0.168-0.208,0.232-0.372l1.04-2.676 c0.628-1.624,1.26-3.248,1.9-4.868c0.48,0.164,0.976,0.304,1.508,0.304c0.164,0,0.304-0.076,0.46-0.092 c0,0.004,0,0.016,0.004,0.02c0.376,1.512,0.744,3.028,1.112,4.54l0.756,3.092c0.052,0.204,0.136,0.368,0.22,0.528l0.108,0.208 c0.104,0.22,0.316,0.376,0.556,0.416c0.256,0.028,0.488-0.048,0.656-0.232l3.344-3.612l0.144-0.124 c0.008-0.008,0.016-0.016,0.024-0.02c0.548,0.512,1.236,0.832,1.984,1.028c-0.552,1.5-1.112,3-1.676,4.496 C179.156,158.938,178.424,160.894,177.708,162.858z M157.768,142.31c0-1.84,1.496-3.336,3.336-3.336 c1.84,0,3.336,1.496,3.336,3.336c0,1.84-1.496,3.336-3.336,3.336C159.264,145.646,157.768,144.15,157.768,142.31z M168.976,142.026c0-1.784,1.448-3.232,3.228-3.232c1.784,0,3.232,1.448,3.232,3.232s-1.448,3.232-3.232,3.232 C170.424,145.258,168.976,143.81,168.976,142.026z M178.644,164.15c0.18-0.216,0.336-0.464,0.456-0.788 c0.712-1.96,1.448-3.912,2.18-5.864c0.576-1.536,1.156-3.076,1.724-4.62c0.056-0.156,0.132-0.212,0.204-0.276 c1.228-0.148,2.276-0.764,3-1.696c0.12,0.868,0.264,1.732,0.264,2.636c0,6.388-3.132,12.016-7.892,15.58 c0.02-0.064,0.088-0.12,0.088-0.188v-4.728C178.668,164.186,178.644,164.17,178.644,164.15z M182.676,151.222 c-1.692,0-3.064-1.376-3.064-3.064s1.372-3.06,3.064-3.06c0.976,0.004,1.808,0.492,2.368,1.2c0.272,0.672,0.456,1.38,0.648,2.088 C185.572,149.962,184.284,151.222,182.676,151.222z M182.68,143.618c-2.508,0-4.548,2.036-4.548,4.544 c0,0.76,0.232,1.444,0.564,2.072c-0.04,0.048-0.1,0.112-0.156,0.164l-2.716,2.916l-0.6-2.46c-0.36-1.48-0.72-2.968-1.08-4.556 c1.632-0.744,2.78-2.368,2.78-4.276c0-2.6-2.116-4.716-4.716-4.716c-2.596,0-4.712,2.116-4.712,4.716 c0,1.52,0.772,2.816,1.892,3.676c-0.664,1.684-1.32,3.372-1.972,5.06l-0.532,1.388l-0.576-1.484 c-0.616-1.592-1.232-3.196-1.86-4.904c0.908-0.876,1.48-2.096,1.48-3.452c0-2.66-2.16-4.82-4.82-4.82 c-2.66,0-4.82,2.16-4.82,4.82c0,2.1,1.368,3.844,3.244,4.5c-0.388,1.532-0.764,3.068-1.132,4.604l-0.456,1.892l-1.004-1.088 c-0.56-0.608-1.14-1.236-1.752-1.908c0.36-0.648,0.616-1.36,0.616-2.152c0-2.504-2.036-4.544-4.544-4.544 c-0.364,0-0.688,0.128-1.028,0.208c3.352-5.82,9.544-9.792,16.74-9.792c7.208,0,13.448,3.976,16.824,9.808 C183.424,143.75,183.072,143.618,182.68,143.618z M151.252,145.102c1.688,0,3.06,1.372,3.06,3.06s-1.372,3.064-3.06,3.064 c-1.584,0-2.848-1.224-3-2.768c0.236-0.872,0.572-1.696,0.92-2.512C149.72,145.43,150.444,145.102,151.252,145.102z M150.24,156.006c2.312,1.364,3.692,2.988,4.1,4.828c0.432,1.92-0.18,4.104-1.808,6.492c-3.084,4.512-6.252,8.956-9.424,13.4 l-6.736,9.46c-1.932,2.692-3.864,5.388-5.728,8.136c-2.332,3.456-5.324,5.38-9.044,5.884c0.808-2.804,1.704-5.608,2.736-8.36 l-1.988-0.744c-1.14,3.036-2.128,6.132-2.992,9.228c-0.412-0.004-0.82,0-1.248-0.032c-0.504-0.044-1.028-0.124-1.532-0.176 c0.824-2.884,1.744-5.768,2.808-8.592l-1.988-0.744c-1.124,2.988-2.096,6.04-2.952,9.096c-0.728-0.088-1.432-0.152-2.176-0.248 l-0.892-0.112l14.048-58.62c0.736,0.244,1.468,0.484,2.2,0.724c3.02,0.988,5.876,1.916,8.624,3.136 C140.796,150.77,145.504,153.21,150.24,156.006z M166.052,200.822c0.44,1.824,0.136,2.716-1.304,3.82 c-2.264,1.744-4.96,1.72-7.376-0.08c-2.892-2.148-5.992-4.116-9.272-5.912c1.492-2.516,3.068-4.996,4.752-7.368l-1.732-1.228 c-1.744,2.456-3.372,5.028-4.912,7.632c-0.82-0.424-1.628-0.86-2.468-1.26c1.384-2.3,2.836-4.588,4.412-6.804l-1.732-1.228 c-1.652,2.332-3.184,4.74-4.632,7.16c-1.176-0.524-2.344-1.06-3.556-1.544l13.916-19.5l0.112,0.132 c1.144,1.356,2.232,2.644,3.26,3.992C160.556,185.214,164.1,192.678,166.052,200.822z M165.864,188.918 c0.556,0.016,1.112,0.044,1.672,0.044c14.072,0.004,27.344-3.692,39.044-10.192c2.332,1.268,4.012,2.84,4.012,3.448 c0,3.456-16.368,11.64-42.172,11.64c-0.192,0-0.372-0.008-0.556-0.012C167.28,192.166,166.584,190.534,165.864,188.918z M111.792,207.31c2.064,0.268,4.032,0.52,6.004,0.684c0.624,0.052,1.236,0.08,1.832,0.08c5.912,0,10.644-2.576,14.088-7.672 c0.748-1.108,1.54-2.184,2.308-3.28c0.084,0.036,0.168,0.08,0.248,0.112c6.98,2.724,13.332,6.192,18.88,10.312 c1.876,1.392,3.956,2.088,6.016,2.088c2.036,0,4.052-0.68,5.832-2.04c2.584-1.984,3.428-4.408,2.656-7.632 c-0.192-0.808-0.476-1.576-0.696-2.368c23.812-0.112,45.368-7.384,45.368-15.372c0-2.076-1.444-3.94-4.136-5.576 c9.616-5.992,18.032-13.936,24.768-23.332c0.316-0.068,0.628-0.2,0.908-0.48c1.248-1.236,2.596-2.256,3.988-3.192 c27.016,9.248,44.212,23.024,44.212,38.396c0,27.776-56.044,50.372-124.936,50.372c-28.736,0-55.18-3.952-76.292-10.56 c0.212-0.052,0.408-0.072,0.616-0.128c3.576-0.956,8.292-2.188,13.072-3.256c4.976-1.112,8.54-3.596,11.208-7.816l0.408-0.988 c0.272-0.712,0.624-1.648,0.86-2.62c0.48-1.964,0.94-3.936,1.408-5.904L111.792,207.31z M252.372,101.078 c6.596-5.824,19.32-19.12,28.552-13.344c13.132,8.22-0.192,26.896-7.536,32.804c-5.996,4.824-12.536,8.256-19.676,11.096 c-2.876,1.144-5.896,2.204-8.688,3.648C249.436,124.782,252.028,113.23,252.372,101.078z M247.82,88.638 c0,1.688-1.112,3.412-3.164,5.104c-2.98-7.908-19.06-14.46-41.884-17.796c-2.144-2.664-5.636-4.504-9.04-5.872 C226.544,73.01,247.82,81.15,247.82,88.638z M133.444,87.63c0.076,1.268,0.216,3.628,2.108,5.416 c1.22,1.156,2.948,1.844,4.48,2.364c6.54,2.228,17.48,3.62,28.504,3.62c11.852,0,23.804-1.608,30.496-5.504 c2.612-1.52,3.84-3.884,4.7-5.996c1.416-3.472,1.504-6.536,0.408-9.172c21.56,3.368,36.932,9.568,38.752,16.632 c-2.644,1.748-6.304,3.432-10.88,4.992c-14.272,4.624-36.828,8.388-64.48,8.388c-27.656,0-50.22-3.76-64.496-8.384 c-4.052-1.38-7.452-2.856-9.996-4.392c1.12-7.56,17.744-14.204,41.108-17.572C133.512,80.998,133.236,84.162,133.444,87.63z M186.98,71.618c0.956,0.32,1.904,0.64,2.844,0.972c3.708,1.304,8.844,3.4,10.636,6.548c1.04,1.836,0.984,4.12-0.188,6.984 c-0.756,1.856-1.576,3.276-3.124,4.176c-3.02,1.76-7.52,3.016-12.724,3.84c3.104-5.14,6.072-11.968,3.896-17.472 c-1.792-4.54-5.928-6.212-9.48-8.176C181.404,69.722,184.212,70.694,186.98,71.618z M170.708,58.998 c-0.24,3.724,0.84,6.908,4.088,9.876c2.324,2.124,6.016,2.836,8.124,4.956c6.272,6.292,2.852,14.38-1.228,20.704 c-4.692,0.58-9.82,0.828-14.928,0.776c2.128-2.232,3.592-4.916,3.836-8.3c0.22-3.036-0.936-5.88-1.536-8.8 c-1.392-6.76-0.248-12.964,1.628-19.28C170.696,58.954,170.704,58.974,170.708,58.998z M166.22,74.058 c0.616,8.288,4.692,15.092-2.456,21.176c-6.46-0.22-12.692-0.928-17.784-2.068c-5.176-13.416,12.788-26.664,22.964-35.828 C167.236,62.754,165.796,68.342,166.22,74.058z M141.484,70.086c4.056-5.852,11.252-10.28,19.26-11.844 c0.932-0.184,1.908-0.348,2.9-0.512c0.756-0.128,1.508-0.268,2.26-0.404c-6.468,6.016-13.356,11.924-18.804,18.712 c-4.176,5.2-5.54,10.66-3.668,16.5c-0.76-0.212-1.516-0.424-2.2-0.656c-1.08-0.368-2.412-0.88-3.116-1.54 c-0.688-0.652-0.86-1.532-0.944-2.924C136.76,80.538,138.168,74.87,141.484,70.086z M136.96,70.506 c-0.908,1.66-1.66,3.4-2.212,5.232c-24.164,3.34-41.136,10.236-43.596,18.568c-2.52-1.872-3.912-3.792-3.912-5.668 C87.24,81.49,106.656,73.754,136.96,70.506z M86.748,106.618c3.184,4.068,8.696,6.416,11.84,7.724l0.812-1.956 c-4.296-1.788-12.232-5.112-12.928-11.6c-0.024-0.828-0.108-1.64-0.108-2.472c0-0.748,0.012-1.512,0.032-2.292 c2.032,1.676,4.852,3.28,8.32,4.784c15.504,7.408,44.768,11.308,72.816,11.308c27.956,0,57.116-3.876,72.66-11.236 c0.004,0,0.008-0.004,0.012-0.004c0.04-0.02,0.08-0.036,0.12-0.056c3.476-1.508,6.308-3.116,8.344-4.792 c0.02,0.788,0.032,1.548,0.032,2.292c0,0.58-0.032,1.156-0.04,1.732c0,0.064-0.012,0.124-0.004,0.184 c0,0.112-0.004,0.224-0.008,0.34h-0.008c-1.576,16.144-29.172,18.564-42.436,19.728c-1.224,0.108-2.34,0.204-3.316,0.3 c-28.144,2.808-58.196,4.388-87.328-2.988l-0.52,2.056c15.8,4,31.832,5.396,47.676,5.396c13.696,0,27.252-1.044,40.384-2.352 c0.968-0.096,2.076-0.192,3.292-0.3c11.748-1.028,34.224-3.04,41.816-14.58c-1.216,11.888-4.68,23.056-9.924,33.016 c-1.376,1.88-2.472,3.996-3.52,6.12c-14.608,23.076-39.292,38.268-67.228,38.268c-1.204,0-2.388-0.096-3.58-0.16 c-1.604-3.02-3.384-5.944-5.484-8.688c-1.064-1.388-2.192-2.728-3.376-4.132l-0.808-0.968c0.052-0.072,0.104-0.144,0.152-0.22 c3.528,2.564,7.832,4.108,12.524,4.108c11.928,0,21.628-9.704,21.628-21.628c0-11.924-9.7-21.628-21.628-21.628 c-10.476,0-19.132,7.52-21.108,17.424c-2.736-1.444-5.448-2.796-8.104-3.976c-2.916-1.296-5.996-2.3-8.976-3.272 c-0.916-0.3-1.848-0.612-2.776-0.924c0.908-5.304-1.06-9.368-5.808-11.772c-1.908-0.964-4.164-1.588-6.512-1.804 c-7.576-0.696-15.08-0.696-22.516-0.148C88.948,120.818,87.404,113.862,86.748,106.618z M22.568,159.374 c0.3-2.136,1.7-4.116,4.044-5.732c3.996-2.752,8.132-5.248,12.308-7.416c19.84-10.312,40.688-15.508,62.132-15.508 c4.08,0,8.18,0.188,12.296,0.564c1.864,0.168,3.7,0.672,5.176,1.42c3.548,1.792,4.684,4.464,3.692,8.656L108.1,200.85 c-0.888,3.772-1.78,7.544-2.696,11.304c-0.2,0.808-0.5,1.588-0.728,2.18l-0.18,0.488c-2.12,3.28-4.84,5.14-8.784,6.024 c-0.172,0.04-0.34,0.08-0.512,0.12c-0.868-3.788-1.736-7.576-2.604-11.368c-0.304-1.328-2.348-0.768-2.044,0.564 c0.86,3.76,1.72,7.52,2.584,11.28c-1.264,0.296-2.5,0.596-3.704,0.9c-0.496-2.164-0.992-4.324-1.484-6.488 c-0.304-1.328-2.348-0.768-2.044,0.564c0.492,2.148,0.984,4.296,1.476,6.444c-1.308,0.336-2.54,0.656-3.692,0.964 c-0.864-3.78-1.732-7.564-2.596-11.344c-0.304-1.328-2.348-0.768-2.044,0.564c0.86,3.76,1.72,7.52,2.584,11.28 c-5.156,1.14-8.964-0.12-12.22-4.108c-10.88-13.316-21.828-26.568-32.78-39.82l-11.556-13.992 C23.124,164.038,22.26,161.61,22.568,159.374z M65.48,221.274c-0.628-0.288-1.236-0.584-1.848-0.876 c0.236-0.164,0.48-0.328,0.72-0.492C64.728,220.362,65.108,220.818,65.48,221.274z M32.972,223.334 c-0.044,0.056-0.084,0.112-0.128,0.168c-0.228,0.02-0.44,0.06-0.672,0.076c0.128,0.096,0.272,0.184,0.4,0.28 c-0.744,0.968-1.484,1.924-2.196,2.876c-2.4-1.14-4.836-2.22-7.308-3.164l-0.76,1.98c2.308,0.88,4.58,1.884,6.82,2.936 c-0.448,0.632-0.912,1.252-1.344,1.9c-0.108,0.164-0.204,0.34-0.312,0.508c-2.44-1.164-4.928-2.268-7.46-3.236l-0.76,1.98 c2.412,0.924,4.776,1.972,7.104,3.072c-1.208,1.98-2.364,3.984-3.468,5.96l-1.528,2.712c-0.844,1.488-2.18,2.528-3.664,2.856 c-1.316,0.292-2.66,0.004-3.832-0.836c-0.596-0.428-1.188-1.272-1.368-1.964c-2.264-8.572-1.84-20.944,0.936-30.308 c1.972,1.028,3.948,2.06,5.92,3.088c4.912,2.552,9.808,5.132,14.708,7.708C33.696,222.402,33.332,222.87,32.972,223.334z M11.32,205.798l-0.012,0.036c-0.664-0.348-1.332-0.692-1.996-1.04c-1.088-0.568-2.136-1.136-2.984-1.856 c-2.816-2.396-3.376-5.52-1.568-8.792c4.78-8.664,11.064-16.612,18.696-23.648l38.48,46.556c-0.48,0.332-0.948,0.66-1.42,0.988 c-0.508,0.356-0.996,0.68-1.496,1.024c-2.64-2.404-5.448-4.704-8.344-6.84l-1.256,1.704c2.7,1.992,5.312,4.136,7.784,6.368 c-0.848,0.552-1.7,1.052-2.56,1.532c-2.504-2.256-5.164-4.444-7.936-6.488l-1.256,1.704c2.456,1.816,4.804,3.748,7.048,5.736 c-3.396,1.284-6.864,1.056-10.548-0.912c-0.76-0.404-1.532-0.796-2.292-1.2l0.012-0.02L11.32,205.798z M159.176,251.814 c-48.792,0-91.936-10.352-117.764-26.108c2.364,1.08,4.708,1.652,7.02,1.652c2.508,0,4.98-0.636,7.392-1.912 c1.92-1.012,3.7-2.212,5.508-3.464c2.868,1.424,5.912,2.784,9.12,4.076c1.752,1.16,3.656,1.892,5.724,2.176 c22.32,7.976,51.284,12.824,82.968,12.824c70.352,0,127.584-23.788,127.584-53.024c0-15.984-17.164-30.308-44.168-40.036 c2.216-1.204,4.54-2.2,6.92-3.104c32.14,11.056,52.74,27.852,52.74,46.656C302.216,224.782,238.048,251.814,159.176,251.814z">
                                 </path>
                                 <path
                                    d="M111.844,116.614c-3.036-0.856-6.096-1.836-9.096-2.916l-0.716,1.992c3.044,1.096,6.152,2.096,9.236,2.964 L111.844,116.614z">
                                 </path>
                                 <path
                                    d="M126.612,151.998c8.248,2.224,15.672,6.052,22.28,11.464c1.048,0.856,2.556-0.636,1.5-1.5 c-6.884-5.636-14.62-9.692-23.216-12.008C125.856,149.598,125.292,151.646,126.612,151.998z">
                                 </path>
                                 <path
                                    d="M24.056,176.314c-6.928,5.6-12.46,12.48-16.548,20.392c-0.624,1.212,1.204,2.284,1.832,1.072 c4.008-7.764,9.42-14.472,16.216-19.964C26.616,176.954,25.108,175.466,24.056,176.314z">
                                 </path>
                                 <path
                                    d="M53.6,155.446c0.196,0,0.388,0,0.58,0c2.408,0,2.412-3.74,0-3.74c-0.196,0-0.388,0-0.58,0 C51.192,151.706,51.188,155.446,53.6,155.446z">
                                 </path>
                                 <path
                                    d="M90.848,148.75c0.196,0,0.388,0,0.58,0c2.408,0,2.412-3.74,0-3.74c-0.196,0-0.388,0-0.58,0 C88.44,145.01,88.436,148.75,90.848,148.75z">
                                 </path>
                                 <path
                                    d="M129.196,162.978c-2.404,0-2.408,3.74,0,3.74C131.604,166.718,131.608,162.978,129.196,162.978z">
                                 </path>
                                 <path
                                    d="M76.268,142.494c0.192,0,0.388,0,0.58,0c2.408,0,2.412-3.74,0-3.74c-0.196,0-0.388,0-0.58,0 C73.86,138.754,73.856,142.494,76.268,142.494z">
                                 </path>
                                 <path
                                    d="M72.7,160.534c0.152-0.12,0.308-0.236,0.46-0.356c1.908-1.464-0.368-4.432-2.276-2.964 c-0.152,0.12-0.308,0.236-0.46,0.356C68.516,159.034,70.788,162.002,72.7,160.534z">
                                 </path>
                                 <path
                                    d="M87.272,170.778c0.152-0.12,0.308-0.236,0.46-0.356c1.908-1.464-0.368-4.432-2.276-2.964 c-0.152,0.12-0.308,0.236-0.46,0.356C83.084,169.278,85.36,172.25,87.272,170.778z">
                                 </path>
                                 <path
                                    d="M131.9,178.118c-0.152,0.12-0.308,0.236-0.46,0.356c-1.908,1.464,0.364,4.432,2.276,2.964 c0.152-0.12,0.308-0.236,0.46-0.356C136.084,179.618,133.808,176.65,131.9,178.118z">
                                 </path>
                                 <path
                                    d="M27.552,190.618c-0.152,0.12-0.308,0.236-0.46,0.356c-1.912,1.464,0.364,4.432,2.276,2.964 c0.152-0.12,0.308-0.236,0.46-0.356C31.736,192.118,29.46,189.15,27.552,190.618z">
                                 </path>
                                 <path
                                    d="M44.408,173.166c0.152-0.12,0.308-0.236,0.46-0.356c1.908-1.464-0.368-4.432-2.276-2.964 c-0.152,0.12-0.308,0.236-0.46,0.356C40.224,171.666,42.496,174.634,44.408,173.166z">
                                 </path>
                              </g>
                           </g>
                        </g>
                     </g>
                  </svg>
                  <div class="icon-list">
                     <small>
                        <?php the_field('frame_small_header_eight'); ?>
                     </small>
                     <p>
                        <?php the_field('frame_desc_text_eight'); ?>
                     </p>
                  </div>

               </div>
            </div>
         </div>
      </section>
      <section class="second-container" id="gallery">
         <div class="container second-cont">
            <div class="second-container-img">
               <img src="http://rosehotel.x10.mx/wp-content/uploads/2023/03/Image-3.jpg" alt="room" />
            </div>
            <div class="second-container-desc">
               <div class="second-container-desc-content">
                  <small>
                     <?php the_field('second_cont_small_header'); ?>
                  </small>
                  <h3>
                     <?php the_field('second_cont_header_text'); ?>
                  </h3>
                  <p>
                     <?php the_field('second_cont_desc'); ?>
                  </p>
                  <div class="second-container-btn">
                     <button>
                        <?php the_field('second_cont_btn_one'); ?>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>

   </main>
   <footer class="footer" id="contact">
      <div class="footer-logo">
         <svg height="5s0px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#de135c">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
               <style type="text/css">
                  .st0 {
                     fill: #de135c;
                  }
               </style>
               <g>
                  <path class="st0"
                     d="M502.774,221.7c0-109.2-88.53-197.729-197.729-197.729c-43.089,0-82.928,13.83-115.412,37.225 c63.915,4.943,131.847,38.619,184.149,97.488c53.544,60.28,73.426,136.009,63.839,215.107 C478.369,335.448,502.774,274.354,502.774,221.7z">
                  </path>
                  <path class="st0"
                     d="M173.399,386.897c-41.275-49.044-64.884-121.098-59.561-199.669c5.445-80.44,57.733-156.186,124.848-184.945 C178.763-7.309,105.882,14.155,68.335,51.067c-77.869,76.56-78.937,201.752-2.391,279.626 C96.16,361.419,133.943,380.129,173.399,386.897z">
                  </path>
                  <path class="st0"
                     d="M246.736,405.277c-78.978,16.225-163.847-12.311-204.594-50.662c4.792,59.923,39.929,104.532,85.531,130.86 c94.568,54.604,215.501,22.197,270.1-72.368c21.545-37.323,29.492-78.74,25.474-118.567 C387.005,347.419,323.873,389.417,246.736,405.277z">
                  </path>
                  <path class="st0"
                     d="M176.363,95.756c-23.968,9.584-40.743,81.495-31.16,119.838c67.111-100.661,179.764-50.331,179.764-50.331 C296.208,122.12,210.262,82.195,176.363,95.756z">
                  </path>
                  <path class="st0"
                     d="M194.885,372.307c20.289,15.966,90.944-5.462,119.368-32.943c-120.74-7.777-133.48-130.502-133.48-130.502 C157.799,255.34,166.194,349.734,194.885,372.307z">
                  </path>
                  <path class="st0"
                     d="M247.259,294.657c45.951,19.738,130.476,7.071,146.428-21.536c11.283-20.212-19.484-86.849-49.016-112.729 C356.86,276.438,247.259,294.657,247.259,294.657z">
                  </path>
                  <path class="st0"
                     d="M255.465,174.856c-45.544,4.791-50.339,64.714-23.971,83.89c26.363,19.167,55.13-11.988,43.143-31.164 c-23.972,4.792-28.764-16.78-9.593-26.362c19.18-9.584,35.96,7.187,28.764,33.56C315.384,208.406,301.004,170.063,255.465,174.856z ">
                  </path>
               </g>
            </g>
         </svg>
      </div>
      <div class="footer-navbar">
         <a href="#">
            <li class="footer-navbar-list">
               <?php the_field('footer_home'); ?>
            </li>
         </a>
         <a href="#about">
            <li class="footer-navbar-list">
               <?php the_field('footer_about'); ?>
            </li>
         </a>
         <a href="#gallery">
            <li class="footer-navbar-list">
               <?php the_field('footer_gallery'); ?>
            </li>
         </a>
         <a href="#contact">
            <li class="footer-navbar-list">
               <?php the_field('footer_contact_us'); ?>
            </li>
         </a>
      </div>
      <div class="contact">
         <small>
            <?php the_field('footer_address'); ?>
         </small>
         <div class="contact-flex">
            <small>
               <?php the_field('footer_mobile'); ?>
            </small>
            <small>
               <?php the_field('footer_email'); ?>
            </small>
         </div>
      </div>
      <div class="icon-cont">
         <a href="#" class="icon-list"><svg fill="" width="36px" height="36px" viewBox="-2 -2 24 24"
               xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-facebook-circle">
               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
               <g id="SVGRepo_iconCarrier">
                  <path
                     d="M8.695 6.937v1.377H7.687v1.683h1.008V15h2.072V9.997h1.39s.131-.807.194-1.69h-1.576v-1.15c0-.173.226-.404.45-.404h1.128V5h-1.535C8.644 5 8.695 6.685 8.695 6.937z">
                  </path>
                  <path
                     d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z">
                  </path>
               </g>
            </svg></a>
         <a href="#" class="icon-list"><svg fill="#ffffff" width="36x" height="36px" viewBox="-2 -2 24 24"
               xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-twitter-circle">
               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
               <g id="SVGRepo_iconCarrier">
                  <path
                     d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z">
                  </path>
                  <path
                     d="M15 6.947c-.368.16-.763.27-1.178.318.424-.25.748-.646.902-1.117-.398.231-.836.4-1.304.49A2.06 2.06 0 0 0 11.923 6c-1.133 0-2.051.905-2.051 2.02 0 .158.018.312.053.46a5.854 5.854 0 0 1-4.228-2.11 1.982 1.982 0 0 0-.278 1.015c0 .7.363 1.32.913 1.681a2.076 2.076 0 0 1-.93-.253v.025a2.03 2.03 0 0 0 1.646 1.98 2.108 2.108 0 0 1-.927.034 2.049 2.049 0 0 0 1.916 1.403 4.156 4.156 0 0 1-2.548.864c-.165 0-.328-.01-.489-.028A5.863 5.863 0 0 0 8.144 14c3.774 0 5.837-3.078 5.837-5.748l-.007-.262A4.063 4.063 0 0 0 15 6.947z">
                  </path>
               </g>
            </svg></a>
         <a href="#" class="icon-list"><svg fill="#ffffff" width="36px" height="36px" viewBox="-2 -2 24 24"
               xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-linkedin-circle">
               <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
               <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
               <g id="SVGRepo_iconCarrier">
                  <path
                     d="M15 11.13v3.697h-2.143v-3.45c0-.866-.31-1.457-1.086-1.457-.592 0-.945.398-1.1.784-.056.138-.071.33-.071.522v3.601H8.456s.029-5.842 0-6.447H10.6v.913l-.014.021h.014v-.02c.285-.44.793-1.066 1.932-1.066 1.41 0 2.468.922 2.468 2.902zM6.213 5.271C5.48 5.271 5 5.753 5 6.385c0 .62.466 1.115 1.185 1.115h.014c.748 0 1.213-.496 1.213-1.115-.014-.632-.465-1.114-1.199-1.114zm-1.086 9.556h2.144V8.38H5.127v6.447z">
                  </path>
                  <path
                     d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z">
                  </path>
               </g>
            </svg></a>
      </div>
   </footer>
</body>

</html>