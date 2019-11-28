<section class="content-header">
    <h1>
        <?php echo __('Agenda de citas'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li><?php echo $this->Html->link("Citas",array("action"=>"doctor")); ?></li>
    </ol>
</section>

<section class="content" style="width:95%">
	<div class="row">
		<div class="column-left">
		      <div id="nav"></div>
		      <div class="row">
			<label for="doctor" class="col-sm-3 control-label">M&eacute;dico</label>
			<div class="col-sm-8 required">
				<?php echo $this->Form->input('user',array('type' => 'select', 'id' => 'doctor', 'name' => 'doctor', 'class' => 'form-control', 'label' => false, 'value' => $doctor)); ?>
			</div>
		      </div>
		</div>
		<div class="column-main">
			<div id="calendar"></div>
		</div>
	</div>
</section>

<script>
  var nav = new DayPilot.Navigator("nav");
  nav.selectMode = "week";
  nav.showMonths = 2;
  nav.skipMonths = 3;
  nav.onTimeRangeSelected = function (args) {
    loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
  };
  nav.init();

  var calendar = new DayPilot.Calendar("calendar");
  calendar.viewType = "Week";
  calendar.timeRangeSelectedHandling = "Disabled";

  calendar.onEventMoved = function (args) {
    $.post("move.php", JSON.stringify(args), function (data) {
      calendar.message(data.message);
    });
  };
  calendar.onEventResized = function (args) {
    $.post("move.php", JSON.stringify(args), function (data) {
      calendar.message(data.message);
    });
  };
  calendar.onBeforeEventRender = function (args) {
    if (!args.data.tags) {
      return;
    }
    switch (args.data.tags.status) {
      case "free":
        args.data.barColor = "green";
        break;
      case "waiting":
        args.data.barColor = "orange";
        break;
      case "confirmed":
        args.data.barColor = "#f41616";  // red
        break;
    }
  };

  calendar.onEventClick = function (args) {
    var modal = new DayPilot.Modal({
      onClosed: function (args) {
        if (args.result) {  // args.result is empty when modal is closed without submitting
          loadEvents();
        }
      }
    });

    modal.showUrl("appointment_edit/" + args.e.id());
  };
  calendar.init();

  loadEvents();

  function loadEvents(day) {
//                var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();
    var start = nav.visibleStart();

    var params = {
      doctor: $("#doctor").val(),
      start: start.toString(),
      end: nav.visibleEnd().toString()
    };

    $.post("events_doctor", JSON.stringify(params), function (data) {
      if (day) {
        calendar.startDate = day;
      }
      calendar.events.list = data;
      calendar.update();

      nav.events.list = data;
      nav.update();
    });
  }

  $(document).ready(function () {
    $("#doctor").change(function () {
      loadEvents();
    });
  });
</script>