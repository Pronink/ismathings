function calcParallax(tileheight, speedratio, scrollposition) {
  return ((tileheight) - (Math.floor(scrollposition / speedratio) % (tileheight+1)));
}

window.onload = function() {
  window.onscroll = function() {
    var posX = (document.documentElement.scrollLeft) ? document.documentElement.scrollLeft : window.pageXOffset;
    var posY = (document.documentElement.scrollTop) ? document.documentElement.scrollTop : window.pageYOffset;
    
    var ground = document.body;
    var groundparallax = calcParallax(400, 20, posY);
    ground.style.backgroundPosition = "0 " + groundparallax + "px"; 

    //var clouds = document.getElementById('clouds');
    //var cloudsparallax = calcParallax(400, .5, posY);
    //clouds.style.backgroundPosition = "0 " + cloudsparallax + "px"; 
  }
}

