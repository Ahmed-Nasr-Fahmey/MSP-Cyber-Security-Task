
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script>
    


    function msp(){
    
        alert("TASK SUCCESS");
        
 }
</script>
<style>
    body{
    background-color: black;
    min-height: 100vh;
   
} 
.hacker {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
  }
.a_nasr{
   text-align: center;
    letter-spacing: 2px;
    margin-bottom: 3rem;
    margin-top: 50px;
    margin-bottom: 0px;
    color: #ff652f;

  }

.msp {
    font-size: x-large;
    position: relative;
    width: 100%;
    top: -10px;
    max-width: 380px;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.4);
    border-radius: 10px;
    color: #ff652f;
    box-shadow: 10px 10px 80px #dddd;
}


  .msp::before {
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
  


.btn {
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
  .btn:hover{
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
    <div class="hacker">
            
          <span class="msp"> 
            <?php echo "your user name is : " . filter_var($_GET['loginUser'],FILTER_SANITIZE_STRING) . "<br><br>" .
                "your password is : " . filter_var($_GET['loginPassword'],FILTER_SANITIZE_STRING) . "<br><br>";
            ?>
     
             <button onclick="msp();" class="btn"> Click Here</button>
         </span> 
 
        
    </div>

</body>
</html>


