<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="register_style.css"/>
    <title>BOSM APP admin panel</title>
    <link rel="shortcut icon" href="title.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<style>
select {
    
    padding: 1% 1%;
    border: none;
    border-radius: 4px;
    background-color: #ffffff;; 
    
    
}
    #1v12{display: none;}
    #1v14{display: none;}
    input[type=text] {
        background-color: transparent;
    border: none;
    border-bottom: 2px solid white;
}
    input[type=text]:focus {
    border-bottom: 2px solid #2c2c2e;
        transition-duration: 0.3s;
        transition-property: all;
        outline: 0;
}
    button {
        background-color: white;
        color: black;
        }
    .button1:hover { background-color: #725349; color:white;border: 3px brown solid; transition-duration: 0.2s; cursor: pointer; text-decoration: none;}
    .button1:focus{outline: 0; }
    #r {display: none;}
    #r1 {display: none}
</style>
<body style="background-image: url(bckg1.jpg);">
    <div class="container"><div class="row" style="margin-top: 10%;">
        <div class="col-lg-6">
    <header><h1 style="color:white;font-family: 'Roboto', sans-serif;">Register Event</h1></header>
    <br />
                <form action="form/add_event">
				<input class="i" type="text" placeholder="Event Name" ><br/><br/>
			<input class="i" type="datetime-local" placeholder="Date" ><br/><br/>
			  <input class="i" type="text" placeholder="Venue" ><br/><br/>
			<input class="i" type="text" placeholder="Description" ><br/><br/>
            </div>	
        <div class="col-lg-6">
				Sport Type:
			<select id="options2" name="form2">
				<option value="null"></option>
				 <option value="Athletics" >Athletics</option>
				  <option value="Swimming">Swimming</option>
				   <option value="Taekwondo">Taekwondo</option>
					<option value="Badminton">Badminton</option>
					 <option value="Basketball">Basketball</option>
					  <option value="Cricket">Cricket</option>
				
			</select>
			<br/><br/>
			
				Event Type:
			<select id="options" name="form_select" onchange="showDiv(this)">
				<option value="athletics">Athletics</option>
				<option value="1v1" >1 vs 1</option>
				<option value="team">Team</option>
			</select>
			<br/><br/>
			
            <a id="t">Team A:</a>
			<div id="team"><select name="team_select" placeholder="Team A"  style="width: 100%">
                <option ></option>
                <option> BITS</option>
                <option>IITM</option>
                <option>Delhi University</option>
                </select></div>
			<br/><br/>
           <a id="t1">Team B:</a>
			<div id="team1" ><select name="team_select" placeholder="Team B"  style="width: 100%" >
                <option ></option>
                <option>BITS </option>
                <option>Delhi University</option>
                <option>Vellore Institute of Technology</option>
                </select></div>
			<br/><br/>
            
            <a id="r" >Player 1 Name:</a>
			<input type="text" placeholder="Player 1 Name" id="1v1"><br/><br/>  
            
            
            <a id="t2" >Player 1 College:</a>
            <div id="1v12" style="display: none"><select type="text" placeholder="Player 1 College Name" style=" width: 100%">
                    <option>BITS    </option>
                    <option> Delhi University   </option>
                </select></div>
            
            <br/><br/>  
            <a id="r1">Player 2 Name:</a>
			<input type="text" placeholder="Player 2 Name" id="1v13"><br/><br/> 
            <a id="t3" >Player 2 College:</a>
			
			<div id="1v14" style="display: none"><select type="text" placeholder="Player 2 College Name" style="width:100%">
                    <option>BITS    </option>
                    <option> Delhi University   </option>
                </select> </div> <br/><br/>
            
        </div>
	</div>
    
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"><button type="submit" class="btn btn-block button1" id="sub" >SUBMIT</button></div>
                <div class="col-lg-4"></div>
        </div>
        </form>
    </div>
</body>
<script>
        function showDiv(select)
        {
            if(select.value=="1v1")
               { 
                document.getElementById('1v1').style.display='inline-block';
                document.getElementById('1v12').style.display='inline-block';
                document.getElementById('1v13').style.display='inline-block';
                document.getElementById('1v14').style.display='inline-block';
                   document.getElementById('t2').style.display='inline-block';
                   document.getElementById('t3').style.display='inline-block';
                   document.getElementById('r').style.display='inline-block';
                   document.getElementById('r1').style.display='inline-block';
                   
                   document.getElementById('team').style.display='none';
                    document.getElementById('team1').style.display='none';
                   document.getElementById('t').style.display='none';
                   document.getElementById('t1').style.display='none';
                 document.getElementById('sub').style.display='inline-block';
                
               }
            if(select.value=="team")
                {
                    document.getElementById('1v1').style.display='none';
                document.getElementById('1v12').style.display='none';
                document.getElementById('1v13').style.display='none';
                document.getElementById('1v14').style.display='none';
                    document.getElementById('t2').style.display='none';
                   document.getElementById('t3').style.display='none';
               
                    document.getElementById('team').style.display='inline-block';
                    document.getElementById('team1').style.display='inline-block';
                    document.getElementById('t').style.display='inline-block';
                   document.getElementById('t1').style.display='inline-block';
                 document.getElementById('sub').style.display='inline-block';
                    document.getElementById('r').style.display='none';
                   document.getElementById('r1').style.display='none';
                    
                }
				 if(select.value=="athletics")
                {
                    document.getElementById('1v1').style.display='none';
                document.getElementById('1v12').style.display='none';
                document.getElementById('1v13').style.display='none';
                document.getElementById('1v14').style.display='none';
                    document.getElementById('t2').style.display='none';
                   document.getElementById('t3').style.display='none';
               
                    document.getElementById('team').style.display='none';
                    document.getElementById('team1').style.display='none';
                    document.getElementById('t').style.display='none';
                   document.getElementById('t1').style.display='none';
                 document.getElementById('sub').style.display='inline-block';
                    document.getElementById('r').style.display='none';
                   document.getElementById('r1').style.display='none';
                    
                }
        }
   
</script>