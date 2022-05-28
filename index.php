
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <title>
        MSP
    </title>
    <style>
    	
    	body{
    background-color: black;
    min-height: 100vh;
   
} 


.login-wrapper {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .form {
    position: relative;
    width: 100%;
    top: 20px;
    max-width: 380px;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.4);
    border-radius: 10px;
    color: #fff;
    box-shadow: 10px 10px 80px #dddd;
}


  .form::before {
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255,255,255, 0.08);
    transform: skewX(-26deg);
    transform-origin: bottom left;
    border-radius: 10px;
    pointer-events: none;
  }
  
  .a_nasr{
   text-align: center;
    letter-spacing: 2px;
    margin-bottom: 3rem;
    margin-top: 50px;
    margin-bottom: 0px;
    color: #ff652f;

  }
  .form h2 {
    text-align: center;
    letter-spacing: 2px;
    margin-bottom: 3rem;
    color: #ff652f;
  }
  .form .input-group {
    position: relative;
  }
  .form .input-group input {
    width: 100%;
    padding: 10px 0;
    font-size: 1rem;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 2px solid #FF0000;
    outline: none;
    background-color: transparent;
    color: inherit;
  }
  .form .input-group label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 1rem;
    pointer-events: none;
    transition: .3s ease-out;
  }
  .form .input-group input:focus + label,
  .form .input-group input:valid + label {
    transform: translateY(-18px);
    color: #ff652f;
    font-size: .8rem;
  }
  .submit-btn {
    display: block;
    margin-left: auto;
    border: none;
    color: white;
    outline: none;
    background: #d30b0c;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  .submit-btn:hover{
    background: #FF0000;
    color: black;
    box-shadow: 0 0 5px black,
                0 0 25px black,
                0 0 50px black,
                0 0 200px black;
  }
  
    </style>
   
  </head>
<body> 
           <h1 class="a_nasr">Ahmed Nasr</h1>
           <div class="login-wrapper">
            <form action="profile.php" class="form" method="get">
              <h2>MSP-TASK</h2>
              <div class="input-group">
                <input type="text" name="loginUser" id="loginUser" required>
                <label for="loginUser">User Name</label>
              </div>
              <div class="input-group">
                <input type="password" name="loginPassword" id="loginPassword" required>
                <label for="loginPassword">Password</label>
              </div>
              <input type="submit" value="Login" class="submit-btn" >
               
             
            </form>
        </div>
          </div>
          
         
</body>
</html>

