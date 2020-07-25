let $country    = $('#country'),
	$state      = $('#state'),
	$city       = $('#city'),
	arrayObject = {
		'country': {
			placeholder: 'Select Country',
		},
		'state':   {
			placeholder: 'Select State',
		},
		'city':    {
			placeholder: 'Select City',
		},
	};

$(document).ready(function() {

	getCountries();

	$country.select2({placeholder: getPlaceholder($country)}).on('select2:select', function() {
		let countryId = $(this).val();
		getStates(countryId);
	});

	$state.select2({placeholder: getPlaceholder($state)}).on('select2:select', function() {
		let stateId = $(this).val();
		getCities(stateId);
	});

	$city.select2({placeholder: getPlaceholder($city)}).on('select2:select', function() {
		let cityId = $(this).val();
		console.log(cityId + ' - locationId');
	});
});

function getCountries() {
	axios.get('/api/countries').then(
		response => {
			fillSelect($country, response.data.data);
		},
		() => console.log('error get countries'),
	);
}

function getStates(countryId) {
	clearSelect($state);
	clearSelect($city);
	axios.get(`/api/${countryId}/states`).then(
		response => {
			console.log(32);
			fillSelect($state, response.data.data);
		},
		() => console.log('error get states'),
	);
};

function getCities(stateId) {
	clearSelect($city);
	axios.get(`/api/${stateId}/cities`).then(
		response => {
			fillSelect($city, response.data.data);
		},
		() => console.log('error get cities'),
	);
};

function fillSelect(elem, options) {
	$(elem).append('<option value=""></option>');
	for (let i in options) {
		if (options.hasOwnProperty(i)) {
			let d = options[i];
			$(elem).append(
				'<option value="' + d.id + '">' + d.name + '</option>',
			);
		}
	}
};

function clearSelect(selector) {
	let placeholder = getPlaceholder(selector);
	console.log(placeholder);
	selector.find('option').remove().end();
}

function getPlaceholder(el) {
	return arrayObject[el.attr('id')].placeholder;
}