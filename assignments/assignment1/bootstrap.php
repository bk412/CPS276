<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form class="row g-3">
            <div class="col-md-6">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-6">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option>New York</option>
                <option>Washington</option>
                <option selected>Michigan</option>
                <option>Texas</option>
                <option>Florida</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
         
            <div class="col-12">
              <div class="form-check">
                
                 <input type="radio" id="html" name="choice" value="HTML">
                     <label for="html">Male</label>   

                     <input type="radio" id="html" name="choice" value="HTML"> 
                     <label for="html">Female</label>
                     
                    
                </label>
              </div>
            </div>
       
          
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </form>
    </div>
  </body>
</html>