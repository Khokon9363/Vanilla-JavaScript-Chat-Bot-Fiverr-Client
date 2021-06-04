// sendTophp
function complete() {
    let jsonData = document.querySelector('#jsondata')
    let arrays = JSON.parse(jsonData.textContent)
    
    // console.log('Relational data', arrays.eData)
    // console.log('All data', arrays.nData)

    var data = '';
        for (let i = 0; i < arrays.nData.length; i++) {
            data += 'Label : ' + arrays.nData[i].label + '\n';
            data += 'Apart : ' + arrays.nData[i].apart + '\n';
            data += 'Beschikbaar : ' + arrays.nData[i].beschikbaar + '\n';
            data += 'Inzet : ' + arrays.nData[i].inzet + '\n';
            data += 'Klant : ' + arrays.nData[i].klant + '\n';
            data += 'Time : ' + arrays.nData[i].time + '\n';
            data += 'Uitvoerder : ' + arrays.nData[i].uitvoerder;
            data += 'Wacht : ' + arrays.nData[i].wacht + '\n';
        }

    document.querySelector('#allData').textContent = data
    console.log(document.querySelector('#allData').textContent)
    document.getElementById('phpForm').submit();
}