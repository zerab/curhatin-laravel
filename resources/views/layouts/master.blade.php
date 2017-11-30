<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
    <div class="logo-sign-container">
      <div class="logo-sign">
          <center><img src="{{ URL::asset('images/curhatin_logo_small.png') }}"></center>
      </div>
    </div>
            <div id="leftSidenav" class="sidenav">
              <div class="leftsideContent">
                <div class="profileBubble">
                  <center><img src="{{ URL::asset('images/7cf.jpg') }}" class="photo-round"><br>
                          <span style="font-weight:bold;text-transform:capitalize;">NULL</span><br>
                          <span style="text-decoration:italic;font-size:15px;"><i>Honorable Member</i></span><br>
                  </center>
                </div>
                <div id="userStats">
                    <a><i class="fa fa-star fa-2x"></i></a>
                    <a><i class="fa fa-star fa-2x"></i></a>
                    <a><span style="font-weight:bold;font-size:17px;color:">5.0</span><br><i class="fa fa-star fa-2x"></i></a>
                </div>
                <div class="sideMenu">
                    <a style="cursor:pointer;" onclick="javascript: sendRequest('home.php', '', 'content', 'div', '');"><i class="fa fa-home fa-1x"></i></a>
                    <a style="cursor:pointer;" onclick="javascript: sendRequest('home.php', '', 'content', 'div', '');"><i class="fa fa-user fa-1x"></i></a>
                    <a style="cursor:pointer;" onclick="javascript: sendRequest('home.php', '', 'content', 'div', '');"><i class="fa fa-handshake-o fa-1x"></i></a>
                </div>

              <a href="logout.php"><button type="button">Logout</button></a>
              </div>
            </div>
            <div id="mainSection" class="section">

            </div>

    </body>
    </html>
