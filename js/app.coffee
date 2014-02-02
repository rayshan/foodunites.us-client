app = angular.module('FuApp', [
	'ngAnimate'
	'ngRoute'
])

app.controller 'FuAppCtrl', ($interval) ->
	@temp = "Hello"

	return