$(document).ready(() => {
  const $title = $('.title');
  const $background = $('.background');
  const $intro = $('.intro');
  const $begin = $('.begingame');
  const $gosee = $('.gosee');
  const $stay = $('.stay');
  const $kissing = $('.kissing');
  const $woods = $('.woods');
  const $find = $('.find');
  const $sneak = $('.sneak');
  const $front = $('.front');
  const $back = $('.back');
  const $hide= $('.hide'); 
  const $end = $('.end');
  const $stab = $('.stab');
  const $getaway = $('.getway');
  const $caught = $('.caught');
  const $endTwo = $('.endtwo');
  const $gate = $('.gate');
  const $boat = $('.boat');
  const $break = $('.break'); 
  const $arrow = $('.arrow');
  const $help = $('.help');
  const $dead = $('.dead');
  const $endthree = $('.endthree');
 
   function beginGame() {
    $title.show();
    $background.show();
    $begin.show();
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $woods.hide();
    $find.hide();
    $sneak.hide();
    $front.hide();
    $back.hide();
    $hide.hide();
    $end.hide();
    $stab.hide();
    $getaway.hide();
    $caught.hide();
    $endTwo.hide();
    $gate.hide();
    $boat.hide();
    $break.hide();
    $arrow.hide();
    $help.hide();
    $dead.hide();
    $endthree.hide();
  }
  
  beginGame();

  $begin.on('click', () => {
    $background.hide();
    $begin.hide();
    $intro.show();
    $gosee.show();
    $stay.show();
    $kissing.show();
  });
  
  $gosee.on('click', () => { 
    $background.hide();
    $begin.hide();
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $woods.show(); 
    $end.show(); 
  }); 
  
  $kissing.on('click', () => { 
    $background.hide();
    $begin.hide();
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $sneak.show(); 
    $end.show(); 
  });
  
  $stay.on('click', () => {
    $background.hide();
    $begin.hide();
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $find.show();
    $front.show();
    $back.show();
    $hide.show();
  });
    
    
  $end.on('click', () => {
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $woods.hide();
    $find.hide();
    $sneak.hide();
    $end.hide();
    $background.show();
    $begin.show();
  });
  
  $back.on('click', () => {
    $find.show();
    $front.hide();
    $back.hide();
    $hide.hide();
    $stab.hide();
    $getaway.hide();
    $gate.show();
    $boat.show();
    $caught.hide();
  });
  
   $front.on('click', () => {
    $getaway.hide();
    $find.hide();
    $front.hide();
    $back.hide();
    $hide.hide();
    $stab.show(); 
    $endTwo.show(); 
  });
  
   $hide.on('click', () => {
    $getaway.hide();
    $find.hide();
    $front.hide();
    $back.hide();
    $hide.hide();
    $stab.hide();
    $caught.show(); 
    $endTwo.show(); 
  });
  
  $endTwo.on('click', () => {
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $woods.hide();
    $find.hide();
    $sneak.hide();
    $end.hide();
    $front.hide();
    $back.hide();
    $hide.hide();
    $stab.hide();
    $getaway.hide();
    $caught.hide();
    $endTwo.hide();
    $background.show();
    $begin.show();
  });
  
  $gate.on('click', () => {
    $getaway.show();
    $gate.hide();
    $boat.hide();
    $break.hide();
    $arrow.show(); 
    $endthree.show(); 
  });
  
  $break.on('click', () => { 
    $getaway.show();
    $gate.hide();
    $boat.hide();
    $break.hide();
    $dead.show(); 
    $endthree.show(); 
  });
  
  $boat.on('click', () => {
    $getaway.show();
    $gate.hide();
    $boat.hide();
    $break.hide();
    $help.show(); 
    $endthree.show();
  });
  
  $endthree.on('click', () => {
    $intro.hide();
    $gosee.hide();
    $stay.hide();
    $kissing.hide();
    $woods.hide();
    $find.hide();
    $sneak.hide();
    $end.hide();
    $front.hide();
    $back.hide();
    $hide.hide();
    $stab.hide();
    $getaway.hide();
    $caught.hide();
    $endTwo.hide();
    $gate.hide();
    $boat.hide();
    $break.hide();
    $arrow.hide();
    $help.hide();
    $dead.hide();
    $endthree.hide();
    $background.show();
    $begin.show();
  });
  
})