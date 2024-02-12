<?php 
    require __DIR__.'/functions.php';
    $password = "";
    if (isset($_GET['length'])){

        $passLength = intval($_GET['length']);
        
        $password = generatorePassword($_GET['length']);
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Password Generator
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="" method="GET">
                               
                                <div class="mb-3">
                                    <label for="length" class="visually-hidden">Lunghezza password</label>
                                    <input 
                                    id="length"
                                    name="length"
                                    type="number" 
                                    class="form-control"
                                    required
                                    min="5"
                                    max="15"
                                    placeholder="Inserisci lunghezza">
                                </div>
                                <div >
                                    <button type="submit" class="btn btn-primary mb-3">Genera Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                   <?php 
                    if(strlen($password)>0){
                    ?>
                     <div class="row">
                        <div class="col">
                            <h2>
                                La password è:
                                <?php 
                                    echo $password;
                                ?>
                            </h2>
                        </div>
                    </div>
                    <?php
                    }
                   ?>
        </div>
    </main>

    <footer>
         
    </footer>
</body>
</html>