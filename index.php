<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Form</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5"> 

        <form class="offset-md-3 col-md-6" action="makepdf.php" method="post">
            <h1>Create PDF</h1>

            <div class="row mb-2">
                <div class="col-md-6">               
                     <input type="text"class="form-control"  name="fname" placeholder="First Name" required>
                </div>
                <div class="col-md-6"> 
                    <input type="text"class="form-control"   name="lname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="mb-2">
                 <input type="text" class="form-control"  name="email" placeholder="E-mail Address" required>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control"  name="phone" placeholder="Tellephone No." required>
            </div>
            <div class="mb-2">
                <textarea class="form-control" name="message" cols="5" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-success btn-lg btn-block">Create PDF</button>
            </div>
        </form>

</div>
</body>
</html>
