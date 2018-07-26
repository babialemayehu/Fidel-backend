        //  general
        function href(loc) {
            window.location = loc;
        }

        function formReset(form) {
            form.find('input').not('[type=submit]').not('[name=_token]').val('');
            form.find('select').val('');
            form.find('textarea').val('');
        }

        function createInput(amount, $for, container) {
            var continerObj = $(container);
            for (var i = 0; i < amount; i++)
                $("<input />", { type: 'text', class: 'form-control' }).appendTo(continerObj);
            var btn = $('<button></button>', { type: 'button', role: 'button', class: 'btn btn-default', text: 'Add more ' + $for }).appendTo(continerObj);
            $(document).on('click', container + '>.btn', function() {
                $("<input />", { type: 'text', class: 'form-control' }).insertBefore($(this));
            });
        }

        function successDialog(message) {
            return $.dialog({
                type: 'green',
                title: 'Success!',
                content: 'You have successfully ' + message,
                icon: 'fa fa-check',
                theme: 'material'
            });
        }

        function faildDialog(message) {
            return $.dialog({
                type: 'red',
                title: 'Falied!',
                content: 'Faild to ' + message,
                icon: 'fa fa-warning',
                theme: 'material'
            });
        }

        function dateString(date) {
            var dates = date.split('-');
            var d = new Date;
            return d.toDateString(dates[0], dates[1], dates[2]);
        }
        // calander
        function setMonth(m, y) {
            return $("#months p").text(months[m]).next('span').text(y);
        }

        function renderSelect() {
            var _select = $('select#event-type');
            eventTypes.forEach(function(eventType) {
                $('<option></option>', { value: eventType, text: eventType }).appendTo(_select);
            });
        }

        function newEvent(day) {
            $('#Edit .alert').hide();
            var form = $('#calander #Edit form');
            var m = month + 1;
            form.parents('#Event').find('.modal-header h4').text("Add new event");
            form.find('select,input,textarea').not('input[type=submit]').not("input[name=_token]").val("");
            form.find('[type="date"]').val(year + '-' + ((m < 10) ? '0' + m : m) + '-' + ((day < 10) ? '0' + day : day));
            form.find('#event_date').hide().siblings('label').hide();
        }

        function editEvent(e) {
            $('#Edit .alert').hide();
            var dateField = $('#calander #Edit form').find('input[type=date]').show().siblings('label').show();
            var index = $(e.currentTarget).parents('td').find('span').first().text();
            var i = $(e.currentTarget).children('i').text();
            var event = ev[index - 1][i];
            var modal = $('#calander').find('#Edit');

            document.getElementById("event-type").options.selectedIndex = eventTypes.indexOf(event.type);
            modal.find('#discription').val(event.discription);
            modal.find('#event_date').val(event.date);
            modal.find('#event_from').val(event.from);
            modal.find('#event_to').val(event.to);
            modal.find('#eventId').val(event.id);
        }

        function viewEvent(e) {
            var index = $(e.currentTarget).parents('td.a').find('span').first().text();
            var i = $(e.currentTarget).find('i').text();
            var event = ev[index - 1][i];
            var modal = $('#calander').find('#View');
            modal.find('p').first().children('span').text(event.host);
            modal.find('p').eq(1).children('span').text(event.from + "-" + event.to);
            modal.find('p').eq(2).children('span').text(event.discription);
        }

        function sendDeleteRequest() {
            var a = $('#confirm .alert').hide();
            var $id = $('#confirm #id').val();
            waitingAlert(a, 'Cancleing an event');
            $.post("/event/" + $id, { _method: 'DELETE', _token: $("#confirm input").not('#id').first().val() }, function(data) {}).done(function() {
                successAlert(a, 'You have successfully canceled the event');
                $('#confirm #deleteEvent').addClass('disabled');
                refresh();
            }).fail(function() {
                faildAlert(a, 'Faild to cancel the event');
            });
        }

        function deleteEvent(e) {
            var a = $('#confirm .alert').hide();
            $('#confirm #deleteEvent').removeClass('disabled').addClass('active');
            var $id = $(e.currentTarget).parent('a').parent('td').parent('tr').prev().children('td').eq(3).text();
            $('#confirm #id').val($id);
        }

        function hostEvent(_table, tr) {
            var _tr = $('<tr></tr>').appendTo(_table);
            var _td = $('<td></td>', { colspan: 3, class: "text-center" }).appendTo(_tr);
            var oprations = ['fa-edit', 'fa-trash'];
            var titles = ['Edit the event', 'Cancle the event'];
            oprations.forEach(function(opration, i) {
                var x = (i == 0) ? "Edit" : "confirm";
                var _a = $('<a data-toggle="modal" data-target=#' + x + '></a').appendTo(_td);
                var op = $('<i></i>', { class: 'fa ' + opration, title: titles[i] }).appendTo(_a);
                $('<i></i>', { text: i }).hide().appendTo(op);
            });
            tr.css('border-bottom', 'none');
            setTimeout(function() {
                tr.css('background-color', _tr.css('background-color'));
                _tr.css('background-color', tr.css('background-color'));
            }, 10);
            _tr.addClass('color');
            tr.addClass('color');
            $("#calander .col-md-8 table").on('click', 'i.fa-edit', function(e) {
                editEvent(e);
            });
        }

        function eventList(d, _table) {
            d.forEach(function(d, i) {

                var _tr = $('<tr data-toggle="modal" data-target="#View"></tr>').appendTo(_table);
                var _td1 = $('<td></td>', { text: d.abbr + " " }).appendTo(_tr);
                var _i = $('<i></i>', { text: i }).appendTo(_td1).hide();
                var _td2 = $('<td></td>', { class: 'small', text: d.type }).appendTo(_tr);
                var time = (d.to !== "") ? d.from + '-' + d.to : d.form;
                var _td3 = $('<td></td>', { class: 'pull-right', text: time }).appendTo(_tr);
                var _td4 = $('<td></td>', { text: d.id }).hide().appendTo(_tr);
                _tr.on('click', function(e) {
                    viewEvent(e);
                });
                if (d.user_id == userId) {
                    hostEvent(_table, _tr);
                }
            });
            if (d.length == 0) {
                var $td = $('<td></td>', { colspan: 3 }).appendTo(_table);
                $('<p></p>', { class: 'text-center text-danger', text: 'No events', style: 'font-weight:300;width: 100%' }).appendTo($td);
            }
        }

        function waitingAlert(obj, message) {
            obj.slideDown(500).addClass('alert-warning').removeClass('alert-success alert-danger');
            obj.children('i').eq(0).addClass('fa-refresh fa-spin').removeClass('fa-exclamation-triangle fa-check');
            obj.children('i').eq(1).html(' ' + message);
        }

        function successAlert(obj, message) {
            obj.removeClass('fa-exclamation-triangle');
            obj.slideDown(500).removeClass('alert-danger alert-warning fa-exclamation-triangle').addClass('alert-success');
            obj.children('i').eq(0).addClass('fa-check').removeClass('fa-refresh fa-spin');
            obj.children('i').eq(1).html(' ' + message);
        }

        function faildAlert(obj, message) {
            obj.slideDown(500).addClass('alert-danger').removeClass('alert-warning alert-success');
            obj.children('i').eq(0).addClass('fa-exclamation-triangle').removeClass('fa-check fa-refresh fa-spin');
            obj.children('i').eq(1).html(' ' + message);
        }

        function refresh() {
            loadCalenderWithEvent(month + 1, year);
        }

        function thisMonth() {
            loadCalenderWithEvent();
            setCarousle();
        }

        function _event(op) {
            var $request = {
                _token: $('#Edit form input[name=_token]').val(),
                type: $('#event-type').val(),
                discription: $('#discription').val(),
                date: $('#event_date').val(),
                from: $('#event_from').val(),
                to: $('#event_to').val(),
                session_id: $('[name=session_id').val()
            };
            var w = (op == 'edit') ? 'Updateing ' : 'Adding ';
            var s = (op == 'edit') ? 'updated ' : 'added new ';
            var f = (op == 'edit') ? 'update ' : 'add new ';
            var id = '';
            if (op == 'edit') {
                $request._method = 'PUT';
                id = "/" + $('#eventId').val();;
            }
            waitingAlert(alert, w + 'event...');
            $.post('/event' + id, $request, function(data, status) {

            }).done(function() {
                successAlert(alert, 'You have successfully ' + s + 'event.');
                newEvent(day);
                alert.show();
                if (op == 'edit') {
                    $('#event-type').val($request.type);
                    $('#discription').val($request.discription);
                    $('#event_date').val($request.date);
                    $('#event_from').val($request.from);
                    $('#event_to').val($request.to);
                }
                refresh();
            }).fail(function() {
                faildAlert(alert, 'Failed to ' + f + 'event.');
                alert.show();
            });
        }

        function renderAddEvent(obj, day) {
            var todayDate = new Date();
            var thisDate = new Date();
            todayDate.setFullYear(today.year, today.month, today.day);
            thisDate.setFullYear(year, month, day);
            if (todayDate <= thisDate && _role == '2') {
                var addEvent = $('<i></i>', {
                    class: "pull-right fa fa-calendar-plus-o color",
                    style: 'font-size:1.4em',
                    title: 'Add new event'
                }).appendTo(obj);
                addEvent.click(function(e) {
                    newEvent(day);
                });
            }
        }

        function calanderDropdown(d, i, day) {
            var _div = $('<div></div>', { class: 'dropdown-menu dropdown-content' }).css('display', 'block');
            if (i.col == 0)
                _div.addClass('cal-col-f');
            else if (i.col == 6)
                _div.addClass('cal-col-l');
            if (i.col > 3)
                _div.addClass('cal-col-lh');
            else if (i.col < 3)
                _div.addClass('cal-col-fh');
            var _p = $('<p></p>', { text: 'Events' }).appendTo(_div);
            var _a = $('<a data-toggle="modal" data-target="#Edit"></a').appendTo(_p);
            renderAddEvent(_a, day);
            var _table = $('<table></table>', { class: 'table table-hover', id: 'dropDown-list' }).appendTo(_div);
            eventList(d, _table);
            return _div;
        }

        function indexOfDate(arr, day) {
            var i = [];
            var c = 0;
            arr.forEach(function(a, row) {
                var index = a.indexOf(day);
                if (index != -1) {
                    i[c] = {
                        row: row,
                        col: index,
                        lIndex: row * 7 + index
                    };
                    c++;
                }
            });
            if (c > 1)
                return (day > 15) ? i[1] : i[0];
            else
                return (c == 1) ? i[0] : false;
        }

        function isActive(r, day) {
            return ((r == 0 && day > 7) || (r > 3 && day < 20)) ? false : true;
        }
        // Table disighn
        function renderHeader(calander) {
            var weeks = ['SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA'];
            var header = $('<tr></tr>', { class: 'calander-header' });
            weeks.forEach(function(week) {
                $('<th></th>', { text: week }).appendTo(header);
            });
            header.prependTo(calander);
            return header;
        }

        function renderCalander(calander, cal) {
            cal.forEach(function(row, i) {
                var $this = $('<tr></tr>').appendTo(calander);
                row.forEach(function(date) {
                    var dayEC = toEthiopian([year, month + 1, date])[2];
                    var $class = (isActive(i, date)) ? "a" : "inactive";
                    var $day = (date === today.day && year === today.year && month === today.month && isActive(i, date)) ? " day" : "";
                    var _td = $('<td></td>', { class: $class + $day }).appendTo($this);
                    var _div = $('<div></div>').appendTo(_td);
                    var day = $('<span></span>', { text: date }).appendTo(_div);
                    var ethDay = $('<span></span>', { text: dayEC, class: 'pull-right small' }).appendTo(_div);
                });
            });
        }

        function markDays(events) {
            $('#calander .a').each(function() {
                var td = $(this);
                var d = td.children('div').children('span').first().text();
                events[d - 1].forEach(function(data) {
                    if ((data.type == 'Test or Exam' || data.type == "test"))
                        td.css("border-bottom", "2px solid #BD1968");
                    else if ((data.type == 'class' || data.type == 'Class'))
                        td.find('span').eq(1).css('border-bottom-color', 'rgba(27,157,116,0.9)').css('color', 'rgba(255,255,255,0.8)');
                    if (data.user_id == userId)
                        td.find('span').eq(0).css('color', 'rgba(27,157,116,0.9)');
                });
            });
            // events
        }

        function renderSideBarEvent(sideBar, d, to) {
            ev[d - 1].forEach(function(data) {
                var list = $('<tr></tr>').insertAfter(to);
                $("<td></td>", { text: data.host }).appendTo(list);
                var td = $('<td></td>', { class: 'small' }).appendTo(list);
                $('<i></i>', { text: data.type }).appendTo(td);
                $('<td></td>', { text: data.from + "-" + data.to }).appendTo(list);
            });
            $('#sideBarEvent').find('i').parent('td').parent('tr.color').next().addClass('opration');
        }

        function dorpDownEvent(d) {
            calander.on('mouseenter click', 'td.a', function(e) {
                var day = parseInt($(e.currentTarget).find('span').first().text());
                var i = indexOfDate(d, day);
                var _div = calanderDropdown(ev[day - 1], i, day);
                $(this).siblings('td').find('.dropdown-menu').remove()
                $(this).parent('tr').siblings('tr').find('.dropdown-menu').remove();
                _div.appendTo(this);
            });
        }

        function loadCalender(e, month = "", year = "") {
            $qs = (month !== "") ? ((year !== "") ? month + "/" + year : month) : month;
            $.get('/api/calender/' + $qs, function(data, status) {
                calander.children('tr').not('tr.calander-header').remove();
                renderCalander(calander, data, day);
                if (month == '' && year == '')
                    dorpDownEvent(data);
            }).done(function() {
                $('#calander .col-md-8 center').hide();
                markDays(e);
            }).fail(function() {
                $('#calander .col-md-8 center').children('i').removeClass('fa-spinner fa-spin')
                    .addClass('text-danger').next().html('Error occured!<i style="font-size:0.7em"> we are working on it!!!</i>');
            });
        }

        function loadCalenderWithEvent(month = '', year = '') {
            $qs = (month !== "") ? ((year !== "") ? month + "/" + year : month) : month;
            calander.children('tr').not('tr.calander-header').remove();
            $('#calander .col-md-8 center').children('i')
                .removeClass('text-danger').next().html('Loading...');
            $('#calander .col-md-8 center').show();
            $.get('/events/' + $qs, function(data) {
                ev = data;
            }).done(function() {
                loadCalender(ev, month, year);
                var tomorrow = $("#sideBarEvent>tbody").eq(1).find('tr>th').first().text();
                if (month == '' && year == '' && tomorrow != 'Tomorrow') {
                    eventList(ev[day - 1], sideBar);
                    $('<th></th>', { colspan: 4, text: "Tomorrow" }).appendTo($('<tr></tr>').appendTo(sideBar));
                    eventList(ev[day], sideBar);
                }
            }).fail(function() {
                $('#calander .col-md-8 center').children('i').removeClass('fa-spinner fa-spin')
                    .addClass('text-danger').next().html('Error occured!<i style="font-size:0.7em"> we are working on it!!!</i>');
            });;
        }

        function bindEvents() {
            $('#calander #Edit #Event_form').on('submit', function() {
                if ($(this).find('input[type=date]').css('display') == 'none')
                    _event('create');
                else
                    _event('edit');

                return false;
            });
            $('#calander .col-md-8').on('click', '.fa-trash', function(e) {
                deleteEvent(e);
            });
            calander.on('mouseleave', 'td', function() {
                $(this).find('.dropdown-menu').remove();
            });
            $("#deleteEvent").on('click', function() {
                sendDeleteRequest();
            });
        }

        function renderCalenderCarousel() {
            $("#months>a").first().on('click', function() {
                month--;
                if (month < 0) {
                    month = 11;
                    year--;
                }
                $("#months p").text(months[month]).next('span').text(year);
                loadCalenderWithEvent(month + 1, year);
            });
            $('#months>a').eq(1).on('click', function() {
                month++
                if (month >= months.length) {
                    month = 0;
                    year++;
                }
                $("#months p").text(months[month]).next('span').text(year);
                loadCalenderWithEvent(month + 1, year);
            });
        }

        function setCarousle() {
            $('#months p').text(months[today.month]).next('span').text(today.year);
        }
        //  Notificaition
        function notiInit() {
            var modal = $('#notification #editNotiModal .modal-content .container ');
            $("#notification #noti-opration").clone().appendTo(modal).find('form').attr('id', 'editNoti');
        }

        function renderNotiRow(continer, noti) {
            var _li = $('<li></li>').appendTo(continer);
            var row = $('<div></div>', { class: 'row' }).appendTo(_li);

            var col1 = $('<div></div>', { class: 'col-sm-1' }).appendTo(row);
            $('<img/>', { src: 'img/icons/' + noti.type + '.png' }).appendTo(col1);
            var col2 = $('<div></div>', { class: 'col-sm-9' }).appendTo(row);
            var _dl = $('<dl></dl>').appendTo(col2);
            $('<dt></dt>').appendTo(_dl).text(noti.title);
            $('<dd></dd>', { class: "small text-muted" }).appendTo(_dl).text(noti.content);
            var col3 = $('<div></div>', { class: 'col-sm-2' }).appendTo(row);
            $('<span></span>', { class: "pull-right small" }).appendTo(col3).text(noti.created);
            //$('<li></li>',{class: 'divider'}).appendTo(continer);
        }

        function requestRenderRecentNoti(a) {
            var responces = [];
            notiContainer.children('li').remove();
            waitingAlert(a, 'Loding notificaions...');
            $.get('/recentNotification', function(data) {
                data.forEach(function(noti) {
                    renderNotiRow(notiContainer, noti);
                });
            }).done(function() {
                a.hide();
            }).fail(function() {
                faildAlert(a, 'Faild to view notifications ');
            });
        }

        function bindEventToform() {
            var alert = $('#notification .col-md-4 .alert').hide();
            formReset($('#notification form'));
            $('#addNoti').on('submit', function() {
                var newId;
                var form = $(this);
                var $request = {
                    _token: form.find('[name=_token]').val(),
                    type: form.find('#noti-type').val(),
                    title: form.find('#noti-title').val(),
                    content: form.find('#noti-body').val(),
                    target: form.find('#noti-target').val()
                };
                waitingAlert(alert, 'Making a new notification');
                $.post('/notification', $request, function(data) {
                    newId = data;
                }).done(function() {
                    successAlert(alert, 'You have successfully made a new notification');
                    addNewNotiToDom($request, newId);
                    formReset(form);
                }).fail(function() {
                    faildAlert(alert, 'Faild to make a new notification');
                });
                return false;
            });
        }

        function addNewNotiToDom(data, id) {
            data.user_id = userId;
            data.id = id;
            var row = $('#notification .col-md-8 .row').first();
            var firstGroup = row.children('p').first().text();
            if (firstGroup == 'Today') {
                containerGroup = row.children('.panel-group').first();
                notification(containerGroup, data, true);
            } else {
                var newGroup = notificationGroup(noti, 'Today', true);
                notification(newGroup, data);
            }
        }

        function editDom(data, id) {
            $('#notification .col-md-8 .panel').each(function() {
                var $id = parseInt($(this).children('i').first().text());
                id = parseInt(id);
                if ($id == id) {
                    var _this = $(this);
                    _this.find('.media-heading').text(data.title);
                    find('.media-body span').first().text(data.content);
                    _this.find('.media-left>img').attr('src', 'img/icons/' + data.type + '.png').attr('tag', data.type);
                }
            });
        }

        function bindEventToEditForm() {
            setTimeout(function() {
                var alert = $('#editNotiModal .alert').hide();
                $('#editNotiModal #editNoti').on('submit', function() {
                    var form = $(this);
                    var $request = {
                        _token: form.parents('.container').first().find('[name=_token]').first().val(),
                        _method: 'PUT',
                        type: form.find('#noti-type').val(),
                        title: form.find('#noti-title').val(),
                        content: form.find('#noti-body').val(),
                        target: form.find('#noti-target').val()
                    };
                    var id = form.find('#id').val();
                    waitingAlert(alert, 'Editing notification...');
                    $.post('/notification/' + id, $request, function(data) {}).done(function() {
                        successAlert(alert, 'You have successfully edited the notification');
                        editDom($request, id);
                    }).fail(function() {
                        faildAlert(alert, 'Faild to edit the notification');
                    });
                    return false;
                });
            }, 1000);
        }

        function notificationGroup(notiContainer, date, prepend = false) {
            var d = new Date;
            if (date != 'Yesterday' && date != 'Today') {
                d.setFullYear(date.slice(0, 4), parseInt(date.slice(5, 7)) - 1, date.slice(8, 10));
                d = d.toDateString();
            } else {
                d = date;
            }
            if (prepend) {
                var group = $('<div></div>', { class: 'panel-group' }).prependTo(notiContainer);
                $('<p></p>', { class: 'small', text: d }).prependTo(notiContainer);
                return group;
            } else {
                $('<p></p>', { class: 'small', text: d }).appendTo(notiContainer);
                return $('<div></div>', { class: 'panel-group' }).appendTo(notiContainer);
            }
        }

        function notification(notiGroup, noti, prepend = false) {
            var panel;
            if (prepend)
                panel = $('<div></div>', { class: 'panel panel-default' }).prependTo(notiGroup);
            else
                panel = $('<div></div>', { class: 'panel panel-default' }).appendTo(notiGroup);
            var media = $('<div></div>', { class: 'media' }).appendTo(panel);
            var mediaImg = $('<div></div>', { class: 'media-left media-middle' }).appendTo(media);
            $('<img>', { src: 'img/icons/' + noti.type + '.png', class: 'media-object', tag: noti.type }).appendTo(mediaImg);
            var mediaBody = $('<div></div>', { class: 'media-body' }).appendTo(media);
            $('<h4></h4>', { class: 'media-heading', text: noti.title }).appendTo(mediaBody);
            $('<span></span>', { text: noti.content }).appendTo(mediaBody);
            var _span = $('<span></span>', { text: noti.user_id }).appendTo(mediaBody);
            if (userId == noti.user_id) {
                $('<i class="fa fa-edit pull-right" data-toggle=modal data-target=#editNotiModal ></i>').appendTo(_span);
                $('<i class="fa fa-trash pull-right" data-toggle=modal data-target=#confirm></i>').appendTo(_span);
            }
            $('<i></i>', { text: noti.id }).appendTo(panel).hide();
            $('<i></i>', { text: noti.target }).appendTo(panel).hide();
        }

        function requestRenderNoti(noti, $new) {
            if ($new) {
                notiUrl = '/notificationJson';
                endedAt = 0;
            }
            var date;
            var notiDay;
            var alert = noti.next().children('.alert').hide();
            waitingAlert(alert, 'Loading...');
            $.get(notiUrl, function(data) {
                var d = data.data;
                notiUrl = data.next_page_url;
                if (data.current_page == data.last_page)
                    noti.next().children('button').removeClass('a').addClass('disabled');
                for (var i = 0; i < d.length; i++) {
                    var day = parseInt(today.day);
                    date = d[i].created_at;
                    notiDay = date.slice(8, 10);
                    var preNotiDay = (i == 0) ? 0 : d[i - 1].created_at.slice(8, 10);
                    date = (notiDay == today.day) ? 'Today' : (parseInt(notiDay) == today.day - 1) ? 'Yesterday' : date;
                    if (notiDay != preNotiDay && notiDay != endedAt)
                        container = notificationGroup(noti, date);
                    notification(container, d[i]);
                }
                endedAt = notiDay;
            }).done(function() {
                alert.hide();
            }).fail(function() {
                faildAlert(alert, 'Faild to view more notifications...');
            });
        }

        function viewMoreEvent(notiContainer) {
            $('#notification .col-md-8').on('click', '.a', function() {
                end = requestRenderNoti(notiContainer);
            });
        }

        function formToEditNoti(panel) {
            var title = panel.find('.media-heading').text();
            var body = panel.find('.media-body span').first().text();
            var type = panel.find('img').attr('tag');
            var id = panel.children('i').first().text();
            var target = panel.children('i').eq(1).text();
            var form = $('#editNotiModal #editNoti');
            form.find('select').first().val(type);
            form.find('select').eq(1).val(target);
            form.children('#id').first().val(id);
            form.find('textarea').val(body);
            form.find('#noti-title').val(title);
        }
        // function renderTargetSelect(select){
        //     notiTargets.forEach(function(notiTarget){
        //         $('<option></option>',{value: notiTarget,class: 'text-capitalize',text:notiTarget}).appendTo(select);
        //     });
        //     select.val('');
        // }
        function renderNotiTypeSelect(select) {
            noitTypes.forEach(function(notiType) {
                $('<option></option>', { value: notiType, class: 'text-capitalize', text: notiType }).appendTo(select);
            });
            select.val('');
        }

        function bindNotiEditEvent() {
            $('#notification .col-md-8 .container-fluid').on('click', '.fa-edit', function() {
                formToEditNoti($(this).parents('.panel').first());
            });
        }

        function bindNotiDeleteEvent() {
            var a = $('#confirm .alert').hide();
            var ev;
            $('#notification .col-md-8 .container-fluid').on('click', '.fa-trash', function(e) {
                a.hide();
                deleteNoti(e, a);
                ev = e;
            });
            $("#confirm").on('click', '.a', function() {
                sendNotiDeleteRequest(ev, a);
            });
        }

        function deleteNoti(e, a) {
            $('#confirm #deleteNoti').removeClass('disabled').addClass('a');
            var id = $(e.currentTarget).parents('.panel').children('i').first().text();
            $('#confirm #id').val(id);
        }

        function refreshNoti(noti) {
            $(document).ready(function() {
                var n = $('#notification .col-md-8>.jumbotron .container-fluid>.row').first();
                $('#notification .col-md-8 .row').first().children().remove();
                requestRenderNoti(n, true);
            });
        }

        function sendNotiDeleteRequest(e, a) {
            var id = $('#confirm #id').val();
            waitingAlert(a, 'Removeing notification...');
            $.post("/notification/" + id, { _method: 'DELETE', _token: $("#confirm input").not('#id').first().val() }, function(data) {}).done(function() {
                successAlert(a, 'You have successfully Removed the notificaition');
                $('#confirm #deleteNoti').addClass('disabled').removeClass('a');
                var group = $(e.currentTarget).parents('.panel-group');
                $(e.currentTarget).parents('.panel').remove();
                var panels = group.children('.panel');
                if (panels.length == 0)
                    group.prev().remove();
            }).fail(function() {
                faildAlert(a, 'Faild to remove the notification');
            });
        }
        //  MANEGE
        function manegeOprations(container, modal, plus = false) {
            $('<i class="fa fa-edit" data-toggle="modal" data-target="' + modal + '"></i>').appendTo(container);
            if (plus)
                $('<i class="fa fa-plus" data-toggle="modal" data-target="' + modal + '"></i>').appendTo(container);
            $('<i class="fa fa-trash"></i>').appendTo(container);
        }

        function manegeTab(tab) {
            $(".view>div").hide();
            switch (tab) {
                case "session":
                    $(".view>#sessionView").show();
                    break;
                case "group":
                    $(".view>#groupView").show();
                    break;
                case "course":
                    $(".view>#courceView").show();
                    break;
            }
            $("#manege .nav-tabs>li").removeClass();
            $("#" + tab).addClass("active");
        }

        //  MANEGE/COURSE
        function renderChapterInput(container, i, added = false) {
            if (added)
                var form_group = $('<div></div>', { class: 'form-group', id: 'ch' }).insertBefore(container.children('button'));
            else
                var form_group = $('<div></div>', { class: 'form-group', id: 'ch' }).appendTo(container);

            $('<label></label>', { for: 'ch' + i, text: "Chapter " + (i + 1) }).appendTo(form_group);
            $('<input />', { class: 'form-control', type: 'text', name: 'ch' }).appendTo(form_group);
            if (added)
                var sub_form_group = $('<div></div>', { class: 'form-group', id: "sub" }).insertBefore(container.children('button'));
            else
                var sub_form_group = $('<div></div>', { class: 'form-group', id: "sub" }).appendTo(container);

            $('<label></label>', { for: "sub" + i, text: 'Sub-chapter ' + (i + 1) }).appendTo(sub_form_group);
            for (var j = 0; j < 5; j++)
                $('<input />', { class: 'form-control', type: 'text', name: 'sub' }).appendTo(sub_form_group);
            $('<button></button>', { class: 'btn btn-default form-control', text: "Add sub-chapter", type: 'button' }).appendTo(sub_form_group);
        }

        function prepareCourseData() {
            var form = $('#courseForm');
            return {
                name: form.find('[name=name]').val(),
                code: form.find('[name=code]').val(),
                credit_hr: form.find('[name=cradit_hr]').val(),
                ECTS: form.find('[name=ECTS]').val(),
                weeks: form.find('[name=weeks]').val(),
                delivery: form.find('[name=delivery]').val(),
                objective: form.find('[name=objective]').val(),
                discription: form.find('[name=discription]').val()

            };
        }

        function prepareCourseOurlineData() {
            var form = $('#courseForm');
            var ch = [];
            var sub = [];
            var i = 0;
            form.find('[name=ch]').each(function() {
                ch[i] = $(this).val();
                var j = 0;
                var s = [];
                $(this).parent().next().children('[name=sub]').each(function() {
                    s[j++] = $(this).val();
                });
                sub[i++] = s;
            });
            return {
                chapter: JSON.stringify(ch),
                subChapter: JSON.stringify(sub)
            };
        }

        function courceRequest() {
            var form = $('#courseForm');
            var $request = {
                _token: form.find('[name=_token]').val(),
                course: JSON.stringify(prepareCourseData()),
                outline: JSON.stringify(prepareCourseOurlineData())
            }
            waitingAlert(courseAlert, 'Adding new course...');
            $.post('/manege/course', $request, function(data) {}).done(function() {
                successAlert(courseAlert, 'You have added new cource successfully');
                formReset(form);
            }).fail(function() {
                faildAlert(courseAlert, 'Faild to add new cource');
            });
        }

        function requestRenderCourse(container, a) {
            waitingAlert(a, 'Loding cources');
            $.get('/manege/course_index', function(data) {
                data.data.forEach(function(course) {
                    var row = $('<tr></tr>').appendTo(container);
                    $('<td></td>', { text: course.name }).appendTo(row);
                    $('<td></td>', { text: course.code }).appendTo(row);
                    $('<td></td>', { text: course.credit_hr }).appendTo(row);
                    $('<td></td>', { text: course.ECTS }).appendTo(row);
                    $('<td></td>', { text: course.delivery }).appendTo(row);
                    $('<td></td>', { text: course.weeks }).appendTo(row);
                    $('<span></span>', { text: course.id }).appendTo(row).hide();
                    manegeOprations($('<td></td').appendTo(row), '#editModal', true);
                });
            }).done(function() {
                a.slideUp();
            }).fail(function() {
                faildAlert(a, 'Faild to load courses');
            });
        }
        // MANEGE/GROUP
        function groupData() {
            var form = $('#createGroupForm');
            var m = [];
            var i = 0;
            form.find('#members').children('input').each(function() {
                if ($(this).val() != "")
                    m[i++] = $(this).val();
            });
            $data = {
                _token: form.children('[name=_token]').val(),
                name: form.find('[name=groupName]').val(),
                catagory: form.find('[name=catagory]').val(),
                members: JSON.stringify(m)
            }
            if ($data.catagory == 'class') {
                $data.adviser = form.find('[name=adviser]').val();
                $data.section = form.find('[name=section]').val();
            }
            return $data;
        }

        function groupDataForEdit() {
            var form = $('#editGroupForm');
            var $data = {
                _token: form.children('[name=_token]').val(),
                _method: "PUT",
                name: form.find('[name=groupName]').val(),
                catagory: form.find('[name=catagory]').val()
            }
            if ($data.catagory == 'class') {
                $data.adviser = form.find('[name=adviser]').val();
                $data.section = form.find('[name=section]').val();
            }
            return $data;
        }

        function createGroupRequest() {
            var gd = groupData();
            waitingAlert(groupAlert, 'Creating new Group...');
            $.post('/manege/group', gd, function(data) {
                gd.id = data;
                gd.numOfMembers = JSON.parse(gd.members).length;
            }).done(function() {
                successAlert(groupAlert, 'You have Created new Group succssfully');
                formReset($('#createGroupForm'));
                addNewGroupRecord(gd, $('#groupHeader'));
            }).fail(function() {
                faildAlert(groupAlert, 'Faild to create new group');
            });
        }

        function editGroupRequest(id) {
            $request = groupDataForEdit();
            $.post("/manege/group/" + id, $request, function(data) {}).done(function() {

            }).fail(function() {

            });
        }

        function addNewGroupRecord(data, after) {
            var row = $('<tr></tr>').insertAfter(after);
            $('<td></td>', { text: data.name }).appendTo(row);
            $('<td></td>', { text: data.catagory }).appendTo(row);
            $('<td></td>', { text: data.numOfMembers }).appendTo(row);
            var op = $('<td></td>').appendTo(row);
            manegeOprations(op, '#editModal', true);
            $('<span></span>', { text: data.id }).appendTo(row).hide();
        }

        function updateGroupRecord(id) {
            data = groupDataForEdit();
            $record = $('#groups tr').filter(function() {
                return ($(this).children('span').text() == id);
            });
            $record.children('td').first().text(data.name);
            $record.children('td').eq(1).text(data.catagory);
        }

        function getGroupData(container, alert) {
            waitingAlert(alert, 'Loding groups...');
            $.get('/manege/group_index', function(data) {
                data[0].data.forEach(function(group, i) {
                    var row = $('<tr></tr>').appendTo(container);
                    $('<td></td>', { text: group.name }).appendTo(row);
                    $('<td></td>', {
                        text: (data[2][i] != false) ? group.catagory + '(' + data[2][i] + ')' : group.catagory,
                        title: (data[3][i] != false) ? 'Teacher: ' + data[3][i][0] + ' (' + data[3][i][1] + ')' : ''
                    }).appendTo(row);
                    $('<td></td>', { text: data[1][i] }).appendTo(row);
                    var op = $('<td></td>').appendTo(row);
                    manegeOprations(op, '#editModal', true);
                    $('<span></span>', { text: group.id, style: 'color:red' }).appendTo(row).hide();
                });
            }).done(function() {
                alert.hide();
            }).fail(function() {
                faildAlert(alert, 'Faild to load groups');
            });
        }

        function groupEditForm(obj) {
            var tr2 = obj.children('td').eq(1);
            var cata = tr2.text().split('(');
            var form = $('#editGroupForm');
            form.find('[name=groupName]').val(obj.children('td').first().text());
            form.find('select').val(cata[0]);
            if (cata[0] == 'class') {
                form.css('height', '24em');
                form.find('[name=section]').val(cata[1].split(')')[0]);
                form.find('[name=adviser]').val(tr2.attr('title').split('(')[1].split(')')[0]);
            } else {
                form.css('height', '15em');
                form.find('[name=section]').val('');
                form.find('[name=adviser]').val('');
            }
        }

        function deleteGroup(id) {
            var $request = {
                _token: $('#confirm [name=_token]').val(),
                _method: 'DELETE'
            }
            $.post('/manege/group/' + id, $request, function(data) {}).done(function() {
                $('#groups table tr>span').filter(function() {
                    return $(this).text() == id;
                }).parent('tr').remove();
                $('#confirm #deleteGroup').addClass('disabled').removeClass('a');
            }).fail(function() {

            });
        }

        function renderMambersList(id, container) {
            var a = $('#editMamberForm h5').next('.alert').hide();
            waitingAlert(a, 'Loding members...');
            $.get('/manege/group/members_list/' + id, function(data) {
                data.forEach(function(regId, i) {
                    var li = $('<li></li>').appendTo(container);
                    var l = $('<label></label>').appendTo(li);
                    $('<input />', { type: 'checkbox', checked: 'checked' }).appendTo(l);
                    $('<span></span>', { text: regId }).appendTo(l);
                });
            }).done(function() {
                a.hide();
            }).fail(function() {
                faildAlert(a, 'Faild to load members');
            });
        }

        function getEditMembersData() {
            var form = $('#editMamberForm');
            var unchecked = [];
            var $new = [];
            var c = 0;
            var $c = 0;
            $('#editMamberForm').find('[type="checkbox"]').not(':checked').each(function() {
                unchecked[c++] = $(this).next('span').text();
            });
            $('#editMamberForm').find('#inputs').find('input').each(function() {
                if ($(this).val() != '')
                    $new[$c++] = $(this).val();
            })
            return {
                _token: $('#editMamberForm').find('[name="_token"]').val(),
                remove: unchecked,
                add: $new
            }
        }

        function editMembersRequest(data, id) {
            var waiting = $.dialog({
                title: 'Loding...',
                content: '<center><i class="fa fa-spinner fa-spin fa-2x"></i></center>',
                lazyOpen: true
            });
            waiting.open();
            data.remove = JSON.stringify(data.remove);
            data.add = JSON.stringify(data.add);
            $.post('/manege/members/' + id, data, function(data) {})
                .done(function(responces) {
                    waiting.close();
                    successDialog('updated members');
                }).fail(function(responces) {
                    waiting.close();
                    faildDialog('update members');
                });
        }

        function editMembers(id) {
            var $request = getEditMembersData();
            var confirmation = false;
            if ($request.remove.length != 0) {
                $.confirm({
                    title: 'Do you want to remove...',
                    content: function() {
                        var $text = '<ol style:"max-height:12em;overflow:auto">';
                        $request.remove.forEach(function(regId) {
                            $text += '<li>' + regId + '</li>';
                        })
                        $text += '</ol>';
                        return $text;
                    },
                    type: 'orange',
                    theme: 'material',
                    buttons: {
                        Yes: {
                            btnClass: 'btn btn-red',
                            action: function() { editMembersRequest($request, id); }
                        },
                        No: function() {}
                    }
                });
            } else
                editMembersRequest($request, id);
        }
        // MANEGE/SESSION
        function sessionData() {
            var form = $('#createSession').find('form');
            var inc = [];
            var exc = [];
            $('#inc').children('input').each(function(i) {
                var $thisVal = $(this).val();
                if ($thisVal != '')
                    inc[i] = $(this).val();
            });
            $('#exc').children('input').each(function(i) {
                var $thisVal = $(this).val();
                if ($thisVal != '')
                    exc[i] = $(this).val();
            });
            var dates = form.find("[name=range]").val().split(" to ");
            return {
                _token: form.find('[name=_token]').val(),
                cource_code: form.find('[name=cource]').val(),
                accadamic_year: form.find('[name=year]').val(),
                group: form.find('[name=group]').val(),
                teacher: form.find('[name=teacher]').val(),
                inc: JSON.stringify(inc),
                exc: JSON.stringify(exc),
                start: dates[0],
                end: dates[1]
            }
        }

        function createSession(form) {
            var $request = sessionData();
            waitingAlert(sessionAlert, 'Creating a new session');
            $.post('/manege/session', $request, function(data) {
                formReset(form);
            }).done(function() {
                successAlert(sessionAlert, 'You have successfully created a new session');
            }).fail(function() {
                faildAlert(sessionAlert, "Faild to add a new session");
            });
        }

        function renderSeesionTable(data, container) {

        }

        function getSessionData(name, container) {
            $.post('/manege/' + name + '_index', function(data) {
                data.forEach(function() {
                    var row = $('<tr></tr>').appendTo(container);

                });
            }).done(function() {

            }).fail(function() {

            });
        }

        function requestRenderSession(container, a) {
            waitingAlert(a, 'Loding sessions...');
            $.get('/manege/session_index', function(data) {
                data.forEach(function(session) {
                    var row = $('<tr></tr>').appendTo(container);
                    $('<td></td>', { text: session.groupName }).appendTo(row);
                    $('<td></td>', { text: session.courseName }).appendTo(row);
                    $('<td></td>', { text: session.instractor }).appendTo(row);
                    $('<td></td>', { text: session.acadamicYear + '(' + session.semister + ')' }).appendTo(row);
                    $('<span></span>', { text: session.id }).appendTo(row).hide();
                    manegeOprations($('<td></td').appendTo(row), '#createSession', true);
                });
            }).done(function() {
                a.slideUp();
            }).fail(function() {
                faildAlert(a, 'Faild to load');
            });
        }

        function _delete(table, obj) {
            var row = $(obj).parents('tr');
            var id = row.children('span').first().text();
            $.confirm({
                title: 'Do you want to delete ' + table + '?',
                content: '<i class="fa fa-warning " style="color:orange"></i> The ' + table + ' will be permanently deleted!',
                type: 'orange',
                buttons: {
                    Yes: {
                        btnClass: 'btn btn-red',
                        action: function() {
                            var waiting = $.dialog({
                                type: 'default',
                                title: 'loading',
                                icon: "fa fa-spinner fa-spin",
                                lazyOpen: true
                            });
                            waiting.open();
                            $.post('/manege/' + table + '/' + id, {
                                    _token: $('[name=_token]').first().val(),
                                    _method: 'DELETE'
                                }, function(data) {})
                                .done(function() {
                                    waiting.close();
                                    successDialog('cancled the ' + table + '.');
                                    row.remove();
                                }).fail(function() {
                                    waiting.close();
                                    faildDialog('cancle the ' + table + '!');
                                });
                        }
                    },
                    No: {

                    }
                }
            });
        }
        // course outline
        function renderChapters(datas, container) {
            datas[0].forEach(function(ch, i) {
                var main = $('<div></div>', { class: 'panel panel-default' }).appendTo(container);
                var heading = $('<div></div>', { class: 'panel-heading ph' }).appendTo(main);
                $('<h4></h4>', { class: 'panel-title', text: ch.name }).appendTo(heading);
                var body = $('<div></div>', { class: 'panel-body pb' }).appendTo(main);
                var _ul = $('<ul></ul>', { id: 'cource-nav' }).appendTo(body);
                datas[1][i].forEach(function(sub) {
                    $('<li></li>', { text: sub.name }).appendTo(_ul);
                });
            });
        }
        //course questions
        function askQuestionRequest(a) {
            var
                q = $('#question'),
                $request,
                loc = window.location.hash.split('/');
            $request = {
                question: q.find('textarea').val(),
                _token: q.find('[name=_token]').val(),
                session_id: loc[loc.length - 1]
            };
            waitingAlert(a, 'Sending your question...')
            $.post('/course/question', $request, function(data) {}).done(function(responce) {
                successAlert(a, 'You have successfully asked your question');
                formReset(q.find('form'));
                setTimeout(function() {
                    a.slideUp(1000);
                }, 5000);
            }).fail(function(responce) {
                faildAlert(a, 'Faild to send your questions!');
                setTimeout(function() {
                    a.slideUp(1000);
                }, 5000);
            });
        }
        //course Assignment
        function trigerSubmitForm(id, modalSelector) {
            var modal = $(modalSelector);
            var _id = $(id).children("span").text();
            modal.find("form").first().find("#id").text(_id);
            modal.modal();
            if (modalSelector == "#submited-assignments") {
                $('#submited-assignments tbody').load('/course/submitAssignment/' + _id, function() {
                    modal.find("table").first().find("tbody>tr").each(function() {
                        var markInputField = $("");
                        markInputField.css('width', "90px").css('padding', "0px");
                        $(this).append(markInputField);
                    });
                });
                // .done();
            }
        }

        function prepareAssignmentData() {
            var form = $('#assignmentModal').find('form').first();
            return {
                _token: form.find('[name=_token]').val(),
                value: form.find('#value').val(),
                due: form.find('#due').val() + ':00',
                evaluation: form.find('#evaluation').val(),
                instraction: form.find('#instraction').val(),
                session_id: window.location.href.split('/').pop(),
                attachment: form.find('[type=file]').val()
            }
        }

        function assignmentRequestEvent(a) {
            return $('#assignmentModal form #attachment').uploadFile({
                url: '/course/assignment',
                multiple: false,
                autoSubmit: false,
                maxFileCount: 1,
                onSubmit: function() {
                    waitingAlert(a, 'preparing assignment');
                },
                onSuccess: function(files, data, xhr, pd) {
                    successAlert(a, 'You have prepared a new assignment successfully');
                    formReset($('#assignmentModal form'));
                    $(".ajax-file-upload-container div").remove();
                },
                dynamicFormData: function() {
                    return prepareAssignmentData();
                },
                onError: function(data) {
                    faildAlert(a, 'Faild to prepare assignment!');
                }
            });
        }

        function prepareSubmitAssignmentData() {
            var form = $('#submit-assignment').find('form').first();
            return {
                _token: form.find('[name=_token]').val(),
                assignment: form.find('#id').first().text(),
                note: form.find('textarea').val(),
                session_id: window.location.href.split('/').pop()
            }
        }

        function submitAssignmentRequestEvent(a) {
            var formData = prepareSubmitAssignmentData();
            return $('#submit-assignment').find('form #upload').uploadFile({
                url: 'course/submitAssignment',
                autoSubmit: false,
                onSubmit: function() {
                    waitingAlert(a, 'Submiting assignment');
                },
                onSuccess: function(files, data, xhr, pd) {
                    successAlert(a, 'You have successfully submited assignment');
                },
                onError: function() {
                    faildAlert(a, 'Faild to submit assignmetn');
                },
                dynamicFormData: function() {
                    return prepareSubmitAssignmentData();
                },
            });
        }
        //  SHELF 
        function requestFileData() {
            var container = $(".ajax-upload-dragdrop");
            var loadBarContainer = $('<div></div>', { class: 'conainer text-center' }).appendTo(container);
            var loading = $('<div></div>', { class: 'loading' }).appendTo(loadBarContainer);

            $.get('course/shelf/' + session_id).
            done(function(responce) {
                loading.remove();
                rednderFiles(responce, container);
            }).fail(function(responce) {});
        }

        function rednderFiles($datas, container) {
            if (Array.isArray($datas) && $datas.length) {
                $datas.forEach(function($data) {
                    var file_name = $data.name;
                    if (file_name.length > 10) {
                        file_name = file_name.slice(0, 10) + "...";
                    }
                    var link = $("<a></a>", { href: $data.location }).appendTo(container);
                    var _li = $("<li></li>", { class: "text-center file" }).appendTo(link);
                    var file = $('<i></i>', { class: "fa fa-file-" + $data.catagory + "-o fa-4x" }).appendTo(_li);
                    var title = $("<span></span>", { text: file_name, class: "file_name" }).appendTo(_li);
                    var size = $("<span></span>", { text: $data.size, style: 'display: block' }).appendTo(_li);
                });

            } else {

                var box = container.find(".conainer.text-center");
                box.html("<h2>No Files</h2>");
                if (role == 2 || role == 23)
                    body.html("<h2>Drag & dri </h2>");
                box.css("border", "4px  dashed gray");
                box.css("opacity", "0.5");
                box.css("padding", "2em");
            }
        }

        function search(searchField) {
            $("#self-files .file").each(function() {
                if ($(this).find(".file_name").text().search($(searchField).val()) == -1)
                    $(this).parent('a').hide();
                else
                    $(this).parent('a').show();
            });
            if ($(searchField).val() == "") {
                $("#self-files .file").parent('a').show();
            }
        }
        // Mark List
        function table($colHeaders, $rowHaders) {
            return new Handsontable(document.getElementById('mark-list-table-container'), {
                startRows: $rowHaders.length,
                startCols: $colHeaders.length,
                autoColumnSize: true,
                rowHeaders: true,
                rowHeaderWidth: 120,
                colHeaders: true,
                colHeaders: $colHeaders,
                rowHeaders: $rowHaders,
                afterChange: function(change, source) {
                    if (source !== 'loadData') {
                        if (change[0][2] != change[0][3]) {
                            change[0][0] = $rowHaders[change[0][0]];
                            change[0][1] = $colHeaderIds[change[0][1]];
                            $.post('course/mark', {
                                    _token: $token,
                                    change: JSON.stringify(change[0]),
                                    value: change[0][3]
                                })
                                .done(function(responce) {}).fail(function(responce) {});
                        }
                    }
                },
                data: $values,
            });
        }

        function addCol(numCol, session, token) {
            var form = $("#add-col");
            form.find('i').removeClass('fa-plus').addClass('fa-spinner fa-spin');
            $.post('course/markStructure', { _token: token, col: numCol, session_id: session })
                .done(function(responce) {
                    formReset(form);
                    $('#mark-list-table-container').children().remove();
                    $colHeaders.push(numCol + "%");
                    $colHeaderIds.push(responce);
                    $values.forEach(function(value) {
                        value.push('');
                    });
                    table($colHeaders, $rowHaders);
                    form.find('i').removeClass('fa-spinner fa-spin').addClass('fa-plus');
                }).fail(function(responce) {});
        }
        // QUESTIONS ANSWER
        function questionAnswerRequest(form) {
            var $answer = $(form).find('textarea')[0].value;
            var $token = $(form).children('input').first().val();
            var $id = $(form).children('#qustion_id').val();
            var alert = $(form).children('.alert');

            waitingAlert(alert, "Sending your answer");
            $.post('/questions/answer', { _token: $token, answer: $answer, id: $id })
                .done(function(responce) {
                    successAlert(alert, "You have successfully andswered your question");
                }).fail(function(responce) {
                    faildAlert(alert, "Some error occured");
                });
            return false;
        }
        // REQUEST
        function newRequest(form) {
            var $request = $(form).find('textarea')[0].value;
            var $token = $(form).children('input').first().val();
            var $minVote = $(form).find('select').val();
            var $id = window.location.hash.split('/').pop();
            var alert = $(form).find('.alert');

            waitingAlert(alert, "making");
            $.post('/course/request', { _token: $token, request: $request, id: $id, minVote: $minVote })
                .done(function(responce) {
                    successAlert(alert, "You have successfully made your request");
                }).fail(function(responce) {
                    faildAlert(alert, "Some error occured");
                });
            return false;
        }

        function vote() {
            $(".vote").not('.disabled').on('click', function() {
                var btn = $(this);
                var votes = btn.siblings('i').first().children('span');
                var id = btn.children('#request_id').val();
                var $numberOfStudents = parseInt(btn.siblings('span').first().text());
                var $numberOfVots = parseInt(votes.text()) + 1;
                var $numberOfVotsInPercent = ($numberOfVots / $numberOfStudents) * 100;

                btn.children('i').addClass('fa-spinner fa-spin').removeClass('fa-thumbs-up');
                $.post('/vote/' + id, { _token: btn.children('input').val() })
                    .done(function(responce) {
                        btn.siblings('h2').text(($numberOfVotsInPercent) + '%');
                        votes.text($numberOfVots);
                        btn.addClass('disabled btn-default').removeClass('vote btn-success')
                            .children('i').removeClass('fa-spinner fa-spin')
                            .addClass('fa-thumbs-up').siblings('b').text('Voted');

                        btn.off('click');
                    })
                    .fail(function(responce) {});
            })
        }

        function loadLists(url, btn = null) {
            $.get(url)
                .done(function(responce) {
                    $('#list').append(responce);
                    if (btn)
                        btn.remove();
                });
        }

        function viewMoreList(btn) {
            var url = $(btn).children('span').text();
            if (url)
                loadLists(url, btn);
            else
                btn.remove();
        }
        // WEEKLY SCHEDULE
        function submitWeaklySchedule(form) {
            $data = {
                _token: $(form).children('input').first().val(),
                week: $(form).children('select').val(),
                from: $(form).find('[name="from"]').val(),
                to: $(form).find('[name="to"]').val(),
                session_id: window.location.hash.split('/').pop()
            }
            $.post("/event/weakly_schedule", $data)
                .done(function(responce) {})
                .fail(function() {});
            return false;
        }
        // VALIDATION
        function onfocusOutValidation() {
            $("[ng-required='true']").off();
            $("[ng-required='true']").on("focusout change ", function() {
                if (($(this).val() == null || $(this).val() == "? undefined:undefined ?" || $(this).val() == "") &&
                    !$(this).next().hasClass("error")) {
                    $(this).addClass("invalid");
                    $("<small class='small error'>This field is required</small>").insertAfter(this);
                } else {
                    $(this).removeClass("invalid");
                    $(this).next().remove();
                }

            });
        }