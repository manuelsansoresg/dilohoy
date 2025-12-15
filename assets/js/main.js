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

  (function(){
    var coarse=window.matchMedia&&window.matchMedia('(pointer: coarse)').matches;
    if(coarse)return;
    var max=8;
    var cards=document.querySelectorAll('.price-card');
    cards.forEach(function(card){
      var rect;
      var setTilt=function(x,y){
        var rx=(0.5-y)*max*2;
        var ry=(x-0.5)*max*2;
        card.style.transform='perspective(800px) rotateX('+rx+'deg) rotateY('+ry+'deg)';
      };
      card.addEventListener('mouseenter',function(){card.style.transition='transform .12s ease'});
      card.addEventListener('mousemove',function(e){
        rect=rect||card.getBoundingClientRect();
        var x=(e.clientX-rect.left)/rect.width;
        var y=(e.clientY-rect.top)/rect.height;
        setTilt(x,y);
      });
      card.addEventListener('mouseleave',function(){
        rect=null;
        card.style.transition='transform .18s ease';
        card.style.transform='';
      });
    });
  })();
}); 
