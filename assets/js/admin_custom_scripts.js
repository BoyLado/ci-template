// import modules or API helpers here!

const baseUrl = $('#txt_baseUrl').val(); 

const moduleName = (function(){

	let thisModuleName = {};

	//============================================================================>
	//write your global properties here
	//example: myProp
	let myProp = null;

	//write your methods here
	//example: testFunc
	thisModuleName.testFunc = function()
	{
		alert('Test Function');
	}
	//============================================================================>

	return thisModuleName;

})();

