$(document).ready(function () {
	const $carousel = $("#carousel");
	const scrollAmount = 300;
	let autoScroll;
	let isManualScroll = false;

	function startAutoScroll() {
		stopAutoScroll();
		autoScroll = setInterval(() => {
			if (!isManualScroll && $carousel.length > 0) {
				let maxScroll = $carousel[0].scrollWidth - $carousel.outerWidth();
				let currentScroll = $carousel.scrollLeft();

				if (currentScroll >= maxScroll) {
					$carousel.animate({ scrollLeft: 0 }, 800);
				} else {
					$carousel.animate(
						{ scrollLeft: "+=" + scrollAmount },
						600,
						snapToCard
					);
				}
			}
		}, 3000);
	}

	function stopAutoScroll() {
		clearInterval(autoScroll);
		setTimeout(startAutoScroll, 5000);
	}

	$("#left-btn").click(function () {
		isManualScroll = true;
		stopAutoScroll();
		$carousel.animate(
			{ scrollLeft: "-=" + scrollAmount },
			400,
			() => (isManualScroll = false)
		);
	});

	$("#right-btn").click(function () {
		isManualScroll = true;
		stopAutoScroll();
		$carousel.animate(
			{ scrollLeft: "+=" + scrollAmount },
			400,
			() => (isManualScroll = false)
		);
	});

	function snapToCard() {
		let scrollLeft = $carousel.scrollLeft();
		let closestCard = null;
		let minDistance = Infinity;

		$(".card").each(function () {
			let cardOffset = $(this).position().left + $carousel.scrollLeft();
			let distance = Math.abs(cardOffset - scrollLeft);

			if (distance < minDistance) {
				minDistance = distance;
				closestCard = $(this);
			}
		});

		if (closestCard) {
			$carousel.animate(
				{ scrollLeft: closestCard.position().left + $carousel.scrollLeft() },
				300
			);
			$(".card").removeClass("active");
			closestCard.addClass("active");
		}
	}

	if ($carousel.length > 0) {
		startAutoScroll();
	} else {
		console.error("Carousel element not found.");
	}
});

const countries = [
	"Afghanistan",
	"Albania",
	"Algeria",
	"Andorra",
	"Angola",
	"Antigua and Barbuda",
	"Argentina",
	"Armenia",
	"Australia",
	"Austria",
	"Azerbaijan",
	"Bahamas",
	"Bahrain",
	"Bangladesh",
	"Barbados",
	"Belarus",
	"Belgium",
	"Belize",
	"Benin",
	"Bhutan",
	"Bolivia",
	"Bosnia and Herzegovina",
	"Botswana",
	"Brazil",
	"Brunei",
	"Bulgaria",
	"Burkina Faso",
	"Burundi",
	"Cabo Verde",
	"Cambodia",
	"Cameroon",
	"Canada",
	"Central African Republic",
	"Chad",
	"Chile",
	"China",
	"Colombia",
	"Comoros",
	"Congo",
	"Costa Rica",
	"Croatia",
	"Cuba",
	"Cyprus",
	"Czech Republic",
	"Democratic Republic of Congo (Zaire)",
	"Denmark",
	"Djibouti",
	"Dominica",
	"Dominican Republic",
	"Ecuador",
	"Egypt",
	"El Salvador",
	"Equatorial Guinea",
	"Eritrea",
	"Estonia",
	"Eswatini",
	"Ethiopia",
	"Fiji",
	"Finland",
	"France",
	"Gabon",
	"Gambia",
	"Georgia",
	"Germany",
	"Ghana",
	"Greece",
	"Grenada",
	"Guatemala",
	"Guinea",
	"Guinea-Bissau",
	"Guyana",
	"Haiti",
	"Honduras",
	"Hungary",
	"Iceland",
	"India",
	"Indonesia",
	"Iran",
	"Iraq",
	"Ireland",
	"Israel",
	"Italy",
	"Jamaica",
	"Japan",
	"Jordan",
	"Kazakhstan",
	"Kenya",
	"Kiribati",
	"Kuwait",
	"Kyrgyzstan",
	"Laos",
	"Latvia",
	"Lebanon",
	"Lesotho",
	"Liberia",
	"Libya",
	"Liechtenstein",
	"Lithuania",
	"Luxembourg",
	"Madagascar",
	"Malawi",
	"Malaysia",
	"Maldives",
	"Mali",
	"Malta",
	"Marshall Islands",
	"Mauritania",
	"Mauritius",
	"Mexico",
	"Micronesia",
	"Moldova",
	"Monaco",
	"Mongolia",
	"Montenegro",
	"Morocco",
	"Mozambique",
	"Myanmar",
	"Namibia",
	"Nauru",
	"Nepal",
	"Netherlands",
	"New Zealand",
	"Nicaragua",
	"Niger",
	"Nigeria",
	"North Korea",
	"North Macedonia",
	"Norway",
	"Oman",
	"Pakistan",
	"Palau",
	"Panama",
	"Papua New Guinea",
	"Paraguay",
	"Peru",
	"Philippines",
	"Poland",
	"Portugal",
	"Qatar",
	"Romania",
	"Russia",
	"Rwanda",
	"Saint Kitts and Nevis",
	"Saint Lucia",
	"Saint Vincent and the Grenadines",
	"Samoa",
	"San Marino",
	"Sao Tome and Principe",
	"Saudi Arabia",
	"Senegal",
	"Serbia",
	"Seychelles",
	"Sierra Leone",
	"Singapore",
	"Slovakia",
	"Slovenia",
	"Solomon Islands",
	"Somalia",
	"South Africa",
	"South Korea",
	"South Sudan",
	"Spain",
	"Sri Lanka",
	"Sudan",
	"Suriname",
	"Sweden",
	"Switzerland",
	"Syria",
	"Taiwan",
	"Tajikistan",
	"Tanzania",
	"Thailand",
	"Timor-Leste",
	"Togo",
	"Tonga",
	"Trinidad and Tobago",
	"Tunisia",
	"Turkey",
	"Turkmenistan",
	"Tuvalu",
	"Uganda",
	"Ukraine",
	"United Arab Emirates",
	"United Kingdom",
	"United States",
	"Uruguay",
	"Uzbekistan",
	"Vanuatu",
	"Vatican City",
	"Venezuela",
	"Vietnam",
	"Yemen",
	"Zambia",
	"Zimbabwe",
];

const $destinationList = $("#destination-list");
const $dropdown = $("#destination_id_form");
const $countryShowcase = $("#countryListshowcase h3");

if ($destinationList.length) {
	countries.forEach((country, index) => {
		const $div = $("<div>")
			.addClass("destination-item")
			.text(country)
			.css("cursor", "pointer")
			.on("click", () => {
				window.location.href = `http://localhost/visaonlineuae-2025-26/index.php/form?country=${encodeURIComponent(
					country
				)}`;
			});

		if ((index + 1) % 3 === 0) {
			$div.addClass("highlight");
		}

		$destinationList.append($div);
	});
} else {
	console.error("destinationList element not found.");
}

countries.forEach((country, index) => {
	$dropdown.append(
		$("<option>")
			.val(`destination_${index + 1}`)
			.text(country)
	);
});

$dropdown.on("change", function () {
	let selectedCountry = $(this).val();
	if (selectedCountry) {
		window.location.href = `http://localhost/visaonlineuae-2025-26/index.php/form?country=${encodeURIComponent(
			selectedCountry
		)}`;
	}
});




