<html>
<title>Admin</title>

<head>


    <h3 align="center"> New Member </h3>


    <style>
        #pwd {
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 80px;
        }
        
        #sub {
            padding-top: 25px;
        }
    </style>

</head>


<body>
    <form name="myform" method="POST" action='log.php' onsubmit="return checkForm()">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <label for="una">Name:</label>
                    <input type="text" class="form-control" id="una" name="uname" placeholder="Enter Name">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age">
                    <label for="sel1">Gender</label>
                    <select class="form-control" id="sel1">
  							<option>Male</option>
    						<option>Female</option>
  						</select>

                </div>
                <div class="col-sm-6">
                    <label for="addr">Address:</label>
                    <input type="text" class="form-control" id="addr">
                    <label for="uem">Email:</label>
                    <input type="email" class="form-control" id="uem" name="uemail" placeholder="Enter Name">
                    <label for="nid">NID:</label>
                    <input type="number" class="form-control" id="nid">
                </div>
            </div>


            <div align="center" id=sub>
                <input type="submit" name="submit" value="Ok">
                <input type="submit" name="submit" value="Cancel">
            </div>
    </form>

</body>

</html>