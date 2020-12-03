<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

        
    <div class="container -sm">
        <br>
        <h1 class='sm'>Envio de E-mail com FuelPHP</h1>
        <form class="form-control" action="sendEmail" method='POST'>
        <div class="form-group -sm">
        <input type="name" name='userName' class="form-control -sm" id="InputEmail1" placeholder="Seu nome" required/>
        <br>
        <input type="email" name='userEmail' class="form-control -sm" id="InputEmail1" placeholder="Seu E-mail" required/>
        <br>
        <input type="name" name='contactName' class="form-control -sm" id="InputEmail3"  placeholder="Nome do destinatário" required/>
        <br>
        <input type="email" name='contactEmail' class="form-control -sm" id="InputEmail4" placeholder="E-mail do destinatário" required/>
        <br>
        <input type="text" name='Subject' class="form-control -sm" id="InputEmail5" placeholder="Assunto" required/>
        <br>    
        <input type="text" name='text' class="form-control -sm" id="InputEmail5" placeholder="Texto" required/>
        <br>
        <input type="submit" name='send' class="form-control -sm" id="InputEmail7" placeholder="Enviar" required/>
        </div>
        </form>
    </div>       
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>