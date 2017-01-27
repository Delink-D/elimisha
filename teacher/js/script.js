/*

My Custom JS
============

*/
$(document).ready(function() {
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    defaultDate: '2017-01-01',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'Hack TO Teach',
        start: '2017-01-26',
        end:'2017-01-27'
      },
     
      {
        id: 999,
        title: 'Open Day',
        start: '2017-01-015T16:00:00'
      },
      {
        id: 999,
        title: 'Open Day',
        start: '2017-01-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2017-01-17',
        end: '2017-01-18'
      },
      {
        title: 'Meeting',
        start: '2017-1-12T10:30:00',
        end: '2017-1-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2017-01-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2017-01-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2016-01-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2016-01-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2017-01-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2017-01-28'
      }
    ]
  });
  
});
