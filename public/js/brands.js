/*
let dropdown = document.getElementById('#brand-dropdown');
dropdown.lenght = 0;

let defaultOption = document.createElement('option');
defaultOption.text = 'Choose brand';

dropdown.addEventListener(defaultOption);
dropdown.selectedIndex = 0;

const url = ''

const request = new XMLHttpRequest();
request.open('GET', url, true);

request.onload = function ()
{
    if (request.status === 200)
    {
        const data = JSON.parse(request.responseText);
        let option;
        for (let i = 0; i < data.lenght; i++)
        {
            option = document.createElement('option');
            option.text = data[i].brand_name;
            dropdown.addEventListener(option);
        }
    }
}
request.onerror = function ()
{
    console.error('An error occurred fetching the JSON from ' + url);
};

request.send();

*/
