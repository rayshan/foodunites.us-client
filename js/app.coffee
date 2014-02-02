app = angular.module('FuApp', [
	'ngAnimate'
	'ngRoute'
])

app.config ($routeProvider, $locationProvider) ->
	$routeProvider
	.when('/', {
		templateUrl: 'partials/home.html'
	})
	.when('/profile', {
		templateUrl: 'partials/profile.html'
	})
	.when('/about', {
		templateUrl: 'partials/about.html'
	})
	.when('/share', {
		templateUrl: 'partials/share.html'
		controller: "ShareCtrl"
		controllerAs: "share"
	})
	.otherwise({
		redirectTo: '/'
	})

app.controller 'FuAppCtrl', ($interval) ->
	@loggedIn = true

	return

app.controller 'ShareCtrl', () ->
	@temp = "hi"

	return
