var app = angular.module('app', ['ngRoute', 'filters-module']);

app.config(function ($routeProvider) {
  $routeProvider
    .when('/home', {
      controller: 'HomeController',
      templateUrl: 'views/home.html'
    })
    .when('/about', {
      controller: 'AboutController',
      templateUrl: 'views/about.html'
    })
    .when('/resume', {
      controller: 'ResumeController',
      templateUrl: 'views/resume.html'
    })
    .when('/portfolio', {
      controller: 'PortfolioController',
      templateUrl: 'views/portfolio.html'
    })
    .when('/contact', {
      controller: 'ContactController',
      templateUrl: 'views/contact.html'
    })
    .otherwise({
      redirectTo: '/home'
    });
});
/*
angular
  .module("app", ['ui.router'])
  .config(['$urlRouteProvider', '$stateProvider', function($urlRouteProvider, $stateProvider){}
    $urlRouteProvider.otherwise('/');

    $stateProvider
    .state('home', {
      url: '/',
      templateUrl: 'views/home.html'
    })
    .state('resume', {
      url: '/resume',
      templateUrl: 'views/resume.html'
    })
  ]);
*/
