<html>
    <head>
        <title>Art Work Database</title>
        <h1  style="background-color:#7B68AE;" >Art Work Database</h1>
            <img src="buzz.jpg" height="55" style="float: left;">
            <p  style="background-color:#7B68AE;">The Gallery’s innovative ground-breaking exhibitions, extensive public programs and emphasis on advancing scholarship all focus on the historical and contemporary art 
                of British Columbia and international centres, with special attention to the accomplishments of First Nations artists and the art of the Asia Pacific 
                region­—through the Institute of Asian Art founded in 2014. The Gallery’s programs also explore the impacts of images in the larger sphere of visual culture, 
                design and architecture.
            </p>
            
        
        <hr />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .multiLevel{
                display: inline;
            }

            .subMenu{
                visibility: hidden;
                border: solid 1px red;
            }
            .clearRecord .saveRecord{
                align: right;
            }
            .right {
                float: right;   
            }
        </style>
    </head>
    
    <body style="background-color:limegreen; color:white">
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <button type="submit" name="saveRecord" onClick="window.location.reload();" id="saveRecord" class="right">Save Record</button>
            <!-- <input type="submit" name="saveRecord" id="saveRecord"/> -->
            <button type="submit" name="clearRecord" id="clearRecord" onClick="window.location.reload();" class="right">Clear Record</button>
            <br>
            <label for="Genre">Genre:</label><br>
            <select id="Genre" name="Genre">
                <option value="" disabled selected>Select your option</option>
                <option value="Abstract">Abstract</option>
                <option value="Baroque">Baroque</option>
                <option value="Gothic">Gothic</option>
                <option value="Renaissance">Renaissance</option>
            </select><br>

            <div class="multiLevel">
                <label for="Type" >Type:</label><br>
                <select id="Type" name="Type">
                    <option value="" disabled selected>Select your option</option>
                    <option id="Painting" value="Painting">Painting</option>
                    <option value="Sculpture">Sculpture</option>
                </select>
                <span class="subMenu">
                    <label for="paintingSubMenu"> Subject:</label>
                    <select id="paintingSubMenu" name="paintingSubMenu">
                        <option value="" disabled selected>Select your option</option>
                        <option value="Landscape">Landscape </option>
                        <option value="Portrait">Portrait </option>
                    </select>
                    <br>
                </span>
            <div>

            <label for="Specification">Specification:</label><br>
            <select id="Specification" name="Specification">
                <option value="" disabled selected>Select your option</option>
                <option value="Commerical">Commerical</option>
                <option value="Non-Commerical">Non-Commerical</option>
                <option value="Derivative Work">Derivative Work</option>
                <option value="Non-Derivative Work">Non-Derivative Work</option>
            </select>  <br>
            
            What year was the "Art Work" created?  <br>
            <input type="text" id="year" name="year">
            <br>
            What museum is the "Art Work" being kept currently? <br>
            <input type="text" id="museum" name="museum">
            <br>
            
            <div style="text-align:center;margin:10px 20% 5px 20%;border:2px solid black;">
                <p id="realTimeRecord"></p>
            </div>

            
        </form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" id="index" name="index">
            <button type="submit" name="returnRecord" id="returnRecord">Return Record</button>

        <form >``

        </form>
        
        <?php
        // $message = "";
        // if(isset($_POST['saveRecord'])){ //check if form was submitted
        //     $input = $_POST['inputText']; //get input text
        //     $message = "Success! You entered: ".$input;
        //     echo $input;
        // }
        $open = fopen("record.txt", "r") or die("Unable to open file!");

        $index = 0;
        if(array_key_exists('returnRecord', $_POST)){
            if(isset($_POST['index'])){
                $index = input($_POST["index"]);
            }
        }
        
        $count = 0;
        if ($open) {
            while (!feof($open)) {
                $buffer = fgetss($open, 4096);
                if ($count == $index){
                    echo $buffer . "<br/>";
                }
               $count = $count + 1;
            }
            fclose($open);
        }
        
        

        

        if(array_key_exists('saveRecord', $_POST)){
            $genre = $type = $subject = $specs = $year = $museum = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['Genre'])){
                    $genre = input($_POST["Genre"]);
                }
                if(isset($_POST['Type'])){
                    $type = input($_POST["Type"]);
                }
                if(isset($_POST['paintingSubMenu'])){
                    $subject = input($_POST["paintingSubMenu"]);
                }
                if(isset($_POST['Specification'])){
                    $specs = input($_POST["Specification"]);
                }
                if(isset($_POST['year'])){
                    $year = input($_POST["year"]);
                }
                if(isset($_POST['museum'])){
                    $museum = input($_POST["museum"]);
                }
                
            }
            $perRecord = $genre . " " . $type . " " .  $subject . " " . $specs . " " . $year . " " . $museum . "\n";
            $myfile = fopen("record.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $perRecord);
            fclose($myfile);
        }


        if(array_key_exists('clearRecord', $_POST)){
            $myfileclear = fopen("record.txt", "w") or die("Unable to open file!");
            fwrite($myfileclear, "");
            fclose($myfileclear);
        }

        
     

        // $myFile = new SplFileObject("record.txt");

        // while (!$myFile->eof()) {
        //     echo $myFile->fgets() . PHP_EOL;
        // }




        // if(filesize("record.txt") != 0){
        //   echo fgets($open, filesize("record.txt"));
        //     // echo implode(" ",file("record.txt"));
            
        // }
        

        
        // $file=fopen(date("Y-m-d").".txt","a+") or exit("Unable to open file!");

