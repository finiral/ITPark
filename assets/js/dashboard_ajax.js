
function updateBenefDash(keys, values) {
  for(var i=0 ; i<values.length ; i++){
    values[i]=parseFloat(values[i]).toFixed(2)
  }
  const series = {
    "monthDataSeries1": {
      "prices": values,
      "dates": keys
    }
  };

  if (benefChart) {
    benefChart.updateSeries([{
      data: series.monthDataSeries1.prices,
    },
  ]);

    benefChart.updateOptions({
      labels: series.monthDataSeries1.dates
    });
  }
}

function updatePrev(keys, values) {
  for(var i=0 ; i<values.length ; i++){
    values[i]=parseFloat(values[i]).toFixed(2)
  }
  const series = {
    "monthDataSeries1": {
      "prices": values,
      "dates": keys
    }
  };

  if (prevChart) {
    prevChart.updateSeries([{
      data: series.monthDataSeries1.prices,
    },
  ]);

    prevChart.updateOptions({
      labels: series.monthDataSeries1.dates
    });
  }
}


function updateBenefDashPark(keys, values) {
  for(var i=0 ; i<values.length ; i++){
    values[i]=parseFloat(values[i]).toFixed(2)
  }
  const series = {
    "monthDataSeries1": {
      "prices": values,
      "dates": keys
    }
  };

  if (benefChartPark) {
    benefChartPark.updateSeries([{
      data: series.monthDataSeries1.prices,
    },
  ]);

    benefChartPark.updateOptions({
      labels: series.monthDataSeries1.dates
    });
  }
}

function updateCamembertClasse(newData) {
      pieChart = echarts.init(document.querySelector("#pieChart"));
      pieChart.setOption({
          series: [
              {
                  name: "Access From",
                  type: "pie",
                  radius: "60%",
                  data: newData,
                  emphasis: {
                      itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: "rgba(0, 0, 0, 0.5)",
                      },
                  },
              },
          ],
      }); // `true` to merge the option with the existing one
}


function getRecetteAnnee(form, url) {
  ///create the xhr
  var xhr = createXHR();

  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              var recettes = JSON.parse(xhr.responseText, true)
              var values = []
              for (var key in recettes) {
                  values.push(recettes[key])
              }
              updateBenefDash(Object.keys(recettes),values)
          } else {
              alert(xhr.responseText);
              console.log(xhr.responseText)
          }
      }
  };
  sendXHR(xhr, "POST", url, true, form)
}

function getPrevision(form, url) {
  ///create the xhr
  var xhr = createXHR();

  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              var recettes = JSON.parse(xhr.responseText, true)
              var values = []
              for (var key in recettes) {
                  values.push(recettes[key])
              }
              updatePrev(Object.keys(recettes),values)
          } else {
              alert(xhr.responseText);
              console.log(xhr.responseText)
          }
      }
  };
  sendXHR(xhr, "POST", url, true, form)
}

function getRecetteAnneePark(form, url) {
  ///create the xhr
  var xhr = createXHR();

  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              var recettes = JSON.parse(xhr.responseText, true)
              var values = []
              for (var key in recettes) {
                  values.push(recettes[key])
              }
              updateBenefDashPark(Object.keys(recettes),values)
          } else {
              alert(xhr.responseText);
              console.log(xhr.responseText)
          }
      }
  };
  sendXHR(xhr, "POST", url, true, form)
}

function getPopularParking(form, url) {
  ///create the xhr
  var xhr = createXHR();
  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              var parkings = JSON.parse(xhr.responseText, true)
              let rows = '';
              parkings.forEach(parking => {
                rows += `
                <tr>
                    <td>${parking.lieu_nom}</td>
                    <td>${parking.classe_nom}</td>
                    <td>${parking.description}</td>
                    <td>${parking.nombre_entrees}</td>
                </tr>
            `
            });
            document.getElementById("bodyPopular").innerHTML=rows
          } else {
              alert(xhr.responseText);
              console.log(xhr.responseText)
          }
      }
  };
  sendXHR(xhr, "POST", url, true, form)
  document.getElementById("bodyPopular").innerHTML="Chargement ...."
}

function getLieuRecette(form, url) {
  ///create the xhr
  var xhr = createXHR();
  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              var lieus = JSON.parse(xhr.responseText, true)
              console.log(lieus)
              let rows = '';
              lieus.forEach(lieu => {
                let soixante=lieu.total_revenue*0.6
                let gain=soixante-soixante*0.165
                rows += `
                <tr>
                    <td>${lieu.lieu_nom}</td>
                    <td>${lieu.total_revenue}</td>
                    <td>${gain}</td>
                </tr>
            `
            });
            document.getElementById("bodyLieu").innerHTML=rows
          } else {
              alert(xhr.responseText);
              console.log(xhr.responseText)
          }
      }
  };
  sendXHR(xhr, "POST", url, true, form)
  document.getElementById("bodyLieu").innerHTML="Chargement ...."
}
