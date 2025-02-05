

$(document).ready(function () {
	$.getJSON(
		"http://localhost/visaonlineuae-2025-26/index.php/nationality/get_countries",
		function (data) {
			let options = data
				.map(
					(country) =>
						`<option value="${country.code}">${country.name}</option>`
				)
				.join("");
			$("#nationality_id").append(options);
			
		}
	).fail(function (xhr, status, error) {
		console.error("Error fetching country data:", error);
	});
});
