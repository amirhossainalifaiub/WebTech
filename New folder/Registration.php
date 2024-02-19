<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <!--form action = "Reg.php" method = "POST" novalidate-->
        <table style="width: 100%;">
            <tr>
                <td>
                    <fieldset>
                        <legend>General Information</legend> <br/>
                        <table style="width:25%;">
            
                            <tr>
                                <th> First Name <br><br></th>
                                <td> 
                                <?php
                                
                                if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["fname"]))
                                {
                                    $firstnam = "First name is empty";
                                    
                                }
                                else{
                                    echo $fname  = $_POST['fname'];
                                }
                                }
                                     
                                ?>
                                  <input type="text" id="fname" name="fname" value=""> 
                                <?php echo $firstnam = "First name is empty"; ?> 
                                <br><br> </td>
                            </tr>
                
                            <tr>
                                <th> Last Name <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["lname"]))
                                {
                                    $firstnam = "Last name is empty";
                                    
                                }
                                else{
                                    echo $lname  = $_POST['lname'];
                                }
                                }
                                     
                                ?>
                                  <input type="text" id="lname" name="lname" value=""> 
                                <?php echo $firstnam = "Last name is empty"; ?> 
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Gender <br><br> </th>
                                <td> 
                                <?php 
                                  

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
                                    if(empty($_POST["Gender"]))
                                {
                                    $firstnam = "Gender is empty";
                                    
                                }
                                else{
                                    echo $Gender  = $_POST['Gender']; 
                                }
                                }
                                     
                                ?>
                                   <input type="radio" id="Male" name="Gender" value="Male">
                                 <label for = "Male">Male</label>
                                 <input type="radio" id="Female" name="Gender" value="Female"> 
                                 <label for = "Female" > Female </label> <br><br>  
                                <?php echo $firstnam = "Gender is empty"; ?> 
                                <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Father's Name <br><br> </th>
                                <td> 
                                <?php 
                                  

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["fnam"]))
                                 {
                                     $firstnam = "Father's name is empty";
                                     
                                 }
                                 else{
                                    echo $fnam  = $_POST['fnam']; 
                                 }
                                 }
                                      
                                 ?>
                                   <input type="text" id="fnam" name="fnam" value=""> 
                                 <?php echo $firstnam = "Father's name is empty"; ?> 
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Mother's Name <br><br> </th>
                                <td> 
                                <?php 
                                  
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["mnam"]))
                                 {
                                     $firstnam = "Mother's name is empty";
                                     
                                 }
                                 else{
                                    echo $mnam  = $_POST['mnam']; 
                                 }
                                 }
                                      
                                 ?>
                                   <input type="text" id="mnam" name="mnam" value=""> 
                                 <?php echo $firstnam = "Mother's name is empty"; ?> 
                                 <br><br> </td>
                            </tr>
            
                            <tr>
                                <th> Blood Group <br><br> </th>
                                <td> 
                                <?php 
                                  
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["Blood"]))
                                 {
                                     $firstnam = "Blood group is empty";
                                     
                                 }
                                 else{
                                    echo $Blood = $_POST['Blood'];
                                 }
                                 }
                                      
                                 ?>
                                   <label for="Blood"></label> 
                                    <select id ="Blood" name="Blood">
                                        <option value=""></option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>
                                    </select><br><br>
                                 <?php echo $firstnam = "Blood group is empty"; ?> 
                                 <br><br> </td>
                                
                            </tr>
            
                            <tr>
                                <th> Religion <br><br> </th>
                                <td> 
                                <?php 

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["Religion"]))
                                 {
                                     $firstnam = "Religion is empty";
                                     
                                 }
                                 else{
                                    echo $Religion = $_POST['Religion']; 
                                 }
                                 }
                                      
                                 ?>
                                   <label for="Religion"></label> 
                                    <select id ="Religion" name="Religion">
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christan">Christan</option>
                                        <option value="Buddhism">Buddhism</option>
                                    </select><br><br>
                                 <?php echo $firstnam = "Religion is empty"; ?> 
                               
                                
                                <br><br> 
                                </td>
                            </tr>
                        
                        </table>
                        
                    </fieldset>
                </td>
            <!--/tr>
            
            <tr-->
                <td>
                    <fieldset>
                        <legend>Contact Information</legend>
                        <table style="width: 25%;">
                            <tr>
                                <th> Email <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["email"]))
                                 {
                                     $firstnam = "email is empty";
                                     
                                 }
                                 else{
                                    echo $email = $_POST['email'];
                                 }
                                 }
                                      
                                 ?>
                                   <input type="email" id="email" name="email" > 
                                 <?php echo $firstnam = "Email is empty"; ?> 
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Phone/Mobile <br><br> </th>
                                <td> 
                                <?php 
                                 

                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["pnumber"]))
                                 {
                                     $firstnam = "pnumber is empty";
                                     
                                 }
                                 else{
                                    echo $number = $_POST['pnumber']; 
                                 }
                                 }
                                      
                                 ?>
                                    <input type="text" id="pnumber" name="pnumber" > 
                                 <?php echo $firstnam = "pnumber is empty"; ?> 
                                 <br><br> </td>
                               
                            </tr>
            
                            <tr>
                                <th> Website <br><br> </th>
                                <td> 
                                <?php 
                                 
                                 
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                     if(empty($_POST["web"]))
                                 {
                                     $firstnam = "Website is empty";
                                     
                                 }
                                 else{
                                    echo $web = $_POST['web']; 
                                 }
                                 }
                                      
                                 ?>
                                    <input type="text" name="web" value=""> 
                                 <?php echo $firstnam = "Website is empty"; ?> 
                                 <br><br> </td>
                              
                            </tr>
            
                            <tr>
                                <th> Address </th>
                                <td>
                                    <fieldset>
                                        <legend>Permanent Address</legend>
                                        <table style="width: 50%;">
                                            <tr> 
                                                <td>
                                                    <?php 
                                                       // echo $Country = $_POST['Country']; 
                                                        //echo $State = $_POST['State'];
                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["Country"]))
                                                        {
                                                            $firstnam = "Country is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $Country = $_POST['Country']; 
                                                        }

                                                        if(empty($_POST["State"]))
                                                        {
                                                            $firstnam12 = "State is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $State = $_POST['State'];
                                                        } 
                                                        }
                                                    ?>
                                                
                                                    <select id ="Country" name="Country">
                                                        <option value=""></option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="china">China</option>
                                                        <option value="America">America</option>
                                                        <option value="Canada">Canada</option>
                                                    </select>
                                                <!--/td>
                                                <td-->
                                                    <select id ="State" name="State">
                                                        <option value=""></option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                    </select>

                                                    <?php echo $firstnam = "Country is empty";
                                                      $firstnam12 = "State is empty";  
                                                      ?>

                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php 
                                                        $txt = "-" ;
                                                        $st =" ";
                                                        //echo $message = $_POST['message']; 
                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["message"]))
                                                        {
                                                            $firstnam = "message is empty";
                                                            
                                                        }
                                                        else{
                                                            echo $message = $_POST['message']; 
                                                        }
                                                        }
                                                             
                                                         
                                                        //echo $st;
                                                        //echo $State = $_POST['State'];
                                                       // echo $txt;
                                                        //echo  $number = $_POST['number'];
                                                       // echo $st;
                                                       // echo $Country = $_POST['Country'];
                                                    ?>
                                                    <textarea name="message" rows="10" cols="30">Road/street/city</textarea>
                                                    <?php echo $firstnam = "message is empty";  ?>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php 
                                                        //echo  $number = $_POST['number'];

                                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                                        {
                                                            if(empty($_POST["number"]))
                                                        {
                                                            $firstnam = "Post code is empty";
                                                            
                                                        }
                                                        else{
                                                            echo  $number = $_POST['number']; 
                                                        }
                                                        }
                                                         
                                                    ?>
                                                    <input type="number" id="number" name="number" placeholder="post code">
                                                    <?php echo $firstnam = "Post code is empty"; ?>
                                                    <br></td>
                                            </tr>
                                        </table>
                                        
                                    </fieldset>
                                    
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            <!--/tr>
    
            
            <tr-->
                <td>
                    <fieldset>
                        <legend>Account Information</legend>
                        <table style="width: 25%;">
                            <tr>
                                <th> Username <br><br> </th>
                                <td> 
                                    <?php 
                                       // echo  $text = $_POST['text'];

                                        
                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            if(empty($_POST["text"]))
                                        {
                                            $firstnam = "Username is empty";
                                            
                                        }
                                        else{
                                            echo  $text = $_POST['text'];
                                        }
                                        }
                                        
                                    ?> 
                                    <input type="text" id="text" name="text" >
                                    <?php  echo $firstnam = "Username is empty"; ?>
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Password <br><br> </th>
                                <td> 
                                    <?php 
                                        

                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            if(empty($_POST["Password"]))
                                        {
                                            $firstnam = "Password is empty";
                                            
                                        }
                                        else{
                                            echo  $Password = $_POST['Password'];
                                        }
                                        }
                                        
                                    ?> 
                                    <input type="password" id="Password" name="Password" >
                                    <?php  echo $firstnam = "Password is empty"; ?>
                                    <br><br>  </td>
                            </tr>
                            <tr>
                                <th> Confirm Password <br><br> </th>
                                <td> 
                                    <?php 
                                        

                                        if($_SERVER["REQUEST_METHOD"]=="POST")
                                        {
                                            if(empty($_POST["CPassword"]))
                                        {
                                            $firstnam = "Confirm Password is empty";
                                            
                                        }
                                        else{
                                            echo $CPassword = $_POST['CPassword'];
                                        }
                                        }
                                        
                                    ?> 
                                    <input type="password" id="CPassword" name="CPassword" > <br><br>  </td>
                                        <?php echo $firstnam = "Confirm Password is empty"; ?>
                            </tr>
                        </table>
                    </fieldset><br><br>
                    <input type="submit" value="Registration">
                </td>
                
                    
                
            </tr>
    
            

        </table>
        <!--/form-->

        

            
    </body>
</html>



