$('.list-group-item').click(function ()
{
   if($(this).attr('id') == 'Primary_Sidebar-Service_Details_Overview-Information')
   {
      $('.MGPanelExtension').fadeIn(250);
      return;
   }
   $('.MGPanelExtension').fadeOut(250);
});