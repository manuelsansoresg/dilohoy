document.addEventListener('DOMContentLoaded',function(){
  var c=document.getElementById('heroCarousel');
  if(c&&window.bootstrap){new bootstrap.Carousel(c,{interval:4000,pause:'hover',ride:true})}
  var obs=new IntersectionObserver(function(entries){
    entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('show');obs.unobserve(e.target)}})
  },{threshold:0.1});
  document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el)});
  var hero=document.querySelector('#hero .hero-overlay');
  if(hero){hero.classList.add('reveal');obs.observe(hero)}
  (function(){
    var coarse=window.matchMedia&&window.matchMedia('(pointer: coarse)').matches;
    var sec=document.querySelector('.parallax');
    if(!sec)return;
    if(coarse){
      var raf=null;
      var onScroll=function(){
        if(raf)return;
        raf=requestAnimationFrame(function(){
          raf=null;
          var r=sec.getBoundingClientRect();
          var vh=window.innerHeight;
          if(r.bottom>=0&&r.top<=vh){
            var y=(vh-r.top)*0.2;
            sec.style.backgroundPosition='center '+(-y)+'px';
          }
        });
      };
      window.addEventListener('scroll',onScroll,{passive:true});
      onScroll();
    }
  })();
});
