var vanillacalendar = {
  month: document.querySelectorAll('[data-calendar-area="month"]')[0],
  next: document.querySelectorAll('[data-calendar-toggle="next"]')[0],
  previous: document.querySelectorAll('[data-calendar-toggle="previous"]')[0],
  label: document.querySelectorAll('[data-calendar-label="month"]')[0],
  activeDates: null,
  date: new Date(),
  todaysDate: new Date(),

  init: function () {
    this.date.setDate(1)
    this.createMonth()
    this.createListeners()
  },

  createListeners: function () {
    var _this = this
    this.next.addEventListener('click', function () {
      _this.clearCalendar()
      var nextMonth = _this.date.getMonth() + 1
      _this.date.setMonth(nextMonth)
      _this.createMonth()
    })
    // Clears the calendar and shows the previous month
    this.previous.addEventListener('click', function () {
      _this.clearCalendar()
      var prevMonth = _this.date.getMonth() - 1
      _this.date.setMonth(prevMonth)
      _this.createMonth()
    })
  },

  createDay: function (num, day, year) {
    var newDay = document.createElement('div')
    var dateEl = document.createElement('span')
    dateEl.innerHTML = num
    newDay.className = 'cal__date'
    newDay.setAttribute('data-calendar-date', this.date)

    if (num === 1) {
      var offset = ((day - 1) * 14.28)
      if (offset > 0) {
        newDay.style.marginLeft = offset + '%'
      }
    }

    //senza commenti rende inaccessibili i giorni precedenti al corrente

    /*if (this.date.getTime() <= this.todaysDate.getTime() - 1) {
      newDay.classList.add('cal__date--disabled')
    } else {*/
      newDay.classList.add('cal__date--active')
      newDay.setAttribute('data-calendar-status', 'active')
    //}

    if (this.date.toString() === this.todaysDate.toString()) {
      newDay.classList.add('cal__date--today')
    }

    newDay.appendChild(dateEl)
    this.month.appendChild(newDay)
  },

  dateClicked: function () {
    var _this = this
    this.activeDates = document.querySelectorAll('[data-calendar-status="active"]')
    for (var i = 0; i < this.activeDates.length; i++) {
      this.activeDates[i].addEventListener('click', function (event) {
        var picked = document.querySelectorAll('[data-calendar-label="picked"]')[0]
        picked.innerHTML = this.dataset.calendarDate;
        var d = this.dataset.calendarDate;
        var g,m,a;

        g = d.slice(8,10);
        m = d.slice(4, 7);
        a = d.slice(11,15);
        picked.innerHTML =  ' ';

        switch (m) {
            case "Jan":
                m = "Gennaio";
                break;
            case "Feb":
                m = "Febbraio";
                break;
            case "Mar":
                m = "Marzo";
                break;
            case "Apr":
                m = "Aprile";
                break;
            case "May":
                m = "Maggio";
                break;
            case "Jun":
                m = "Giugno";
                break;
            case "Jul":
                m = "Luglio";
                break;
            case "Aug":
                m = "Agosto";
                break;
            case "Sep":
                m = "Settembre";
                break;
            case "Oct":
                m = "Ottobre";
                break;
            case "Nov":
                m = "Novembre";
                break;
            case "Dec":
                m = "Dicembre";
                break;
            default:
                m = "";
        }


        var v = g + '/' + m + '/' + a;
        //window.open('eventi.php?data=' + v,'_blank');
        $.ajax({
          url : "../assets/common/php/calendarEvent.php",
          method : "post",
          data : { date : v },
          success : function(data) {
            //scrivo data su un div di index.php
            //console.log(data);
            $(document).ready(function(){
              //prima lo svuoto
              $("#modalEvents").empty();
              $("#modalEvents").append(data);
              $(".modalCal").css('display','block');
            });


          }
        });
      });
    }
  },

  createMonth: function () {
    var currentMonth = this.date.getMonth()
    while (this.date.getMonth() === currentMonth) {
      this.createDay(this.date.getDate(), this.date.getDay(), this.date.getFullYear())
      this.date.setDate(this.date.getDate() + 1)
    }
    // while loop trips over and day is at 30/31, bring it back
    this.date.setDate(1)
    this.date.setMonth(this.date.getMonth() - 1)

    this.label.innerHTML = this.monthsAsString(this.date.getMonth()) + ' ' + this.date.getFullYear()
    this.dateClicked()
  },

  monthsAsString: function (monthIndex) {
    return [
      'Gennaio',
      'Febbaraio',
      'Marzo',
      'Aprile',
      'Maggio',
      'Giugno',
      'Luglio',
      'Agosto',
      'Settembre',
      'Ottobre',
      'Novembre',
      'Dicembre'
    ][monthIndex]
  },

  clearCalendar: function () {
    vanillacalendar.month.innerHTML = ''
  },

  removeActiveClass: function () {
    for (var i = 0; i < this.activeDates.length; i++) {
      this.activeDates[i].classList.remove('cal__date--selected')
    }
  }
}
