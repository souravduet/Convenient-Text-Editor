<!DOCTYPE html>
<!--
FieldNation: Solution of Second Question
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Second Question Answer</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/custom.js"></script>
        <script>
            function add_option()
            {
                var font_size = document.getElementById('font_size');
                var len = 32;
                for(var i=20;i<=len;i+=4)
			{
				var opt = document.createElement("option");
				opt.text = i;
				opt.value = i;
				font_size.add(opt,null);
			}
            }
        </script>

    </head>
    <body>
        <div id="main-wrapper">
            <header>
                <div id="logo">
                    <img src="images/logo.png"/> 
                </div>
            </header>
                <div id="input_container">
                    <div class="row">  
                        <div class="col-2 title_txt">Name:</div>
                        <div class="col-10">
                            <input type="text" name="name_txt" id="name_txt" placeholder="Field Nation" onkeyup="obj.changeName(this.value);"/>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-2 title_txt">Font Size:</div>
                        <div class="col-10 select_style">
                            <select name="font_size" id="font_size" onChange="obj.changeFontSize(this.value);">
                                    <option value="18">18</option>
                             </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-2 title_txt">Color:</div>
                            <div class="col-10">
                                <!-- Rounded ONE -->
                                <div class="roundedOne">
                                    <input type="radio" name="color_type"  id="radio01" onchange="obj.changeColor(this.value);" value="red" >
                                    <label for="radio01"><span></span>Red</label>
                                </div>
                                <div class="roundedOne">
                                    <input type="radio" name="color_type" id="radio02" value="green" onchange="obj.changeColor(this.value);" checked="checked">
                                    <label for="radio02"><span></span>Green</label>
                                </div>
                                <div class="roundedOne">
                                    <input type="radio" id="radio03" name="color_type" value="blue" onchange="obj.changeColor(this.value);" />
                                    <label for="radio03"><span></span>Blue</label>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-2 title_txt">Italic:</div>
                            <div class="col-10">
                                <input type="checkbox" name="italic_state" checked="checked" id="italic_state" value="italic" onchange="obj.setItalicState(this.checked);">
                                <label for="italic_state"><span></span></label>
                            </div>
                    </div>
                    
                    
                    <div class="col-2 title_txt">Bold:</div>
                    <div class="col-10">
                        <input type="checkbox" name="bold_state" id="bold_state" onchange="obj.setBoldState(this.checked);">
                        <label for="bold_state"><span></span></label>
                    </div>
                </div> 
            
                <div id="result_container">   
                    <p id = "result">Sample Text.</p>
                </div>
            <footer>
                Developed by <a href="https://bd.linkedin.com/in/wsourav" target="_blank">SOURAV</a>
            </footer>
        </div>
        <script>
               add_option();
               var obj = new Sentance('result');
               obj.showOutput();
               
        </script>
    </body>
</html>
 