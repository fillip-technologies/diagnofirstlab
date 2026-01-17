const slug = window.location.pathname.split('/').pop();

fetch('/data/checkups.json')
    .then(res => res.json())
    .then(data => {

        const item = data[slug];
        if (!item) return;

        // BASIC INFO
        document.getElementById('title').textContent = item.name;
        document.getElementById('description').textContent = item.description;

        // TEST INFO
        document.getElementById('sample').textContent = item.sample;
        document.getElementById('fasting').textContent = item.fasting;
        document.getElementById('reportTime').textContent = item.time;

        // PRICE (IMPORTANT)
        document.getElementById('price').textContent = `₹${item.price}`;
        document.getElementById('mrp').textContent = `₹${item.mrp}`;
        document.getElementById('discount').textContent = item.discount;

        // PARAMETERS / TESTS
        const list = document.getElementById('parametersList');
        list.innerHTML = '';
        item.tests.forEach(t => {
            const li = document.createElement('li');
            li.textContent = `✔ ${t}`;
            list.appendChild(li);
        });
    })
    .catch(err => console.error(err));
