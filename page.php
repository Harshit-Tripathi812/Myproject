<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einsteincradel</title>
</head>
<style>
     *{margin:0;padding:0;box-sizing:border-box;}
        .granddiv{ width:100vw;
                   height:100vh;
                   display:grid;
                   place-items: center;
                   background:rgba(0,0,0,1)
                   }
        .parentdiv{ width:60vw;
                    height:30vh;
                    border-bottom:2px solid grey;
                    background:r;
                    position:relative;
                    display:flex;
                    justify-content:space-around;
                    
                    }
        span{ width:40px;
               height:40px;
               border-radius:50%;
               position:relative;
               top:-200px;
               
               background:rgb(27, 201, 105);
               animation: bounce 3s linear infinite;}
               @keyframes bounce{
                   0%{ top:0px;}
                   15%{top:40px; }
                   30%{top:80px;}
                   45%{ top:120px;}
                   57%{top:155px;}
                   60%{top: 140px;}
                   79%{top:80px;}
                   90%{top:40px;}
                   100%{top:0px}
                  
                }
        span:nth-child(1){ animation-delay:1.6s;
                         background:cornsilk;}        
        span:nth-child(2){ animation-delay:1s;
                          background:red;}
        span:nth-child(3){ animation-delay:1.9s;
                          background:purple;}                   
        span:nth-child(4){ animation-delay:1.3s;
                          background:blue;}
        span:nth-child(5){ animation-delay:2.2s;
                         background:yellow;}
       
</style>
<body>
<a role="button" href="display.php"  class="btn btn-lg bg-info sub1" name="display"><span style="color:white; font-weight:bolder">Display</span></a>
    
    <div class="granddiv">
        
        <a href="session_end.php" role="button" class="btn bg-light ">LogOut</a>
        <div class="parentdiv">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>
    </div>
</body>
</html>                    