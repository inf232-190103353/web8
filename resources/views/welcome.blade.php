<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="sign">
          <span class="fast-flicker">M</span>y B<span class="flicker">l</span>og
        </div>
        <div class="d-flex vw-100 vh-100 justify-content-center align-items-center" >
        <form method="POST" enctype="multipart/form-data" action="{{route('fileupload.store')}}" class="form1">
            @csrf
                <div class="form-group">
                    <label for="name1" >Name input : </label>
                    <input type="text" class="form-control-file" name="name"  id="name1">
                </div>
                <div class="form-group">
                <label for="surname1">Surname input : </label>
                                    <input type="text" class="form-control-file" name="surname" id="surname1" >
                </div>
                <div class="form-group">
                <label for="email2">Email input : </label>
                                    <input type="text" class="form-control-file" name="email" id="email1" >
                                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Image input</label>
                  <input type="file" class="form-control-file" name="uploadedfile" id="exampleFormControlFile1">
                </div>
                <div class="form-group"><button class="btn btn-success">Submit</button></div>
         </form>
        </div>


        <style>
        .form1{
        padding:50px;
        margin-top : -180px;
        background-color:rgba(255,255,255,0.5);
        }
            @font-face {
              font-family: Clip;
              src: url("https://acupoftee.github.io/fonts/Clip.ttf");
            }

            body {
              background-color: #141114;
              background-image: linear-gradient(335deg, black 23px, transparent 23px),
                linear-gradient(155deg, black 23px, transparent 23px),
                linear-gradient(335deg, black 23px, transparent 23px),
                linear-gradient(155deg, black 23px, transparent 23px);
              background-size: 58px 58px;
              background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
            }

            .sign {




              background-image: radial-gradient(
                ellipse 50% 35% at 50% 50%,
                #6b1839,
                transparent
              );
              text-align: center;
              letter-spacing: 2;

              font-family: "Clip";
              text-transform: uppercase;
              font-size: 6em;
              color: #ffe6ff;
              text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
                -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
                0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
              animation: shine 2s forwards, flicker 3s infinite;
            }

            @keyframes blink {
              0%,
              22%,
              36%,
              75% {
                color: #ffe6ff;
                text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
                  -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
                  0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
              }
              28%,
              33% {
                color: #ff65bd;
                text-shadow: none;
              }
              82%,
              97% {
                color: #ff2483;
                text-shadow: none;
              }
            }

            .flicker {
              animation: shine 2s forwards, blink 3s 2s infinite;
            }

            .fast-flicker {
              animation: shine 2s forwards, blink 10s 1s infinite;
            }

            @keyframes shine {
              0% {
                color: #6b1839;
                text-shadow: none;
              }
              100% {
                color: #ffe6ff;
                text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
                  -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
                  0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
              }
            }

            @keyframes flicker {
              from {
                opacity: 1;
              }

              4% {
                opacity: 0.9;
              }

              6% {
                opacity: 0.85;
              }

              8% {
                opacity: 0.95;
              }

              10% {
                opacity: 0.9;
              }

              11% {
                opacity: 0.922;
              }

              12% {
                opacity: 0.9;
              }

              14% {
                opacity: 0.95;
              }

              16% {
                opacity: 0.98;
              }

              17% {
                opacity: 0.9;
              }

              19% {
                opacity: 0.93;
              }

              20% {
                opacity: 0.99;
              }

              24% {
                opacity: 1;
              }

              26% {
                opacity: 0.94;
              }

              28% {
                opacity: 0.98;
              }

              37% {
                opacity: 0.93;
              }

              38% {
                opacity: 0.5;
              }

              39% {
                opacity: 0.96;
              }

              42% {
                opacity: 1;
              }

              44% {
                opacity: 0.97;
              }

              46% {
                opacity: 0.94;
              }

              56% {
                opacity: 0.9;
              }

              58% {
                opacity: 0.9;
              }

              60% {
                opacity: 0.99;
              }

              68% {
                opacity: 1;
              }

              70% {
                opacity: 0.9;
              }

              72% {
                opacity: 0.95;
              }

              93% {
                opacity: 0.93;
              }

              95% {
                opacity: 0.95;
              }

              97% {
                opacity: 0.93;
              }

              to {
                opacity: 1;
              }
            }

            .forms{
            margin-top:80px ;
            margin-left:35% ;

            }
            .in{
            background-color:#ffb8fb;
            padding : 5px;
            }

            </style>
    </body>
</html>
