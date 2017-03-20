var xorApp = angular.module('xorApp', ['ngRoute']);

xorApp.config(function ($routeProvider, $locationProvider) {

    $locationProvider.html5Mode(true);

    $routeProvider
        .when("/", {
            templateUrl: "/index"
        })
        .when("/form", {
            templateUrl: "/view/url/create"
        })
        .when("/list", {
            templateUrl: "/view/url"
        })
        .when("/user", {
            templateUrl: "/view/user"
        });
});