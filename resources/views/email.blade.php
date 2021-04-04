<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mail Send in Laravel Example</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="sign">
          <span class="fast-flicker">Sen</span>d E<span class="flicker">ma</span>ils
        </div>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="post" class="form1">
                @csrf
                            <div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter Email">
                                @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>


							<div class="form-group">
								<label for="inputName">Full name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Full name">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>



					<div class="form-group">
						<label for="inputSubject">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Enter  Message"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success">Send message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<style>
.form1{
        background-color:rgba(255,255,255,0.3);
        margin-top:-90px;
        padding:50px;
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

.contact-form {
    padding: 50px;
    margin: 30px auto;
}
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: green;
}
.contact-form .form-control:focus {
    border-color: green;

}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff;
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</body>
</html>
