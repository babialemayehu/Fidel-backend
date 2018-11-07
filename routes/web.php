<?php
Route::get('/hello', function(){
    return 'Hello world'; 
});

Route::get('/he', function(){
    return 'Hello world'; 
});
Route::get('/login',function(){
    return view('auth.loginAndSignup');
});
Route::get('/test',function(){
    $x = new App\Http\Controllers\Custom\UserGroup(); 
    return $x->get_student_current_group(6, \App\Http\Controllers\Custom\UserGroup::OTHER);
});
Route::group(['middleware' => ['auth']], function () {

    // angular 
    Route::get('/manage', function(){
        return view('pages.singlePage.manage'); 
    }); 
    
    Route::get('/', 'pagesController@content');
    Route::get('/calander','calenderController@view');
    Route::get("/courses/{id}",'sessionCousesController@getCourses');
    Route::get("/message",function(){
        return view('pages.message');
    });
    Route::group(["prefix"=>"manege"],function(){
        Route::resource('course','courseController');
        Route::resource('chapter','chapterController');
        Route::resource("session",'sessionController');
        Route::get('group_index','groupController@userGroups');
        Route::get('course_index','courseController@course_index');
        Route::get('session_index','sessionController@session_index');
        Route::resource("group",'groupController');
        Route::group(["prefix"=>"forms"],function(){
            Route::get('session', 'ManageController@sessionFormView');
            Route::get('group', 'ManageController@groupFormView');
            Route::get('cource', 'ManageController@courceFormView');
        });
    });
    Route::get('/manege/group/count/{id}','userGroupController@membersCount');
    Route::get('/manege/group/members_list/{id}','userGroupController@membersList');
    Route::post('/manege/members/{id}','userGroupController@edit');
    Route::get("/manege",'ManageController@index');
    Route::get("/conversation",function(){
        return view('pages.message.conversation');
    });
    Route::get("/profile",function(){
        return view('pages.profile');
    });
    Route::get("/questions/{id}","questionController@index");
    Route::get("/questionsList/{id}","questionController@getQuestions");
    Route::post("/questions/answer","questionController@answer");  
    Route::get("/request/{id}", "RequestController@request"); 
    Route::get("/requestList/{id}", "RequestController@getRequests"); 
    Route::post("/vote/{id}", "RequestController@vote"); 

    Route::get("/grade report",function(){
        return view('pages.gradeReport');
    });
    Route::get("/shelf",function(){
        return view('pages.course.shelf');
    });
    Route::group(["prefix"=>"course"],function(){
        Route::get("/outline",function(){
            return view('pages.course.outline');
        });
        Route::resource("mark",'marksController');
        Route::resource("assignment",'assignmentController');
        Route::resource('question','questionController');
        Route::resource('submitAssignment','submitedassignmentsController');
        Route::resource('shelf','shelfsController');
        Route::resource('markStructure','markStructureController');
        Route::resource('request', 'RequestController'); 
    });
    Route::post('/course/assignmet/attachment','assignmentController@attachment');
    Route::get('/recentNotification','notificationController@getRecentNotification');
    Route::resource('event','EventsController');
    Route::post('/event/weakly_schedule','EventsController@schedule');
    Route::resource('notification','notificationController');
    Route::get("/events/{month?}/{year?}",'EventsController@getEvents');
    Route::get('/notificationJson','notificationController@getNotificaion');
});
Auth::routes();

Route::get('/api/calender/{month?}/{year?}','calenderController@index');


Route::middleware(['cors'])
->prefix('api')
->group( function () {
    Route::prefix('json')
    ->group(function(){ 

        Route::group(['prefix' => 'get'], function(){
            Route::group(['prefix' => 'user','namespace' => 'UserManagment'], function(){
                Route::get('by role/{role}', 'AccountController@getByRole'); 
                Route::group(['prefix' => 'students'], function(){
                    
                }); 
                
                Route::group(['prefix' => 'validate'], function(){
                    Route::get('regId exist/{regId}', 'AccountController@idExist'); 
                    Route::get('phone exist/{phone}', 'AccountController@phoneExist'); 
                    Route::get('email exist/{email}', 'AccountController@emailExist'); 
                }); 
            }); 
        });
       
        Route::prefix('post')
        ->group( function(){
            Route::group(['prefix' => 'user','namespace' => 'UserManagment'], function(){
                Route::post('register', 'RegistrationController@register'); 
            }); 
        }); 

        Route::group(['prefix' => 'update', 'namespace' => 'UserManagment'], function(){
            Route::put('user/{user}', 'AccountController@update'); 
            Route::group(['prefix' => 'change'], function(){
                Route::put('password/{option?}', 'AccountController@changePassword'); 
            }); 

            Route::group(['prefix' => 'user'], function(){
                Route::put('password/reset/{user}', 'RegistrationController@reset'); 
            }); 
        }); 

        Route::group(['prefix' => 'delete'], function(){
            Route::delete('user/{user}', 'AccountController@delete'); 
        }); 
    }); 
}); 