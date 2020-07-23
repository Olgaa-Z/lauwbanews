<!DOCTYPE html>
<html>       
    <head>
        <meta charset="UTF-8">   
        <title></title>

        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script 
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>

        <script 
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
    </head>       

    <body>
        <div class="container">

            <form method="post" action="<?php echo site_url('Admin/insert');?>">
                <!-- <div class="form-group">
                    <label for="usr">Gender:</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Perempuan">
                            Perempuan
                        </option>
                         <option value="Laki-laki">
                            Laki-laki
                        </option>
                    </select>

                </div> -->
                
                <!-- <div class="form-group">
                    <label>Alamat </label>
                    <input type="alamat" name="in_alamat" required="">
                    
                </div> -->
                
                <div class="form-group">
                    <label>Username</label>
                    <input type="email" name="in_username" required="">
                    
                </div>
                <div class="form-group">
                    <label>Password </label>
                    <input type="password" name="in_password" required="">
                    
                </div>
                
                
                <div>
                    <button>Registrasi</button>
                </div>
                
            </form>
        </div>       
    </body>
</html>