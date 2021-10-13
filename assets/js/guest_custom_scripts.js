const baseUrl = $('#txt_baseUrl').val(); 

const MODULENAME = (function(){

	let thisModuleName = {};

	//============================================================================>
	//write your global properties here
	//example: myProp
	let myProp = null;

	//write your methods here
	//example: testFunc
	thisModuleName.testFunc = function()
	{
		alert(baseUrl);
	}
	//============================================================================>

	return thisModuleName;

})();