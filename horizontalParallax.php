<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	<meta name="description" content="Send us your manuscript for Editing and Publication services"> <!-- seo -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Author Assists</title>
	<link rel="shortcut icon" href="src/Images/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="src/css/nouislider.min.css">
    <link rel="stylesheet" href="src/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/fonts/icomoon/style.css">
	<!--bootstrap 4 css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!--bootstrap 4 css-->
    <!--For Fa Fa-icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--For Fa Fa-icon-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.createjs.com/1.0.0/easeljs.min.js"></script>
		<style>
			html, body{
  width: 100%;
  height: 100%;
  box-sizing: border-box;
  margin: 0;
  background-color: black;
}
body *{
  box-sizing: border-box;
}
#main-container {
  position: relative;
  top: 0%;
  left: 50%;
  transform: translateX(-50%);
  width: 100%;
  overflow: hidden;
  padding: 0%;
  margin: 0%;
}

#container-svg {
  position: relative;
  top: 0%;
  left: 50%;
  transform: translateX(-50%);
  width: 2048px;
  height: 900px;
  overflow: hidden;
  background-color: #8EE4FF;
}
#loading-div {
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: black;
  z-index: 1000;
}
#loading-div>p{
  position: absolute;
  color: white;
  top: 50%;
  left: 50%;
  font-size: 2em;
  transform: translate(-50%, -50%);
}
#sky-svg {
  position: absolute;
  top: -5.7%;
  left: 0%;
  height: 62.72;
  width: 100%;
}

#cloud-1 {
  position: absolute;
  top: 20.4%;
  left: 27%;
  height: 12%;
  width: 7.4%;
  z-index: 2;
  animation: cloud-1-anim 26.8s linear infinite;
}
@keyframes cloud-1-anim {
    63.8% {left: 110%;}
    63.81% {left: -20%;}
}

#cloud-2 {
  position: absolute;
  top: 4.3%;
  left: 0.5%;
  height: 11.8%;
  width: 7.3%;
  z-index: 2;
  animation: cloud-2-anim 28s linear infinite;
}
@keyframes cloud-2-anim {
    84.2% {left: 110%;}
    84.21% {left: -20%;}
}

#cloud-3 {
  position: absolute;
  top: 7.7%;
  left: 50%;
  height: 12%;
  width: 7.4%;
  z-index: 2;
  animation: cloud-3-anim 25.7s linear infinite;
}
@keyframes cloud-3-anim {
    46.1% {left: 110%;}
    46.11% {left: -20%;}
}

#cloud-4 {
  position: absolute;
  top: 23%;
  left: 73.5%;
  height: 13.8%;
  width: 6.3%;
  z-index: 2;
  animation: cloud-4-anim 26s linear infinite;
}
@keyframes cloud-4-anim {
    28.07% {left: 110%;}
    28.08% {left: -20%;}
}

#cloud-5 {
  position: absolute;
  top: 10.2%;
  left: 95%;
  height: 11.5%;
  width: 7.8%;
  z-index: 2;
  animation: cloud-5-anim 26.5s linear infinite;
}
@keyframes cloud-5-anim {
    11.5% {left: 110%;}
    11.51% {left: -20%;}
}

#hill-svg {
  position: absolute;
  bottom: 1%;
  left: -10%;
  height: 57.7%;
  width: 120%;
  z-index: 3;
}

#stupa-img {
  position: absolute;
  bottom: 44%;
  left: 87%;
  height: 21%;
  z-index: 4;
}
#front-grass {
  position: absolute;
  bottom: 0%;
  left: -50%;
  height: 24%;
  width: 200%;
  background-color: #9CB92D;
  z-index: 10;
}
#mountain-img {
  position: absolute;
  bottom: 28%;
  left: 0%;
  width: 106%;
  z-index: 1;
}

