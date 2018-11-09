(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./src/$$_lazy_route_resource lazy recursive":
/*!**********************************************************!*\
  !*** ./src/$$_lazy_route_resource lazy namespace object ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./src/$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./src/app/app.component.html":
/*!************************************!*\
  !*** ./src/app/app.component.html ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-navigation></app-navigation>"

/***/ }),

/***/ "./src/app/app.component.scss":
/*!************************************!*\
  !*** ./src/app/app.component.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};

var AppComponent = /** @class */ (function () {
    function AppComponent() {
        this.title = 'Manage-scss';
    }
    AppComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-root',
            template: __webpack_require__(/*! ./app.component.html */ "./src/app/app.component.html"),
            styles: [__webpack_require__(/*! ./app.component.scss */ "./src/app/app.component.scss")]
        })
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/platform-browser/animations */ "./node_modules/@angular/platform-browser/fesm5/animations.js");
/* harmony import */ var _navigation_navigation_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./navigation/navigation.component */ "./src/app/navigation/navigation.component.ts");
/* harmony import */ var _angular_cdk_layout__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/cdk/layout */ "./node_modules/@angular/cdk/esm5/layout.es5.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _lib_context_menu_module__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../lib/context-menu.module */ "./src/lib/context-menu.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm5/http.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _routes__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./routes */ "./src/app/routes.ts");
/* harmony import */ var _floating_action_btn_floating_action_btn_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./floating-action-btn/floating-action-btn.component */ "./src/app/floating-action-btn/floating-action-btn.component.ts");
/* harmony import */ var _user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./user-reg/user-reg.component */ "./src/app/user-reg/user-reg.component.ts");
/* harmony import */ var _loading_loading_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./loading/loading.component */ "./src/app/loading/loading.component.ts");
/* harmony import */ var _users_users_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./users/users.component */ "./src/app/users/users.component.ts");
/* harmony import */ var _users_users_table_users_table_component__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./users/users-table/users-table.component */ "./src/app/users/users-table/users-table.component.ts");
/* harmony import */ var _users_students_students_component__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./users/students/students.component */ "./src/app/users/students/students.component.ts");
/* harmony import */ var _users_teachers_teachers_component__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./users/teachers/teachers.component */ "./src/app/users/teachers/teachers.component.ts");
/* harmony import */ var _context_menu_context_menu_component__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./context-menu/context-menu.component */ "./src/app/context-menu/context-menu.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};




















var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _app_component__WEBPACK_IMPORTED_MODULE_2__["AppComponent"],
                _navigation_navigation_component__WEBPACK_IMPORTED_MODULE_4__["NavigationComponent"],
                _floating_action_btn_floating_action_btn_component__WEBPACK_IMPORTED_MODULE_12__["FloatingActionBtnComponent"],
                _user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_13__["UserRegComponent"],
                _loading_loading_component__WEBPACK_IMPORTED_MODULE_14__["LoadingComponent"],
                _users_users_component__WEBPACK_IMPORTED_MODULE_15__["UsersComponent"],
                _users_users_table_users_table_component__WEBPACK_IMPORTED_MODULE_16__["UsersTableComponent"],
                _users_students_students_component__WEBPACK_IMPORTED_MODULE_17__["StudentsComponent"],
                _users_teachers_teachers_component__WEBPACK_IMPORTED_MODULE_18__["TeachersComponent"],
                _context_menu_context_menu_component__WEBPACK_IMPORTED_MODULE_19__["ContextMenuComponent"]
            ],
            imports: [
                _angular_common_http__WEBPACK_IMPORTED_MODULE_9__["HttpClientModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_8__["FormsModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_8__["ReactiveFormsModule"],
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"],
                _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_3__["BrowserAnimationsModule"],
                _angular_cdk_layout__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatToolbarModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatButtonModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatSidenavModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatIconModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatListModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatCheckboxModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatGridListModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatCardModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatMenuModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatTableModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatPaginatorModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatSortModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatDialogModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatSelectModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatAutocompleteModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatDatepickerModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatNativeDateModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatInputModule"],
                _angular_material__WEBPACK_IMPORTED_MODULE_6__["MatTabsModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_10__["RouterModule"].forRoot(_routes__WEBPACK_IMPORTED_MODULE_11__["routes"]),
                _lib_context_menu_module__WEBPACK_IMPORTED_MODULE_7__["ContextMenuModule"]
            ],
            entryComponents: [
                _user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_13__["UserRegComponent"],
                _context_menu_context_menu_component__WEBPACK_IMPORTED_MODULE_19__["ContextMenuComponent"]
            ],
            providers: [],
            bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_2__["AppComponent"]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./src/app/context-menu/context-menu.component.html":
/*!**********************************************************!*\
  !*** ./src/app/context-menu/context-menu.component.html ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-card [@menu]=\"_state\" (@menu.done)=\"_onAnimationDone($event)\" style=\"cursor: pointer;\">\n    <mat-list>\n        <mat-list-item *ngFor=\"let item of items.items;let i=index\" \n        (click)=\"onClick({index:i,data:items.data})\">\n            <i class=\"icon small material-icons\" [class.danger-text]='item.icon == \"delete\"'>{{item.icon}}</i>\n            <span class=\"text\">{{item.text}}</span>\n        </mat-list-item>\n    </mat-list>\n</mat-card>"

/***/ }),

/***/ "./src/app/context-menu/context-menu.component.scss":
/*!**********************************************************!*\
  !*** ./src/app/context-menu/context-menu.component.scss ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".mat-card {\n  padding: 0px;\n  padding-bottom: 1em;\n  padding-top: 1em;\n  width: 180px; }\n  .mat-card .mat-list-item-content {\n    height: 30px;\n    padding-top: 4px;\n    padding-bottom: 4px; }\n  .mat-card .mat-list-item:hover {\n    background: #eeeeee; }\n  .mat-card .icon {\n    padding: 5px;\n    font-size: 1.5rem;\n    opacity: .8; }\n  .mat-card .text {\n    margin-left: 1.2em;\n    font-size: 1em; }\n  .mat-card .mat-list {\n    padding-top: 0px; }\n"

/***/ }),

/***/ "./src/app/context-menu/context-menu.component.ts":
/*!********************************************************!*\
  !*** ./src/app/context-menu/context-menu.component.ts ***!
  \********************************************************/
/*! exports provided: ContextMenuComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextMenuComponent", function() { return ContextMenuComponent; });
/* harmony import */ var _angular_animations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/animations */ "./node_modules/@angular/animations/fesm5/animations.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _lib_context_menu_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../lib/context-menu.service */ "./src/lib/context-menu.service.ts");
/* harmony import */ var _lib_context_menu_injector__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../lib/context-menu-injector */ "./src/lib/context-menu-injector.ts");
/* harmony import */ var _lib_menu_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../lib/menu.component */ "./src/lib/menu.component.ts");
var __extends = (undefined && undefined.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};





var ContextMenuComponent = /** @class */ (function (_super) {
    __extends(ContextMenuComponent, _super);
    function ContextMenuComponent(menuPackage, contextMenuService) {
        var _this = _super.call(this, menuPackage, contextMenuService) || this;
        _this.menuPackage = menuPackage;
        _this.contextMenuService = contextMenuService;
        _this.items = menuPackage.context;
        return _this;
    }
    ContextMenuComponent.prototype.onClick = function (e) {
        // console.log(e); 
        this.contextMenuService.closeAll(e);
    };
    ContextMenuComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-context-menu',
            template: __webpack_require__(/*! ./context-menu.component.html */ "./src/app/context-menu/context-menu.component.html"),
            styles: [__webpack_require__(/*! ./context-menu.component.scss */ "./src/app/context-menu/context-menu.component.scss")],
            animations: [
                Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["trigger"])('menu', [
                    Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["state"])('enter', Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["style"])({ opacity: 1, marginTop: '0px', visibility: 'visible' })),
                    Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["state"])('exit, void', Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["style"])({ opacity: 0, marginTop: '-15px' })),
                    Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["transition"])('* => *', Object(_angular_animations__WEBPACK_IMPORTED_MODULE_0__["animate"])('120ms ease-in')),
                ]),
            ],
            host: {
                '[@menu]': '_state',
                '(@menu.done)': '_onAnimationDone($event)',
            }
        }),
        __metadata("design:paramtypes", [_lib_context_menu_injector__WEBPACK_IMPORTED_MODULE_3__["MenuPackage"],
            _lib_context_menu_service__WEBPACK_IMPORTED_MODULE_2__["ContextMenuService"]])
    ], ContextMenuComponent);
    return ContextMenuComponent;
}(_lib_menu_component__WEBPACK_IMPORTED_MODULE_4__["MenuComponent"]));



