fetch("php.php" , {
    method: "POST",
    headers: {
        'Content-Type': 'application/json'
    },
    body: new URLSearchParams({
        filename: "hello.txt"
    }).toString()
})
.then(res => res.text())
.then(data => console.log(data))
.catch(error => console.log(`Error: ${error}`))
