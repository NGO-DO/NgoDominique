<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="./src/tailwindTail.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script>
        src = "test.js"
    </script>
    <!-- <link rel="stylesheet" href="../tailwind.css"> -->
    <title>Portefolio Ho Ngo Dominique</title>
</head>

<body id="top">
    <!-- debut navbar -->
    <!-- debut navbar -->
    <header class="sticky top-0 z-50">
        <div class="md:flex bg-slate-900 ">
            <h5 class=" font-poppins text-3xl  text-gray-50 px-3 py-3">
                Ho Ngo Dominique
            </h5>
            <nav class="relative md:invisible">
                <!-- <button class="material-symbols-outlined ml-auto ml-6 py-4 cursor-pointer" type="button" onclick="toggleNavbar('collapse-nav')">
                    menu
                </button> -->
            </nav>
            <div class="items-center mt-4" id="collapse-nav">
                <ul class="navbarPcres my-flex-columns ml-auto">
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#about-me">
                            <span>Sur moi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#contact">
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#cv">
                            <span>CV</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#mesProjets">
                            <span>Mes projets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#mescompetences">
                            <span>Mes compétences</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- fin navbar -->
    <section class="image-Moi">
        <div class=" flex box-content h-20% w-32% p-4 border-4 bg-slate-900 md:justify-center">
            <h5 class="oswald text-3xl text-white flex items-center">SALUT JE SUIS UN FULL-STACK DEVELOPPER</h5>
            <img src="img/logo-wac.png" alt="logo-wac" class="h-20 rounded-full ml-[4%]" aria-expanded="false" />
            <img src="img/logoEpitech.png" alt="logo-epitech" class="h-20 rounded-md ml-[4%]" aria-expanded="false" />

        </div>
    </section>
    </header>
    <section class="image-1 w-full px-16 py-[15%]">
        <!-- START BOX -->
        <div class="md:mx-40 bg-white bg-opacity-50 rounded-md shadow-2xl">
            <h5 class="oswald text-red-700 text-2xl " id="about-me">Sur moi</h5>
            <container id="home" class="flex space-x-4 w-full">
                <div class="box-border p-4 border-4 mx-auto my-3 drop-shadow-lg ring-offset-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae harum libero, officia nulla quod. Maiores voluptatem quibusdam eligendi officiis. Quaerat deleniti numquam totam quae! Possimus cupiditate pariatur autem accusantium.
                </div>
                <div class="box-border p-4 border-4 my-3 drop-shadow-lg ring-offset-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae harum libero, officia nulla quod. Maiores voluptatem quibusdam eligendi officiis. Quaerat deleniti numquam totam quae! Possimus cupiditate pariatur autem accusantium.
                </div>
            </container>
            <div class="box-border p-4 border-4 my-3 drop-shadow-lg ring-offset-4 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae harum libero, officia nulla quod. Maiores voluptatem quibusdam eligendi officiis. Quaerat deleniti numquam totam quae! Possimus cupiditate pariatur autem accusantium.
            </div>
            <div class="box-border p-4 border-4 my-3 drop-shadow-lg ring-offset-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae harum libero, officia nulla quod. Maiores voluptatem quibusdam eligendi officiis. Quaerat deleniti numquam totam quae! Possimus cupiditate pariatur autem accusantium.
            </div>
        </div>
        <!-- END BOX -->

    </section>

    <section class="image-2 grid justify-items-center">

        <!-- Mes coordonnées -->
        <container>
            <div class="px-16 divide-y divide-slate-700 md:mx-40 bg-white bg-opacity-50 my-[20%] rounded-md shadow-2xl">
                <h5 class="oswald text-red-700 text-2xl" id="contact">Contact</h5>
                <ul class="font-poppins">
                    <li>Nom: <br>Ho Ngo Dominique</li>
                    <li>Email: <br>dominiquengo93@gmail.com</li>
                    <li>Date de naissance:<br> 11/10/2005</li>
                    <li>linkeIN: </li>
                </ul>
                <h3 class="font-poppins text-xl font-bold">RECHERCHE D'EMPLOIS ACTUEL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id officia optio sapiente eum architecto dolor autem, esse aperiam nam vero at facere voluptatum dolores omnis reiciendis voluptatibus illo recusandae odio!</p>
            </div>
        </container>
        <!-- FIN coordonnées -->
    </section>
    <section class="image-3 grid justify-items-center">
        <!-- CV -->
        <div class="px-16 divide-y divide-slate-700 md:mx-40 bg-white bg-opacity-50 my-[7%] rounded-md shadow-2xl">
            <h5 class="oswald text-red-700 text-2xl" id="cv">CV</h5>
            <container id="CV">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.
                <img src="img/icons8-github.gif" alt="logo-github">
                <img src="img/Green Modern Professional Resume.png" alt="CV DOM" class="md:w-96">
                <a class="bg-amber-900" href="img/Download-1.pdf" download="Ho Ngo Dominique CV">Télécharger le cv</a>

            </container>
        </div>
        <!-- END CV -->
    </section>
    <!-- Mes Projets -->
    <section class="image-4 grid justify-items-center ">
        <div>
            <h5 class="oswald text-red-700 text-2xl px-[13%] bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl mx-[4%]" id="mesProjets">Mes projets</h5>
            <ul class="md:flex px-16 divide-slate-700 ">
                <li class="md:w-1/2 p-3 mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>
                <li class="md:w-1/2 p-3 mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <a href="https://github.com/orgs/EpitechWebAcademiePromo2025/dashboard"><img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" /></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>
                <li class="md:w-1/2 p-3 mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>
            </ul>
            <ul class="md:flex px-16">
                <li class="md:w-1/2 p-3 mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>
                <li class="md:w-1/2 p-3mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>
                <li class="md:w-1/2 p-3 mx-3 bg-white bg-opacity-50 mt-[4%] rounded-md shadow-2xl">
                    <img src="img/Capture d’écran du 2024-04-15 11-29-09.png" alt="imageMyCinema" class="hover:opacity-50" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, doloribus ullam consequuntur quod, nulla et numquam, tempore eligendi placeat asperiores modi! Quisquam eos obcaecati consequatur, excepturi explicabo modi laboriosam aliquam.</p>

                </li>

            </ul>

            </container>
    </section>
    <!-- FIN mes projets -->
    <!-- mes diplomes ect -->
    <section class="image-5 grid justify-items-center ">
        <!-- START IMG-->
        <div class="md:mx-40 bg-white bg-opacity-50 my-[7%] rounded-md shadow-2xl">
            <h5 id="mescompetences" class=" oswald text-red-700 text-2xl mx-12 mb-[4%] px-16">MES COMPÉTENCES </h5>
                <ul class="md:flex object-none">
                    <li class="text-white hover:opacity-75">
                        <div>
                            <img src="img/css-3.png" alt="image css" class="w-1/2 ml-[24%] mb-[10%]" />
                    </li>
                    <li class="text-white hover:opacity-75 ">
                        <img src="img/html.png" alt="image html" class="w-1/2 ml-[24%] mb-[10%]" />

                    </li>
                    <li class="text-white hover:opacity-75 md:">
                        <img src="img/php.png" alt="image php" class="w-1/2 ml-[24%] mb-[10%]" />

                    </li>
                    <li class="text-white hover:opacity-75 md:">
                        <img src="img/script-java.png" alt="image js" class="w-1/2 ml-[24%] mb-[10%]" />
                    </li>
                </ul>
                <ul class="md:flex mt-[15%]">
                    <li class="text-white hover:opacity-75 ">
                        <img src="img/kisspng-database-server-computer-icons-clip-art-sql-server-save-icon-format-5ab0cc85b194f4.6802867215215361337274.png" alt="image sql" class="w-1/2 ml-[24%] mb-[10%]" />
                    </li>
                    <li class="text-white hover:opacity-75 ">
                        <img src="img/kisspng-responsive-web-design-web-development-bootstrap-ca-5b0055a1928422.6307867115267485776001.png" alt="image bootstrap" class="w-1/2 ml-[24%] mb-[10%]" />

                    </li>
                    <li class="text-white hover:opacity-75 pt-[3%]">
                        <img src="img/Tailwind_CSS_Logo.svg.png" alt="image tailwind" class="w-1/2 ml-[24%] mb-[10%]" />

                    </li>
                    <li class="text-white hover:opacity-75 ">
                        <img src="img/1174949_js_react js_logo_react_react native_icon.png" alt="image tailwind" class="w-1/2 ml-[24%] mb-[10%]" />

                    </li>
                </ul>
        </div>
    </section>
    <!-- END IMG -->
    <!-- Mes diplomes ect.. -->
    <!-- vignette cliquable qui ramene sur mon projet -->
    <!-- FIn vignette -->


    <!-- MES hobbies ect..-->
    <section class="image-6 py-[7%]">
        <div class="md:mx-52 bg-white bg-opacity-50 rounded-md shadow-2xl">
            <container>
                <h5 id="mescompetences" class=" oswald text-red-700 text-2xl mx-12 px-16">ENVOYER UN MESSAGE</h5>

                <form action="https://submit-form.com/YndUcfpkV" id="form" method="post" class="pace-y-52">
                    <input id="name" name="name" type="text" placeholder="Your name ..." class="my-3 mx-12 border-2 border-sky-500">
                    <input id="email" name="email" type="text" placeholder="Your email ..." class="my-3 mx-12 border-2 border-sky-500">
                    <textarea id="message" name="message" cols="45" rows="5" placeholder="Your message ..." class="my-3 mx-12 border-2 border-sky-500"></textarea>
                    <input id="button" type="submit" name="button" value="say hello!" class="flex box-content h-20% w-32% p-4 border-4 bg-red-200 border-2 border-sky-500">
                </form>
            </container>
        </div>
    </section>
    <!-- FIN Mes hobbies -->
    <!-- FORMULAIRE de contact -->

    </form>
    <!-- FIN FORMULAIRE de contact -->
    <!-- <script>
        function toggleNavbar(test) {
            document.getElementById(test).classList.toggle("hidden");
        }
    </script> -->
    <footer class=" bg-slate-900 py-[7%]">
        <container>
            <div class=" md:flex  grid justify-items-center md:grid md:grid-cols-3">
                <h5 id="meshobbies" class=" bebas-neue-regular text-red-700 text-4xl mx-12 mb-3 px-16 flex">MES HOBBIES</h5>
                <div class="flex justify-center flex-cols pt-[30] box-border h-52 w-52 p-4 border transition ease-in-out delay-150 bg-gray hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 mb-[30%] rounded-md shadow-2xl text-white">
                    <p>-Basketball<br>-Skatebord<br>-Volleyball<br>-Danse<br>-Jeux video</p>
                </div>
                <img src="img/3681303_ball_basketball_dribbble_game_logo_icon.png" alt="image tailwind" class="w-1/2 mb-[10%] pb-[10%] " />
                <h5 id="meshobbies" class="bebas-neue-regular text-red-700 text-4xl mx-12 mb-3 px-16 ">LANGUES</h5>
                <div class="flex justify-center flex-cols pt-[30] box-border h-52 w-52 p-4 border transition ease-in-out delay-150 bg-gray hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 mb-[30%] rounded-md shadow-2xl text-white">
                    <p>-Français<br>-Vietnamien<br>-Anglais<br></p>
                </div>
                <img src="img/2634458_ensign_flag_nation_vietnam_icon.png" alt="image tailwind" class="w-1/2 mb-[10%]" />
                <h5 id="meshobbies" class="bebas-neue-regular text-red-700 text-4xl mx-7 mb-3 px-16 ">EXPERIENCES</h5>
                <div class="flex justify-center flex-cols pt-[30] box-border h-52 w-52 p-4 border transition ease-in-out delay-150 bg-gray hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 mb-[30%] rounded-md shadow-2xl text-white">
                    <p>-Dipômes: 2023 BAC GENERAL<br>-Compétences: <br>-Formation: Epitech WAC<br></p>
                </div>
                <img src="img/_document_general_letter_note_office_icon.png" alt="image tailwind" class="w-1/2 mb-[10%]" />
            </div>
        </container>
    </footer>

</body>