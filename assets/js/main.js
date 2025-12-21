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
    var section = document.querySelector('.parallax-section');
    var bg = document.querySelector('.parallax-bg');
    if (!section || !bg) return;

    var raf = null;
    var onScroll = function(){
      if (raf) return;
      raf = requestAnimationFrame(function(){
        raf = null;
        var rect = section.getBoundingClientRect();
        var vh = window.innerHeight;
        
        // Calculate only if close to view to save resources
        if (rect.bottom >= -100 && rect.top <= vh + 100) {
          // Distance from center of viewport
          var centerY = vh / 2;
          var sectionCenterY = rect.top + (rect.height / 2);
          var dist = centerY - sectionCenterY; 
          
          // Parallax effect: Move background based on distance from center
          // speed = 0.25 means background moves 25% of scroll speed
          var speed = 0.25;
          var y = dist * speed;
          
          bg.style.transform = 'translate3d(0, ' + y + 'px, 0)';
        }
      });
    };
    
    window.addEventListener('scroll', onScroll, {passive: true});
    window.addEventListener('resize', onScroll, {passive: true});
    onScroll(); // Initial call
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
