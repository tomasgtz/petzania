
<script>
  var nav = new DayPilot.Navigator("nav");
  nav.selectMode = "week";
  nav.showMonths = 2;
  nav.skipMonths = 3;
  nav.onTimeRangeSelected = function (args) {
    loadEvents(args.start.firstDayOfWeek(DayPilot.Locale.find(nav.locale).weekStarts), args.start.addDays(7));
  };
  nav.init();

  var calendar = new DayPilot.Calendar("calendar");
  calendar.viewType = "Week";
  calendar.timeRangeSelectedHandling = "Disabled";
  calendar.eventMoveHandling = "Disabled";
  calendar.eventResizeHandling = "Disabled";
  calendar.onBeforeEventRender = function (args) {
    if (!args.data.tags) {
      return;
    }
    switch (args.data.tags.status) {
      case "free":
        args.data.barColor = "green";
        args.data.html = "Disponible<br/>" + args.data.tags.doctor;
        args.data.toolTip = "Click to request this time slot";
        break;
      case "waiting":
        args.data.barColor = "orange";
        args.data.html = "Cita, en espera de confirmaci&oacute;n";
        break;
      case "confirmed":
        args.data.barColor = "#f41616";  // red
        args.data.html = "Cita confirmada";
        break;
    }
  };
  calendar.onEventClick = function (args) {
    if (args.e.tag("status") !== "free") {
      calendar.message("Solo se puede reservar en espacios marcados como Disponible.");
      return;
    }

    var modal = new DayPilot.Modal({
      onClosed: function (args) {
        if (args.result) {  // args.result is empty when modal is closed without submitting
          loadEvents();
        }
      }
    });

    modal.showUrl("request/" + args.e.id());
  };
  calendar.init();

  loadEvents();

  function loadEvents(day) {
    var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();

    var params = {
      start: start.toString(),
      end: nav.visibleEnd().toString()
    };

    $.post("events_free", JSON.stringify(params), function (data) {
      if (day) {
        calendar.startDate = day;
      }
      calendar.events.list = data;
      calendar.update();

      nav.events.list = data;
      nav.update();

    });
  }
</script>