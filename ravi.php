<!DOCTYPE html>
<html>
<title></title>
<style type="text/css">
.active
{
    background-color: red;
    color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: orange;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgrey;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;
color: black;}

.dropdown:hover .dropdown-content {
  display: block;
  color: black;
}
.ram
{
    height:130px;
    width:100%;
    
}
	body {
    background-color: gold;
    font-family:times new roman;
    padding-top: 20px;
}

.container {
    width: 406px;
    max-width: 406px;
    margin: 0 auto;
}

#signup {
    padding: 0px 25px 25px;
    background: #fff;
    box-shadow: 
        0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
        0px 4px 20px rgba( 0,0,0,0.33 );
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .header p {
    color: #8f8f8f;
    font-size: 14px;
    font-weight: 300;
}

#signup .sep {
    height: 1px;
    background: lightblue;
    width: 406px;
    margin: 0px -25px;
}

#signup .inputs {
    margin-top: 25px;
}

#signup .inputs label {
    color: #8f8f8f;
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 1px;
    margin-bottom: 7px;
    display: block;
}

input textarea::-webkit-input-placeholder {
    color:    #b5b5b5;
}

input textarea:-moz-placeholder {
    color:    #b5b5b5;
}
textarea 
{
	 background: lightgrey;
	 box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
	 border: none;
}

#signup .inputs input  {
    background:lightgrey;
    font-size: 0.8rem;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    padding: 13px 10px;
    width: 330px;
    margin-bottom: 20px;
    box-shadow: inset 0px 2px 3px rgba( 0,0,0,0.1 );
    clear: both;
}

#signup .inputs input:focus textarea:focus {
    background: #fff;
    box-shadow: 0px 0px 0px 3px #fff38e, inset 0px 2px 3px rgba( 0,0,0,0.2 ), 0px 5px 5px rgba( 0,0,0,0.15 );
    outline: none;   
}

#signup .inputs .checkboxy {
    display: block;
    position: static;
    height: 25px;
    margin-top: 10px;
    clear: both;
}

#signup .inputs input[type=checkbox] {
    float: left;
    margin-right: 10px;
    margin-top: 3px;
}

#signup .inputs label.terms {
    float: left;
    font-size: 14px;
    font-style: italic;
}

#signup .inputs #submit {
    width: 100%;
    margin-top: 20px;
    padding: 15px 0;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;
        background: -moz-linear-gradient(
        top,
        #b9c5dd 0%,
        #a4b0cb);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#b9c5dd),
        to(#a4b0cb));
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #737b8d;
    -moz-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    -webkit-box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    box-shadow:
        0px 5px 5px rgba(000,000,000,0.1),
        inset 0px 1px 0px rgba(255,255,255,0.5);
    text-shadow:
        0px 1px 3px rgba(000,000,000,0.3),
        0px 0px 0px rgba(255,255,255,0);
    display: table;
    position: static;
    clear: both;
}

#signup .inputs #submit:hover {
    background: -moz-linear-gradient(
        top,
        #a4b0cb 0%,
        #b9c5dd);
    background: -webkit-gradient(
        linear, left top, left bottom, 
        from(#a4b0cb),
        to(#b9c5dd));
}
</style>
</head>
<body>
    <div class="ram"><ul>
  <li><a href="dash1.php" >Home</a></li>
  <li><a href="recieve.php">Place Orders</a></li>
   <li><a href="query.php">Order Status</a></li>
    <li><a href="uzhavar.html">Uzhavar Santhai</a></li>
    
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" >Forms</a>
    <div class="dropdown-content">
      <a href="ravi.php"class="active">Employee Feedback</a>

      
    
    
  </li>
  <li style="float: right;"><a href="logout1.php">Log Out</a></li>
</ul></div>
<button><a href="feedings2.php">More Option</a></button>
<div class="container">

    <form id="signup" action="ravi1.php" method="POST">

        <div class="header">
        
            <h3>Customer Feedback</h3>
            
            <p>All fields are mandatory</p>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
          
            
           Name <input type="text"name="name" placeholder="name" autofocus required="" />

            Framer name <input type="text"name="name1" placeholder="name" autofocus required="" />
            
           Email <input type="email" name="email" placeholder="e-mail" autofocus required="" />

           Mobile number <input type="text" name="number" placeholder="mobile number" autofocus required="" /></div>
            Gender  :
            <input type="radio" name="gender" value="male" required="">Male
            <input type="radio" name="gender" value="female">Female<br>
            <br><br>

            Product Type   :  <select name="rating" required="">
         	<option value="good">Good</option>
         	<option value="better">Better</option>
         	<option value="best">Best</option>
         	
         </select>
         <br>
         <br>
         Category  :<br>
         <input type="checkbox" name="check[]" value="cereals" required="">Cereals<br>
         <input type="checkbox" name="check[]" value="pulses">Pulses<br>
          <input type="checkbox" name="check[]" value="fibre">Fibre Crops<br>
           <input type="checkbox" name="check[]" value="manures">Manure Crops<br>
           <br><br>
           DESCRIPTION
           <textarea cols="50" rows="5" placeholder="Brief Description Of The Work" name="text1" required=""></textarea>
         

        
        
         <div class="inputs"> 
      
Password
           <input type="password" name="pass" placeholder="Password" autofocus required="" />
           District 
            <input type="text" name="district" placeholder="District" autofocus required="" />
            
            
            <input type="submit" id="submit" name="submit" value="submit">
        
        </div>

    </form>

</div>
​
</body>
</html>