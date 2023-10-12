var map = L.map('map').setView([-1.1932162314402839, 105.55020857143073], 6);
var marker = L.marker([-6.208560149796696, 106.85490430812905]).addTo(map);
var marker = L.marker([3.640431215720551, 98.65667594807496]).addTo(map);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const occupancySlider = document.getElementById("occupancyRange");
const priceSlider = document.getElementById("priceRange");
const resetOccupancyButton = document.getElementById("resetOccupancyButton");
const resetPriceButton = document.getElementById("resetPriceButton");
const selectedOccupancy = document.getElementById("selectedOccupancy");
const selectedPrice = document.getElementById("selectedPrice");

// Initial values for the sliders
occupancySlider.value = 5;
priceSlider.value = 2000000;

// Event listeners for the reset buttons
resetOccupancyButton.addEventListener("click", () => {
    occupancySlider.value = 5;
    selectedOccupancy.textContent = "5";
});

resetPriceButton.addEventListener("click", () => {
    priceSlider.value = 2000000;
    selectedPrice.textContent = "2,000,000 IDR";
});

// Event listeners to update the displayed values as the sliders change
occupancySlider.addEventListener("input", () => {
    selectedOccupancy.textContent = occupancySlider.value;
});

priceSlider.addEventListener("input", () => {
    selectedPrice.textContent = new Intl.NumberFormat('id-ID').format(priceSlider.value) + " IDR";
});