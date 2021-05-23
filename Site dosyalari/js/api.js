class Request {
    async get(url) {
        const response = await fetch(url);
        const data = await response.json();
        return data;
    }
}
const request = new Request;
const name = document.getElementsByClassName("name")
const fiyat = document.getElementsByClassName("price")
const hacim = document.getElementsByClassName("hacim")
const degisim = document.getElementsByClassName("değişim")

function getData() {
    request.get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Ctether%2Cripple%2Ccardano%2Cstellar%2Cpolkadot%2Cbinancecoin%2Clitecoin%2Cchainlink&vs_currencies=usd&include_market_cap=true&include_24hr_change=true')
        .then(gelenVeri => {
            for (i = 0; i < 10; i++) {
                guncelleme(i, gelenVeri);
            };
            console.log(gelenVeri);
        })
        .catch(err => console.log(err));
}
setInterval(getData, 1000);

async function guncelleme(i, gelenVeri) {
    let b1 = (gelenVeri[name[i].textContent].usd);
    let b2 = (gelenVeri[name[i].textContent].usd_market_cap);
    let b3 = (gelenVeri[name[i].textContent].usd_24h_change);
    fiyat[i].textContent = b1 + " " + "$";
    hacim[i].textContent = Math.ceil(b2) + " " + "$";
    degisim[i].textContent = Number(b3.toFixed(2));
    if (degisim[i].textContent < 0) {
        degisim[i].style = "color:red"
    } else {
        degisim[i].style = "color:green"
    }

}