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

app.controller 'ShareCtrl', ($timeout) ->
	@step = "upload"

	@upload = -> @step = "pick"; return
	@pick = -> @step = "uploading"; return
	@uploading = -> @step = "tag"; return
	@tag = -> @step = "match"; return
	@match = -> @step = "mashup"; return
	@mashup = -> @step = "done"; return

	return