#school-svg {
  position: absolute;
  bottom: 23%;
  left: 36.75%;
  height: 52%;
  width: 26.5%;
  z-index: 12;
}
#road-svg {
  position: absolute;
  bottom: 0%;
  left: -25%;
  height: 24%;
  width: 150%;
  z-index: 11;
}
#flag-svg {
  position: absolute;
  bottom: 20%;
  left: 30%;
  height: 41%;
  /* width: 12.5%; */
  z-index: 14;
  cursor: pointer;
}
#flag-svg > g{
  cursor: pointer;
}
#bus-container {
  position: absolute;
  bottom: 7%;
  left: -54%;
  height: 34.1%;
  width: 36%;
  z-index: 40;
}
#bus-svg {
  position: absolute;
  bottom: 0%;
  left: 0%;
  height: 100%;
}
#wheel-front, #wheel-back{
  position: absolute;
  bottom: 0%;
  height: 30%;
  /* width: 36%; */
  z-index: 1;
}
#wheel-back{
  left: 16.3%;
}
#wheel-front{
  left: 76.1%;
}
.bus-anim{
  animation: bus-anim 10s ease-in-out;
}
@keyframes bus-anim {
    82.30% {left: 160%;}
    82.31% {left: -100%;}
}
.wheel-anim{
  animation: wheel-anim 10s ease-in-out;
}
@keyframes wheel-anim {
    100% {transform: rotate(18000deg);}
}
#board-svg {
  cursor: pointer;
  position: absolute;
  bottom: 18%;
  left: 70%;
  height: 15%;
  width: 9%;
  z-index: 29;
}
#kids-svg {
  position: absolute;
  bottom: 17%;
  left: 108%;
  height: 22%;
  width: 15%;
  z-index: 30;
}
#temple-img {
  position: absolute;
  bottom: 18%;
  left: 6%;
  height: 30%;
  z-index: 30;
}
#plane-container {
  position: absolute;
  top: 4%;
  left: 30%;
  height: 15.1%;
  width: 50%;
  z-index: 3;
  transform-origin: 78% 63%;
  animation: plane-wiggle 1.5s ease-in-out infinite, plane-anim 20s linear infinite;
}
@keyframes plane-anim {
    0% {left: -55%;}
    100% {left: 125%;}
}
@keyframes plane-wiggle {
    0% {transform: rotate(2deg);}
    50% {transform: rotate(-2deg);}
    100% {transform: rotate(2deg);}
}
#plane-img {
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
}

#quote-text {
  position: absolute;
  top: 30%;
  left: 38%;
  transform: translate(-50%, -50%) rotate(1.5deg);
  width: 68%;
  text-align: center;
  font-size: 30px;
}
/* trees beginning */
.tree-img {
  position: absolute;
  height: 20%;
  bottom: 40%;
  left: 10%;
  z-index: 5;
}

.tree-1 {
  height: 15%;
  bottom: 33%;
  left: -8%;
}

.tree-2 {
  height: 15%;
  bottom: 33%;
  left: -3%;
}

.tree-3 {
  height: 19%;
  bottom: 28.5%;
  left: 11%;
}

.tree-4 {
  height: 14%;
  bottom: 28.5%;
  left: 17%;
}

.tree-5 {
  height: 19%;
  bottom: 28.5%;
  left: 22%;
}

.tree-6 {
  height: 20%;
  bottom: 28.5%;
  left: 70%;
}

.tree-7 {
  height: 20%;
  bottom: 28.5%;
  left: 78%;
}

.tree-8 {
  height: 16.5%;
  bottom: 37%;
  left: 88%;
}

.tree-9 {
  height: 17%;
  bottom: 36%;
  left: 97%;
}
.tree-10 {
  height: 15%;
  bottom: 31%;
  left: 33%;
  z-index: 11;
}
.tree-11 {
  height: 12.5%;
  bottom: 33.5%;
  left: 38%;
}
.tree-12 {
  height: 14%;
  bottom: 38%;
  left: 44%;
}
.tree-13 {
  height: 12%;
  bottom: 37%;
  left: 50%;
}
.tree-14 {
  height: 14%;
  bottom: 30%;
  left: 56%;
}


/* mid trees */
.tree-15 {
  height: 25.5%;
  bottom: 22%;
  left: 61%;
  z-index: 13;
}

.tree-16 {
  height: 25.5%;
  bottom: 21%;
  left: 73%;
  z-index: 13;
}

.tree-17 {
  height: 28%;
  bottom: 23%;
  left: 100%;
  z-index: 13;
}

.tree-18 {
  height: 29%;
  bottom: 21%;
  left: 5%;
  z-index: 13;
}

