/*----- SHOW/HIDE PASSWORD ----- */

function togglePassword() 
{
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 

/* ----- ENABLE/DISABLE CLOSED DAYS ----- */
//PENDENT FER UNA FUNCIO GET DAY PER NO HAVER DE FER 7 FUNCIONS
{
$('input[name=closedMonday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startMonday]").prop('disabled', true);
    $("input[name=endMonday]").prop('disabled', true);
  } else {
    $("input[name=startMonday]").prop('disabled', false);
    $("input[name=endMonday]").prop('disabled', false);
  }
});
$('input[name=closedTuesday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startTuesday]").prop('disabled', true);
    $("input[name=endTuesday]").prop('disabled', true);
  } else {
    $("input[name=startTuesday]").prop('disabled', false);
    $("input[name=endTuesday]").prop('disabled', false);
  }
});
$('input[name=closedWednesday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startWednesday]").prop('disabled', true);
    $("input[name=endWednesday]").prop('disabled', true);
  } else {
    $("input[name=startWednesday]").prop('disabled', false);
    $("input[name=endWednesday]").prop('disabled', false);
  }
});
$('input[name=closedThursday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startThursday]").prop('disabled', true);
    $("input[name=endThursday]").prop('disabled', true);
  } else {
    $("input[name=startThursday]").prop('disabled', false);
    $("input[name=endThursday]").prop('disabled', false);
  }
});
$('input[name=closedFriday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startFriday]").prop('disabled', true);
    $("input[name=endFriday]").prop('disabled', true);
  } else {
    $("input[name=startFriday]").prop('disabled', false);
    $("input[name=endFriday]").prop('disabled', false);
  }
});
$('input[name=closedSaturday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startSaturday]").prop('disabled', true);
    $("input[name=endSaturday]").prop('disabled', true);
  } else {
    $("input[name=startSatruday]").prop('disabled', false);
    $("input[name=endSatruday]").prop('disabled', false);
  }
});
$('input[name=closedSunday]').click(function enable_disable() {
  if (this.checked) {
    $("input[name=startSunday]").prop('disabled', true);
    $("input[name=endSunday]").prop('disabled', true);
  } else {
    $("input[name=startSunday]").prop('disabled', false);
    $("input[name=endSunday]").prop('disabled', false);
  }
});
}



/* ----- DATA TABLES ----- */
$(document).ready(function() {
  $('#taulaAdmin').DataTable( {
      dom: 'Bfrtip',

      /* ----- EXPORT TABLE ----- */
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
} );


$(document).ready(function () {
    $('#taulaAdminBlock').DataTable({
        dom: '<"toolbar">frtip',
    });
});

$(document).ready(function () {
  $('#main').DataTable({
      dom: '<"toolbar">frtip',
  });
});

//test if password equals confirm password
$('#alertPassword').hide();

$('#submit').click(function match_contrasenya() {
  if ($('#password').val() != $('#confirm').val()) {
    $('#alertPassword').show();
    $("form").submit(function(e){
      e.preventDefault(e);
  });
  } 
  else{
    $('#alertPassword').hide();
    $("form").unbind('submit').submit();
  }
});

/* ----- ICS CALENDAIR ----- */
function createICS() 
{
  document.getElementById("")
  var cal = ics();
  cal.addEvent(subject, description, location, begin, end);
  cal.download(filename);
}
