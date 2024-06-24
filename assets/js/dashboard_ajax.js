
function updateBenefDash(keys, values) {
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
                alert(xhr.status);
            }
        }
    };
    sendXHR(xhr, "POST", url, true, form)
  }
  