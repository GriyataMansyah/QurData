<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="{{ asset('Css/style.css')}}" rel="stylesheet">
    <title>Login Qurdata</title>
</head>
<body class="body-one">
    <section class="d-flex justify-content-center align-items-center full-height">
        <div class="text-center div-middle row">
            <div class="span_one col-12">
                <img src="{{ asset('Images/bg-01.jpg') }}" alt="Image">
                <div class="overlay">
                    <div class="overlay-text">
                        <p class="barlow">LOG IN TO QURDATA</p>
                    </div>
                </div>
            </div>
            
            <div class="span_two col-12 ">
                <br>
                <br>
                 <!-- INI UNTUK USERNAME -->
            <form method="POST" action="{{route('auth')}}">
                @csrf
              <div class="input-group has-validation inputa1">
                  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                  </svg></span>
                  <div class="form-floating">
                    <input type="text" class="form-control input1" name="username" id="floatingInputGroup2" placeholder="Username" required>
                    <label for="floatingInputGroup2">Username</label>
                  </div>
                </div>
                <br>
              <!-- INI UNTUK PASSWORD -->
                <div class="input-group has-validation inputa">
                  <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg></span>
                  <div class="form-floating">
                    <input type="password" class="form-control input1" name="password" id="floatingInputGroup2" placeholder="Password" required>
                    <label for="floatingInputGroup2">Password</label>
                  </div>
                </div>
                <br>
                <!-- INI TOMBOL KIRIM DAN PENDAFTARAN BARU-->          
                <input class="btn btn-primary button_one" type="submit" value="Log In">
    
                
              </form>
            </div>
        </div>
    </section>


       <!-- =========== Scripts =========  -->
   <script src="{{ asset('Js/main.js')}}"></script>
</body>
</html>