/* big trees */
.tree-19 {
  height: 34%;
  bottom: 20%;
  left: -20%;
  z-index: 23;
}
.tree-20 {
  height: 36%;
  bottom: 18%;
  left: -40%;
  z-index: 23;
}
.tree-21 {
  height: 36%;
  bottom: 17%;
  left: 116%;
  z-index: 23;
}
.tree-22 {
  height: 37%;
  bottom: 18%;
  left: 90%;
  z-index: 23;
}
/* trees end */
		</style>
	</head>
	<body>
		<script>
			$(function() {
  //for preload
	var preload;
	var timeoutvar = null;
  initParallax();
	function initParallax() {
		//specify type otherwise it will load assests as XHR
		manifest = [
			//images
			{id: "tree-png", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520693447/codepen/horizontal-parallax/tree-png.png", type: createjs.AbstractLoader.IMAGE},
			{id: "tree-gif", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689639/codepen/horizontal-parallax/tree.gif", type: createjs.AbstractLoader.IMAGE},
			{id: "cloud-1", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/cloud-1.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "cloud-2", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/cloud-2.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "cloud-3", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/cloud-3.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "cloud-4", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/cloud-4.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "cloud-5", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689630/codepen/horizontal-parallax/cloud-5.svg", type: createjs.AbstractLoader.IMAGE},

			{id: "bus", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/bus-no-wheel.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "wheel", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689638/codepen/horizontal-parallax/wheel-2.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "board", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689628/codepen/horizontal-parallax/board.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "flag", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520693668/codepen/horizontal-parallax/flag-png.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "flag-gif", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689632/codepen/horizontal-parallax/flag.gif", type: createjs.AbstractLoader.IMAGE},
			{id: "mountain", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689632/codepen/horizontal-parallax/mountain.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "hill", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689630/codepen/horizontal-parallax/hill.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "kids", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689633/codepen/horizontal-parallax/kids.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "road", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689634/codepen/horizontal-parallax/road-new.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "school", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689635/codepen/horizontal-parallax/school.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "sky", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689635/codepen/horizontal-parallax/sky-pattern.svg", type: createjs.AbstractLoader.IMAGE},
			{id: "stupa", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689636/codepen/horizontal-parallax/stupa.png", type: createjs.AbstractLoader.IMAGE},
			{id: "temple", src: "https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689636/codepen/horizontal-parallax/temple.png", type: createjs.AbstractLoader.IMAGE},
		];
		preload = new createjs.LoadQueue(false);
		preload.on("progress", handleProgress);
		preload.on("complete", handleComplete);
		preload.on("fileload", handleFileLoad);
		preload.loadManifest(manifest, true);
	}
	function handleFileLoad(event) {
	}
	function handleProgress(event) {
		$('#loading-div>p').html(parseInt(event.loaded*100)+'% loaded');
	}
	function handleComplete(event) {
		$('#loading-div').hide(0);
    mainWindow();
	}
  // adding trees
  function mainWindow(){
		$('#stupa-img').attr('src', preload.getResult("stupa").src);
		$('#temple-img').attr('src', preload.getResult("temple").src);
		$('#bus-svg').attr('src', preload.getResult("bus").src);
		$('#wheel-front').attr('src', preload.getResult("wheel").src);
		$('#wheel-back').attr('src', preload.getResult("wheel").src);
		$('#mountain-img').attr('src', preload.getResult("mountain").src);
    var treePngUrl = preload.getResult("tree-png").src;
    var treeGifUrl = preload.getResult("tree-gif").src;
    for (var i = 1; i < 23; i++) {
			if(i==8 ||i ==21){

			} else if (i < 15) {
        $('#container-svg').append("<img class='tree-img parallax-layer-4 tree-" + i + "' src='"+ treePngUrl +"'>");
      } else if (i < 19) {
        $('#container-svg').append("<img class='tree-img parallax-layer-3 tree-" + i + "' src='"+ treePngUrl +"'>");
      } else if (i < 23) {
        $('#container-svg').append("<img class='tree-img parallax-layer-2 tree-" + i + "' src='"+ treePngUrl +"'>");
      }
    }
    $('.tree-img').hover(function() {
      $(this).attr('src', treePngUrl);
    }, function() {
      $(this).attr('src', treeGifUrl);
    })
    var container = Snap('#container-svg');
    var skyPattern = Snap.load(preload.getResult("sky").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var cloud1 = Snap.load(preload.getResult("cloud-1").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var cloud2 = Snap.load(preload.getResult("cloud-2").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var cloud3 = Snap.load(preload.getResult("cloud-3").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var cloud4 = Snap.load(preload.getResult("cloud-4").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var cloud5 = Snap.load(preload.getResult("cloud-5").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var hill = Snap.load(preload.getResult("hill").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var school = Snap.load(preload.getResult("school").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
		$('#flag-svg').attr('src', preload.getResult("flag").src);
		$('#flag-svg').hover(function(){
			$('#flag-svg').attr('src', preload.getResult("flag-gif").src);
		}, function(){
			$('#flag-svg').attr('src', preload.getResult("flag").src);
		});
    var roadPoly;
    var roadSVG = Snap.load(preload.getResult("road").src, function(loadedFragment) {
      container.append(loadedFragment);
      roadPoly = Snap.select('#road-poly');
    });
    var boardSVG = Snap.load(preload.getResult("board").src, function(loadedFragment) {
      container.append(loadedFragment);
    });
    var kidsSVG = Snap.load(preload.getResult("kids").src, function(loadedFragment) {
      container.append(loadedFragment);
    });

    var mainContainerWidth = $('#main-container').width(),
      mainContainerHeight = $('#main-container').height(),
      mainContainerWidthHalf = mainContainerWidth / 2;
    $('#container-svg').width(mainContainerWidth);
    $('#container-svg').height(mainContainerWidth * 900 / 2048);
    $('#quote-text').css('font-size', 30 * mainContainerWidth / 2048 + 'px');

    var containerWidth = $('#container-svg').width(),
      containerWidthHalf = containerWidth / 2,
      maxParallax4 = containerWidth * 0.1,
      maxParallax3 = containerWidth * 0.25,
      maxParallax2 = containerWidth * 0.375,
      maxParallax1 = containerWidth * 0.5,
      scrollConstant = -1,
      scrollSpeed = 5;
    var offsetArr = [0, 0, 0, 0];
    var scrollChangeFlag = true;
    // for resize event
    window.onresize = function(event) {
      mainContainerWidth = $('#main-container').width();
      mainContainerHeight = $('#main-container').height();
      mainContainerWidthHalf = mainContainerWidth / 2;
      $('#container-svg').width(mainContainerWidth);
      $('#container-svg').height(mainContainerWidth * 900 / 2048);
      $('#quote-text').css('font-size', 30 * mainContainerWidth / 2048 + 'px');
      containerWidth = $('#container-svg').width();
      containerWidthHalf = containerWidth / 2;
      maxParallax4 = containerWidth * 0.1;
      maxParallax3 = containerWidth * 0.25;
      maxParallax2 = containerWidth * 0.375;
      maxParallax1 = containerWidth * 0.5;
      scrollConstant = -1;
      scrollSpeed = 5;
      if (maxParallax5 < 0) maxParallax5 = 0;
    };
    $('#container-svg').mousemove(function(event) {
      var offset = $("#container-svg").offset();
      var posX = event.pageX - offset.left;
      scrollSpeed = Math.round((posX / mainContainerWidthHalf - 1) * 50) / 10;
    });
    var interval1 = null;
    var pointsInRoad0 = "975,-10 ";
    var ptsAdjustable1 = 904;
    var pointsInRoad1 = ",71 -13,71 -13,195 2098,195 2098,71 "
    var ptsAdjustable2 = 1188;
    var pointsInRoad3 = ",71 1109,-12";
    $('#container-svg').hover(function() {
      interval1 = setInterval(function() {
        scroller('.parallax-layer-4', 3, maxParallax4, 1);
        scroller('.parallax-layer-3', 2, maxParallax3, 2);
        scroller('.parallax-layer-2', 1, maxParallax2, 3);
        scroller('.parallax-layer-1', 0, maxParallax1, 4);
        var roadPoints = '';
        if (offsetArr[0] > 0) {
          ptsAdjustable1 = 904 + (offsetArr[0] / 20) * 2048 / containerWidth;
          ptsAdjustable2 = 1188 + (offsetArr[0] / 20) * 2048 / containerWidth;
        } else {
          ptsAdjustable1 = 904 + (offsetArr[0] / 20) * 2048 / containerWidth;
          ptsAdjustable2 = 1188 + (offsetArr[0] / 20) * 2048 / containerWidth;
        }
        roadPoints = pointsInRoad0 + ptsAdjustable1 + pointsInRoad1 + ptsAdjustable2 + pointsInRoad3;
        roadPoly.attr('points', roadPoints);
      }, 17);
    }, function() {
      clearInterval(interval1);
    });

    function scroller(objectName, arrIndex, maxOffset, scrollFactor) {
      offsetArr[arrIndex] += scrollConstant * scrollSpeed * scrollFactor;
      if (offsetArr[arrIndex] > maxOffset) {
        offsetArr[arrIndex] = maxOffset;
      } else if (offsetArr[arrIndex] < -maxOffset) {
        offsetArr[arrIndex] = -maxOffset;
      } else {
        $(objectName).css('transform', 'translateX(' + (offsetArr[arrIndex]) + 'px)');
      }
    }
    $('#bus-container').click(function(){
     $('#wheel-back, #wheel-front').addClass('wheel-anim');
     $('#bus-container').addClass('bus-anim');
     timeoutvar = setTimeout(function(){
       $('#wheel-back, #wheel-front').removeClass('wheel-anim');
       $('#bus-container').removeClass('bus-anim');
     }, 10500);
   });
	}
});

		</script>
		<div id='main-container'>
    <div id='container-svg'>
      <div id='front-grass'>
      </div>
      <img id='mountain-img' >
      <div id="plane-container">
        <img id='plane-img' src='https://res.cloudinary.com/sandeepsthapit/image/upload/v1520689634/codepen/horizontal-parallax/plane-final.svg'>
        <p id='quote-text'>Hover the scene</p>
      </div>
      <img id='flag-svg' class='parallax-layer-3'>
      <img id='stupa-img' class='parallax-layer-4'>
      <img id='temple-img' class='parallax-layer-2'>
      <div id="bus-container" class='parallax-layer-1'>
      <img id='bus-svg' >
      <img id='wheel-front'>
      <img id='wheel-back'>
      </div>
    </div>
    <div id='loading-div'>
      <p>Loading ....</p>
    </div>
	</body>
</html>