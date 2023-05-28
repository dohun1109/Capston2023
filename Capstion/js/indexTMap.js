// 위치 정보 받아오기
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

// 위치 정보 출력 및 PHP로 전송
function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    $.post("../php/index_Tmap_data.php", {
        latitude: latitude,
        longitude: longitude
    }, function (data) {
        console.log(data);
    });
}

// 페이지 로딩 시 자동으로 위치 정보 받아오기
window.onload = function() {
    getLocation();
};

// TMap API 키
var appKey = "2Jp8jONDJr6WTQpbipoHt5hqHcZre40UagYSbMww";

// TMap API 초기화
var tmap = new Tmapv2({
    key: appKey,
    baseUrl: "https://apis.openapi.sk.com/tmap"
});

// 지도 생성
var map = new Tmapv2.Map("map", {
    center: new Tmapv2.LatLng(latitude, longitude),
    width: "100%",
    height: "400px",
    zoom: 15
});

// 마커 생성
var marker = new Tmapv2.Marker({
    position: new Tmapv2.LatLng(latitude, longitude),
    map: map
});