/***/ }),

/***/ "./src/app/emums/user-role.enum.ts":
/*!*****************************************!*\
  !*** ./src/app/emums/user-role.enum.ts ***!
  \*****************************************/
/*! exports provided: UserRole */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserRole", function() { return UserRole; });
var UserRole;
(function (UserRole) {
    UserRole[UserRole["STUDENT"] = 1] = "STUDENT";
    UserRole[UserRole["TEACHER"] = 2] = "TEACHER";
    UserRole[UserRole["DEPARTMENT_HEAD"] = 3] = "DEPARTMENT_HEAD";
})(UserRole || (UserRole = {}));


/***/ }),

/***/ "./src/app/floating-action-btn/floating-action-btn.component.html":
/*!************************************************************************!*\
  !*** ./src/app/floating-action-btn/floating-action-btn.component.html ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div id=\"FAB\" (click)=\"open()\" (mouseenter)=\"open()\" (mouseleave)=\"close()\">\n  <ul id=\"options\" class=\"options\">\n    <li (click)=\"action.emit(4)\">\n      <button mat-mini-fab class=\"red\">\n        <img src=\"assets/speaker.svg\" style=\"width: 1.4rem;\"/>\n      </button>\n    </li>\n\n    <!-- <li (click)=\"action.emit(3)\">\n      <button mat-mini-fab class=\"yellow\">\n        <img src=\"assets/drug.svg\" style=\"width: 1.4rem;\"/>\n      </button>\n    </li>\n\n    <li (click)=\"action.emit(2)\">\n      <button mat-mini-fab class=\"green\">\n        <img src=\"assets/flask-full.svg\" style=\"width: 1.4rem;\"/>\n      </button>\n    </li> -->\n\n    <li (click)=\"action.emit(1)\">\n      <button mat-mini-fab class=\"blue white-text\">\n        <mat-icon>person_add</mat-icon>\n      </button>\n    </li>\n  </ul>\n  <button mat-fab color=\"accent\" class=\"white-text\">\n    <mat-icon>add</mat-icon>\n  </button>\n</div>"

/***/ }),

/***/ "./src/app/floating-action-btn/floating-action-btn.component.scss":
/*!************************************************************************!*\
  !*** ./src/app/floating-action-btn/floating-action-btn.component.scss ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "@-webkit-keyframes options {\n  from {\n    margin-bottom: -22px;\n    opacity: 0; }\n  to {\n    margin-top: 12px;\n    opacity: 1; } }\n\n@keyframes options {\n  from {\n    margin-bottom: -22px;\n    opacity: 0; }\n  to {\n    margin-top: 12px;\n    opacity: 1; } }\n\n@-webkit-keyframes optionsRev {\n  from {\n    margin-top: 12px;\n    opacity: 1; }\n  to {\n    margin-bottom: -22px;\n    opacity: 0; } }\n\n@keyframes optionsRev {\n  from {\n    margin-top: 12px;\n    opacity: 1; }\n  to {\n    margin-bottom: -22px;\n    opacity: 0; } }\n\n#FAB {\n  position: fixed;\n  right: 26px;\n  bottom: 52px;\n  padding: auto; }\n\n#FAB .options {\n    list-style: none;\n    padding: 0px 8px; }\n\n#FAB .options li {\n      text-align: center;\n      margin-bottom: 12px;\n      opacity: 0; }\n\n#FAB .open li {\n    opacity: 1;\n    -webkit-animation-name: options;\n            animation-name: options;\n    -webkit-animation-delay: 0s;\n            animation-delay: 0s;\n    -webkit-animation-duration: 0.5s;\n            animation-duration: 0.5s;\n    -webkit-animation-timing-function: linear;\n            animation-timing-function: linear; }\n\n#FAB .close li {\n    -webkit-animation-name: optionsRev;\n            animation-name: optionsRev;\n    -webkit-animation-delay: 0s;\n            animation-delay: 0s;\n    -webkit-animation-duration: 0.5s;\n            animation-duration: 0.5s;\n    -webkit-animation-timing-function: linear;\n            animation-timing-function: linear; }\n"

/***/ }),

/***/ "./src/app/floating-action-btn/floating-action-btn.component.ts":
/*!**********************************************************************!*\
  !*** ./src/app/floating-action-btn/floating-action-btn.component.ts ***!
  \**********************************************************************/
/*! exports provided: FloatingActionBtnComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FloatingActionBtnComponent", function() { return FloatingActionBtnComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FloatingActionBtnComponent = /** @class */ (function () {
    function FloatingActionBtnComponent() {
        this.action = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
    }
    FloatingActionBtnComponent.prototype.ngOnInit = function () {
    };
    FloatingActionBtnComponent.prototype.open = function () {
        var options = document.getElementById('options');
        options.classList.remove('close');
        options.classList.add('open');
    };
    FloatingActionBtnComponent.prototype.close = function () {
        setTimeout(function () {
            var options = document.getElementById('options');
            options.classList.remove('open');
            options.classList.add('close');
        }, 500);
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], FloatingActionBtnComponent.prototype, "action", void 0);
    FloatingActionBtnComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-floating-action-btn',
            template: __webpack_require__(/*! ./floating-action-btn.component.html */ "./src/app/floating-action-btn/floating-action-btn.component.html"),
            styles: [__webpack_require__(/*! ./floating-action-btn.component.scss */ "./src/app/floating-action-btn/floating-action-btn.component.scss")],
        }),
        __metadata("design:paramtypes", [])
    ], FloatingActionBtnComponent);
    return FloatingActionBtnComponent;
}());



/***/ }),

/***/ "./src/app/loading/loading.component.html":
/*!************************************************!*\
  !*** ./src/app/loading/loading.component.html ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"progress\">\n  <div class=\"indeterminate\"></div>\n</div>"

/***/ }),

/***/ "./src/app/loading/loading.component.sass":
/*!************************************************!*\
  !*** ./src/app/loading/loading.component.sass ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/loading/loading.component.ts":
/*!**********************************************!*\
  !*** ./src/app/loading/loading.component.ts ***!
  \**********************************************/
/*! exports provided: LoadingComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LoadingComponent", function() { return LoadingComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var LoadingComponent = /** @class */ (function () {
    function LoadingComponent() {
    }
    LoadingComponent.prototype.ngOnInit = function () {
    };
    LoadingComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-loading',
            template: __webpack_require__(/*! ./loading.component.html */ "./src/app/loading/loading.component.html"),
            styles: [__webpack_require__(/*! ./loading.component.sass */ "./src/app/loading/loading.component.sass")]
        }),
        __metadata("design:paramtypes", [])
    ], LoadingComponent);
    return LoadingComponent;
}());



/***/ }),

