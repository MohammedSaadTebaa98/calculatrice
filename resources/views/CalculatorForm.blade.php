<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="css/calculator.css" rel="stylesheet">
</head>
<body>

    <div class="container center">
<!-- 
        @if ($alert === 1)
            <script src="js/calculator.js"></script>
        @else
            
        @endif     -->
        <div class="row">
            <div class="col">
                <h2>Calculatrice</h2>
            </div>        
        </div>
        <br/>

        <form action="{{ route('doCalcul') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="number" step="any" value="{{$firstNumber}}" name="firstNumber" class="form-control" required>
                </div>
                <div class="col">
                    <input type="number" step="any" value="{{$secondNumber}}" name="secondNumber" class="form-control" required>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="operateur" id="addition" value="+" autocomplete="off" @if ( $operateur ===  0 ) checked @else @endif  required>
                    <label class="btn btn-outline-primary" for="addition">+</label>

                    <input type="radio" class="btn-check" name="operateur" id="soustraction" value="-" autocomplete="off" @if ( $operateur ===  1 ) checked @else @endif>
                    <label class="btn btn-outline-primary" for="soustraction">-</label>

                    <input type="radio" class="btn-check" name="operateur" id="multiplication" value="*" autocomplete="off" @if ( $operateur ===  2 ) checked @else @endif>
                    <label class="btn btn-outline-primary" for="multiplication">*</label>

                    <input type="radio" class="btn-check" name="operateur" id="division" value="/" autocomplete="off" @if ( $operateur ===  3 ) checked @else @endif>
                    <label class="btn btn-outline-primary" for="division">/</label>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-3 align-self-center">
                    <button id="submit" type="submit" class="btn btn-secondary">calcul</button>
                </div>
                <div class="col-3">
                </div>
                <div class="col-3">
                </div>
            </div>
        </form>    
            <br/>
            <br/>
            <div class="row">
                <div class="mb-3">
                    <label for="resultat" class="form-label">Resultat</label>
                    <textarea class="form-control" id="resulat" rows="2" disabled>{{ $result }}</textarea>
                </div>

            </div>

        
    
    </div>
    
</body>
</html>