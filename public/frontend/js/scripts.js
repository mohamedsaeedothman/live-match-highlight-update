$(document).ready(function(){

  $('.matches-container .tab-btn.first-active').addClass('active');
  $('.matches-container .tab-pane.first-active').addClass('active');

  $(document).on('click', '.tab-btn', function(e){
    e.preventDefault();

    var $this = $(this);
    $this.addClass('active').siblings().removeClass('active').closest('.matches-container').find('.tab-pane'+$this.attr('href')).addClass('active').siblings().removeClass('active');

  });

});