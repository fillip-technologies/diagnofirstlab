const slug = window.location.pathname.split('/').pop();

fetch('/data/tests.json')
    .then(res => res.json())
    .then(data => {

        const item = data[slug];
        if (!item) return;

        // BASIC DETAILS
        document.getElementById('title').textContent = item.name;
        document.getElementById('description').textContent = item.description;

        // CLINICAL INFO
        document.getElementById('sample').textContent = item.sample;
        document.getElementById('fasting').textContent = item.fasting;
        document.getElementById('reportTime').textContent = item.time;

        // PRICE INFO (if present in UI)
        if (document.getElementById('price')) {
            document.getElementById('price').textContent = `₹${item.price}`;
        }

        if (document.getElementById('mrp')) {
            document.getElementById('mrp').textContent = `₹${item.mrp}`;
        }

        if (document.getElementById('discount')) {
            document.getElementById('discount').textContent = item.discount;
        }

        // PARAMETERS LIST
        const list = document.getElementById('parametersList');
        list.innerHTML = '';
        item.parameters.forEach(p => {
            const li = document.createElement('li');
            li.className = "flex items-start gap-2 text-gray-700";
            li.innerHTML = `<span class="text-primaryFrom mt-1">✔</span>${p}`;
            list.appendChild(li);
        });

        // OPTIONAL: WHY THIS TEST (if section exists)
        if (item.why && document.getElementById('whyTest')) {
            document.getElementById('whyTest').textContent = item.why;
        }

        // OPTIONAL: TRUST POINTS (if section exists)
        if (item.trust_points && document.getElementById('trustPoints')) {
            const trustList = document.getElementById('trustPoints');
            trustList.innerHTML = '';
            item.trust_points.forEach(t => {
                const li = document.createElement('li');
                li.textContent = '✔ ' + t;
                trustList.appendChild(li);
            });
        }

    })
    .catch(err => console.error('Test details load error:', err));
