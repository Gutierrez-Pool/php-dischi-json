<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="./style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body style= "background-color: #0C1218; font-family: sans-serif;">
    
    <div id="app">

        <nav class="navbar">
            <div class="container" style= "background-color: #08131E">
                <a class="navbar-brand" href="#">
                <!-- <img src="" alt="" width="30" height="24"> -->
                Dischi
                </a>
            </div>
        </nav>  

        <div class="container p-5" style="background-color: #202D3A;">

            <!-- <h1>Dischi</h1> -->

            <ul class="d-flex flex-wrap gap-5">
                <li v-for="disco in dischiList" class="d-flex flex-column align-items-center gap-2 text-white">
                    <img :src="disco.poster" alt="" class="w-100">
                    <strong>{{disco.title}}</strong>
                    <small>{{disco.author}}</small>
                    <strong>{{disco.year}}</strong>
                </li>
            </ul>

            

        </div>
    </div>

<script src="./js/main.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>