function suggest(){

    var term = document.getElementById('search').value;
    const endpoint = '/pagename/'+term;
    const productsList = document.getElementById('productsList');
    productsList.innerHTML ='';

    console.log('endpoint');
    fetch(endpoint)
    .then(response => {
        if (!response.ok){
            throw new Error('HTTP error! Status: ${response.status}')
        }
        return response.json();
    })
    .then(data => {
        data.forEach(product => {
            const listItem = document.createElement('li');
            listItem.textContent = product.Name;
            productsList.appendChild(listItem);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
}