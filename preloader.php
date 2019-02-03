<style>
.preloader {
	background: #243B55;
	width: 100%;
	height: 100%;
	position: fixed;
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 100;
	top: 0;
}
.cssload-loader {
	position: relative;
	width: 100px;
	height: 100px;
	-webkit-perspective: 780px;
	perspective: 780px;
	display: flex;
	justify-content: center;
	align-items: center;
}
/*.cssload-loader::before {
	content: "unin";
	color: #fff;
	position: absolute;
	top: calc(50% - 21px);
	left: 25%;
	font-size: 21px;
}*/

.cssload-inner {
	position: absolute;
	width: 100%;
	height: 100%;
	box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
}

.cssload-inner.cssload-one {
	left: 0%;
	top: 0%;
	animation: cssload-rotate-one 1.15s linear infinite;
	-o-animation: cssload-rotate-one 1.15s linear infinite;
	-ms-animation: cssload-rotate-one 1.15s linear infinite;
	-webkit-animation: cssload-rotate-one 1.15s linear infinite;
	-moz-animation: cssload-rotate-one 1.15s linear infinite;
	border-bottom: 3px solid #4c78ad;
}

.cssload-inner.cssload-two {
	right: 0%;
	top: 0%;
	animation: cssload-rotate-two 1.15s linear infinite;
	-o-animation: cssload-rotate-two 1.15s linear infinite;
	-ms-animation: cssload-rotate-two 1.15s linear infinite;
	-webkit-animation: cssload-rotate-two 1.15s linear infinite;
	-moz-animation: cssload-rotate-two 1.15s linear infinite;
	border-right: 3px solid #EBF0F6;
}

.cssload-inner.cssload-three {
	right: 0%;
	bottom: 0%;
	animation: cssload-rotate-three 1.15s linear infinite;
	-o-animation: cssload-rotate-three 1.15s linear infinite;
	-ms-animation: cssload-rotate-three 1.15s linear infinite;
	-webkit-animation: cssload-rotate-three 1.15s linear infinite;
	-moz-animation: cssload-rotate-three 1.15s linear infinite;
	border-top: 3px solid #c9e98a;
}
@keyframes cssload-rotate-one {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
		transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
		transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-one {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
	}
}

@keyframes cssload-rotate-two {
	0% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
		transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
		transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-two {
	0% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
	}
}

@keyframes cssload-rotate-three {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
		transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
		transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

@-webkit-keyframes cssload-rotate-three {
	0% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
	}
	100% {
		-webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
	}
}

</style>
<div id="preloader" class="preloader">
	<div class='cssload-loader'>
		<img class="preload-img" src="/assets/img/tools-logo.svg" alt="Logo" width="60">
		<div class='cssload-inner cssload-one'></div>
		<div class='cssload-inner cssload-two'></div>
		<div class='cssload-inner cssload-three'></div>
	</div>
</div>

<script>
	var preloader = document.getElementById("preloader");
	function preloadFadeOut(el) {
		el.style.opacity = 1;
		var interpreloader = setInterval(function () {
				el.style.opacity = el.style.opacity - 0.05;
				if (el.style.opacity < 0.05) {
					clearInterval(interpreloader);
					preloader.parentNode.removeChild(preloader);
				}
			}, 16
		);
	}
	function hidePreloader() {
		setTimeout(function () {
			preloadFadeOut(preloader);
		}, 800);
	}
	if (window.attachEvent) {
		window.attachEvent('onload', hidePreloader);
	} else if (window.addEventListener) {
		window.addEventListener('load', hidePreloader, false);
	} else {
		document.addEventListener('load', hidePreloader, false);
	}
</script>