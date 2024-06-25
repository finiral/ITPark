// Déclarez une variable pour stocker l'instance d'ApexCharts
let benefChart = null;
let benefChartPark = null;
let prevChart = null;
let pieChart = null;
function benefDashChart(keys, values) {
	document.addEventListener("DOMContentLoaded", () => {
		const series = {
			monthDataSeries1: {
				prices: values,
				dates: keys,
			},
		};

		benefChart = new ApexCharts(document.querySelector("#benefChart"), {
			series: [
				{
					name: "Recette du mois",
					data: series.monthDataSeries1.prices,
				},
			],
			chart: {
				id: "mychart",
				type: "area",
				height: 450,
				zoom: {
					enabled: true, // Activer le zoom
				},
			},
			dataLabels: {
				enabled: false, // Activer les étiquettes de données
			},
			stroke: {
				curve: "smooth", // Changer la courbe de la ligne à 'smooth'
			},
			colors: ["#E63D36"], // Changer la couleur de la ligne
			subtitle: {
				text: "Recette", // Titre en français
				align: "left",
			},
			labels: series.monthDataSeries1.dates,
			xaxis: {
				type: "datetime",
				labels: {
					format: "dd MMM", // Format des dates
				},
			},
			yaxis: {
				opposite: true,
			},
			legend: {
				horizontalAlign: "left",
			},
		});

		benefChart.render(); // Rendre le graphique
	});
}

function benefDashChartPark(keys, values) {
	document.addEventListener("DOMContentLoaded", () => {
		const series = {
			monthDataSeries1: {
				prices: values,
				dates: keys,
			},
		};

		benefChartPark = new ApexCharts(document.querySelector("#benefChart"), {
			series: [
				{
					name: "Recette du mois",
					data: series.monthDataSeries1.prices,
				},
			],
			chart: {
				id: "mychart",
				type: "area",
				height: 350,
				zoom: {
					enabled: true, // Activer le zoom
				},
			},
			dataLabels: {
				enabled: false, // Activer les étiquettes de données
			},
			stroke: {
				curve: "smooth", // Changer la courbe de la ligne à 'smooth'
			},
			colors: ["#E63D36"], // Changer la couleur de la ligne
			subtitle: {
				text: "Recette", // Titre en français
				align: "left",
			},
			labels: series.monthDataSeries1.dates,
			xaxis: {
				type: "datetime",
				labels: {
					format: "dd MMM", // Format des dates
				},
			},
			yaxis: {
				opposite: true,
			},
			legend: {
				horizontalAlign: "left",
			},
		});

		benefChartPark.render(); // Rendre le graphique
	});
}

function benefDash(url) {
	///create the xhr
	var xhr = createXHR();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				var recettes = JSON.parse(xhr.responseText, true);
				var values = [];
				for (var key in recettes) {
					values.push(parseFloat(recettes[key]).toFixed(2));
				}
				benefDashChart(Object.keys(recettes), values);
			} else {
				console.log(xhr.responseText);
			}
		}
	};
	var data = new FormData();
	data.append("annee", "2023");
	sendXHR(xhr, "POST", url, false, data);
}

function benefDashPark(url) {
	///create the xhr
	var xhr = createXHR();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				var recettes = JSON.parse(xhr.responseText, true);
				var values = [];
				for (var key in recettes) {
					values.push(parseFloat(recettes[key]).toFixed(2));
				}
				benefDashChartPark(Object.keys(recettes), values);
			} else {
				console.log(xhr.responseText);
			}
		}
	};
	var data = new FormData();
	data.append("annee", "2023");
	sendXHR(xhr, "POST", url, false, data);
}

function prevDashChart(keys, values) {
	document.addEventListener("DOMContentLoaded", () => {
		const series = {
			monthDataSeries1: {
				prices: values,
				dates: keys,
			},
		};

		prevChart = new ApexCharts(document.querySelector("#prevChart"), {
			series: [
				{
					name: "Prévision",
					data: series.monthDataSeries1.prices,
				},
			],
			chart: {
				id: "mychart",
				type: "area",
				height: 350,
				zoom: {
					enabled: true, // Activer le zoom
				},
			},
			dataLabels: {
				enabled: false, // Activer les étiquettes de données
			},
			stroke: {
				curve: "smooth", // Changer la courbe de la ligne à 'smooth'
			},
			colors: ["#E63D36"], // Changer la couleur de la ligne
			subtitle: {
				text: "Prévision", // Titre en français
				align: "left",
			},
			labels: series.monthDataSeries1.dates,
			xaxis: {
				type: "datetime",
				labels: {
					format: "dd MMM", // Format des dates
				},
			},
			yaxis: {
				opposite: true,
			},
			legend: {
				horizontalAlign: "left",
			},
		});

		prevChart.render(); // Rendre le graphique
	});
}

function prevDash(url) {
	///create the xhr
	var xhr = createXHR();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				var recettes = JSON.parse(xhr.responseText, true);
				var values = [];
				for (var key in recettes) {
					values.push(parseFloat(recettes[key]).toFixed(2));
				}
				prevDashChart(Object.keys(recettes), values);
			} else {
				console.log(xhr.responseText);
			}
		}
	};
	var data = new FormData();
	data.append("annee", "2024");
	data.append("mois", "10");
	sendXHR(xhr, "POST", url, false, data);
}

function camembertClasse(datas) {
	document.addEventListener("DOMContentLoaded", () => {
		pieChart=echarts.init(document.querySelector("#pieChart")).setOption({
			tooltip: {
				trigger: "item",
			},
			legend: {
				orient: "vertical",
				left: "left",
			},
			series: [
				{
					name: "Recette de la classe",
					type: "pie",
					radius: "70%",
					data: datas,
					emphasis: {
						itemStyle: {
							shadowBlur: 10,
							shadowOffsetX: 0,
							shadowColor: "rgba(0, 0, 0, 0.5)",
						},
					},
				},
			],
		});
	});
}

function classeRecette(url) {
	///create the xhr
	var xhr = createXHR();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				var recettes = JSON.parse(xhr.responseText, true);
				var datas = [];
				recettes.forEach((recette) => {
					datas.push({
						value: recette["total_revenue"],
						name: recette["classe_nom"],
					});
				});
				camembertClasse(datas);
			} else {
				console.log(xhr.responseText);
			}
		}
	};
	var data = new FormData();
	data.append("annee", "2023");
	sendXHR(xhr, "POST", url, false, data);
}

function classeRecetteForm(form,url) {
	///create the xhr
	var xhr = createXHR();
	xhr.onreadystatechange = function () {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				var recettes = JSON.parse(xhr.responseText, true);
				var datas = [];
				recettes.forEach((recette) => {
					datas.push({
            
						value: recette["total_revenue"],
						name: recette["classe_nom"],
					});
				});
				updateCamembertClasse(datas);
			} else {
				console.log(xhr.responseText);
			}
		}
	};
	sendXHR(xhr, "POST", url, false, form);
}
