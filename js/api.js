//const urlBASE   = 'https://api.carsa.com.py/apirestful_zigo/public/v10';
const urlBASE = 'http://localhost/apirestful_zigo/public/v10';
const autBASE   = 'dXNlcl9zZnppZ286YjROWzVlO0lEYkN9c3FAVXFqbUU=';
const xHTTP	    = new XMLHttpRequest();

function getJSON(codJSON, codURL) {
    var urlJSON = urlBASE + '/' + codURL;

    xHTTP.open('GET', urlJSON, false);
    xHTTP.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xJSON = JSON.parse(this.responseText);
            localStorage.removeItem(codJSON);
            localStorage.setItem(codJSON, JSON.stringify(xJSON)); 
        }
    };
    xHTTP.setRequestHeader('Accept', 'application/json;charset=UTF-8');
    xHTTP.setRequestHeader('Authorization', 'Basic ' + autBASE);
    xHTTP.setRequestHeader('Content-type', 'application/json;charset=UTF-8');
    xHTTP.send();
}

function postJSON(codPAGE, codURL, codPARS) {
    var urlJSON = urlBASE + '/' + codURL;

    xHTTP.open('POST', urlJSON, true);
    xHTTP.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xJSON = JSON.parse(this.responseText);
            window.location.replace('../public/' + codPAGE + '.php?code='+ xJSON.code + '&msg=' + xJSON.message); 
        }
    };
    xHTTP.setRequestHeader('Accept', 'application/json;charset=UTF-8');
    xHTTP.setRequestHeader('Authorization', 'Basic ' + autBASE);
    xHTTP.setRequestHeader('Content-type', 'application/json;charset=UTF-8');
    xHTTP.send(codPARS);
}

function getDominio(codDominio){
    if (localStorage.getItem('dominioJSON') === null){
        getJSON('dominioJSON', '100/dominio');
    }

    var xJSON = JSON.parse(localStorage.getItem('dominioJSON'));
    var xDATA = [];

    if (xJSON['code'] == 200){
        xJSON['data'].forEach(element => {
            if (element.tipo_dominio == codDominio) {
                xDATA.push(element);
            }
        });
    }

    return xDATA;
}

function getOpePendiente(codElem){
    if (localStorage.getItem('opePendienteJSON') === null){
        getJSON('opePendienteJSON', 'operacion/pendiente/'+codElem);
    }

    var xJSON = JSON.parse(localStorage.getItem('opePendienteJSON'));
    var xDATA = [];

    if (xJSON['code'] == 200){
        xJSON['data'].forEach(element => {
            xDATA.push(element);
        });
    }

    return xDATA;
}

function getOpeDetalle(codElem){
    if (localStorage.getItem('opeDetalleJSON_'+codElem) === null){
        getJSON('opeDetalleJSON_'+codElem, 'operacion/detalle/'+codElem);
    }

    var xJSON = JSON.parse(localStorage.getItem('opeDetalleJSON_'+codElem));
    var xDATA = [];

    if (xJSON['code'] == 200){
        xJSON['data'].forEach(element => {
            xDATA.push(element);
        });
    }

    return xDATA;
}

function getTasa(valMoneda, valMonto, valPlazo){
    if (localStorage.getItem('tasaJSON') === null){
        getJSON('tasaJSON', 'operacion/parametros');
    }

    var xJSON = JSON.parse(localStorage.getItem('tasaJSON'));
    var xDATA = 0;

    if (xJSON['code'] == 200){
        xJSON['data'].forEach(element => {
            if (valMoneda == element.importe_moneda && valPlazo >= element.plazo_desde && valPlazo <= element.plazo_desde && valMonto >= element.importe_desde && valMonto <= element.importe_hasta) {
                xDATA = element.plazo_tasa;
            }
        });
    }

    return xDATA;
}

function getPrefijo(codElem){
    if (localStorage.getItem('prefijoJSON') === null){
        getJSON('prefijoJSON', 'prefijo');
    }

    var xJSON = JSON.parse(localStorage.getItem('prefijoJSON'));
    var xDATA = [];

    switch (codElem) {
        case 1:
            if (xJSON['code'] == 200){
                xJSON['data'].forEach(element => {
                    if (element.prefijo_tipo == 'TELEFONO') {
                        xDATA.push(element);
                    }
                });
            }

            break;
    
        case 2:
            if (xJSON['code'] == 200){
                xJSON['data'].forEach(element => {
                    if (element.prefijo_tipo == 'CELULAR') {
                        xDATA.push(element);
                    }
                });
            }

            break;

        case 3:
            if (xJSON['code'] == 200){
                xJSON['data'].forEach(element => {
                    xDATA.push(element);
                });
            }

            break;
    }
    
    return xDATA;
}