var app = angular.module('skuler', ["ngRoute", "angular-loading-bar"]);
app.config(function($routeProvider) {
    $routeProvider.when("/", {
        templateUrl: "/calander",
        // controller : "ctrlCalander"
    }).when("/message", {
        templateUrl: "/message",
        // controller: "appStoreCtrl"
    }).when("/manege", {
        templateUrl: "/manege",
        //controller: "ManageCtrl"
    }).when("/conversation", {
        templateUrl: "/conversation",
        // controller: "appStoreCtrl"
    }).when("/courses/:id", {
        templateUrl: function(params) {
            return "/courses/" + params.id;
        },
        controller: "ctrlCources"
    }).when("/profile", {
        templateUrl: "/profile",
        // controller: "profileCtrl"
    }).when("/notification", {
        templateUrl: "/notification",
        // controller: "profileCtrl"
    }).when("/grade report", {
        templateUrl: "/grade report",
        // controller: "profileCtrl"
    }).when("/questions/:id", {
        templateUrl: function(params) {
            return "/questions/" + params.id;
        },
        // controller: "profileCtrl"
    }).when("/request/:id", {
        templateUrl: function(params) {
            return "/request/" + params.id;
        },
        // controller: "profileCtrl"
    }).when('/test/:id', {
        templateUrl: function(params) {
            return params.id + '.html';
        }
    }).when('/manege/add/session', {
        templateUrl: "/manege/forms/session",
    }).when('/manege/add/group', {
        templateUrl: "/manege/forms/group",
    }).when('/manege/add/cource', {
        templateUrl: "/manege/forms/cource",
    });
});
app.controller('ctrlCources', function($scope, $http, $sce) {
    $http.get("/course/outline")
        .then(function(response) {
            $scope.view = response.data;
        });
    $scope.viewTab = function(tab) {
        var id = (tab == 'assignment' || tab == 'mark') ? '/' + window.location.href.split('/').pop() : '';
        $http.get("/course/" + tab + id)
            .then(function(response) {
                $scope.view = response.data;
            });
        $(document).ready(function() {
            $("#cource-nav>li").removeClass();
            $("#" + tab).addClass("active");
        });
    }
    $scope.viewHtml = function(html) {
        return $sce.trustAsHtml(html);
    }
});
// app.controller('ManageCtrl', function($scope, $http, $sce) {
//     $scope.tabs = {
//         session: true,
//         group: false,
//         course: false
//     }


//     $scope.manegeTab = function(tab) {
//         for (var t in $scope.tabs) {
//             $scope.tabs[t] = false;
//         }
//         $(".view>div").hide();
//         switch (tab) {
//             case "session":
//                 $scope.tabs.session = true;
//                 $(".view>#sessionView").show();
//                 break;
//             case "group":
//                 $scope.tabs.group = true;
//                 $(".view>#groupView").show();
//                 break;
//             case "course":
//                 $scope.tabs.course = true;
//                 $(".view>#courceView").show();
//                 break;
//         }
//         $("#manege .nav-tabs>li").removeClass();
//         $("#" + tab).addClass("active");
//         console.log($scope.tabs);
//     }

// })