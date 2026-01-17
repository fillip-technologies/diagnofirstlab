const type = window.location.pathname.split('/').pop();

fetch(`/data/${type}.json`)
    .then(res => res.json())
    .then(data => {

        document.getElementById('pageTitle').textContent =
            type.charAt(0).toUpperCase() + type.slice(1);

        const grid = document.getElementById('grid');
        const template = document.getElementById('cardTemplate');

        Object.values(data).forEach(item => {
            const card = template.content.cloneNode(true);

            card.querySelector('.name').textContent = item.name;
            card.querySelector('.price').textContent = `₹${item.price}`;
            card.querySelector('.meta').textContent =
                `${item.parameters} parameters • ${item.time}`;

            card.querySelector('.view-btn').onclick = () => {
                window.location.href = `/details/${type}/${item.slug}`;
            };

            grid.appendChild(card);
        });
    });
