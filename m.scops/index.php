<?php include_once 'login.php'; ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $global['name'];?> | Mobile</title>
  <link rel="shortcut icon" type="image/png" href="../img/main/ico-2.png">
  <link rel="icon" type="image/png" href="../img/main/ico-2.png">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="style.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <meta charset="utf-8">
  
  <script type="text/javascript" src="<?php echo _root_;?>/libs/Jquery/jquery.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="<?php echo _root_;?>/libs/Form/form.js"></script>
  <script type="text/javascript">
    
    if( getCookie('link') ) window.location = '/id' + getCookie('id') + '/wall';
    
  </script>  
</head>
<body>

<div class="container">

  <div class="content-block">
    <div class="table">
      <div class="content">
        <a href=".">
          <div class="logo"></div>
        </a>
        <div class="login-box form-box">
          <form method="post" id="login-form" action="index.php">
            <input type="text" placeholder="Email.." name="login" class="item input">
            <input type="password" placeholder="Password.." name="password" class="item input">
            <label class="item label">
              <input checked name="check" type="checkbox" style="display:none;" class="check">
              <div class="check-view"></div> 
              <span>Remember me</span>
            </label>
            <button id="login-btn" name="log_in" class="item submit-button">Login</button>
          </form>
          <header class="item reg" onclick="openReg()">New to <?php echo $global['name'];?>? Sign Up!</header>
        </div>
        
        <div class="reg-box form-box hidden">
          <form method="post" action="<?php echo _root_;?>/php_requests/registration.php" id="reg-form">
            <div class="input-box">
              <input placeholder="Name" name="name" class="item input">
              <div class="input-info-content">Type your name</div>
            </div>
            <div class="input-box">
              <input placeholder="Surname" name="surname" class="item input">
              <div class="input-info-content">Type your surame</div>
            </div>
            <div class="input-box">
              <input  placeholder="E-mail" name="mail" class="item input">
              <div class="input-info-content">You will receive email for confirmation.</div>
            </div>
            <div class="input-box">
              <input placeholder="Password" name="pass" class="item input">
              <div class="input-info-content">New Password ( [ 6 - 25 ] , at least 1 uppercase , 1 lowercase letter , 1 number ) </div>
            </div>
            <div class="input-box">
              <input placeholder="Re-enter password" name="repass" class="item input">
              <div class="input-info-content">Re-enter password</div>
            </div>
            <div class="input-box">
              <input placeholder="Country" name="country" class="item input">
              <div class="input-info-content">What country do you live in?</div>
            </div>
            <div class="input-box">
              <input placeholder="City" name="city" class="item input">
              <div class="input-info-content">What city are you from?</div>
            </div>
            <div class="input-box select birth">
              <select name="day">
                <option selected="selected" disabled>Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
              <select>
              <select name="month">
                <option selected="selected" disabled>Month</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
              <select>
              <select name="year"> 
                <option  selected="selected" disabled>Year</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
              </select>
              <div class="input-info-content">When were you born?</div>
            </div>
            <div class="input-box select gender">
              <select name="gender">
                <option selected value="0">Men</option><option value="1">Woman</option>
              <select>
              <div class="input-info-content">Gender</div>
            </div>
            
            <div class="input-box result-box"> 
              <div id="result"></div> 
            </div>
            <input type="button" value="Registration" class="item submit-button reg">
          </form>
          <button class="item submit-button" onclick="openReg(1)">Login page</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script type="text/javascript">
  function openReg( act ) {
    if( !act ) {
      
      $('.form-box.reg-box').removeClass('hidden');
      $('.form-box.login-box').addClass('hidden');
      
    } else {
      
      $('.form-box.reg-box').addClass('hidden');
      $('.form-box.login-box').removeClass('hidden');
      
    }
  }
  
  var reg = true;
  $('.content-block .reg-box .submit-button').click(function(){
    if( !reg ) return;
    reg = false;
    $('.content-block #reg-form #result').css('display','block');
    $('.content-block #reg-form #result').html( 'Loading...' );
    $('#reg-form').ajaxForm({
      success: function(data){
        if( data != '1' ) {
          if( JSON.parse(data)[0] == '0' ) window.location = JSON.parse(data)[1];
          else $('.content-block #reg-form #result').html( JSON.parse(data)[1] );
          reg = true;
        }  else {
          $('.content-block .input-box').not('.result-box').css('height' , 0 ).css('margin', 0 );
          $('.content-block #reg-form #result').html('Message was sent to your mail');
          $('.content-block #reg-form .submit-button.reg').css('display','none');
        }
      }
    }).submit();
  });
</script>
</body>
</html>