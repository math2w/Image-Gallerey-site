<style>
    body {
        background-color: rgb(71, 71, 71);   
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    divtext {
        background-color: rgb(71, 71, 71);
        color: white;
        text-align: center; 
        font-size: 28px;
        position: relative;
        top: 50px;

    }

    .divbutton {
        background-color: rgb(71, 71, 71);
        color: white;
        text-align: center; 
        margin: 20% auto;
        width: 50%;
    }

    .back {
        background-color: rgb(71, 71, 71);
        color: white;
        text-align: left; 
    }

    h1 {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    button {
        background-color: rgb(100, 100, 100);
        color: white;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 30px;
        text-align: center;
        width: 100px;
        height: 50px;
        cursor: pointer;
        border: 2px solid black;
        border-radius: 10px;
    }
    
    
</style>

<body>
    <form action="start.html">
    <div class="back">
        <button>Back</button>
    </div>
</form>
    <divtext>
        <h1>Matti's Images</h1>
    </divtext>

    <?php
    $files = scandir('path/to/img/directory/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img src='$file' />";
        }
    }
?>


</body>