// if ($_POST["lastname"] <> "")
// {
//    fwrite($file,$_POST["lastname"]."\n");
// }

// fclose($file);

        function input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <script>
            // function saveRecordHandler(){
            //     const toInsert = document.querySelector("#temp");
            //     toInsert.setAttribute("value",document.querySelector("#realTimeRecord").innerHTML);
            //     console.log("inside save record handler");
            // }
            // document.querySelector("#saveRecord").addEventListener("click", saveRecordHandler);

            // Sub-Drop Down Menu
            document.querySelector("#Type").addEventListener("change", (event) => {
                if (event.target.value === "Painting"){
                    const subMenu = document.querySelector(".subMenu");
                    subMenu.style.visibility = "visible";
                }
            })

            var currentRecord = [];
            var e = document.getElementById("Genre");
            e.addEventListener("change", (event) => {
                    
                    currentRecord[0] = event.target.value;
                   
                    document.getElementById("realTimeRecord").innerHTML = currentRecord;
                }
            )

            var e = document.getElementById("Type");
            e.addEventListener("change", (event) => {
                    currentRecord[1] = " " + event.target.value;
                 
                    document.getElementById("realTimeRecord").innerHTML = currentRecord;
                }
            )

            var e = document.getElementById("paintingSubMenu");
            e.addEventListener("change", (event) => {
                
                // border handler for sub menu
                if (event.target.value !== ""){
                    document.querySelector(".subMenu").style.border = "0";     
                }
                currentRecord[2] = " " + event.target.value;

                document.getElementById("realTimeRecord").innerHTML = currentRecord;
                
                }
            )

            var e = document.getElementById("Specification");
            e.addEventListener("change", (event) => {
                    currentRecord[3] = " " + event.target.value;
                    document.getElementById("realTimeRecord").innerHTML = currentRecord;
                }
            )

            var e = document.getElementById("year");
            e.addEventListener("keypress", (event) => {
                    currentRecord[4] = " " + event.target.value;
                    document.getElementById("realTimeRecord").innerHTML = currentRecord;
                }
            )

            var e = document.getElementById("museum");
            e.addEventListener("keypress", (event) => {
                    currentRecord[5] = " " + event.target.value;
                    document.getElementById("realTimeRecord").innerHTML = currentRecord;
                }
            )

        
        </script>
    </body>
</html>