/***/ "./src/app/navigation/navigation.component.html":
/*!******************************************************!*\
  !*** ./src/app/navigation/navigation.component.html ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-sidenav-container class=\"sidenav-container\">\n  <mat-sidenav #drawer class=\"sidenav\" fixedInViewport=\"true\"\n      [attr.role]=\"dialog\"    \n      [mode]=\"over\"\n      [opened]=\"(isHandset$ | async)\">\n    <mat-toolbar>Menu</mat-toolbar>\n    <mat-nav-list>\n      <a mat-list-item href=\"#\">Link 1</a>\n      <a mat-list-item href=\"#\">Link 2</a>\n      <a mat-list-item href=\"#\">Link 3</a>\n    </mat-nav-list>\n  </mat-sidenav>\n  <mat-sidenav-content>\n    <mat-toolbar color=\"primary\">\n      <button\n        type=\"button\"\n        aria-label=\"Toggle sidenav\"\n        mat-icon-button\n        (click)=\"drawer.toggle()\"\n        *ngIf=\"!(isHandset$ | async)\">\n        <mat-icon aria-label=\"Side nav toggle icon\">menu</mat-icon>\n      </button>\n      <span routerLink=\"/\">Manage</span>\n      <ul class=\"right\" style=\"color: white;position: absolute; right: 25px; top: 0px; margin:12px; font-size: 14px; font-weight: 300\">\n        <li style=\"display: inline\"><a routerLink='/users' style=\"color:white\">User</a></li>\n      </ul>\n    </mat-toolbar>  \n      \n    <router-outlet></router-outlet>\n    <app-floating-action-btn (action)=\"OnAction($event)\"></app-floating-action-btn>\n  </mat-sidenav-content>\n</mat-sidenav-container>\n<!-- \"(isHandset$ | async) ? 'dialog' : 'navigation'\" -->\n<!-- \"(isHandset$ | async) ? 'over' : 'side'\" -->"

/***/ }),

/***/ "./src/app/navigation/navigation.component.scss":
/*!******************************************************!*\
  !*** ./src/app/navigation/navigation.component.scss ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".sidenav-container {\n  height: 100%; }\n\n.sidenav {\n  width: 200px; }\n\n.sidenav .mat-toolbar {\n  background: inherit; }\n\n.mat-toolbar.mat-primary {\n  position: -webkit-sticky;\n  position: sticky;\n  top: 0;\n  z-index: 1;\n  height: 55px; }\n"

/***/ }),

/***/ "./src/app/navigation/navigation.component.ts":
/*!****************************************************!*\
  !*** ./src/app/navigation/navigation.component.ts ***!
  \****************************************************/
/*! exports provided: NavigationComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NavigationComponent", function() { return NavigationComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_cdk_layout__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/cdk/layout */ "./node_modules/@angular/cdk/esm5/layout.es5.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../user-reg/user-reg.component */ "./src/app/user-reg/user-reg.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var NavigationComponent = /** @class */ (function () {
    function NavigationComponent(breakpointObserver, _modal) {
        this.breakpointObserver = breakpointObserver;
        this._modal = _modal;
        // isHandset$: Observable<boolean> = this.breakpointObserver.observe(Breakpoints.Handset)
        //   .pipe(
        //     map(result => result.matches)
        //   );
        this.isHeadset$ = false;
    }
    NavigationComponent.prototype.OnAction = function ($action) {
        switch ($action) {
            case 1:
                this.openUserReg();
                break;
        }
    };
    NavigationComponent.prototype.openUserReg = function () {
        this._modal.open(_user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_3__["UserRegComponent"], {
            width: '600px',
            disableClose: true,
            data: {}
        });
    };
    NavigationComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-navigation',
            template: __webpack_require__(/*! ./navigation.component.html */ "./src/app/navigation/navigation.component.html"),
            styles: [__webpack_require__(/*! ./navigation.component.scss */ "./src/app/navigation/navigation.component.scss")],
        }),
        __metadata("design:paramtypes", [_angular_cdk_layout__WEBPACK_IMPORTED_MODULE_1__["BreakpointObserver"],
            _angular_material__WEBPACK_IMPORTED_MODULE_2__["MatDialog"]])
    ], NavigationComponent);
    return NavigationComponent;
}());



/***/ }),

/***/ "./src/app/routes.ts":
/*!***************************!*\
  !*** ./src/app/routes.ts ***!
  \***************************/
/*! exports provided: routes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "routes", function() { return routes; });
/* harmony import */ var _users_users_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./users/users.component */ "./src/app/users/users.component.ts");

var routes = [
    { path: "users", component: _users_users_component__WEBPACK_IMPORTED_MODULE_0__["UsersComponent"] }
];


/***/ }),

/***/ "./src/app/service/user.service.ts":
/*!*****************************************!*\
  !*** ./src/app/service/user.service.ts ***!
  \*****************************************/
/*! exports provided: UserService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserService", function() { return UserService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm5/http.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var UserService = /** @class */ (function () {
    function UserService(_http) {
        this._http = _http;
        this.root = "/api/json/";
    }
    UserService.prototype.register = function (user) {
        var URL = this.root + "post/user/register";
        return this._http.post(URL, user);
    };
    UserService.prototype.getByRole = function ($role) {
        var URL = this.root + "get/user/by role/" + $role;
        return this._http.get(URL);
    };
    UserService.prototype.update = function (id, user) {
        var URL = this.root + 'update/user/' + id;
        return this._http.put(URL, user);
    };
    UserService.prototype.delete = function (id) {
        var URL = this.root + 'delte/user/' + id;
        return this._http.delete(URL);
    };
    UserService.prototype.reset = function (id) {
        var URL = this.root + 'update/user/password/reset/' + id;
        return this._http.put(URL, {});
    };
    UserService.prototype.idExist = function (regId) {
        var URL = this.root + 'get/user/validate/regId exist/' + regId;
        return this._http.get(URL);
    };
    UserService.prototype.phoneExist = function (phone) {
        var URL = this.root + 'get/user/validate/phone exist/' + phone;
        return this._http.get(URL);
    };
    UserService.prototype.emailExist = function (email) {
        var URL = this.root + 'get/user/validate/email exist/' + email;
        return this._http.get(URL);
    };
    UserService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __metadata("design:paramtypes", [_angular_common_http__WEBPACK_IMPORTED_MODULE_1__["HttpClient"]])
    ], UserService);
    return UserService;
}());



/***/ }),

/***/ "./src/app/user-reg/user-reg.component.html":
/*!**************************************************!*\
  !*** ./src/app/user-reg/user-reg.component.html ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-loading [class.hide]=\"!loading\"></app-loading>\n<section style=\"padding: 0px 36px\" [class.form-loading]=\"loading\">\n  <div class=\"row\">\n    <mat-icon style=\"cursor: pointer\" id=\"close\" class=\"right\" (click)=\"_dialog.close()\">close</mat-icon>\n    <h5>User registration</h5>\n  </div>\n  \n  <div class=\"row\">\n    \n    <form (ngSubmit)=\"submit()\" [formGroup]='form' > \n        <div class=\"col m12\">\n          <mat-form-field>\n            <input matInput formControlName=\"regId\" placeholder=\"Registral ID\" class=\"uppercase\"/>\n            <mat-error *ngIf=\"(regId.errors)?.invalid && regId.touched\">\n              This field is required\n            </mat-error>\n            <mat-error *ngIf=\"(regId.errors)?.exist && regId.touched\">\n              This registral id already exist\n            </mat-error>\n          </mat-form-field>\n        </div>    \n        <div class=\"col m6\">\n          <mat-form-field>\n            <input matInput formControlName=\"firstName\" placeholder=\"firstName\" class=\"capitalize\"/>\n            <mat-error *ngIf=\"firstName.invalid && firstName.touched\">\n              This field is required\n            </mat-error>\n          </mat-form-field>\n        </div>\n    \n        <div class=\"col m6\">\n          <mat-form-field>\n            <input matInput formControlName=\"middleName\" placeholder=\"middelName\" class=\"capitalize\"/>\n            <mat-error *ngIf=\"middleName.invalid && middleName.touched\">\n              This field is required\n            </mat-error>\n          </mat-form-field>\n        </div>\n        <div class=\"col m12\">\n          <mat-form-field>\n            <input matInput formControlName=\"lastName\" placeholder=\"lastName\" class=\"capitalize\"/>\n            <mat-error *ngIf=\"lastName.invalid && lastName.touched\">\n                This field is required\n              </mat-error>\n          </mat-form-field>\n        </div>\n        <div class=\"col m6\">\n          <mat-form-field>\n            <mat-select formControlName=\"gender\" placeholder=\"gender\">\n              <mat-option value=\"M\">Male</mat-option>\n              <mat-option value=\"F\">Female</mat-option>\n            </mat-select>\n            <mat-error *ngIf=\"gender.invalid && gender.touched\">\n                This field is required\n              </mat-error>\n          </mat-form-field>\n        </div>\n        <div class=\"col m6\">\n          <mat-form-field>\n            <mat-select formControlName=\"role\" placeholder=\"Role\">\n              <mat-option value=\"1\">Student</mat-option>\n              <mat-option value=\"2\">Teacher</mat-option>\n              <mat-option value=\"3\">Department Head</mat-option>\n            </mat-select>\n            <mat-error *ngIf=\"role.invalid && role.touched\">\n              This field is required\n            </mat-error>\n          </mat-form-field>\n        </div>\n        <div class=\"col m12\">\n          <mat-form-field>\n            <input matInput type=\"number\" formControlName=\"phone\" placeholder=\"Phone\" type=\"tel\">\n            <mat-error *ngIf=\"phone.invalid && phone.touched\">\n                This field is required\n              </mat-error>\n            <mat-error *ngIf=\"(regId.errors)?.exist && regId.touched\">\n              This phone already exist\n            </mat-error>\n          </mat-form-field>\n        </div>\n    \n        <div class=\"col m12\">\n          <mat-form-field>\n            <input matInput type=\"email\" formControlName=\"email\" placeholder=\"Email\" type=\"email\">\n            <mat-error *ngIf=\"(email.errors)?.required && email.touched\">\n                This field is required\n              </mat-error>\n            <mat-error *ngIf=\"(email.errors)?.email && email.touched\">\n                Invalid email address\n              </mat-error>\n            <mat-error *ngIf=\"(regId.errors)?.exist && regId.touched\">\n              This email already exist\n            </mat-error>\n          </mat-form-field>\n        </div>\n\n        <div class=\"col m12 \">\n          <button mat-flat-button color=\"primary\" class=\"right\" [disabled]=\"form.invalid\">Register</button>\n        </div>\n        \n    </form>\n\n  </div>\n</section>"

/***/ }),

