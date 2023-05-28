<?php
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=6d59f528d7b8ee26eb605596fe190b25&libraries=services"></script>
    <script src="js/indexTMap.js"></script>
    <link rel="stylesheet" href="css/indexHeader.css">



</head>
<body>
<div data-role="page">
    <div data-role="header" class="ui-header" >
        <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>


        <a href="#nav_login" data-icon="lock" data-iconpos="notext">Login</a>

    </div>

    <div data-role="panel" id="nav-panel" data-position="left" data-display="overlay">
        <div class="profile-wrapper">
            <div class="profile-circle"></div>
            <div class="profile-info">
                <h2>홍길동 </h2>
                <p>교통 약자 </p>
            </div>
        </div>
        <ul data-role="listview" class="menu-list">
            <li><a href="test.html">경로 검색</a></li>
            <li><a href="#">주변 정류장 목록</a></li>
            <li><a href="#">설정</a></li>
        </ul>
    </div>

    <div data-role="panel" id="nav_login" data-position="right" data-display="overlay">
        <ul data-role="listview">
            <li><a href="#">로그인</a></li>
            <li><a href="#">회원가입</a></li>
        </ul>
    </div>
    <div role="main" class="ui-content" id="map_div" onload="window.onload()">
        <!-- 웹앱의 본문 내용 -->
        <div id="map"></div>
    </div>
</div>
</body>
</html>


