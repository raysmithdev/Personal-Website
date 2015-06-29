var app = angular.module('app', []);

app.controller('IntroController', function($scope, $location, $anchorScroll, $http) {
		

});


app.controller('RegisteredPostController', function($scope) {
	
	$scope.selectedTab = 1;
		
	$scope.setTab = function(tab) {
		$scope.selectedTab = tab;
	};
});




app.controller('ContactController', function($scope, $http) {
	
	$scope.btnTxt = 'Submit';
	
	$scope.submitForm = function(data, isValid)
	{	
		$scope.submitted = true;
		
		if (isValid)
		{	
			$scope.btnTxt = 'Sending...';
									
			$http({
				method : 'POST',
				url : 'http://raysmithdev.eu/index.php/contact/processRequest',
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data: $.param({
					email: data.email,
					message: data.message
				}),
			})
			.success(function(resp) {
				if (resp.success)
				{
					$scope.data = {};
					$scope.btnTxt = 'Submit';	
					$scope.messageSent = true;
					$scope.submitted = false;	
				}
				else{
					$scope.btnTxt = 'Submit';
					alert('Not saved');
				}
			})	
		}
	}
});