/***/ "./src/app/user-reg/user-reg.component.scss":
/*!**************************************************!*\
  !*** ./src/app/user-reg/user-reg.component.scss ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".mat-form-field {\n  width: 100%; }\n\n#close:hover {\n  color: red; }\n"

/***/ }),

/***/ "./src/app/user-reg/user-reg.component.ts":
/*!************************************************!*\
  !*** ./src/app/user-reg/user-reg.component.ts ***!
  \************************************************/
/*! exports provided: UserRegComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserRegComponent", function() { return UserRegComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _service_user_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../service/user.service */ "./src/app/service/user.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __param = (undefined && undefined.__param) || function (paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
};




var UserRegComponent = /** @class */ (function () {
    function UserRegComponent(_dialog, $data, _from, _user) {
        this._dialog = _dialog;
        this.$data = $data;
        this._from = _from;
        this._user = _user;
        this.loading = false;
        this.isRegister = true;
        this.form = this._from.group({
            regId: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            firstName: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            middleName: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            lastName: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            gender: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            role: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            phone: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]],
            email: ["", [_angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].email]]
        });
    }
    UserRegComponent.prototype.ngOnInit = function () {
        var _this = this;
        if (typeof this.$data.user != 'undefined') {
            this.form.patchValue(this.$data.user);
            this.isRegister = false;
        }
        this.form.controls.regId.valueChanges.subscribe(function (value) {
            _this._user.idExist(value).subscribe(function (exist) {
                if (exist)
                    _this.form.controls.regId.setErrors({ exist: exist });
            });
        });
        this.form.controls.phone.valueChanges.subscribe(function (value) {
            _this._user.phoneExist(value).subscribe(function (exist) {
                if (exist)
                    _this.form.controls.phone.setErrors({ exist: exist });
            });
        });
        this.form.controls.email.valueChanges.subscribe(function (value) {
            _this._user.emailExist(value).subscribe(function (exist) {
                if (exist)
                    _this.form.controls.email.setErrors({ exist: exist });
            });
        });
    };
    UserRegComponent.prototype.submit = function () {
        var _this = this;
        this.loading = true;
        if (this.isRegister) {
            this._user.register(this.form.value).subscribe(function (_responce) {
                _this.loading = false;
                _this._dialog.close();
            }, function (_error) { _this.loading = false; });
        }
        else {
            this._user.update(this.$data.user.id, this.form.value).subscribe(function (_responce) {
                _this.loading = false;
                _this._dialog.close();
            }, function (_error) { _this.loading = false; });
        }
        return false;
    };
    Object.defineProperty(UserRegComponent.prototype, "regId", {
        get: function () { return this.form.get('regId'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "firstName", {
        get: function () { return this.form.get('firstName'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "middleName", {
        get: function () { return this.form.get('middleName'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "lastName", {
        get: function () { return this.form.get('lastName'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "gender", {
        get: function () { return this.form.get('gender'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "role", {
        get: function () { return this.form.get('role'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "phone", {
        get: function () { return this.form.get('phone'); },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(UserRegComponent.prototype, "email", {
        get: function () { return this.form.get('email'); },
        enumerable: true,
        configurable: true
    });
    UserRegComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-user-reg',
            template: __webpack_require__(/*! ./user-reg.component.html */ "./src/app/user-reg/user-reg.component.html"),
            styles: [__webpack_require__(/*! ./user-reg.component.scss */ "./src/app/user-reg/user-reg.component.scss")]
        }),
        __param(1, Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Inject"])(_angular_material__WEBPACK_IMPORTED_MODULE_1__["MAT_DIALOG_DATA"])),
        __metadata("design:paramtypes", [_angular_material__WEBPACK_IMPORTED_MODULE_1__["MatDialogRef"], Object, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"],
            _service_user_service__WEBPACK_IMPORTED_MODULE_3__["UserService"]])
    ], UserRegComponent);
    return UserRegComponent;
}());



/***/ }),

/***/ "./src/app/users/students/students.component.html":
/*!********************************************************!*\
  !*** ./src/app/users/students/students.component.html ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-card>\n \n  <app-users-table [data]=\"users\" (update)=\"onUpdate()\"></app-users-table>\n</mat-card>"

/***/ }),

/***/ "./src/app/users/students/students.component.scss":
/*!********************************************************!*\
  !*** ./src/app/users/students/students.component.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/users/students/students.component.ts":
/*!******************************************************!*\
  !*** ./src/app/users/students/students.component.ts ***!
  \******************************************************/
/*! exports provided: StudentsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StudentsComponent", function() { return StudentsComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _service_user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../service/user.service */ "./src/app/service/user.service.ts");
/* harmony import */ var _emums_user_role_enum__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../emums/user-role.enum */ "./src/app/emums/user-role.enum.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var StudentsComponent = /** @class */ (function () {
    function StudentsComponent(_user) {
        this._user = _user;
        this.users = [];
    }
    StudentsComponent.prototype.onChanges = function () {
    };
    StudentsComponent.prototype.ngOnInit = function () {
        var _this = this;
        this._user.getByRole(_emums_user_role_enum__WEBPACK_IMPORTED_MODULE_2__["UserRole"].STUDENT).subscribe(function (users) {
            _this.users = users;
        });
    };
    StudentsComponent.prototype.onUpdate = function () {
        this.ngOnInit();
    };
    StudentsComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-students',
            template: __webpack_require__(/*! ./students.component.html */ "./src/app/users/students/students.component.html"),
            styles: [__webpack_require__(/*! ./students.component.scss */ "./src/app/users/students/students.component.scss")]
        }),
        __metadata("design:paramtypes", [_service_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"]])
    ], StudentsComponent);
    return StudentsComponent;
}());



/***/ }),

/***/ "./src/app/users/teachers/teachers.component.html":
/*!********************************************************!*\
  !*** ./src/app/users/teachers/teachers.component.html ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-card>\n  <app-users-table [data]=\"users\"  (update)=\"onUpdate()\"></app-users-table>\n</mat-card>"

/***/ }),

/***/ "./src/app/users/teachers/teachers.component.scss":
/*!********************************************************!*\
  !*** ./src/app/users/teachers/teachers.component.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/users/teachers/teachers.component.ts":
/*!******************************************************!*\
  !*** ./src/app/users/teachers/teachers.component.ts ***!
  \******************************************************/
/*! exports provided: TeachersComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TeachersComponent", function() { return TeachersComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _service_user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../service/user.service */ "./src/app/service/user.service.ts");
/* harmony import */ var _emums_user_role_enum__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../emums/user-role.enum */ "./src/app/emums/user-role.enum.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



var TeachersComponent = /** @class */ (function () {
    function TeachersComponent(_user) {
        this._user = _user;
        this.users = [];
    }
    TeachersComponent.prototype.onChanges = function () {
    };
    TeachersComponent.prototype.ngOnInit = function () {
        var _this = this;
        this._user.getByRole(_emums_user_role_enum__WEBPACK_IMPORTED_MODULE_2__["UserRole"].TEACHER).subscribe(function (users) {
            _this.users = users;
        });
    };
    TeachersComponent.prototype.onUpdate = function () {
        this.ngOnInit();
    };
    TeachersComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-teachers',
            template: __webpack_require__(/*! ./teachers.component.html */ "./src/app/users/teachers/teachers.component.html"),
            styles: [__webpack_require__(/*! ./teachers.component.scss */ "./src/app/users/teachers/teachers.component.scss")]
        }),
        __metadata("design:paramtypes", [_service_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"]])
    ], TeachersComponent);
    return TeachersComponent;
}());



