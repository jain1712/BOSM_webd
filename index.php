<head>
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="index_style.css">
    <link rel="shortcut icon" href="title.png"/>
    <link rel="stylesheet" href="SedgwickAveDisplay-Regular.ttf">
<title>BOSM APP admin panel</title>
</head>
<style>
    @font-face{
     font-family:SedgwickAveDisplay-Regular;
         src=("SedgwickAveDisplay-Regular.ttf");
    }
    button {
        background-color: white;
        color: black;
        }
    .button1:hover { background-color: #725349; color:white;border: 3px #652323 solid; transition-duration: 0.2s; cursor: pointer}
    a {text-decoration: none;}
    a:hover{text-decoration: none;}
    
</style>
<body style="background-image: url(bckg.jpg); background-attachment: inherit; background-repeat: no-repeat; background-size: cover;   ">
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4" style="text-align: center; padding-top: 12%; padding-bottom: 4%;">
                <h3 style="color: azure; font-family: SedgwickAveDisplay-Regular;">BOSM APP Admin Panel</h3>
            </div>
        </div>
    </div>
   <div class="container">
       <div class="row">
       <div class="col-lg-8"></div>
       <div class="col-lg-4">   
               <button type="button" onclick="location.href='welcome/register'" class=" btn  btn-block button1" style="border: 1.5px solid black;">Register Events</button>
       </div>
       </div>
    </div>
       
    <br/>
  <div class="container">
      <div class="row">
      <div class="col-lg-8"></div>
          <div class="col-lg-4">
               <button onclick="location.href='welcome/result'" type="button" class=" btn  btn-block button1" style="border: 1.5px solid black;">Upload Results</button>
          </div>
      </div>
  </div>
    <br/>
  <div class="container">
      <div class="row">
      <div class="col-lg-8"></div>
          <div class="col-lg-4">
              <!-- <a href="result.php" > -->
                  <button onclick="location.href='welcome/register'" type="button" class=" btn  btn-block button1" style="border: 1.5px solid black;">Update Event</button>
              <!-- </a> -->
          </div>
      </div>
  </div>
    <br/>
  <div class="container">
      <div class="row">
      <div class="col-lg-8"></div>
          <div class="col-lg-4">
              <!-- <a href="result.php" > -->
                  <button onclick="location.href='welcome/result'"  type="button" class=" btn  btn-block button1" style="border: 1.5px solid black;">Update Result</button>
              <!-- </a> -->
          </div>
      </div>
  </div>
</body>