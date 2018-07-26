// nav bar
var loc = window.location.hash.toString();
var filteredLoc = loc.split("?");
$(document).ready(function() {
    $(".nav").on('click', 'li', function() {
        $(this).addClass('active');
        $(this).siblings('li').removeClass('active');
    });
});
if (filteredLoc[0] == "#/message") {
    $("li#nav-message").addClass('active');
    $("li#nav-message").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/conversation") {
    $("li#nav-message").addClass('active');
    $("li#nav-message").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/notification") {
    $("li#nav-notification").addClass('active');
    $("li#nav-notification").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/") {
    $("li#nav-home").addClass('active');
    $("li#nav-home").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/cources") {
    $("li#nav-cource").addClass('active');
    $("li#nav-cource").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/profile") {
    $("li#nav-profile").addClass('active');
    $("li#nav-profile").siblings('li').removeClass('active');
} else if (filteredLoc[0] == "#/grade%20report") {
    $("li#nav-grade").addClass('active');
    $("li#nav-grade").siblings('li').removeClass('active');
} else {
    $(".nav li").removeClass('active');
}
//  calander
var eventTypes = ['Class', 'Test or Exam', 'Assigment Due', 'presentation'];
var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
var alert = $('#Edit .alert').hide();
var calander = $("#calander table").first();
calander = $('<tbody></tbody>').appendTo(calander);
var sideBar = $('#sideBarEvent');
sideBar = $('<tbody></tbody>').appendTo(sideBar);
var ev = [];

// navbar->noti
var icons = ['exam', 'class', 'result', 'assignment', 'cost', 'result'];
var notiContainer = $('#noti-dropdown>.container');
var notiTargets = ['class', 'department', 'college'];
var noitTypes = ['test', 'exam', 'class', 'assignment', 'cost'];

// VAIDATION