/***/ }),

/***/ "./src/app/users/users-table/users-table-datasource.ts":
/*!*************************************************************!*\
  !*** ./src/app/users/users-table/users-table-datasource.ts ***!
  \*************************************************************/
/*! exports provided: UsersTableDataSource */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UsersTableDataSource", function() { return UsersTableDataSource; });
/* harmony import */ var _angular_cdk_collections__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/cdk/collections */ "./node_modules/@angular/cdk/esm5/collections.es5.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm5/operators/index.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
var __extends = (undefined && undefined.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();



var UsersTableDataSource = /** @class */ (function (_super) {
    __extends(UsersTableDataSource, _super);
    function UsersTableDataSource(paginator, sort, data) {
        var _this = _super.call(this) || this;
        _this.paginator = paginator;
        _this.sort = sort;
        _this.data = data;
        return _this;
    }
    UsersTableDataSource.prototype.connect = function () {
        var _this = this;
        //console.log(this.data); 
        var dataMutations = [
            Object(rxjs__WEBPACK_IMPORTED_MODULE_2__["of"])(this.data),
            this.paginator.page,
            this.sort.sortChange
        ];
        this.paginator.length = this.data.length;
        return rxjs__WEBPACK_IMPORTED_MODULE_2__["merge"].apply(void 0, dataMutations).pipe(Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_1__["map"])(function () {
            return _this.getPagedData(_this.getSortedData(_this.data.slice()));
        }));
    };
    UsersTableDataSource.prototype.disconnect = function () { };
    UsersTableDataSource.prototype.getPagedData = function (data) {
        var startIndex = this.paginator.pageIndex * this.paginator.pageSize;
        return data.splice(startIndex, this.paginator.pageSize);
    };
    UsersTableDataSource.prototype.getSortedData = function (data) {
        var _this = this;
        if (!this.sort.active || this.sort.direction === '') {
            return data;
        }
        return data.sort(function (a, b) {
            var isAsc = _this.sort.direction === 'asc';
            switch (_this.sort.active) {
                case 'name': return compare(a.firstName, b.firstName, isAsc);
                case 'id': return compare(+a.id, +b.id, isAsc);
                default: return 0;
            }
        });
    };
    return UsersTableDataSource;
}(_angular_cdk_collections__WEBPACK_IMPORTED_MODULE_0__["DataSource"]));

function compare(a, b, isAsc) {
    return (a < b ? -1 : 1) * (isAsc ? 1 : -1);
}


/***/ }),

/***/ "./src/app/users/users-table/users-table.component.html":
/*!**************************************************************!*\
  !*** ./src/app/users/users-table/users-table.component.html ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- <pre>{{users |json }}</pre> -->\n<div class=\"mat-elevation-z1\">\n  <table mat-table class=\"full-width-table\" [dataSource]=\"dataSource\" matSort aria-label=\"Elements\">\n    <!-- Id Column -->\n    <ng-container matColumnDef=\"num\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header></th>\n      <td mat-cell *matCellDef=\"let row\">{{data.indexOf(row)+1}}</td>\n    </ng-container>\n\n    <ng-container matColumnDef=\"regId\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header>ID</th>\n      <td mat-cell *matCellDef=\"let row\">{{row.regId}}</td>\n    </ng-container>\n\n    <!-- Name Column -->\n    <ng-container matColumnDef=\"name\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header>Name</th>\n      <td mat-cell *matCellDef=\"let row\">{{row.firstName + \" \" + row.middleName + \" \" +  row.lastName}}</td>\n    </ng-container>\n\n    \n\n    <ng-container matColumnDef=\"phone\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header>Phone</th>\n      <td mat-cell *matCellDef=\"let row\">{{row.phone}}</td>\n    </ng-container>\n\n    <ng-container matColumnDef=\"email\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header>Email</th>\n      <td mat-cell *matCellDef=\"let row\">{{row.email}}</td>\n    </ng-container>\n\n    <!-- <ng-container matColumnDef=\"name\">\n      <th mat-header-cell *matHeaderCellDef mat-sort-header>Name</th>\n      <td mat-cell *matCellDef=\"let row\">{{row.name}}</td>\n    </ng-container> -->\n\n    <tr mat-header-row *matHeaderRowDef=\"displayedColumns\"></tr>\n    <tr mat-row *matRowDef=\"let row; columns: displayedColumns;\"\n      [contextMenuTrigger]=\"contextMenu\" \n      [menuContext]=\"{items: menuItems, data: row }\"\n      (menuAction)=\"onContextMenu($event)\"\n    ></tr>\n  </table>\n\n  <mat-paginator #paginator\n      [length]=\"dataSource.data.length\"\n      [pageIndex]=\"0\"\n      [pageSize]=\"50\"\n      [pageSizeOptions]=\"[25, 50, 100, 250]\">\n  </mat-paginator>\n</div>\n"

/***/ }),

/***/ "./src/app/users/users-table/users-table.component.scss":
/*!**************************************************************!*\
  !*** ./src/app/users/users-table/users-table.component.scss ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".full-width-table {\n  width: 100%; }\n"

/***/ }),

/***/ "./src/app/users/users-table/users-table.component.ts":
/*!************************************************************!*\
  !*** ./src/app/users/users-table/users-table.component.ts ***!
  \************************************************************/
/*! exports provided: UsersTableComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UsersTableComponent", function() { return UsersTableComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_material__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/material */ "./node_modules/@angular/material/esm5/material.es5.js");
/* harmony import */ var _users_table_datasource__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./users-table-datasource */ "./src/app/users/users-table/users-table-datasource.ts");
/* harmony import */ var _context_menu_context_menu_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../context-menu/context-menu.component */ "./src/app/context-menu/context-menu.component.ts");
/* harmony import */ var _user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../user-reg/user-reg.component */ "./src/app/user-reg/user-reg.component.ts");
/* harmony import */ var _service_user_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../service/user.service */ "./src/app/service/user.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};






