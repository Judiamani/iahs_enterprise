<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form style="margin-left: 250px; margin-right: 250px" class="form-horizontal" action="{{ route('iahs.form.env') }}" method="post">
                    <div class="form-group has-feedback" id="group1">
                    {{ csrf_field() }}
                        <label for="categ">Catégorie</label><br>
                        <input type="text" class="form-control" id="categ" required="required" placeholder="Entrer la catégorie du service" name="categ">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback" id="group2">
                        <label for="intitule">L'intitulé du service</label><br>
                        <textarea class="form-control" style="width: 615px" required="required" name="intitule" rows="2" cols="40" placeholder="Information concernant le service"></textarea>
                    </div><br>
                    <button type="submit" name="submit" value="Add" class="btn btn-success"><i class="fas fa-check-circle" style="padding-right: 10px"></i> Valider <span class="glyphicon glyphicon-ok"></span></button>
</form>
</body>
</html>