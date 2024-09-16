document.getElementById('connectButton').addEventListener('click', function() {
    fetch('/api/index.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('result').innerHTML = data;
        })
        .catch(error => {
            document.getElementById('result').innerHTML = 'Error: ' + error;
        });
});