var UsersTableComponent = /** @class */ (function () {
    function UsersTableComponent(_modal, _user) {
        this._modal = _modal;
        this._user = _user;
        this.data = [];
        this.update = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.contextMenu = _context_menu_context_menu_component__WEBPACK_IMPORTED_MODULE_3__["ContextMenuComponent"];
        this.menuItems = [
            { icon: 'edit', text: 'Edit' },
            { icon: 'delete', text: 'Remove user' },
            { icon: 'refresh', text: 'Reset password' },
        ];
        this.displayedColumns = ['num', 'regId', 'name', 'phone', 'email',];
    }
    UsersTableComponent.prototype.ngOnChanges = function () {
        this.dataSource = new _users_table_datasource__WEBPACK_IMPORTED_MODULE_2__["UsersTableDataSource"](this.paginator, this.sort, this.data);
    };
    UsersTableComponent.prototype.ngOnInit = function () {
        this.dataSource = new _users_table_datasource__WEBPACK_IMPORTED_MODULE_2__["UsersTableDataSource"](this.paginator, this.sort, this.data);
    };
    UsersTableComponent.prototype.onContextMenu = function (e) {
        switch (e.index) {
            case 0:
                this.updateUser(e.data);
                break;
            case 1:
                this.delete(e.data.id);
                break;
            case 2:
                this.reset(e.data.id);
                break;
        }
    };
    UsersTableComponent.prototype.updateUser = function (data) {
        var _this = this;
        var dialogRef = this._modal.open(_user_reg_user_reg_component__WEBPACK_IMPORTED_MODULE_4__["UserRegComponent"], {
            width: '600px',
            disableClose: true,
            data: {
                user: data
            }
        });
        dialogRef.afterClosed().subscribe(function () {
            _this.update.emit();
        });
    };
    UsersTableComponent.prototype.delete = function (id) {
        this._user.delete(id).subscribe(function (value) { });
    };
    UsersTableComponent.prototype.reset = function (id) {
        this._user.reset(id).subscribe(function (value) { });
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Array)
    ], UsersTableComponent.prototype, "data", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"])
    ], UsersTableComponent.prototype, "update", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_1__["MatPaginator"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_1__["MatPaginator"])
    ], UsersTableComponent.prototype, "paginator", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewChild"])(_angular_material__WEBPACK_IMPORTED_MODULE_1__["MatSort"]),
        __metadata("design:type", _angular_material__WEBPACK_IMPORTED_MODULE_1__["MatSort"])
    ], UsersTableComponent.prototype, "sort", void 0);
    UsersTableComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-users-table',
            template: __webpack_require__(/*! ./users-table.component.html */ "./src/app/users/users-table/users-table.component.html"),
            styles: [__webpack_require__(/*! ./users-table.component.scss */ "./src/app/users/users-table/users-table.component.scss")],
        }),
        __metadata("design:paramtypes", [_angular_material__WEBPACK_IMPORTED_MODULE_1__["MatDialog"], _service_user_service__WEBPACK_IMPORTED_MODULE_5__["UserService"]])
    ], UsersTableComponent);
    return UsersTableComponent;
}());



/***/ }),

/***/ "./src/app/users/users.component.html":
/*!********************************************!*\
  !*** ./src/app/users/users.component.html ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<mat-tab-group mat-align-tabs=\"center\" (selectedTabChange)=\"selectedTab($event)\">\n  <mat-tab label=\"Students\">\n    <app-students></app-students>\n  </mat-tab>\n  <mat-tab label=\"Teachers\">\n    <app-teachers></app-teachers>\n  </mat-tab>\n</mat-tab-group>"

/***/ }),

/***/ "./src/app/users/users.component.scss":
/*!********************************************!*\
  !*** ./src/app/users/users.component.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/users/users.component.ts":
/*!******************************************!*\
  !*** ./src/app/users/users.component.ts ***!
  \******************************************/
/*! exports provided: UsersComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UsersComponent", function() { return UsersComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _service_user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../service/user.service */ "./src/app/service/user.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var UsersComponent = /** @class */ (function () {
    function UsersComponent(_user) {
        this._user = _user;
        this.$users = [];
    }
    UsersComponent.prototype.ngOnInit = function () {
    };
    UsersComponent.prototype.selectedTab = function (e) {
    };
    UsersComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-users',
            template: __webpack_require__(/*! ./users.component.html */ "./src/app/users/users.component.html"),
            styles: [__webpack_require__(/*! ./users.component.scss */ "./src/app/users/users.component.scss")]
        }),
        __metadata("design:paramtypes", [_service_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"]])
    ], UsersComponent);
    return UsersComponent;
}());



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
var environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./src/lib/context-menu-injector.ts":
/*!******************************************!*\
  !*** ./src/lib/context-menu-injector.ts ***!
  \******************************************/
/*! exports provided: MenuPackage, MenuInjector */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MenuPackage", function() { return MenuPackage; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MenuInjector", function() { return MenuInjector; });
var MenuPackage = /** @class */ (function () {
    function MenuPackage(menu, context) {
        this.menu = menu;
        this.context = context;
    }
    return MenuPackage;
}());

var MenuInjector = /** @class */ (function () {
    function MenuInjector(_activeContextMenu, _parentInjector, context) {
        this._activeContextMenu = _activeContextMenu;
        this._parentInjector = _parentInjector;
        this.context = context;
        this._menuContext = new MenuPackage(_activeContextMenu, context);
    }
    MenuInjector.prototype.get = function (token, notFoundValue, flags) {
        if (token === MenuPackage) {
            return this._menuContext;
        }
        return this._parentInjector.get(token, notFoundValue, flags);
    };
    return MenuInjector;
}());



/***/ }),

/***/ "./src/lib/context-menu-trigger.directive.ts":
/*!***************************************************!*\
  !*** ./src/lib/context-menu-trigger.directive.ts ***!
  \***************************************************/
/*! exports provided: ContextMenuTriggerDirective */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextMenuTriggerDirective", function() { return ContextMenuTriggerDirective; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _context_menu_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./context-menu.service */ "./src/lib/context-menu.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ContextMenuTriggerDirective = /** @class */ (function () {
    function ContextMenuTriggerDirective(contextMenuService) {
        this.contextMenuService = contextMenuService;
        this.holdToDisplay = 1000;
        this.menuAction = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.menuClose = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.visible = false;
    }
    ContextMenuTriggerDirective.prototype.handleMenu = function ($event) {
        $event.preventDefault();
        this.menu = this.contextMenuService.show($event, this.contextMenuTrigger, this.menuContext, this.menuClose, this.menuAction);
        this.visible = true;
    };
    ContextMenuTriggerDirective.prototype.handleMouseDown = function ($event) {
        var _this = this;
        if (this.holdToDisplay >= 0) {
            $event.stopPropagation();
            $event.clientY = $event.touches[0].clientY;
            $event.clientX = $event.touches[0].clientX;
            this.mouseDownTimeoutId = setTimeout(function () { return _this.handleMenu($event); }, this.holdToDisplay);
        }
    };
    ContextMenuTriggerDirective.prototype.handleMouseUp = function () {
        clearTimeout(this.mouseDownTimeoutId);
    };
    ContextMenuTriggerDirective.prototype.ngOnInit = function () {
        var _this = this;
        this.sub = this.menuClose.subscribe(function () { return _this.visible = false; });
    };
    ContextMenuTriggerDirective.prototype.ngOnDestroy = function () {
        this.sub.unsubscribe();
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextMenuTriggerDirective.prototype, "contextMenuTrigger", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextMenuTriggerDirective.prototype, "menuContext", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextMenuTriggerDirective.prototype, "holdToDisplay", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], ContextMenuTriggerDirective.prototype, "menuAction", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], ContextMenuTriggerDirective.prototype, "menuClose", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('contextmenu', ['$event']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", [MouseEvent]),
        __metadata("design:returntype", void 0)
    ], ContextMenuTriggerDirective.prototype, "handleMenu", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('touchstart', ['$event']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", [Object]),
        __metadata("design:returntype", void 0)
    ], ContextMenuTriggerDirective.prototype, "handleMouseDown", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('touchend'),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", []),
        __metadata("design:returntype", void 0)
    ], ContextMenuTriggerDirective.prototype, "handleMouseUp", null);
    ContextMenuTriggerDirective = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Directive"])({
            selector: '[contextMenuTrigger]',
            exportAs: 'contextMenuTrigger',
        }),
        __metadata("design:paramtypes", [_context_menu_service__WEBPACK_IMPORTED_MODULE_1__["ContextMenuService"]])
    ], ContextMenuTriggerDirective);
    return ContextMenuTriggerDirective;
}());



/***/ }),

/***/ "./src/lib/context-menu.module.ts":
/*!****************************************!*\
  !*** ./src/lib/context-menu.module.ts ***!
  \****************************************/
