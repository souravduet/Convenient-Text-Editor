

var Sentance = function(id){
    
    /*Private area*/
    var name ="Field Nation";
    var font_size = 18;
    var color = "green";
    var italic_state = "italic";
    var bold_state = "normal";
    /*Public area*/
    this.changeName = function(txt){
        name = txt;
        this.showOutput();
    }
    
    this.changeFontSize = function(size){
        font_size = size;
        this.showOutput();
    }
    this.changeColor = function(color_val){
        color = color_val;
        this.showOutput();
    }
    this.setItalicState = function(i_state){
        if(i_state===true){
            italic_state = "italic";
        }
        else{
            italic_state = "normal";
        }           
        this.showOutput();
    }
    this.setBoldState = function(b_state){
        if(b_state===true){
            bold_state = "bold";
        }
        else{
            bold_state = "normal";
        }
        this.showOutput();
    }
    
    this.showOutput = function(){
        
        var id_obj= document.getElementById(id);
        
        id_obj.innerHTML = name;
        id_obj.style.fontSize = font_size.toString().concat("px");
        id_obj.style.color = color;
        id_obj.style.fontStyle = italic_state;
        id_obj.style.fontWeight = bold_state;
    }
};