/*! exports provided: ContextMenuModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextMenuModule", function() { return ContextMenuModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_cdk_overlay__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/cdk/overlay */ "./node_modules/@angular/cdk/esm5/overlay.es5.js");
/* harmony import */ var _angular_cdk_portal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/cdk/portal */ "./node_modules/@angular/cdk/esm5/portal.es5.js");
/* harmony import */ var _context_menu_trigger_directive__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./context-menu-trigger.directive */ "./src/lib/context-menu-trigger.directive.ts");
/* harmony import */ var _context_submenu_trigger_directive__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./context-submenu-trigger.directive */ "./src/lib/context-submenu-trigger.directive.ts");
/* harmony import */ var _menu_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./menu.component */ "./src/lib/menu.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};






var ContextMenuModule = /** @class */ (function () {
    function ContextMenuModule() {
    }
    ContextMenuModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            declarations: [
                _context_menu_trigger_directive__WEBPACK_IMPORTED_MODULE_3__["ContextMenuTriggerDirective"],
                _context_submenu_trigger_directive__WEBPACK_IMPORTED_MODULE_4__["ContextSubmenuTriggerDirective"],
                _menu_component__WEBPACK_IMPORTED_MODULE_5__["MenuComponent"],
            ],
            exports: [_context_menu_trigger_directive__WEBPACK_IMPORTED_MODULE_3__["ContextMenuTriggerDirective"], _context_submenu_trigger_directive__WEBPACK_IMPORTED_MODULE_4__["ContextSubmenuTriggerDirective"]],
            imports: [_angular_cdk_portal__WEBPACK_IMPORTED_MODULE_2__["PortalModule"], _angular_cdk_overlay__WEBPACK_IMPORTED_MODULE_1__["OverlayModule"]],
        })
    ], ContextMenuModule);
    return ContextMenuModule;
}());



/***/ }),

/***/ "./src/lib/context-menu.service.ts":
/*!*****************************************!*\
  !*** ./src/lib/context-menu.service.ts ***!
  \*****************************************/
/*! exports provided: ContextMenuService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextMenuService", function() { return ContextMenuService; });
/* harmony import */ var _angular_cdk_overlay__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/cdk/overlay */ "./node_modules/@angular/cdk/esm5/overlay.es5.js");
/* harmony import */ var _angular_cdk_portal__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/cdk/portal */ "./node_modules/@angular/cdk/esm5/portal.es5.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
/* harmony import */ var rxjs_operators__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! rxjs/operators */ "./node_modules/rxjs/_esm5/operators/index.js");
/* harmony import */ var _context_menu_injector__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./context-menu-injector */ "./src/lib/context-menu-injector.ts");
var __assign = (undefined && undefined.__assign) || Object.assign || function(t) {
    for (var s, i = 1, n = arguments.length; i < n; i++) {
        s = arguments[i];
        for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p))
            t[p] = s[p];
    }
    return t;
};
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};






var ContextMenuService = /** @class */ (function () {
    function ContextMenuService(overlay, scrollStrategy, _injector) {
        this.overlay = overlay;
        this.scrollStrategy = scrollStrategy;
        this._injector = _injector;
        this.menus = [];
        this.id = 0;
    }
    /**
     *
     * @param $event triggering event
     * @param menuComponent the component to be shown
     * @param submenu is a menu within a menu
     * @param level if submenu, what level
     */
    ContextMenuService.prototype.show = function ($event, menuComponent, context, menuClose, menuAction, submenu, level) {
        if (submenu === void 0) { submenu = false; }
        var target;
        if (!submenu) {
            this.closeAll();
            target = {
                getBoundingClientRect: function () { return ({
                    bottom: $event.clientY,
                    height: 0,
                    left: $event.clientX,
                    right: $event.clientX,
                    top: $event.clientY,
                    width: 0,
                }); },
            };
        }
        else {
            // close other submenus
            this.closeAll(undefined, level);
            target = $event.target;
        }
        var el = new _angular_core__WEBPACK_IMPORTED_MODULE_2__["ElementRef"](target);
        var positionStrategy = this.overlay
            .position()
            .flexibleConnectedTo(el)
            .withFlexibleDimensions(false);
        if (!submenu) {
            positionStrategy.withPositions([
                {
                    originX: 'start',
                    originY: 'bottom',
                    overlayX: 'start',
                    overlayY: 'top',
                },
                {
                    originX: 'start',
                    originY: 'top',
                    overlayX: 'start',
                    overlayY: 'bottom',
                },
                {
                    originX: 'end',
                    originY: 'top',
                    overlayX: 'start',
                    overlayY: 'top',
                },
                {
                    originX: 'start',
                    originY: 'top',
                    overlayX: 'end',
                    overlayY: 'top',
                },
                {
                    originX: 'end',
                    originY: 'center',
                    overlayX: 'start',
                    overlayY: 'center',
                },
                {
                    originX: 'start',
                    originY: 'center',
                    overlayX: 'end',
                    overlayY: 'center',
                },
            ]);
        }
        else {
            positionStrategy.withPositions([
                {
                    originX: 'end',
                    originY: 'top',
                    overlayX: 'start',
                    overlayY: 'top',
                },
                {
                    originX: 'start',
                    originY: 'top',
                    overlayX: 'end',
                    overlayY: 'top',
                },
                {
                    originX: 'end',
                    originY: 'bottom',
                    overlayX: 'start',
                    overlayY: 'bottom',
                },
                {
                    originX: 'start',
                    originY: 'bottom',
                    overlayX: 'end',
                    overlayY: 'bottom',
                },
            ]);
        }
        var t = {
            submenu: submenu,
            id: this.id++,
            isMenuHovered: new rxjs__WEBPACK_IMPORTED_MODULE_3__["BehaviorSubject"](false),
            isTriggerHovered: new rxjs__WEBPACK_IMPORTED_MODULE_3__["BehaviorSubject"](false),
        };
        var menuInjector = new _context_menu_injector__WEBPACK_IMPORTED_MODULE_5__["MenuInjector"](t, this._injector, context);
        var componentPortal = new _angular_cdk_portal__WEBPACK_IMPORTED_MODULE_1__["ComponentPortal"](menuComponent, undefined, menuInjector);
        var overlayRef = this.overlay.create({
            positionStrategy: positionStrategy,
            panelClass: 'ngx-contextmenu',
            scrollStrategy: this.scrollStrategy.close(),
        });
        var component = overlayRef.attach(componentPortal);
        var res = __assign({ overlayRef: overlayRef, component: component }, t, { menuClose: menuClose, menuAction: menuAction });
        this.menus.push(res);
        return res;
    };
    ContextMenuService.prototype.getCurrentLevel = function () {
        return this.menus.length;
    };
    ContextMenuService.prototype.closeAll = function (context, idx) {
        if (idx === void 0) { idx = 0; }
        for (var index = idx; index < this.menus.length; index++) {
            var menu = this.menus[index];
            this.destroyMenu(menu, context);
        }
        this.menus.splice(idx, this.menus.length);
    };
    ContextMenuService.prototype.destroyMenu = function (menu, context) {
        menu.component.instance._state = 'exit';
        if (menu.component.instance.lazy) {
            menu.component.instance._animationDone
                .pipe(Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["filter"])(function (event) { return event.toState === 'exit'; }), Object(rxjs_operators__WEBPACK_IMPORTED_MODULE_4__["take"])(1))
                .subscribe(function () {
                menu.overlayRef.detach();
                menu.overlayRef.dispose();
            });
        }
        else {
            menu.overlayRef.detach();
            menu.overlayRef.dispose();
        }
        if (context) {
            menu.menuAction.next(context);
        }
        menu.menuClose.next();
    };
    ContextMenuService.prototype.close = function (menu, menuIndex, context) {
        this.destroyMenu(menu, context);
        this.menus.splice(menuIndex, 1);
    };
    ContextMenuService.prototype.checkOutsideClick = function ($event) {
        for (var _i = 0, _a = this.menus; _i < _a.length; _i++) {
            var m = _a[_i];
            var clickedInside = m.component.location.nativeElement.contains($event.target);
            if (clickedInside) {
                $event.preventDefault();
                $event.stopPropagation();
                return;
            }
        }
        this.closeAll();
    };
    ContextMenuService.prototype.closeSubMenu = function (id) {
        var menuIndex = this.menus.findIndex(function (n) { return n.id === id; });
        if (menuIndex === -1 || menuIndex !== this.menus.length - 1) {
            return;
        }
        // make sure we can close the current menu
        var menu = this.menus[menuIndex];
        if (menu.isMenuHovered.getValue() || menu.isTriggerHovered.getValue()) {
            return;
        }
        // close all menus up if possible
        for (var index = this.menus.length - 1; index >= 1; index--) {
            var m = this.menus[index];
            if (!m.isMenuHovered.getValue() && !m.isTriggerHovered.getValue()) {
                this.close(m, index);
            }
            else {
                return;
            }
        }
    };
    ContextMenuService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_2__["Injectable"])({ providedIn: 'root' }),
        __metadata("design:paramtypes", [_angular_cdk_overlay__WEBPACK_IMPORTED_MODULE_0__["Overlay"],
            _angular_cdk_overlay__WEBPACK_IMPORTED_MODULE_0__["ScrollStrategyOptions"],
            _angular_core__WEBPACK_IMPORTED_MODULE_2__["Injector"]])
    ], ContextMenuService);
    return ContextMenuService;
}());



/***/ }),

/***/ "./src/lib/context-submenu-trigger.directive.ts":
/*!******************************************************!*\
  !*** ./src/lib/context-submenu-trigger.directive.ts ***!
  \******************************************************/
/*! exports provided: ContextSubmenuTriggerDirective */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ContextSubmenuTriggerDirective", function() { return ContextSubmenuTriggerDirective; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _context_menu_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./context-menu.service */ "./src/lib/context-menu.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ContextSubmenuTriggerDirective = /** @class */ (function () {
    function ContextSubmenuTriggerDirective(contextMenuService) {
        var _this = this;
        this.contextMenuService = contextMenuService;
        this.hoverDelay = 500;
        this.openDelay = 200;
        this.menuAction = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.menuClose = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.visible = false;
        this.level = 1;
        // get current level
        setTimeout(function () { return (_this.level = _this.contextMenuService.getCurrentLevel()); });
    }
    ContextSubmenuTriggerDirective.prototype.handleSubMenuClick = function ($event) {
        event.preventDefault();
        event.stopPropagation();
        clearTimeout(this.opentimer);
        clearTimeout(this.closetimer);
        this.menu = this.contextMenuService.show($event, this.contextSubmenuTrigger, this.menuContext, this.menuClose, this.menuAction, true, this.level);
        this.visible = true;
    };
    ContextSubmenuTriggerDirective.prototype.handleSubMenuEnter = function ($event) {
        var _this = this;
        if (this.menu) {
            this.menu.isTriggerHovered.next(true);
        }
        clearTimeout(this.closetimer);
        this.opentimer = setTimeout(function () {
            _this.menu = _this.contextMenuService.show($event, _this.contextSubmenuTrigger, _this.menuContext, _this.menuClose, _this.menuAction, true, _this.level);
            _this.visible = true;
            _this.opentimer = null;
        }, this.openDelay);
    };
    /**
     * submenu hides after cursor has exited for a period of time
     */
    ContextSubmenuTriggerDirective.prototype.handleSubMenuExit = function () {
        var _this = this;
        clearTimeout(this.opentimer);
        if (this.menu) {
            this.menu.isTriggerHovered.next(false);
        }
        this.closetimer = setTimeout(function () {
            if (_this.menu) {
                _this.menu.isTriggerHovered.next(false);
                _this.contextMenuService.closeSubMenu(_this.menu.id);
                _this.menu = undefined;
            }
            _this.visible = false;
        }, this.hoverDelay);
    };
    /**
     * if overwritten make sure to clear timeouts
     */
    ContextSubmenuTriggerDirective.prototype.ngOnDestroy = function () {
        clearTimeout(this.opentimer);
        clearTimeout(this.closetimer);
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "hoverDelay", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "openDelay", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "contextSubmenuTrigger", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "menuContext", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "menuAction", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"])(),
        __metadata("design:type", Object)
    ], ContextSubmenuTriggerDirective.prototype, "menuClose", void 0);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('click', ['$event', 'true']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", [MouseEvent]),
        __metadata("design:returntype", void 0)
    ], ContextSubmenuTriggerDirective.prototype, "handleSubMenuClick", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('mouseover', ['$event']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", [MouseEvent]),
        __metadata("design:returntype", void 0)
    ], ContextSubmenuTriggerDirective.prototype, "handleSubMenuEnter", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('mouseout', ['$event']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", []),
        __metadata("design:returntype", void 0)
    ], ContextSubmenuTriggerDirective.prototype, "handleSubMenuExit", null);
    ContextSubmenuTriggerDirective = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Directive"])({ selector: '[contextSubmenuTrigger]' }),
        __metadata("design:paramtypes", [_context_menu_service__WEBPACK_IMPORTED_MODULE_1__["ContextMenuService"]])
    ], ContextSubmenuTriggerDirective);
    return ContextSubmenuTriggerDirective;
}());



/***/ }),

/***/ "./src/lib/menu.component.ts":
/*!***********************************!*\
  !*** ./src/lib/menu.component.ts ***!
  \***********************************/
/*! exports provided: MenuComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MenuComponent", function() { return MenuComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _context_menu_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./context-menu.service */ "./src/lib/context-menu.service.ts");
/* harmony import */ var _context_menu_injector__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./context-menu-injector */ "./src/lib/context-menu-injector.ts");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var MenuComponent = /** @class */ (function () {
    function MenuComponent(menuPackage, contextMenuService) {
        this.menuPackage = menuPackage;
        this.contextMenuService = contextMenuService;
        /** State of the dialog animation. */
        this._state = 'enter';
        this._animationDone = new rxjs__WEBPACK_IMPORTED_MODULE_3__["Subject"]();
        /** set lazy to False if you do not have animations */
        this.lazy = true;
    }
    MenuComponent.prototype.handleMouseover = function () {
        if (!this.menuPackage.menu.submenu) {
            return;
        }
        this.menuPackage.menu.isMenuHovered.next(true);
        clearTimeout(this.closetimer);
    };
    MenuComponent.prototype.handleMouseleave = function () {
        var _this = this;
        if (!this.menuPackage.menu.submenu) {
            return;
        }
        this.menuPackage.menu.isMenuHovered.next(false);
        this.closetimer = setTimeout(function () {
            _this.contextMenuService.closeSubMenu(_this.menuPackage.menu.id);
        }, 500);
    };
    MenuComponent.prototype.handleWindowClick = function ($event) {
        this.contextMenuService.checkOutsideClick($event);
    };
    /** Callback that is invoked when the menu animation completes. */
    MenuComponent.prototype._onAnimationDone = function (event) {
        this._animationDone.next(event);
    };
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('mouseover'),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", []),
        __metadata("design:returntype", void 0)
    ], MenuComponent.prototype, "handleMouseover", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('mouseleave'),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", []),
        __metadata("design:returntype", void 0)
    ], MenuComponent.prototype, "handleMouseleave", null);
    __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"])('document:click', ['$event']),
        __metadata("design:type", Function),
        __metadata("design:paramtypes", [MouseEvent]),
        __metadata("design:returntype", void 0)
    ], MenuComponent.prototype, "handleWindowClick", null);
    MenuComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-menu',
            template: "",
        }),
        __metadata("design:paramtypes", [_context_menu_injector__WEBPACK_IMPORTED_MODULE_2__["MenuPackage"],
            _context_menu_service__WEBPACK_IMPORTED_MODULE_1__["ContextMenuService"]])
    ], MenuComponent);
    return MenuComponent;
}());



/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var hammerjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! hammerjs */ "./node_modules/hammerjs/hammer.js");
/* harmony import */ var hammerjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(hammerjs__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm5/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");





if (_environments_environment__WEBPACK_IMPORTED_MODULE_4__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_3__["AppModule"])
    .catch(function (err) { return console.error(err); });


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/fidel/front_end/Manage-scss/src/main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map